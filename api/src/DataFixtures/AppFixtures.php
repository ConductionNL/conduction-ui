<?php

namespace App\DataFixtures;

use App\Entity\Component;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AppFixtures extends Fixture
{
    private $params;
    private $em;

    public function __construct(ParameterBagInterface $params, EntityManagerInterface $em)
    {
        $this->params = $params;
        $this->em = $em;
    }

    public function load(ObjectManager $manager)
    {

        //adresservice
        $component = new Component();
        $component->setName('AdresService');
        $component->setShortDescription('De Adresservice biedt een koppelvlak met de BAG API (V1), waardoor het mogelijk is om aan de hand van postcode huisnummer combinaties adressen (en bijbehorende bag ID’s) te suggereren. Het vormt hiermee de kernfunctionaliteit voor formulieren waarin klanten adressen kunnen opgeven aan de hand van huisnummer- postcode combinatie.');
        $component->setLongDescription('De Adresservice biedt een koppelvlak met de BAG API (V1), waardoor het mogelijk is om aan de hand van postcode huisnummer combinaties adressen (en bijbehorende bag ID’s) te suggereren. Het vormt hiermee de kernfunctionaliteit voor formulieren waarin klanten adressen kunnen opgeven aan de hand van huisnummer- postcode combinatie.');
        $component->setImage('images/content/Componenten/as/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/adresservice');
        $component->setDocumentation('https://zuid-drecht.nl/api/v1/as');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/198549517', 'img' => 'https://github.styleci.io/repos/198549517/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/adresservice/actions?query=workflow%3A"Docker+Image+CI"', 'img' => 'https://github.com/ConductionNL/adresservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://api-test.nl/server/4/e38e132a-ce39-4707-8fb8-8ab99f21cb62/e01ac8b2-7a08-417d-9be7-8a0bfa651390/latest/', 'img' => 'https://shields.api-test.nl/endpoint.svg?style=for-the-badge&url=https%3A//api-test.nl/api/v1/provider-latest-badge/e01ac8b2-7a08-417d-9be7-8a0bfa651390/'],
        ]);

        $this->em->persist($component);
        $this->em->flush();
    }
}
