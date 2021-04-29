<?php

namespace App\Subscriber;

use App\Entity\Order;
use Symfony\Component\Cache\Adapter\AdapterInterface as CacheInterface;
use ApiPlatform\Core\EventListener\EventPriorities;
use Conduction\CommonGroundBundle\Service\CommonGroundService;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class OrderSubscriber implements EventSubscriberInterface
{
    private $commonGroundService;

    public function __construct(
        CommonGroundService $commonGroundService
    )
    {
        $this->commonGroundService = $commonGroundService;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['product', EventPriorities::PRE_VALIDATE],
        ];
    }

    public function product(ViewEvent $event)
    {
        $route = $event->getRequest()->get('_route');
        $order = $event->getControllerResult();

        $result = [];

        // Let limit the subscriber
        if
        (
            $route != 'api_orders_get_collection' &&
            $route != 'api_orders_get_order_collection' &&
            $route != 'api_orders_delete_order_collection' &&
            $route != 'api_orders_post_collection' &&
            $route != 'api_orders_get_cluster_orders_collection' &&
            $route != 'api_orders_get_installation_orders_collection'
        ) {
            return;
        }

        // Do some acces control
//        $this->oidcService->checkAccess();

        if ($route == 'api_orders_post_collection') {
            $result = $this->createOrder($order);
        } elseif ($route == 'api_orders_get_order_collection') {
            $id = $event->getRequest()->get('id');
            $result = $this->commonGroundService->getResource(['component' => 'orc', 'type' => 'orders', 'id' => $id], ['limit' => 1000]);
            $this->oidcService->checkAccess(null, $this->commonGroundService->getUuidFromUrl($result['organization']));
        } elseif ($route == 'api_orders_delete_order_collection') {
            $id = $event->getRequest()->get('id');
            $order = $this->commonGroundService->getResource(['component' => 'orc', 'type' => 'orders', 'id' => $id], ['limit' => 1000]);
            $result = $this->commonGroundService->deleteResource($order);
        } elseif ($route == 'api_orders_get_cluster_orders_collection') {
            $organization = $this->commonGroundService->cleanUrl(['component' => 'wrc', 'type' => 'organizations', 'id' => $event->getRequest()->query->get('organization')]);
            $result = $this->commonGroundService->getResourceList(['component' => 'orc', 'type' => 'orders'], ['limit' => 1000, 'organization' => $organization, 'remark' => 'cluster'])['hydra:member'];
        } elseif ($route == 'api_orders_get_installation_orders_collection') {
            $organization = $this->commonGroundService->cleanUrl(['component' => 'wrc', 'type' => 'organizations', 'id' => $event->getRequest()->query->get('organization')]);
            $result = $this->commonGroundService->getResourceList(['component' => 'orc', 'type' => 'orders'], ['limit' => 1000, 'organization' => $organization, 'remark' => 'installation'])['hydra:member'];
        } else {
            $organization = $this->commonGroundService->cleanUrl(['component' => 'wrc', 'type' => 'organizations', 'id' => $event->getRequest()->query->get('organization')]);
            $result = $this->commonGroundService->getResourceList(['component' => 'orc', 'type' => 'orders'], ['limit' => 1000, 'customer' => $organization])['hydra:member'];
        }

        $response = new Response(
            json_encode($result),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );

        $event->setResponse($response);

    }

    public function createOrder(Order $order)
    {
        $resource = $order->getData();
        $resource['customer'] = $this->commonGroundService->cleanUrl(['component' => 'wrc', 'type' => 'organizations', 'id' => $resource['customer']]);
        if (isset($resource['offers']) && isset($resource['quantity'])) {
            foreach ($resource['offers'] as $offer) {
                $offer = $this->commonGroundService->getResource($offer);

                $newOrderItem['name'] = $offer['name'];
                $newOrderItem['description'] = $offer['description'];
                $newOrderItem['price'] = (string) $offer['price'];
                $newOrderItem['priceCurrency'] = $offer['priceCurrency'];
                $newOrderItem['quantity'] = (int) $resource['quantity'];
                $newOrderItem['offer'] = $offer['@id'];
                $newOrderItem['product'] = $offer['products'][0]['@id'];
                if (isset($offer['notice'])) {
                    $newOrderItem['notice'] = $offer['notice'];
                }
                if (isset($offer['recurrence'])) {
                    $newOrderItem['recurrence'] = $offer['recurrence'];
                }
                $orderItems[] = $newOrderItem;
            }
            if (isset($orderItems)) {
                $resource['items'] = $orderItems;
            }
        } else {
            return false;
        }
        $order = $this->commonGroundService->createResource($resource, ['component' => 'orc', 'type' => 'orders']);
        return $order;
    }

}
