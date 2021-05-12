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
        $component->setShortDescription('De Adresservice biedt een koppelvlak met de BAG API (V1), waardoor het mogelijk is om aan de hand van postcode en huisnummer combinaties adressen (en bijbehorende bag ID’s) te suggereren. Het vormt hiermee de kernfunctionaliteit voor formulieren waarin klanten adressen kunnen opgeven aan de hand van huisnummer en postcode combinatie.');
        $component->setLongDescription('De Adresservice biedt een koppelvlak met de BAG API (V1), waardoor het mogelijk is om aan de hand van postcode en huisnummer combinaties adressen (en bijbehorende bag ID’s) te suggereren. Het vormt hiermee de kernfunctionaliteit voor formulieren waarin klanten adressen kunnen opgeven aan de hand van huisnummer en postcode combinatie.');
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
        $component->setPlatforms(['overlijden', 'trouwen']);
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
        $component->setPlatforms(['overlijden']);
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

        //user component
        $component = new Component();
        $component->setName('User Component');
        $component->setShortDescription('Het User Component voert het beheer over een gebruikersaccount en hun autorisaties.Hierbij kan in de traditionele zin worden gedacht aan aan een gebruiker die behoort tot bepaalde groepen die op hun beurt weer beschikken over bepaalde rechten. Waarbij het component tevens het bijhouden en valideren van wachtwoorden ondersteund (ten einde inlog mogelijkheden op bijvoorbeeld een dashboard of om een applicatie te faciliteren) maar in de wat abstracte context ondersteund het ook algemene inlogs systematieken.');
        $component->setLongDescription('Het User Component voert het beheer over een gebruikersaccount en hun autorisaties.Hierbij kan in de traditionele zin worden gedacht aan aan een gebruiker die behoort tot bepaalde groepen die op hun beurt weer beschikken over bepaalde rechten. Waarbij het component tevens het bijhouden en valideren van wachtwoorden ondersteund (ten einde inlog mogelijkheden op bijvoorbeeld een dashboard of om een applicatie te faciliteren) maar in de wat abstracte context ondersteund het ook algemene inlogs systematieken.');
        $component->setImage('images/content/Componenten/uc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/user-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/uc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/222616116', 'img' => 'https://github.styleci.io/repos/222616116/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/user-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/user-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Envioment component
        $component = new Component();
        $component->setName('Environment Component');
        $component->setShortDescription('Het Environment Component heeft als doel om Common Ground-omgevingen te beheren. Hierbij kan het kubernetes clusters inregelen, voorzien van de juiste en benodigde ondersteunende software, zoals ingres controllers, certificaten en installaties via Helm-bestanden. Het kan ook op afstand volledige kubernetes clusters opstarten wat werken in de cloud ten goede komt. Denk hierbij aan een Common ground-cluster bij populaire cloud-aanbieders Fuga, Cyso, Digital Ocean, Google en Amazon. Als tweede functionaliteit kan het component andere componenten installeren, configureren en implementeren. Het bevat met andere woorden alle noodzakelijke functionaliteiten die nodig zijn om een Common Ground omgeving te kunnen maken en te beheren zonder dat daarvoor kennis van Common Ground of de onderliggende infrastructuur nodig is.');
        $component->setLongDescription('Het Environment Component heeft als doel om Common Ground-omgevingen te beheren. Hierbij kan het kubernetes clusters inregelen, voorzien van de juiste en benodigde ondersteunende software, zoals ingres controllers, certificaten en installaties via Helm-bestanden. Het kan ook op afstand volledige kubernetes clusters opstarten wat werken in de cloud ten goede komt. Denk hierbij aan een Common ground-cluster bij populaire cloud-aanbieders Fuga, Cyso, Digital Ocean, Google en Amazon. Als tweede functionaliteit kan het component andere componenten installeren, configureren en implementeren. Het bevat met andere woorden alle noodzakelijke functionaliteiten die nodig zijn om een Common Ground omgeving te kunnen maken en te beheren zonder dat daarvoor kennis van Common Ground of de onderliggende infrastructuur nodig is.');
        $component->setImage('images/content/Componenten/evc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/environment-component');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/252478109', 'img' => 'https://github.styleci.io/repos/252478109/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/environment-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/environment-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Taken component
        $component = new Component();
        $component->setName('Taken Component');
        $component->setShortDescription('Het Taken Component biedt de generieke mogelijkheid om taken te registreren van de ene resource op een andere resource (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet.In de meest voorkomende vorm zal bijvoorbeeld een medewerker of gebruiker (resource) een taak hebben op een zaak of order (resource), maar in abstracte vorm kan ook een burger (BRP resource) een taak hebben of kunnen zelfs applicaties of processen (zoals opgenomen in het PC) een taak hebben.Het Taken Component geeft in die zin zowel invulling aan taken, als in het agenda calendar concept “todo”, als het bpmn concept “task”. Echter moeten zowel het onderwerp van de taak, als de uitvoerder van de taak identificeerbaar zijn aan de hand van een URL.');
        $component->setLongDescription('Het Taken Component biedt de generieke mogelijkheid om taken te registreren van de ene resource op een andere resource (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet.In de meest voorkomende vorm zal bijvoorbeeld een medewerker of gebruiker (resource) een taak hebben op een zaak of order (resource), maar in abstracte vorm kan ook een burger (BRP resource) een taak hebben of kunnen zelfs applicaties of processen (zoals opgenomen in het PC) een taak hebben.Het Taken Component geeft in die zin zowel invulling aan taken, als in het agenda calendar concept “todo”, als het bpmn concept “task”. Echter moeten zowel het onderwerp van de taak, als de uitvoerder van de taak identificeerbaar zijn aan de hand van een URL.');
        $component->setImage('images/content/Componenten/tc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/taken-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/tc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/260444947', 'img' => 'https://github.styleci.io/repos/260444947/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/taken-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/taken-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //BerichtenService
        $component = new Component();
        $component->setName('BerichtenService');
        $component->setShortDescription('De Berichtenservice faciliteert het versturen van berichten (bijvoorbeeld aan de hand van WRC sjablonen) en het rapporteren daarover. Hiervoor levert het zowel bulk-capaciteiten (voor bijvoorbeeld het versturen van mailings), als opvolg-capaciteiten (voor het controleren van bijvoorbeeld het aankomen van emails). Vooralsnog ondersteunt de Berichtenservice het versturen van mails en sms-berichten, maar er wordt nagedacht over het toevoegen van een post route en chatfunctionaliteit (social media). Het kan hierbij zowel zelfstandig opereren, als een front leveren voor functionaliteit van derden (Mailgun, Mailchimp, Messagbird, etc)');
        $component->setLongDescription('De Berichtenservice faciliteert het versturen van berichten (bijvoorbeeld aan de hand van WRC sjablonen) en het rapporteren daarover. Hiervoor levert het zowel bulk-capaciteiten (voor bijvoorbeeld het versturen van mailings), als opvolg-capaciteiten (voor het controleren van bijvoorbeeld het aankomen van emails). Vooralsnog ondersteunt de Berichtenservice het versturen van mails en sms-berichten, maar er wordt nagedacht over het toevoegen van een post route en chatfunctionaliteit (social media). Het kan hierbij zowel zelfstandig opereren, als een front leveren voor functionaliteit van derden (Mailgun, Mailchimp, Messagbird, etc)');
        $component->setImage('images/content/Componenten/berichten/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/berichtservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/bs');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144502', 'img' => 'https://github.styleci.io/repos/206144502/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/berichtservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/berichtservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //docparser
        $component = new Component();
        $component->setName('DocParser');
        $component->setShortDescription('De DocParser is een developers tool die aan de hand van redoc documentatie (en optioneel API toegang) controleert tot in hoeverre een API zich aan de binnen Common Ground geldende standaarden houdt (zoals NL API\'s strategie).');
        $component->setLongDescription('De DocParser is een developers tool die aan de hand van redoc documentatie (en optioneel API toegang) controleert tot in hoeverre een API zich aan de binnen Common Ground geldende standaarden houdt (zoals NL API\'s strategie).');
        $component->setImage('images/content/Componenten/dps/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/docparser');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/235730570', 'img' => 'https://github.styleci.io/repos/235730570/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/docparser/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/docparser/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Order Registratie Component
        $component = new Component();
        $component->setName('Order Registratie Component');
        $component->setShortDescription('Het Order Registratie component verzorgt de afhandeling van bestellingen met uitzondering van facturatie en betalingen. Het biedt in samenwerking met het PDC een multi-tenant en omnichannel oplossing voor het verkopen van producten en diensten. Hierbij worden offers (te kopen resources vanuit het PC) toegevoegd aan een order, waarbij het Registratie Order Component de geldigheid van de aanbieding controleert en een eventuele prijs en betaling berekeningen uitvoert.');
        $component->setLongDescription('Het Order Registratie component verzorgt de afhandeling van bestellingen met uitzondering van facturatie en betalingen. Het biedt in samenwerking met het PDC een multi-tenant en omnichannel oplossing voor het verkopen van producten en diensten. Hierbij worden offers (te kopen resources vanuit het PC) toegevoegd aan een order, waarbij het Registratie Order Component de geldigheid van de aanbieding controleert en een eventuele prijs en betaling berekeningen uitvoert.');
        $component->setImage('images/content/Componenten/orc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/orderregistratiecomponent');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/orc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144416', 'img' => 'https://github.styleci.io/repos/206144416/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/orderregistratiecomponent/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/orderregistratiecomponent/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //AgendaService
        $component = new Component();
        $component->setName('Agenda Service');
        $component->setShortDescription('De Agenda Service faciliteert een agenda functionaliteit. Hiermee kunnen er resources gekoppeld worden aan een agenda. Een resource kan daarbij een persoon uit het Contacten Component of een medewerker vanuit het Medewerkers Component zijn, maar is daar technisch niet toe beperkt. Het is dus ook mogelijk om agenda’s te voeren voor locaties, zalen en kamers in de zin van boekingen of bijvoorbeeld voertuigen. Hierbij zit een logisch doch niet dwingend verband met het PDC en ORC met betrekking tot kostprijsberekening etc. Naast agenda’s als objecten bevat het component uiteraard mogelijkheden tot het blokkeren of juist beschikbaar stellen van agenda ruimtes, het maken van afspraken en zoeken naar vrije ruimte binnen één of meer agenda’s.');
        $component->setLongDescription('De Agenda Service faciliteert een agenda functionaliteit. Hiermee kunnen er resources gekoppeld worden aan een agenda. Een resource kan daarbij een persoon uit het Contacten Component of een medewerker vanuit het Medewerkers Component zijn, maar is daar technisch niet toe beperkt. Het is dus ook mogelijk om agenda’s te voeren voor locaties, zalen en kamers in de zin van boekingen of bijvoorbeeld voertuigen. Hierbij zit een logisch doch niet dwingend verband met het PDC en ORC met betrekking tot kostprijsberekening etc. Naast agenda’s als objecten bevat het component uiteraard mogelijkheden tot het blokkeren of juist beschikbaar stellen van agenda ruimtes, het maken van afspraken en zoeken naar vrije ruimte binnen één of meer agenda’s.');
        $component->setImage('images/content/Componenten/ac/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/agendaservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/arc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144508', 'img' => 'https://github.styleci.io/repos/206144508/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/agendaservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/agendaservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //StuF Component
        $component = new Component();
        $component->setName('StuF Component');
        $component->setShortDescription('Het StuF component faciliteert een bidirectionele koppeling tussen Common Ground en “oude” StuF koppelingen. Het component doet dit door het vertalen van API-vragen naar StuF, de antwoorden op deze StuF-berichten indien nodig te verrijken met andere StuF-berichten en dit resultaat weer terug te geven als API-resultaat (bijvoorbeeld JSON). Op deze manier is het mogelijk om “oude” applicaties tijdelijk het Common Ground landschap in te trekken indien dit nodig is. Het component ondersteunt ook het bevragen van Common Ground API’s via StuF-berichten, in dat geval fungeert het als een soort van broker die tevens vertaalt.');
        $component->setLongDescription('Het StuF component faciliteert een bidirectionele koppeling tussen Common Ground en “oude” StuF koppelingen. Het component doet dit door het vertalen van API-vragen naar StuF, de antwoorden op deze StuF-berichten indien nodig te verrijken met andere StuF-berichten en dit resultaat weer terug te geven als API-resultaat (bijvoorbeeld JSON). Op deze manier is het mogelijk om “oude” applicaties tijdelijk het Common Ground landschap in te trekken indien dit nodig is. Het component ondersteunt ook het bevragen van Common Ground API’s via StuF-berichten, in dat geval fungeert het als een soort van broker die tevens vertaalt.');
        $component->setImage('images/content/Componenten/stuf/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/stufservice');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206148674', 'img' => 'https://github.styleci.io/repos/206148674/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/stufservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/stufservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Mederwerker Registratie Component
        $component = new Component();
        $component->setName('Mederwerker Catalogus');
        $component->setShortDescription('Het Mederwerker Registratie Component bevat medewerkers en de daarbij behorende HRM systematiek, hierbij kan bijvoorbeeld worden gedacht aan contractmanagement en functie of competentie overzichten. Deze functionaliteit wordt eigenlijk onttrokken aan de e-HRM-norm (ofwel de HR-XML standaard, in Nederland losjes geïmplementeerd als SETU), waarbij het stuk portfolio-opbouw is losgetrokken en in Portfolio Component zit (om de e-portfolio norm te ondersteunen).');
        $component->setLongDescription('Het Mederwerker Registratie Component bevat medewerkers en de daarbij behorende HRM systematiek, hierbij kan bijvoorbeeld worden gedacht aan contractmanagement en functie of competentie overzichten. Deze functionaliteit wordt eigenlijk onttrokken aan de e-HRM-norm (ofwel de HR-XML standaard, in Nederland losjes geïmplementeerd als SETU), waarbij het stuk portfolio-opbouw is losgetrokken en in Portfolio Component zit (om de e-portfolio norm te ondersteunen).');
        $component->setImage('images/content/Componenten/mrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/medewerkercatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/mrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144408', 'img' => 'https://github.styleci.io/repos/206144408/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/medewerkercatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/medewerkercatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //betaal Service
        $component = new Component();
        $component->setName('Betaal Service');
        $component->setShortDescription('Het Betalen Component handelt, bij voorkeur in samenwerking met het Order Registratie Component, betalingen af. Hiervoor maakt het facturen aan en meldt deze (indien gewenst) bij een payment provider aan. Als laatste worden de resultaten van de payment provider verwerkt, waarmee een invoice overzicht wordt gecreëerd dat kan worden gebruikt door zowel organisaties als klanten. Indien gewenst kan het Betalen Component in samenwerking met het WRC (sjablonen), BS (mail en sms) en het Queue Component worden ingezet voor de opvolging van betalingen in de trant van herinneringen en aanmaningen.');
        $component->setLongDescription('Het Betalen Component handelt, bij voorkeur in samenwerking met het Order Registratie Component, betalingen af. Hiervoor maakt het facturen aan en meldt deze (indien gewenst) bij een payment provider aan. Als laatste worden de resultaten van de payment provider verwerkt, waarmee een invoice overzicht wordt gecreëerd dat kan worden gebruikt door zowel organisaties als klanten. Indien gewenst kan het Betalen Component in samenwerking met het WRC (sjablonen), BS (mail en sms) en het Queue Component worden ingezet voor de opvolging van betalingen in de trant van herinneringen en aanmaningen.');
        $component->setImage('images/content/Componenten/betalen/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/betaalservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/bc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206145303', 'img' => 'https://github.styleci.io/repos/206145303/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/betaalservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/betaalservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Challenge Component
        $component = new Component();
        $component->setName('Challenge Component');
        $component->setShortDescription('Het Challenge Component ondersteunt het generiek uitzetten van challenges en het verzamelen van reacties daarop. Het biedt aan de andere kant de mogelijkheid tot het opstellen van pitches en al dan niet indienen daarvan op challenges. Hoewel beide optioneel in samenwerking met het PDC en ORC ook een tender proces ondersteunen, is deze functionaliteit primair geschreven voor het ondersteunen van citychallenges en startup in residence challenges aan de ‘challenge’- kant en kickstarter-achtige functionaliteit aan de ‘pitch’- kant.');
        $component->setLongDescription('Het Challenge Component ondersteunt het generiek uitzetten van challenges en het verzamelen van reacties daarop. Het biedt aan de andere kant de mogelijkheid tot het opstellen van pitches en al dan niet indienen daarvan op challenges. Hoewel beide optioneel in samenwerking met het PDC en ORC ook een tender proces ondersteunen, is deze functionaliteit primair geschreven voor het ondersteunen van citychallenges en startup in residence challenges aan de ‘challenge’- kant en kickstarter-achtige functionaliteit aan de ‘pitch’- kant.');
        $component->setImage('images/content/Componenten/chrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/Challenge-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/chrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/255577421', 'img' => 'https://github.styleci.io/repos/255577421/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/Challenge-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/Challenge-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //instemmings Service
        $component = new Component();
        $component->setName('Instemming Service');
        $component->setShortDescription('Het Instemmingen Registratie Component heeft als doel om instemmingen vast te leggen ten opzichte van resources. Hierbij wordt de instemming verleend door een rechtspersoon. Instemmingen kunnen zowel specifiek zijn (dit verzoek mag namens mij worden ingediend), rol gebonden (ik ga er mee akkoord getuige voor dit huwelijk te zijn), als generiek. Generieke instemmingen worden afgegeven aan een (rechts)persoon ten opzichte van een verzoektype (deze persoon mag namens mij meldingen openbare ruimte doen). Instemmingen fungeren hiermee zowel als een digitale handtekening, als mandaat.');
        $component->setLongDescription('Het Instemmingen Registratie Component heeft als doel om instemmingen vast te leggen ten opzichte van resources. Hierbij wordt de instemming verleend door een rechtspersoon. Instemmingen kunnen zowel specifiek zijn (dit verzoek mag namens mij worden ingediend), rol gebonden (ik ga er mee akkoord getuige voor dit huwelijk te zijn), als generiek. Generieke instemmingen worden afgegeven aan een (rechts)persoon ten opzichte van een verzoektype (deze persoon mag namens mij meldingen openbare ruimte doen). Instemmingen fungeren hiermee zowel als een digitale handtekening, als mandaat.');
        $component->setImage('images/content/Componenten/irc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/instemming-registratie-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/irc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/210753780', 'img' => 'https://github.styleci.io/repos/210753780/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/instemming-registratie-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/instemming-registratie-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Contact Catalogus
        $component = new Component();
        $component->setName('Contact Catalogus');
        $component->setShortDescription('Het Contacten Component bevat lijsten van contactpersonen, hiermee heeft het vanuit bron perspectief doorgaans een aanvullende of vervangende taak ten opzichte van het BRP. Met andere woorden in het Contacten Component vinden we personen die we niet uit het BRP halen. Dat kan zijn, omdat deze personen niet in het BRP staan, we nog niet weten wat het BSN van een persoon is of omdat we simpelweg geen rechten of toegang hebben tot het BRP vanuit het proces waar we mee bezig zijn.');
        $component->setLongDescription('Het Contacten Component bevat lijsten van contactpersonen, hiermee heeft het vanuit bron perspectief doorgaans een aanvullende of vervangende taak ten opzichte van het BRP. Met andere woorden in het Contacten Component vinden we personen die we niet uit het BRP halen. Dat kan zijn, omdat deze personen niet in het BRP staan, we nog niet weten wat het BSN van een persoon is of omdat we simpelweg geen rechten of toegang hebben tot het BRP vanuit het proces waar we mee bezig zijn.');
        $component->setImage('images/content/Componenten/cc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/contactcatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/cc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206145398', 'img' => 'https://github.styleci.io/repos/206145398/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/contactcatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/contactcatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Landelijke Tabellen Catalogus
        $component = new Component();
        $component->setName('Landelijke Tabellen Catalogus');
        $component->setShortDescription('Het Landelijke Tabellen Component voorziet in het ontsluiten van de landelijke index tabellen van BZK (NL dus) waar je bijvoorbeeld gemeenten nummers kan terugvinden. Het voorziet in die zin in het via API beschikbaar stellen van niet Common Ground bronnen.');
        $component->setLongDescription('Het Landelijke Tabellen Component voorziet in het ontsluiten van de landelijke index tabellen van BZK (NL dus) waar je bijvoorbeeld gemeenten nummers kan terugvinden. Het voorziet in die zin in het via API beschikbaar stellen van niet Common Ground bronnen.');
        $component->setImage('images/content/Componenten/ltc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/landelijketabellencatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/ltc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/repoid', 'img' => 'https://github.styleci.io/repos/repoid/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/landelijketabellencatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/landelijketabellencatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //BRP service
        $component = new Component();
        $component->setName('BRP Service');
        $component->setShortDescription('Het Basis Registratie Personen Component is een implementatie van de door Haal Centraal ontwikkelde API-specificatie in de vorm van een Common Ground container. Dat betekent dat het ten opzichte van die referentie een aantal extra opties kent (zoals extended en filteren van data). Dit Common Ground component kan op twee manieren worden ingezet. Om te beginnen kan het aan de achterkant worden voorzien van datafixtures in de vorm van een E xcel sheet. Op deze manier kan er een “specifieke” mock worden gecreëerd voor het testen van applicaties (al dan niet in combinatie met Digispoof). Het is echter ook mogelijke om het BRP Component in te zetten in samenhang met het StuF Component, in dat geval worden API-verzoeken op het BRP vertaald naar StuF berichten op GBA of GBAV aansluiting en levert het component daadwerkelijk een BRP koppeling.');
        $component->setLongDescription('Het Basis Registratie Personen Component is een implementatie van de door Haal Centraal ontwikkelde API-specificatie in de vorm van een Common Ground container. Dat betekent dat het ten opzichte van die referentie een aantal extra opties kent (zoals extended en filteren van data). Dit Common Ground component kan op twee manieren worden ingezet. Om te beginnen kan het aan de achterkant worden voorzien van datafixtures in de vorm van een E xcel sheet. Op deze manier kan er een “specifieke” mock worden gecreëerd voor het testen van applicaties (al dan niet in combinatie met Digispoof). Het is echter ook mogelijke om het BRP Component in te zetten in samenhang met het StuF Component, in dat geval worden API-verzoeken op het BRP vertaald naar StuF berichten op GBA of GBAV aansluiting en levert het component daadwerkelijk een BRP koppeling.');
        $component->setImage('images/content/Componenten/brp/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/brpservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/brp');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/204954539', 'img' => 'https://github.styleci.io/repos/204954539/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/brpservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/brpservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Review component
        $component = new Component();
        $component->setName('Review Component');
        $component->setShortDescription('Het Review Component faciliteert reviews van resources, hoewel we hierbij in eerste instantie denken aan producten vanuit het PDC zou een resource in feite alles kunnen zijn. Onder een review verstaan we een gebruikerservaring, deze ervaring kan zowel worden aangeduid met een cijfer als een een textuele beschrijving. Additioneel biedt het component ondersteuning voor “likes” en het berekenen van totale gemiddelde review resultaten op resources.');
        $component->setLongDescription('Het Review Component faciliteert reviews van resources, hoewel we hierbij in eerste instantie denken aan producten vanuit het PDC zou een resource in feite alles kunnen zijn. Onder een review verstaan we een gebruikerservaring, deze ervaring kan zowel worden aangeduid met een cijfer als een een textuele beschrijving. Additioneel biedt het component ondersteuning voor “likes” en het berekenen van totale gemiddelde review resultaten op resources.');
        $component->setImage('images/content/Componenten/rc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/review-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/rc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/235730051', 'img' => 'https://github.styleci.io/repos/235730051/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/review-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/review-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Web Resource Catalogus
        $component = new Component();
        $component->setName('Web Resource Catalogus');
        $component->setShortDescription('Het WRC bevat de resources die nodig zijn voor het draaien van een applicatie, zoals sjablonen, routing, menu’s en afbeeldingen. Het heeft hierbij de doelstelling om te fungeren als een “headless CMS” ofwel een CMS als API die losstaat van enige vorm van weergave. Voor het bewerken van de CMS content leunt het WRC dan ook op het Dashboard (een implementatie van de Proto Applicatie), en het fungeert zelf als een bron voor een applicatie.');
        $component->setLongDescription('Het WRC bevat de resources die nodig zijn voor het draaien van een applicatie, zoals sjablonen, routing, menu’s en afbeeldingen. Het heeft hierbij de doelstelling om te fungeren als een “headless CMS” ofwel een CMS als API die losstaat van enige vorm van weergave. Voor het bewerken van de CMS content leunt het WRC dan ook op het Dashboard (een implementatie van de Proto Applicatie), en het fungeert zelf als een bron voor een applicatie.');
        $component->setImage('images/content/Componenten/wrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/webresourcecatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/wrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206145646', 'img' => 'https://github.styleci.io/repos/206145646/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/webresourcecatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/webresourcecatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Commonground Dashboard
        $component = new Component();
        $component->setName('Common Ground Dashboard');
        $component->setShortDescription('Het Common Ground Dashboard biedt basale beheer- en behandelmogelijkheden op Common Ground componenten en voegt vooral veel waarde toe in ontwikkel-context, waarbij data in componenten moet worden aangepast of moet worden ingezien voor testdoeleinden. In combinatie met het EVC component biedt het dashboard echter ook de mogelijkheid om Common Ground omgevingen in te richten en te beheren. Hierbij kan bijvoorbeeld worden gedacht aan het installeren en configureren van containers.');
        $component->setLongDescription('Het Common Ground Dashboard biedt basale beheer- en behandelmogelijkheden op Common Ground componenten en voegt vooral veel waarde toe in ontwikkel-context, waarbij data in componenten moet worden aangepast of moet worden ingezien voor testdoeleinden. In combinatie met het EVC component biedt het dashboard echter ook de mogelijkheid om Common Ground omgevingen in te richten en te beheren. Hierbij kan bijvoorbeeld worden gedacht aan het installeren en configureren van containers.');
        $component->setImage('images/content/Componenten/dash/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/commonground-dashboard');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/231819815', 'img' => 'https://github.styleci.io/repos/231819815/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/commonground-dashboard/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/commonground-dashboard/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Export Component
        $component = new Component();
        $component->setName('Export Component');
        $component->setShortDescription('Het export Component heeft als doel om data binnen Common Ground beschikbaar te maken als non-API data. Bijvoorbeeld als een Excel- of CSV- lijst. In samenhang met het Queue Component voor geautomatiseerde taken en het WRC voor sjablonen, kan dit bijvoorbeeld worden gebruikt voor het draaien en versturen van een dagelijkse rapportage.');
        $component->setLongDescription('Het export Component heeft als doel om data binnen Common Ground beschikbaar te maken als non-API data. Bijvoorbeeld als een Excel- of CSV- lijst. In samenhang met het Queue Component voor geautomatiseerde taken en het WRC voor sjablonen, kan dit bijvoorbeeld worden gebruikt voor het draaien en versturen van een dagelijkse rapportage.');
        $component->setImage('images/content/Componenten/export/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/export-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/ec');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/271184774', 'img' => 'https://github.styleci.io/repos/271184774/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/export-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/export-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Digispoof
        $component = new Component();
        $component->setName('Digispoof');
        $component->setShortDescription('Digispoof is een SAML applicatie voor het testen van DigiD (en op termijn AIDAS) inlogmethodes. De gedachte hierbij is dat Digispoof technisch uitwisselbaar is met DigiD (dus exact hetzelfde werkt met betrekking tot API’s), maar doordat het gebruik maakt van het BRP (in mock-vorm) geen echte burgergegevens ontsluit. Het geeft echter wel een BSN nummer terug dat bestaat in het mock BRP. Dat betekent dat ontwikkelaars de mogelijkheid hebben om hun applicatie te testen met DigiD en BPR toegang zonder deze daadwerkelijk te hoeven aanvragen (waarvoor zelfs in demo-versies een PKI overheidscertificaat nodig is). Het is dan ook puur een development tool.');
        $component->setLongDescription('Digispoof is een SAML applicatie voor het testen van DigiD (en op termijn AIDAS) inlogmethodes. De gedachte hierbij is dat Digispoof technisch uitwisselbaar is met DigiD (dus exact hetzelfde werkt met betrekking tot API’s), maar doordat het gebruik maakt van het BRP (in mock-vorm) geen echte burgergegevens ontsluit. Het geeft echter wel een BSN nummer terug dat bestaat in het mock BRP. Dat betekent dat ontwikkelaars de mogelijkheid hebben om hun applicatie te testen met DigiD en BPR toegang zonder deze daadwerkelijk te hoeven aanvragen (waarvoor zelfs in demo-versies een PKI overheidscertificaat nodig is). Het is dan ook puur een development tool.');
        $component->setImage('images/content/Componenten/ds/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/digispoof-interface');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/247883561', 'img' => 'https://github.styleci.io/repos/247883561/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/digispoof-interface/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/digispoof-interface/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Producten en Diensten Catalogus
        $component = new Component();
        $component->setName('Producten Diensten Catalogus');
        $component->setShortDescription('De Producten en Diensten Catalogus heeft als doel het geheel aan af te nemen producten en/of diensten in kaart te brengen. Hierbij wordt uitgegaan van afname door klanten vanuit een organisatie, maar er is geen technische beperking om het ook als inkoopsysteem te gebruiken. Naast producten en diensten kent het component ook ondersteuning voor het maken van productgroepen, beschrijvende teksten, afbeeldingen, belastingen en andere zaken die specifiek gerelateerd zijn aan webshop concepten. Hierbij wordt (vanuit internationale normen) een onderscheid gemaakt tussen het product en het aanbieden van het product (offer) waarbij het mogelijk is om een aanbod te koppelen aan geldigheid of doelgroepen. Met andere woorden het is mogelijk om een product op bepaalde momenten goedkoper of juist duurder aan te bieden (trouwen in het weekend) of goedkoper aan te bieden voor bepaalde doelgroepen (korting op evenementen vergunningen voor buurtcomités).');
        $component->setLongDescription('De Producten en Diensten Catalogus heeft als doel het geheel aan af te nemen producten en/of diensten in kaart te brengen. Hierbij wordt uitgegaan van afname door klanten vanuit een organisatie, maar er is geen technische beperking om het ook als inkoopsysteem te gebruiken. Naast producten en diensten kent het component ook ondersteuning voor het maken van productgroepen, beschrijvende teksten, afbeeldingen, belastingen en andere zaken die specifiek gerelateerd zijn aan webshop concepten. Hierbij wordt (vanuit internationale normen) een onderscheid gemaakt tussen het product en het aanbieden van het product (offer) waarbij het mogelijk is om een aanbod te koppelen aan geldigheid of doelgroepen. Met andere woorden het is mogelijk om een product op bepaalde momenten goedkoper of juist duurder aan te bieden (trouwen in het weekend) of goedkoper aan te bieden voor bepaalde doelgroepen (korting op evenementen vergunningen voor buurtcomités).');
        $component->setImage('images/content/Componenten/pdc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/productenendienstencatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/pdc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/210809809', 'img' => 'https://github.styleci.io/repos/210809809/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/productenendienstencatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/productenendienstencatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Proto Applicatie
        $component = new Component();
        $component->setName('Proto Applicatie NL Design Systeem');
        $component->setShortDescription('De Proto Applicatie levert een vooringerichte versie van het Symfony PHP framework, waarbij de NL Design System componenten zijn voorzien van template widgets. Oftewel het is mogelijk om vanuit je PHP/HTML templates direct gebruik te maken van NL Design Elementen. De business logica van de Proto Applicatie wordt geleverd door de generieke Common Ground Bundle. Framework De Proto Applicatie rust op het PHP Symfony Framework, daarbij importeert het de Common Ground Bundle, die het component als logica gebruikt (voor o.a. de VSBE) en NL Design System voor grafische vormgeving. Er is dus geen sprake van specifiek geschreven code, de applicatie wordt geheel vormgegeven door slim gebruik van dependency management en een klein beetje configuratie met betrekking tot hoe de applicatie zich authenticeert op Common Ground / NLX. Het dient dus als een voorbeeld voor de kracht van framework development en dependency management als methodiek, om een volledige applicatie puur te baseren op hergebruik van code en processen. NL Design System Tevens is er een widget library beschikbaar voor de Processen Catalogus, dat wil versimpeld zeggen dat er vooringerichte widgets zijn die zijn gekoppeld aan een specifieke (micro) service. Hiermee worden de grafische elementen uit NL Design System geoperationaliseerd. Voorbeelden hiervan zijn formulier-elementen zoals: ‘adres opgeven’, die gebruik maakt van de Adressen Service, om aan de hand van een huisnummer en postcode combinatie tot een BAG id te komen. En ‘bedrijf opgeven’, die aan de hand van een bedrijfsnaam een KVK-nummer suggereert. De Proto Applicatie geeft dus een invulling aan het verbinden van de door NL Design ontworpen UI en de door Common Ground Bundle geleverde componenten en API’s. Very Small Business Engine Onderdeel van de Proto Applicatie is de very small business engine, deze is oorspronkelijk bedacht voor het uitvoeren van simpele processen, maar heeft zich tegenwoordig gespecialiseerd in het ondersteunen van klantreizen. In de Common Ground zin wil dit dus zeggen dat het het Procestypen uit het PTC voorziet van de grafische elementen uit NL Design System (met indien nodig microservices uit het PC) en de resultaten van de klantreis als verzoek opslaat in het VRC. Met andere woorden de Proto Applicatie ondersteunt ‘out of the box’ klantreizen zoals gedefinieerd binnen Common Ground containers. Implementaties Er zijn momenteel een aantal voorbeeld implementaties van de Proto Applicatie beschikbaar vanuit de Huwelijksplanner, AdreswijzigingNL, Begraafplaatsen Registratie, COVID-19 formulieren, ROC Flevoland en Processen.');
        $component->setLongDescription('De Proto Applicatie levert een vooringerichte versie van het Symfony PHP framework, waarbij de NL Design System componenten zijn voorzien van template widgets. Oftewel het is mogelijk om vanuit je PHP/HTML templates direct gebruik te maken van NL Design Elementen. De business logica van de Proto Applicatie wordt geleverd door de generieke Common Ground Bundle. Framework De Proto Applicatie rust op het PHP Symfony Framework, daarbij importeert het de Common Ground Bundle, die het component als logica gebruikt (voor o.a. de VSBE) en NL Design System voor grafische vormgeving. Er is dus geen sprake van specifiek geschreven code, de applicatie wordt geheel vormgegeven door slim gebruik van dependency management en een klein beetje configuratie met betrekking tot hoe de applicatie zich authenticeert op Common Ground / NLX. Het dient dus als een voorbeeld voor de kracht van framework development en dependency management als methodiek, om een volledige applicatie puur te baseren op hergebruik van code en processen. NL Design System Tevens is er een widget library beschikbaar voor de Processen Catalogus, dat wil versimpeld zeggen dat er vooringerichte widgets zijn die zijn gekoppeld aan een specifieke (micro) service. Hiermee worden de grafische elementen uit NL Design System geoperationaliseerd. Voorbeelden hiervan zijn formulier-elementen zoals: ‘adres opgeven’, die gebruik maakt van de Adressen Service, om aan de hand van een huisnummer en postcode combinatie tot een BAG id te komen. En ‘bedrijf opgeven’, die aan de hand van een bedrijfsnaam een KVK-nummer suggereert. De Proto Applicatie geeft dus een invulling aan het verbinden van de door NL Design ontworpen UI en de door Common Ground Bundle geleverde componenten en API’s. Very Small Business Engine Onderdeel van de Proto Applicatie is de very small business engine, deze is oorspronkelijk bedacht voor het uitvoeren van simpele processen, maar heeft zich tegenwoordig gespecialiseerd in het ondersteunen van klantreizen. In de Common Ground zin wil dit dus zeggen dat het het Procestypen uit het PTC voorziet van de grafische elementen uit NL Design System (met indien nodig microservices uit het PC) en de resultaten van de klantreis als verzoek opslaat in het VRC. Met andere woorden de Proto Applicatie ondersteunt ‘out of the box’ klantreizen zoals gedefinieerd binnen Common Ground containers. Implementaties Er zijn momenteel een aantal voorbeeld implementaties van de Proto Applicatie beschikbaar vanuit de Huwelijksplanner, AdreswijzigingNL, Begraafplaatsen Registratie, COVID-19 formulieren, ROC Flevoland en Processen.');
        $component->setImage('images/content/Componenten/proto/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/Proto-application-NLDesign');
        $component->setDocumentation('#');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/250502590', 'img' => 'https://github.styleci.io/repos/250502590/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/Proto-application-NLDesign/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/Proto-application-NLDesign/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

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
