<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * @ApiResource(
 *      collectionOperations={
 *            "get",
 *     		  "get_order"={
 *     			"method"="GET",
 *     			"path"="/orders/{id}"
 *     		  },
 *     		  "delete_order"={
 *     			"method"="GET",
 *     			"path"="/delete/orders/{id}"
 *     		  },
 *     		  "get_cluster_orders"={
 *     			"method"="GET",
 *     			"path"="/cluster/orders"
 *     		  },
 *     		  "get_installation_orders"={
 *     			"method"="GET",
 *     			"path"="/installation/orders"
 *     		  },
 *            "post",
 *      }
 * )
 */
class Order
{
    /**
     * @var UuidInterface The UUID identifier of this resource
     *
     * @example e2984465-190a-4562-829e-a8cca81aa35d
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private UuidInterface $id;

    /**
     * @ORM\Column(name="type", type="string", length=255)
     */
    private string $type;

    /**
     * @ORM\Column(type="json", length=255)
     */
    private ?array $data;


    public function getId(): ?UuidInterface
    {
        return $this->id;
    }

    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }
    public function getData(): ?array
    {
        return $this->data;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
