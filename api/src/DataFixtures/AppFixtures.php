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

        //Verzoek Type Catalogus
        $component = new Component();
        $component->setName('Verzoek Type Catalogus');
        $component->setShortDescription('De Verzoek Type Catalogus biedt een overzicht van de mogelijke te starten verzoeken door de gebruiker en de te verwachten afhandeling. Het component laat zich in deze het best vergelijken met een digitale beschrijving van een formulier, waarbij de Verzoek Type catalogus zich zuiver beperkt tot de definiëring van de eindwaarde. Het component bevat in deze dus een reeks van velden en voorwaarden waaraan het moet voldoen.');
        $component->setlongDescription('De Verzoek Type Catalogus biedt een overzicht van de mogelijke te starten verzoeken door de gebruiker en de te verwachten afhandeling. Het component laat zich in deze het best vergelijken met een digitale beschrijving van een formulier, waarbij de Verzoek Type catalogus zich zuiver beperkt tot de definiëring van de eindwaarde. Het component bevat in deze dus een reeks van velden en voorwaarden waaraan het moet voldoen.');
        $component->setImage('images/content/Componenten/vtc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/verzoektypecatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/vtc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/210271092', 'img' => 'https://github.styleci.io/repos/210271092/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/verzoektypecatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/verzoektypecatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Verzoek Registratie component
        $component = new Component();
        $component->setName('Verzoek Registratie component');
        $component->setShortDescription('Het Verzoek Registratie Component bevat zowel het eind- als tussenresultaat van een proces.Of om het iets simpeler te zeggen een proces schrijft bij iedere stap zijn variabelen weg naar een verzoek. Daarmee is het proces stateless en het verzoek stateful. In deze zin is een verzoek vergelijkbaar met een proces token in bijvoorbeeld BPMN- engines. Hierdoor is het mogelijk om verzoeken uit te wisselen tussen processen. Het is bijvoorbeeld mogelijk om via een chatbot een proces te draaien dat het verzoektype verhuizen gebruikt om een verzoek aan te maken, maar het ondertekenen van dit verzoek te laten doen via het webformulier.');
        $component->setLongDescription('Het Verzoek Registratie Component bevat zowel het eind- als tussenresultaat van een proces.Of om het iets simpeler te zeggen een proces schrijft bij iedere stap zijn variabelen weg naar een verzoek. Daarmee is het proces stateless en het verzoek stateful. In deze zin is een verzoek vergelijkbaar met een proces token in bijvoorbeeld BPMN- engines. Hierdoor is het mogelijk om verzoeken uit te wisselen tussen processen. Het is bijvoorbeeld mogelijk om via een chatbot een proces te draaien dat het verzoektype verhuizen gebruikt om een verzoek aan te maken, maar het ondertekenen van dit verzoek te laten doen via het webformulier.');
        $component->setImage('images/content/Componenten/vrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/verzoekregistratiecomponent');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/vrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/198549754', 'img' => 'https://github.styleci.io/repos/198549754/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/verzoekregistratiecomponent/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/verzoekregistratiecomponent/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        //memo-component
        $this->em->persist($component);
        $this->em->flush();

        $component = new Component();
        $component->setName('Memo Component');
        $component->setShortDescription('Het Memo Component biedt de generieke mogelijkheid om gebruikers memo’s (notities) te laten aanmaken of resources (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet. In wezen kan elke gebruiker over alles een memo aanmaken. Dat biedt ook de mogelijkheid om voor elke willekeurige resource het component te bevragen en te zien of er memo’s voor staan. Memo’s worden in principe gezien als organisatie-intern en zijn nadrukkelijk geen communicatiekanaal met de klant, daarvoor zijn ‘contactmomenten’ beschikbaar.');
        $component->setLongDescription('Het Memo Component biedt de generieke mogelijkheid om gebruikers memo’s (notities) te laten aanmaken of resources (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet. In wezen kan elke gebruiker over alles een memo aanmaken. Dat biedt ook de mogelijkheid om voor elke willekeurige resource het component te bevragen en te zien of er memo’s voor staan. Memo’s worden in principe gezien als organisatie-intern en zijn nadrukkelijk geen communicatiekanaal met de klant, daarvoor zijn ‘contactmomenten’ beschikbaar.');
        $component->setImage('images/content/Componenten/memo/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/memo-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/memo');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/259932857', 'img' => 'https://github.styleci.io/repos/259932857/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/memo-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/memo-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        //Queue Component
        $this->em->persist($component);
        $this->em->flush();

        $component = new Component();
        $component->setName('Queue Component');
        $component->setShortDescription('Het Queue Component bevat een lijst van later uit te voeren taken, dat wil zeggen in dit component kunnen taken worden aangemaakt die door andere componenten op een later tijdstip moeten worden uitgevoerd. Dit lijkt op het versturen van notificaties met een paar afwijkingen.');
        $component->setLongDescription('Het Queue Component bevat een lijst van later uit te voeren taken, dat wil zeggen in dit component kunnen taken worden aangemaakt die door andere componenten op een later tijdstip moeten worden uitgevoerd. Dit lijkt op het versturen van notificaties met een paar afwijkingen.');
        $component->setImage('images/content/Componenten/qc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/Queue-Component');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/262041492', 'img' => 'https://github.styleci.io/repos/262041492/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/Queue-Component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/Queue-Component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Portfolio Component
        $component = new Component();
        $component->setName('Portfolio Component');
        $component->setShortDescription('Het Portfolio Component vormt een Common Ground implementatie van de e-portfolio-norm (die op haar beurt weer voortkomt uit e-HRM) en stelt gebruikers (of contactpersonen) in staat om een portfolio op te bouwen. Een portfolio kan een een HRM toepassing zijn, waarbij voor de medewerker vaardigheden en competenties worden bijgehouden, eventueel voorzien van bewijsstukken en gekoppeld is aan ontwikkelingsdoelen en eventuele functies. Het portfolio kan ook een meer traditionele invulling hebben van gedaan werk, ofwel een showcase-functie, zoals men die bij kunstenaars en andere zelfstandige beroepen vaak tegenkomt.');
        $component->setLongDescription('Het Portfolio Component vormt een Common Ground implementatie van de e-portfolio-norm (die op haar beurt weer voortkomt uit e-HRM) en stelt gebruikers (of contactpersonen) in staat om een portfolio op te bouwen. Een portfolio kan een een HRM toepassing zijn, waarbij voor de medewerker vaardigheden en competenties worden bijgehouden, eventueel voorzien van bewijsstukken en gekoppeld is aan ontwikkelingsdoelen en eventuele functies. Het portfolio kan ook een meer traditionele invulling hebben van gedaan werk, ofwel een showcase-functie, zoals men die bij kunstenaars en andere zelfstandige beroepen vaak tegenkomt.');
        $component->setImage('images/content/Componenten/pfc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/portfolio-component');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/260448733', 'img' => 'https://github.styleci.io/repos/260448733/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/portfolio-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/portfolio-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Contact Moment Component
        $component = new Component();
        $component->setName('Contact Moment Component');
        $component->setShortDescription('Het Contact Moment Component biedt de generieke mogelijkheid om contactmomenten rondom resources, bijvoorbeeld Common Ground resources, vast te leggen. Deze functionaliteit is bewust abstract opgezet.');
        $component->setLongDescription('Het Contact Moment Component biedt de generieke mogelijkheid om contactmomenten rondom resources, bijvoorbeeld Common Ground resources, vast te leggen. Deze functionaliteit is bewust abstract opgezet.');
        $component->setImage('images/content/Componenten/cmc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/ContactMoment-Component');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/262270870', 'img' => 'https://github.styleci.io/repos/262270870/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/ContactMoment-Component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/ContactMoment-Component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Template
        /**
        $component = new Component();
        $component->setName('');
        $component->setShortDescription('');
        $component->setLongDescription('');
        $component->setImage('images/content/Componenten/repro/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/repro');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/repocode');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/repoid', 'img' => 'https://github.styleci.io/repos/repoid/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/repo/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/repro/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();
         **/
    }
}
