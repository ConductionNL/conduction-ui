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
            ['href' => 'https://artifacthub.io/packages/helm/adresservice/adresservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/adresservice'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Verzoek Type Catalogus
        $component = new Component();
        $component->setName('Verzoek Type Catalogus');
        $component->setShortDescription('De Verzoek Type Catalogus biedt een overzicht van de mogelijke te starten verzoeken door de gebruiker en de te verwachten afhandeling. Het component laat zich in deze het best vergelijken met een digitale beschrijving van een formulier, waarbij de Verzoek Type catalogus zich zuiver beperkt tot de definiëring van de eindwaarde. Het component bevat in deze dus een reeks van velden en voorwaarden waaraan het moet voldoen.');
        $component->setlongDescription("De verzoektype Catalogus biedt een overzicht van mogelijke door de gebruiker te starten verzoeken en de te verwachten afhandeling. Het component laat zich in deze het best vergelijken met een digitale beschrijving van een formulier, waarbij de Verzoek Type Catalogus zich zuiver beperkt tot de definiëring van de eindwaarde. Het bevat in deze dus een reeks van velden en voorwaarden waaraan het moet voldoen. \n \n De door de gebruiker aan te leveren velden noemen we properties, en iedere property kan worden beschreven. Voor het omschrijven van de velden gebruiken we de OpenAPI Standaard als richtlijn, dat betekent dat alle daarin opgenomen typering voor velden mogen worden toegepast. Dit kan op een aantal manieren: \n \n Simpel: bijvoorbeeld een naam is een string van minimaal 5 en maximaal 255 teken. \n \n Abstract: bijvoorbeeld een link is een geldige URL \n \n Linked Data: en vanuit de Common Ground gedachte kan het ook in de trant van een linked data object beschrijving. In dat laatste geval wordt gebruik gemaakt van de OpenAPI 2 norm extensie voor types. Waarbij een type wordt gedefinieerd als componentCode/resource. Bijvoorbeeld een persoon is een cc/people (ofwel een persoon in het Contacten Component). \n \n Linked data bevindt zich per definitie in andere componenten die bronhouder zijn, dat wil zeggen dat in de dataset van een verzoek alleen de verwijzing naar de bron wordt opgeslagen. Er kan echter wel gebruik worden gemaakt van de in NL API strategie omschreven extend functionaliteit. Dat wil zeggen dat het mogelijk is om aan de VTC API te vragen om externe bronnen in te voegen als objecten in plaats van verwijzingen. Op deze manier is het mogelijk om een verzoek met onderliggende data in één keer op te halen. \n \n Omgekeerd is het ook mogelijk om onderliggende resources in andere componenten aan te maken (door in plaats van een verwijzing een object mee te geven, maar niet te voorzien van een id property) of deze bij te werken (door in plaats van een verwijzing een object mee te geven, maar wel te voorzien van een id property). \n \n Als laatste kan een verzoek type ook spelregels bevatten over wat er moet gebeuren als een verzoek van status verandert. Zo is het bijvoorbeeld mogelijk om bij het indienen van een verzoek, een zaak van een bepaald zaaktype te laten aanmaken in een API die de ZGW standaard ondersteunt of om bij bijvoorbeeld het opstarten van een verzoek een Camunda proces op te starten.");
        $component->setImage('images/content/Componenten/vtc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/verzoektypecatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/vtc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/210271092', 'img' => 'https://github.styleci.io/repos/210271092/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/verzoektypecatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/verzoektypecatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/verzoektypecatalogus/verzoektypecatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/verzoektypecatalogus'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Verzoek Registratie component
        $component = new Component();
        $component->setName('Verzoek Registratie component');
        $component->setShortDescription("Het Verzoek Registratie Component bevat zowel het eind- als tussenresultaat van een proces.Of om het iets simpeler te zeggen een proces schrijft bij iedere stap zijn variabelen weg naar een verzoek. Daarmee is het proces stateless en het verzoek stateful. In deze zin is een verzoek vergelijkbaar met een proces token in bijvoorbeeld BPMN- engines. \n \n Hierdoor is het mogelijk om verzoeken uit te wisselen tussen processen. Het is bijvoorbeeld mogelijk om via een chatbot een proces te draaien dat het verzoektype verhuizen gebruikt om een verzoek aan te maken, maar het ondertekenen van dit verzoek te laten doen via het webformulier.");
        $component->setLongDescription("Het Verzoek Registratie Component bevat zowel het eind- als tussenresultaat van een proces.Of om het iets simpeler te zeggen een proces schrijft bij iedere stap zijn variabelen weg naar een verzoek. Daarmee is het proces stateless en het verzoek stateful. In deze zin is een verzoek vergelijkbaar met een proces token in bijvoorbeeld BPMN- engines. \n \n Hierdoor is het mogelijk om verzoeken uit te wisselen tussen processen. Het is bijvoorbeeld mogelijk om via een chatbot een proces te draaien dat het verzoektype verhuizen gebruikt om een verzoek aan te maken, maar het ondertekenen van dit verzoek te laten doen via het webformulier.");
        $component->setImage('images/content/Componenten/vrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/verzoekregistratiecomponent');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/vrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/198549754', 'img' => 'https://github.styleci.io/repos/198549754/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/verzoekregistratiecomponent/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/verzoekregistratiecomponent/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/verzoekregistratiecomponent/verzoekregistratiecomponent', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/verzoekregistratiecomponent'],
        ]);

        //memo-component
        $this->em->persist($component);
        $this->em->flush();

        $component = new Component();
        $component->setName('Memo Component');
        $component->setShortDescription("Het Memo Component biedt de generieke mogelijkheid om gebruikers memo’s (notities) te laten aanmaken of resources (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet. In wezen kan elke gebruiker over alles een memo aanmaken. Dat biedt ook de mogelijkheid om voor elke willekeurige resource het component te bevragen en te zien of er memo’s voor staan. \n \n Memo’s worden in principe gezien als organisatie-intern en zijn nadrukkelijk geen communicatiekanaal met de klant, daarvoor zijn ‘contactmomenten’ beschikbaar.");
        $component->setLongDescription("Het Memo Component biedt de generieke mogelijkheid om gebruikers memo’s (notities) te laten aanmaken of resources (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet. In wezen kan elke gebruiker over alles een memo aanmaken. Dat biedt ook de mogelijkheid om voor elke willekeurige resource het component te bevragen en te zien of er memo’s voor staan. \n \n Memo’s worden in principe gezien als organisatie-intern en zijn nadrukkelijk geen communicatiekanaal met de klant, daarvoor zijn ‘contactmomenten’ beschikbaar.");
        $component->setImage('images/content/Componenten/memo/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/memo-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/memo');
        $component->setPlatforms(['overlijden', 'trouwen']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/259932857', 'img' => 'https://github.styleci.io/repos/259932857/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/memo-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/memo-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/memo-component/memo-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/memo-component'],
        ]);

        //Queue Component
        $this->em->persist($component);
        $this->em->flush();

        $component = new Component();
        $component->setName('Queue Component');
        $component->setShortDescription('Het Queue Component bevat een lijst van later uit te voeren taken, dat wil zeggen in dit component kunnen taken worden aangemaakt die door andere componenten op een later tijdstip moeten worden uitgevoerd. Dit lijkt op het versturen van notificaties met een paar afwijkingen.');
        $component->setLongDescription("Het Queue Component bevat een lijst van later uit te voeren taken, dat wil zeggen in dit component kunnen taken worden aangemaakt die door andere componenten op een later tijdstip moeten worden uitgevoerd. Dit lijkt op het versturen van notificaties met een paar afwijkingen: \n \n De notificatie gaat altijd terug naar de indienende applicatie. \n \n De notificatie wordt op een later moment verzonden. \n\n De notificatie bevat een unieke id waarop de kan worden overschreven. \n\n Deze logica wordt gebruik om cronjobs en het analyseren van de database te voorkomen, voorbeeld: stel een gebruiker plaatst een bestelling en heeft de mogelijkheid om later te betalen, maar doet de gebruiker dit niet, dan wordt de bestelling na 30 dagen geannuleerd. Als we dit willen oplossen met een cronjob zouden we iedere dag een data bevraging moeten doen van alle bestellingen die aan de criteria voldoen en deze annuleren. \n\n Dat heeft een aantal nadelen: \n\n We moeten altijd een hele database analyseren, ook al hebben we maar één order nodig. \n\n We zijn op de dag nauwkeurig i.p.v. van op de minuut (en als we op de minuut nauwkeurig zouden willen zijn, moeten we iedere minuut de hele database bevragen). \n\n Een toename van business logica, voorwaarde en gevolgen (willen we bijvoorbeeld 5 dagen van te voren een herinneringsmail sturen?) leidt tot een scherpe toename van database bevragingen. \n\n Om dit te voorkomen willen we graag een gerichte vraag stellen die één keer na 30 dagen afgaat, deze vraag kunnen we aanmaken als de order wordt geplaatst, omdat in de tussentijd containers kunnen wisselen en we centraal beheer willen kunnen doen op deze wachtrij, brengen we de vragen gebundeld onder in een apart component. Dit is het Queue Component. \n\n Uitgangspunt hierbij is dat de queue andere componenten gericht notificeert (met de informatie waarmee specifiek kan worden gehandeld, bijvoorbeeld een order id), maar dat de afhandelende applicatie zelf controleert of de handeling nog nodig is als onderdeel van de uitvoering (oftewel is de order nog onbetaald). \n \n Op deze manier blijft de wachtrij verschoont van business logica, gecombineerd met het Processen Component (PC) biedt het echter de optie om microservices en BPMN processen in de wachtrij te zetten, waarbij het natuurlijk technisch mogelijk is om de uitvoering met 0 minuten te vertragen. Het maakt het mogelijk om processen asynchroon uit te voeren.");
        $component->setImage('images/content/Componenten/qc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/Queue-Component');
        $component->setPlatforms(['overlijden']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/262041492', 'img' => 'https://github.styleci.io/repos/262041492/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/Queue-Component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/Queue-Component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/queue-component/queue-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/queue-component'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Portfolio Component
        $component = new Component();
        $component->setName('Portfolio Component');
        $component->setShortDescription('Het Portfolio Component vormt een Common Ground implementatie van de e-portfolio-norm (die op haar beurt weer voortkomt uit e-HRM) en stelt gebruikers (of contactpersonen) in staat om een portfolio op te bouwen. Een portfolio kan een een HRM toepassing zijn, waarbij voor de medewerker vaardigheden en competenties worden bijgehouden, eventueel voorzien van bewijsstukken en gekoppeld is aan ontwikkelingsdoelen en eventuele functies. Het portfolio kan ook een meer traditionele invulling hebben van gedaan werk, ofwel een showcase-functie, zoals men die bij kunstenaars en andere zelfstandige beroepen vaak tegenkomt.');
        $component->setLongDescription("Het Portfolio Component vormt een Common Ground implementatie van de e-portfolio norm (die op haar beurt weer voortkomt uit e-HRM) en stelt gebruikers (of contactpersonen) in staat om een portfolio op te bouwen. Hierbij kan een portfolio zowel een een HRM toepassing zijn, waarbij voor de medewerker vaardigheden en competenties worden bijgehouden (eventueel voorzien van bewijsstukken en gekoppeld aan ontwikkelingsdoelen en eventueel functies) als dat een portfolio een meer traditionele invulling kan hebben van gedaan werk, ofwel een showcase functie, zoals men die bij kunstenaars en andere zelfstandige vaak tegen komt. \n \n In het geval van een onderwijsinstelling kan het portfolio ook bijvoorbeeld beide bevatten en daarmee de basis zijn voor een leerling dossier.");
        $component->setImage('images/content/Componenten/pfc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/portfolio-component');
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
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/262270870', 'img' => 'https://github.styleci.io/repos/262270870/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/ContactMoment-Component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/ContactMoment-Component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/contactmoment-component/contactmoment-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/contactmoment-component'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //user component
        $component = new Component();
        $component->setName('User Component');
        $component->setShortDescription("Het User Component voert het beheer over een gebruikersaccount en hun autorisaties. Hierbij kan in de traditionele zin worden gedacht aan aan een gebruiker die behoort tot bepaalde groepen die op hun beurt weer beschikken over bepaalde rechten. Waarbij het component tevens het bijhouden en valideren van wachtwoorden ondersteund (ten einde inlog mogelijkheden op bijvoorbeeld een dashboard of om een applicatie te faciliteren) maar in de wat abstracte context ondersteund het ook algemene inlogs systematieken.");
        $component->setLongDescription("Het User Component voert het beheer over gebruikersaccount en hun autorisaties. Hierbij kan in de traditionele zin worden gedacht aan een gebruik die behoort tot bepaalde groepen die op hun beurt weer beschikken over bepaalde rechten. Waarbij het component tevens het bijhouden en valideren van wachtwoorden ondersteunt (ten einde inlog mogelijkheden op bijvoorbeeld een dashboard of applicatie te faciliteren) maar in de wat abstracte context ondersteund het ook algemene inlog systematieken. \n\n Zo kan het User Component zelf functioneren als OAuth (2) bron en daarmee de bronhouder zijn voor een OpenID van een gebruike,r maar kan het ook alternatieve inlog stromen zoals AFC en SAML afhandelen (en daarmee DigiD). Als laatste kan het functioneren als ontvangende partij van OAuth inloggen en biedt het daarmee een inloggen met Facebook, Google of GitHub mogelijkheid voor applicaties.");
        $component->setImage('images/content/Componenten/uc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/user-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/uc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/222616116', 'img' => 'https://github.styleci.io/repos/222616116/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/user-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/user-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/user-component/user-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/user-component'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Envioment component
        $component = new Component();
        $component->setName('Environment Component');
        $component->setShortDescription("Het Environment Component heeft als doel om Common Ground-omgevingen te beheren. Hierbij kan het kubernetes clusters inregelen, voorzien van de juiste en benodigde ondersteunende software, zoals ingres controllers, certificaten en installaties via Helm-bestanden. Het kan ook op afstand volledige kubernetes clusters opstarten wat werken in de cloud ten goede komt. Denk hierbij aan een Common ground-cluster bij populaire cloud-aanbieders Fuga, Cyso, Digital Ocean, Google en Amazon. \n\n Als tweede functionaliteit kan het component andere componenten installeren, configureren en implementeren. Het bevat met andere woorden alle noodzakelijke functionaliteiten die nodig zijn om een Common Ground omgeving te kunnen maken en te beheren zonder dat daarvoor kennis van Common Ground of de onderliggende infrastructuur nodig is.");
        $component->setLongDescription("Het Environment Component heeft als doel om Common Ground-omgevingen te beheren. Hierbij kan het kubernetes clusters inregelen, voorzien van de juiste en benodigde ondersteunende software, zoals ingres controllers, certificaten en installaties via Helm-bestanden. Het kan ook op afstand volledige kubernetes clusters opstarten wat werken in de cloud ten goede komt. Denk hierbij aan een Common ground-cluster bij populaire cloud-aanbieders Fuga, Cyso, Digital Ocean, Google en Amazon. \n\n Als tweede functionaliteit kan het component andere componenten installeren, configureren en implementeren. Het bevat met andere woorden alle noodzakelijke functionaliteiten die nodig zijn om een Common Ground omgeving te kunnen maken en te beheren zonder dat daarvoor kennis van Common Ground of de onderliggende infrastructuur nodig is.");
        $component->setImage('images/content/Componenten/evc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/environment-component');
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
        $component->setShortDescription('Het Taken Component biedt de generieke mogelijkheid om taken te registreren van de ene resource op een andere resource (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet. In de meest voorkomende vorm zal bijvoorbeeld een medewerker of gebruiker (resource) een taak hebben op een zaak of order (resource), maar in abstracte vorm kan ook een burger (BRP resource) een taak hebben of kunnen zelfs applicaties of processen (zoals opgenomen in het PC) een taak hebben.Het Taken Component geeft in die zin zowel invulling aan taken, als in het agenda calendar concept “todo”, als het bpmn concept “task”. Echter moeten zowel het onderwerp van de taak, als de uitvoerder van de taak identificeerbaar zijn aan de hand van een URL.');
        $component->setLongDescription('Het Taken Component biedt de generieke mogelijkheid om taken te registreren van de ene resource op een andere resource (bijvoorbeeld Common Ground resources). Deze functionaliteit is bewust abstract opgezet. In de meest voorkomende vorm zal bijvoorbeeld een medewerker of gebruiker (resource) een taak hebben op een zaak of order (resource), maar in abstracte vorm kan ook een burger (BRP resource) een taak hebben of kunnen zelfs applicaties of processen (zoals opgenomen in het PC) een taak hebben.Het Taken Component geeft in die zin zowel invulling aan taken, als in het agenda calendar concept “todo”, als het bpmn concept “task”. Echter moeten zowel het onderwerp van de taak, als de uitvoerder van de taak identificeerbaar zijn aan de hand van een URL.');
        $component->setImage('images/content/Componenten/tc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/taken-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/tc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/260444947', 'img' => 'https://github.styleci.io/repos/260444947/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/taken-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/taken-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/taken-component/taken-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/taken-component'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //BerichtenService
        $component = new Component();
        $component->setName('BerichtenService');
        $component->setShortDescription("De Berichtenservice faciliteert het versturen van berichten (bijvoorbeeld aan de hand van WRC sjablonen) en het rapporteren daarover. Hiervoor levert het zowel bulk-capaciteiten (voor bijvoorbeeld het versturen van mailings), als opvolg-capaciteiten (voor het controleren van bijvoorbeeld het aankomen van emails). \n \n Vooralsnog ondersteunt de Berichtenservice het versturen van mails en sms-berichten, maar er wordt nagedacht over het toevoegen van een post route en chatfunctionaliteit (social media). Het kan hierbij zowel zelfstandig opereren, als een front leveren voor functionaliteit van derden (Mailgun, Mailchimp, Messagbird, etc)");
        $component->setLongDescription("De Berichtenservice faciliteert het versturen van berichten (bijvoorbeeld aan de hand van WRC sjablonen) en het rapporteren daarover. Hiervoor levert het zowel bulk-capaciteiten (voor bijvoorbeeld het versturen van mailings), als opvolg-capaciteiten (voor het controleren van bijvoorbeeld het aankomen van emails). \n\n Vooralsnog ondersteunt de Berichtenservice het versturen van mails en sms-berichten, maar er wordt nagedacht over het toevoegen van een post route en chatfunctionaliteit (social media). Het kan hierbij zowel zelfstandig opereren, als een front leveren voor functionaliteit van derden (Mailgun, Mailchimp, Messagbird, etc)");
        $component->setImage('images/content/Componenten/berichten/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/berichtservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/bs');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144502', 'img' => 'https://github.styleci.io/repos/206144502/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/berichtservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/berichtservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/berichtservice/berichtservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/berichtservice'],
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
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/235730570', 'img' => 'https://github.styleci.io/repos/235730570/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/docparser/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/docparser/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/docparser/docparser', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/docparser'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Order Registratie Component
        $component = new Component();
        $component->setName('Order Registratie Component');
        $component->setShortDescription('Het Order Registratie component verzorgt de afhandeling van bestellingen met uitzondering van facturatie en betalingen. Het biedt in samenwerking met het PDC een multi-tenant en omnichannel oplossing voor het verkopen van producten en diensten. Hierbij worden offers (te kopen resources vanuit het PC) toegevoegd aan een order, waarbij het Registratie Order Component de geldigheid van de aanbieding controleert en een eventuele prijs en betaling berekeningen uitvoert.');
        $component->setLongDescription("Het Order Registratie Component verzorgt de afhandeling van bestellingen met uitzondering van facturatie en betalingen. Het biedt in samenwerking met het PDC een multi-tenant en omnichannel oplossing voor het verkopen van producten en diensten. Hierbij worden offers (te kopen resources vanuit het PC) toegevoegd aan een order, waarbij het Order Registratie Component de geldigheid van de aanbieding controleert en een eventuele prijs en betaling berekeningen uitvoert. \n\n Omdat orders ook de status “basket” kunnen hebben, neemt het component hierbij essentiële validatie van de frontend over, waardoor ontwikkelaars worden ontlast en organisaties verzekerd worden van een propere berekening. \n\n In tandem met het VRC voorziet het order component ook in de directe afhandeling van een order. Voor een simpele bestelling kan er hierbij worden gedacht aan een orderpick proces, maar voor complexe bestellingen kunnen ook zaken of processen worden opgestart.");
        $component->setImage('images/content/Componenten/orc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/orderregistratiecomponent');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/orc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144416', 'img' => 'https://github.styleci.io/repos/206144416/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/orderregistratiecomponent/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/orderregistratiecomponent/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/orderregistratiecomponent/orderregistratiecomponent', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/orderregistratiecomponent'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //AgendaService
        $component = new Component();
        $component->setName('Agenda Service');
        $component->setShortDescription("De Agenda Service faciliteert een agenda functionaliteit. Hiermee kunnen er resources gekoppeld worden aan een agenda. Een resource kan daarbij een persoon uit het Contacten Component of een medewerker vanuit het Medewerkers Component zijn, maar is daar technisch niet toe beperkt. \n\n Het is dus ook mogelijk om agenda’s te voeren voor locaties, zalen en kamers in de zin van boekingen of bijvoorbeeld voertuigen. Hierbij zit een logisch doch niet dwingend verband met het PDC en ORC met betrekking tot kostprijsberekening etc. Naast agenda’s als objecten bevat het component uiteraard mogelijkheden tot het blokkeren of juist beschikbaar stellen van agenda ruimtes, het maken van afspraken en zoeken naar vrije ruimte binnen één of meer agenda’s.");
        $component->setLongDescription("De Agenda Service faciliteert een agenda functionaliteit. Hiermee kunnen er resources gekoppeld worden aan een agenda. Een resource kan daarbij een persoon uit het Contacten Component of een medewerker vanuit het Medewerkers Component zijn, maar is daar technisch niet toe beperkt. \n\n Het is dus ook mogelijk om agenda’s te voeren voor locaties, zalen en kamers in de zin van boekingen of bijvoorbeeld voertuigen. Hierbij zit een logisch doch niet dwingend verband met het PDC en ORC met betrekking tot kostprijsberekening etc. Naast agenda’s als objecten bevat het component uiteraard mogelijkheden tot het blokkeren of juist beschikbaar stellen van agenda ruimtes, het maken van afspraken en zoeken naar vrije ruimte binnen één of meer agenda’s.");
        $component->setImage('images/content/Componenten/ac/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/agendaservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/arc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144508', 'img' => 'https://github.styleci.io/repos/206144508/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/agendaservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/agendaservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/agendaservice/agendaservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/agendaservice'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //StuF Component
        $component = new Component();
        $component->setName('StuF Component');
        $component->setShortDescription("Het StuF component faciliteert een bidirectionele koppeling tussen Common Ground en “oude” StuF koppelingen. Het component doet dit door het vertalen van API-vragen naar StuF, de antwoorden op deze StuF-berichten indien nodig te verrijken met andere StuF-berichten en dit resultaat weer terug te geven als API-resultaat (bijvoorbeeld JSON). Op deze manier is het mogelijk om “oude” applicaties tijdelijk het Common Ground landschap in te trekken indien dit nodig is. \n \n Het component ondersteunt ook het bevragen van Common Ground API’s via StuF-berichten, in dat geval fungeert het als een soort van broker die tevens vertaalt.");
        $component->setLongDescription("Het StuF component faciliteert een bidirectionele koppeling tussen Common Ground en “oude” StuF koppelingen. Het component doet dit door het vertalen van API-vragen naar StuF, de antwoorden op deze StuF-berichten indien nodig te verrijken met andere StuF-berichten en dit resultaat weer terug te geven als API-resultaat (bijvoorbeeld JSON). Op deze manier is het mogelijk om “oude” applicaties tijdelijk het Common Ground landschap in te trekken indien dit nodig is. \n \n Het component ondersteunt ook het bevragen van Common Ground API’s via StuF-berichten, in dat geval fungeert het als een soort van broker die tevens vertaalt.");
        $component->setImage('images/content/Componenten/stuf/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/stufservice');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206148674', 'img' => 'https://github.styleci.io/repos/206148674/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/stufservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/stufservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/stufservice/stufservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/stufservice'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Mederwerker Registratie Component
        $component = new Component();
        $component->setName('Medewerker Catalogus');
        $component->setShortDescription('Het Medewerker Registratie Component bevat medewerkers en de daarbij behorende HRM systematiek, hierbij kan bijvoorbeeld worden gedacht aan contractmanagement en functie of competentie overzichten. Deze functionaliteit wordt eigenlijk onttrokken aan de e-HRM-norm (ofwel de HR-XML standaard, in Nederland losjes geïmplementeerd als SETU), waarbij het stuk portfolio-opbouw is losgetrokken en in het Portfolio Component zit (om de e-portfolio norm te ondersteunen).');
        $component->setLongDescription("Het Medewerker Registratie Component bevat medewerkers en de daarbij behorende HRM systematiek, hierbij kan bijvoorbeeld worden gedacht aan contractmanagement en functie of competentie overzichten. Deze functionaliteit wordt eigenlijk onttrokken aan de e-HRM norm (ofwel de HR-XML standaard, in Nederland losjes geïmplementeerd als SETU). Waarbij het stuk portfolio opbouw is losgetrokken en in het Portfolio Component zit (om de e-portfolio norm te ondersteunen). \n \n Naast het simpelweg bijhouden van medewerkers is dit component echter ook bedoeld als HR tool met betrekking tot groei ambities in de trant van competenties en vaardigheden. Gecombineerd met het Portfolio Component kan het daarmee ook de basis vormen voor coachings- en of onderwijssystemen, waarbij bepaalde leer of groei doelen worden bijgehouden.");
        $component->setImage('images/content/Componenten/mrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/medewerkercatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/mrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206144408', 'img' => 'https://github.styleci.io/repos/206144408/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/medewerkercatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/medewerkercatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/medewerkercatalogus/medewerkercatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/medewerkercatalogus'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //betaal Service
        $component = new Component();
        $component->setName('Betaal Service');
        $component->setShortDescription("Het Betalen Component handelt, bij voorkeur in samenwerking met het Order Registratie Component, betalingen af. Hiervoor maakt het facturen aan en meldt deze (indien gewenst) bij een payment provider aan. Als laatste worden de resultaten van de payment provider verwerkt, waarmee een invoice overzicht wordt gecreëerd dat kan worden gebruikt door zowel organisaties als klanten.\n \n Indien gewenst kan het Betalen Component in samenwerking met het WRC (sjablonen), BS (mail en sms) en het Queue Component worden ingezet voor de opvolging van betalingen in de trant van herinneringen en aanmaningen.");
        $component->setLongDescription("Het Betalen Component handelt, bij voorkeur in samenwerking met het Order Registratie Component, betalingen af. Hiervoor maakt het facturen aan en meldt deze (indien gewenst) bij een payment provider aan. Als laatste worden de resultaten van de payment provider verwerkt, waarmee een invoice overzicht wordt gecreëerd dat kan worden gebruikt door zowel organisaties als klanten. \n \n Indien gewenst kan het Betalen Component in samenwerking met het WRC (sjablonen), BS (mail en sms) en het Queue Component worden ingezet voor de opvolging van betalingen in de trant van herinneringen en aanmaningen.");
        $component->setImage('images/content/Componenten/betalen/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/betaalservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/bc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206145303', 'img' => 'https://github.styleci.io/repos/206145303/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/betaalservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/betaalservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/contacten-catalog/betaalservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/betaalservice'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Challenge Component
        $component = new Component();
        $component->setName('Challenge Component');
        $component->setShortDescription("Het Challenge Component ondersteunt het generiek uitzetten van challenges en het verzamelen van reacties daarop. Het biedt aan de andere kant de mogelijkheid tot het opstellen van pitches en al dan niet indienen daarvan op challenges.\n\n Hoewel beide optioneel in samenwerking met het PDC en ORC ook een tender proces ondersteunen, is deze functionaliteit primair geschreven voor het ondersteunen van citychallenges en startup in residence challenges aan de ‘challenge’- kant en kickstarter-achtige functionaliteit aan de ‘pitch’- kant.");
        $component->setLongDescription("Het Challenge Component ondersteunt het generiek uitzetten van challenges en verzamelen van reacties daarop. Het biedt aan de andere kant de mogelijkheid tot het opstellen van pitches en al dan niet indienen daarvan op challanges.\n\n Hoewel beide optioneel in samenwerking met het PDC en ORC ook een tender proces ondersteunen is deze functionaliteit primair geschreven voor het ondersteunen van citychallanges en startupinresidence chalanges aan de challange kant en kickstarter-achtige functionaliteit aan de pitch kant.\n \n De gedachte hierbij is dat het component kan worden ingezet voor het ondersteunen van een ecosysteem rondom open source pakketten, waarbij developers goede ideeën kunnen pitchen en organisaties hun uitdagingen kunnen challengen. Dat daargelaten kan het component natuurlijk net zo goed worden gebruikt voor het het pitchen van burger- en buurtinitiatieven of het ondersteunen van hackathons.");
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
        $component->setShortDescription("Het Instemmingen Registratie Component heeft als doel om instemmingen vast te leggen ten opzichte van resources. Hierbij wordt de instemming verleend door een rechtspersoon. \n\nInstemmingen kunnen zowel specifiek zijn (dit verzoek mag namens mij worden ingediend), rol gebonden (ik ga er mee akkoord getuige voor dit huwelijk te zijn), als generiek. Generieke instemmingen worden afgegeven aan een (rechts)persoon ten opzichte van een verzoektype (deze persoon mag namens mij meldingen openbare ruimte doen).\n\n Instemmingen fungeren hiermee zowel als een digitale handtekening, als mandaat.");
        $component->setLongDescription("Het Instemmingen Registratie Component heeft als doel om instemmingen vast te leggen ten opzichte van resources. Hierbij wordt de instemming verleend door een rechtspersoon.\n\n Instemmingen kunnen zowel specifiek zijn (dit verzoek mag namens mij worden ingediend), rol gebonden (ik ga er mee akkoord getuige voor dit huwelijk te zijn), als generiek. Generieke instemmingen worden afgegeven aan een (rechts)persoon ten opzichte van een verzoektype (deze persoon mag namens mij meldingen openbare ruimte doen).\n\n Instemmingen fungeren hiermee zowel als een digitale handtekening, als mandaat.");
        $component->setImage('images/content/Componenten/irc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/instemming-registratie-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/irc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/210753780', 'img' => 'https://github.styleci.io/repos/210753780/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/instemming-registratie-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/instemming-registratie-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/instemmingservice/instemmingservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/instemmingservice'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Contact Catalogus
        $component = new Component();
        $component->setName('Contact Catalogus');
        $component->setShortDescription('Het Contacten Component bevat lijsten van contactpersonen, hiermee heeft het vanuit bron perspectief doorgaans een aanvullende of vervangende taak ten opzichte van het BRP. Met andere woorden in het Contacten Component vinden we personen die we niet uit het BRP halen. Dat kan zijn, omdat deze personen niet in het BRP staan, we nog niet weten wat het BSN van een persoon is of omdat we simpelweg geen rechten of toegang hebben tot het BRP vanuit het proces waar we mee bezig zijn.');
        $component->setLongDescription("Het Contacten Component bevat lijsten van contactpersonen, hiermee heeft het vanuit bron perspectief doorgaans een aanvullende of vervangende taak ten opzichte van het BRP. Met andere woorden in het Contacten Component vinden we personen die we niet uit het BRP halen. Dat kan zijn, omdat deze personen niet in het BRP staan, we nog niet weten wat het BSN van een persoon is of omdat we simpelweg geen rechten of toegang hebben tot het BRP vanuit het proces waar we mee bezig zijn.\n\n Daarnaast fungeert het Contacten Component als een Common Ground variant van de contactpersonenlijst, zoals we die kennen vanuit een e-mail applicatie of telefoon. Het is dus ook mogelijk om personen op te nemen in een contactenlijst. Hiermee worden contact en functionaliteiten voor gebruikers (in application form) gerealiseerd.\n\n Als laatste biedt het Contacten Component de mogelijkheid om gegevens van organisaties op te slaan. Het component ondersteunt bewust alleen de persoonsgegevens, maar kan in samenwerking met het CMR en ORC een Customer Relation Management systeem vormen, waarbij het ORC de mogelijkheid biedt om bijvoorbeeld leads in kaart te brengen. ");
        $component->setImage('images/content/Componenten/cc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/contactcatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/cc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206145398', 'img' => 'https://github.styleci.io/repos/206145398/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/contactcatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/contactcatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/contact-catalogus/contactcatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/contact-catalogus'],

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
            ['href' => 'https://artifacthub.io/packages/helm/landelijketabellencatalogus/landelijketabellencatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/landelijketabellencatalogus'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //BRP service
        $component = new Component();
        $component->setName('BRP Service');
        $component->setShortDescription("Het Basis Registratie Personen Component is een implementatie van de door Haal Centraal ontwikkelde API-specificatie in de vorm van een Common Ground container. Dat betekent dat het ten opzichte van die referentie een aantal extra opties kent (zoals extended en filteren van data).\n\n Dit Common Ground component kan op twee manieren worden ingezet. Om te beginnen kan het aan de achterkant worden voorzien van datafixtures in de vorm van een E xcel sheet. Op deze manier kan er een “specifieke” mock worden gecreëerd voor het testen van applicaties (al dan niet in combinatie met Digispoof). Het is echter ook mogelijke om het BRP Component in te zetten in samenhang met het StuF Component, in dat geval worden API-verzoeken op het BRP vertaald naar StuF berichten op GBA of GBAV aansluiting en levert het component daadwerkelijk een BRP koppeling.");
        $component->setLongDescription("Het Basis Registratie Personen Component is een implementatie van de door Haal Centraal ontwikkelde API-specificatie in de vorm van een Common Ground container. Dat betekent dat het ten opzichte van die referentie een aantal extra opties kent (zoals extended en filteren van data).\n\n Dit Common Ground component kan op twee manieren worden ingezet. Om te beginnen kan het aan de achterkant worden voorzien van datafixtures in de vorm van een E xcel sheet. Op deze manier kan er een “specifieke” mock worden gecreëerd voor het testen van applicaties (al dan niet in combinatie met Digispoof). Het is echter ook mogelijke om het BRP Component in te zetten in samenhang met het StuF Component, in dat geval worden API-verzoeken op het BRP vertaald naar StuF berichten op GBA of GBAV aansluiting en levert het component daadwerkelijk een BRP koppeling.");
        $component->setImage('images/content/Componenten/brp/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/brpservice');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/brp');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/204954539', 'img' => 'https://github.styleci.io/repos/204954539/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/brpservice/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/brpservice/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/brpservice/brpservice', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/brpservice'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Review component
        $component = new Component();
        $component->setName('Review Component');
        $component->setShortDescription("Het Review Component faciliteert reviews van resources, hoewel we hierbij in eerste instantie denken aan producten vanuit het PDC zou een resource in feite alles kunnen zijn.\n\n Onder een review verstaan we een gebruikerservaring, deze ervaring kan zowel worden aangeduid met een cijfer als een een textuele beschrijving. Additioneel biedt het component ondersteuning voor “likes” en het berekenen van totale gemiddelde review resultaten op resources.");
        $component->setLongDescription("Het Review Component faciliteert reviews van resources, hoewel we hierbij in eerste instantie denken aan producten vanuit het PDC zou een resource in feite alles kunnen zijn.\n\n Onder een review verstaan we een gebruikerservaring, deze ervaring kan zowel worden aangeduid met een cijfer als een een textuele beschrijving. Additioneel biedt het component ondersteuning voor “likes” en het berekenen van totale gemiddelde review resultaten op resources.");
        $component->setImage('images/content/Componenten/rc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/review-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/rc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/235730051', 'img' => 'https://github.styleci.io/repos/235730051/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/review-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/review-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/review-component/review-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/review-component'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Web Resource Catalogus
        $component = new Component();
        $component->setName('Web Resource Catalogus');
        $component->setShortDescription('Het WRC bevat de resources die nodig zijn voor het draaien van een applicatie, zoals sjablonen, routing, menu’s en afbeeldingen. Het heeft hierbij de doelstelling om te fungeren als een “headless CMS” ofwel een CMS als API die losstaat van enige vorm van weergave. Voor het bewerken van de CMS content leunt het WRC dan ook op het Dashboard (een implementatie van de Proto Applicatie), en het fungeert zelf als een bron voor een applicatie.');
        $component->setLongDescription("De Web Resource Catalogus (WRC) bevat de resources die nodig zijn voor het draaien van een applicatie zoals sjablonen, routing, menu’s en afbeeldingen. Het heeft hierbij de doelstelling om te fungeren als een “headless CMS” ofwel een CMS als API, die losstaat van enige vorm van weergave. Voor het bewerken van de CMS content leunt het WRC dan ook op het Dashboard (een implementatie van de Proto Applicatie), en het fungeert zelf als een bron voor een applicatie.\n\n Door het gescheiden houden van opslag en bewerking, is het mogelijk om vanuit één dashboard de inhoud van meerdere applicaties te beheren. Heel praktisch en levert ook meer overzicht op, zo zou een sjabloon kunnen worden gebruikt in verschillende applicaties en websites. Dit is bijvoorbeeld handig bij algemene informatie of FAQ’s.\n\n Een extra handigheid van het WRC is dat het meertaligheid op resources ondersteunt en dat maakt het mogelijk om content in meerdere talen aan te maken en te beheren. Het maakt tevens inzichtelijk welke content al wel en welke content nog niet vertaald is. Waarmee compliancy aan de WCAG norm voor tweetaligheid kan worden opgevolgd.\n\n Met betrekking tot vormgeving biedt het WRC twee belangrijke functionaliteiten aan applicaties. Om te beginnen kunnen templates worden “verlengd en uitgebreid”. Dat betekent bijvoorbeeld dat een applicatie gebruik zou kunnen maken van NL Design, maar hier via het WRC een eigen smaak aan toe kan voegen. Doordat het WRC kan delen tussen applicaties, is het hiermee voor een organisatie tevens mogelijk om één consistente huisstijl te voeren voor meerdere applicaties. Daarnaast biedt het WRC een mogelijkheid tot CDN, ofwel het verplaatsen van statische content van een applicatie naar een externe bron. Hiermee wordt het dataverkeer op een applicatie zelf lager en daarmee sneller. Het betekent ook dat op applicatie niveau, logica en statische content uit elkaar kunnen worden getrokken en fysiek op andere (gespecialiseerde) machines kunnen worden geplaatst.");
        $component->setImage('images/content/Componenten/wrc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/webresourcecatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/wrc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/206145646', 'img' => 'https://github.styleci.io/repos/206145646/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/webresourcecatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/webresourcecatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/webresourcecatalogus/webresourcecatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/webresourcecatalogus'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Commonground Dashboard
        $component = new Component();
        $component->setName('Common Ground Dashboard');
        $component->setShortDescription('Het Common Ground Dashboard biedt basale beheer- en behandelmogelijkheden op Common Ground componenten en voegt vooral veel waarde toe in ontwikkel-context, waarbij data in componenten moet worden aangepast of moet worden ingezien voor testdoeleinden. In combinatie met het EVC Component biedt het dashboard echter ook de mogelijkheid om Common Ground omgevingen in te richten en te beheren. Hierbij kan bijvoorbeeld worden gedacht aan het installeren en configureren van containers.');
        $component->setLongDescription('Het Common Ground Dashboard biedt basale beheer- en behandelmogelijkheden op Common Ground componenten en voegt vooral veel waarde toe in ontwikkel-context, waarbij data in componenten moet worden aangepast of moet worden ingezien voor testdoeleinden. In combinatie met het EVC Component biedt het dashboard echter ook de mogelijkheid om Common Ground omgevingen in te richten en te beheren. Hierbij kan bijvoorbeeld worden gedacht aan het installeren en configureren van containers.');
        $component->setImage('images/content/Componenten/dash/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/commonground-dashboard');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/231819815', 'img' => 'https://github.styleci.io/repos/231819815/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/commonground-dashboard/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/commonground-dashboard/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/commonground-dashboard/commonground-dashboard', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/commonground-dashboard'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Export Component
        $component = new Component();
        $component->setName('Export Component');
        $component->setShortDescription("Het export Component heeft als doel om data binnen Common Ground beschikbaar te maken als non-API data. Bijvoorbeeld als een Excel- of CSV- lijst.\n\n In samenhang met het Queue Component voor geautomatiseerde taken en het WRC voor sjablonen, kan dit bijvoorbeeld worden gebruikt voor het draaien en versturen van een dagelijkse rapportage.");
        $component->setLongDescription("Het export Component heeft als doel om data binnen Common Ground beschikbaar te maken als non-API data. Bijvoorbeeld als een Excel- of CSV- lijst.\n\n In samenhang met het Queue Component voor geautomatiseerde taken en het WRC voor sjablonen, kan dit bijvoorbeeld worden gebruikt voor het draaien en versturen van een dagelijkse rapportage.");
        $component->setImage('images/content/Componenten/export/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/export-component');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/ec');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/271184774', 'img' => 'https://github.styleci.io/repos/271184774/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/export-component/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/export-component/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/export-component/export-component', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/export-component'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Digispoof
        $component = new Component();
        $component->setName('Digispoof');
        $component->setShortDescription("Digispoof is een SAML applicatie voor het testen van DigiD (en op termijn AIDAS) inlogmethodes. De gedachte hierbij is dat Digispoof technisch uitwisselbaar is met DigiD (dus exact hetzelfde werkt met betrekking tot API’s), maar doordat het gebruik maakt van het BRP (in mock-vorm) geen echte burgergegevens ontsluit.\n\n Het geeft echter wel een BSN nummer terug dat bestaat in het mock BRP. Dat betekent dat ontwikkelaars de mogelijkheid hebben om hun applicatie te testen met DigiD en BPR toegang zonder deze daadwerkelijk te hoeven aanvragen (waarvoor zelfs in demo-versies een PKI overheidscertificaat nodig is). Het is dan ook puur een development tool.");
        $component->setLongDescription("Digispoof is een SAML applicatie voor het testen van DigiD (en op termijn AIDAS) inlogmethodes. De gedachte hierbij is dat Digispoof technisch uitwisselbaar is met DigiD (dus exact hetzelfde werkt met betrekking tot API’s), maar doordat het gebruik maakt van het BRP (in mock-vorm) geen echte burgergegevens ontsluit.\n\n Het geeft echter wel een BSN nummer terug dat bestaat in het mock BRP. Dat betekent dat ontwikkelaars de mogelijkheid hebben om hun applicatie te testen met DigiD en BPR toegang zonder deze daadwerkelijk te hoeven aanvragen (waarvoor zelfs in demo-versies een PKI overheidscertificaat nodig is). Het is dan ook puur een development tool.");
        $component->setImage('images/content/Componenten/ds/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/digispoof-interface');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/247883561', 'img' => 'https://github.styleci.io/repos/247883561/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/digispoof-interface/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/digispoof-interface/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/digispoof-interface/digispoof-interface', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/digispoof-interface'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Producten en Diensten Catalogus
        $component = new Component();
        $component->setName('Producten Diensten Catalogus');
        $component->setShortDescription('De Producten en Diensten Catalogus heeft als doel het geheel aan af te nemen producten en/of diensten in kaart te brengen. Hierbij wordt uitgegaan van afname door klanten vanuit een organisatie, maar er is geen technische beperking om het ook als inkoopsysteem te gebruiken. \n\n Naast producten en diensten kent het component ook ondersteuning voor het maken van productgroepen, beschrijvende teksten, afbeeldingen, belastingen en andere zaken die specifiek gerelateerd zijn aan webshop concepten. Hierbij wordt (vanuit internationale normen) een onderscheid gemaakt tussen het product en het aanbieden van het product (offer) waarbij het mogelijk is om een aanbod te koppelen aan geldigheid of doelgroepen. Met andere woorden het is mogelijk om een product op bepaalde momenten goedkoper of juist duurder aan te bieden (trouwen in het weekend) of goedkoper aan te bieden voor bepaalde doelgroepen (korting op evenementen vergunningen voor buurtcomités).');
        $component->setLongDescription('De Producten en Diensten Catalogus heeft als doel het geheel aan af te nemen producten en/of diensten in kaart te brengen. Hierbij wordt uitgegaan van afname door klanten vanuit een organisatie, maar er is geen technische beperking om het ook als inkoopsysteem te gebruiken. \n\n Naast producten en diensten kent het component ook ondersteuning voor het maken van productgroepen, beschrijvende teksten, afbeeldingen, belastingen en andere zaken die specifiek gerelateerd zijn aan webshop concepten. Hierbij wordt (vanuit internationale normen) een onderscheid gemaakt tussen het product en het aanbieden van het product (offer) waarbij het mogelijk is om een aanbod te koppelen aan geldigheid of doelgroepen. Met andere woorden het is mogelijk om een product op bepaalde momenten goedkoper of juist duurder aan te bieden (trouwen in het weekend) of goedkoper aan te bieden voor bepaalde doelgroepen (korting op evenementen vergunningen voor buurtcomités).');
        $component->setImage('images/content/Componenten/pdc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/productenendienstencatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/pdc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/210809809', 'img' => 'https://github.styleci.io/repos/210809809/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/productenendienstencatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/productenendienstencatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/productenendienstencatalogus/productenendienstencatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/productenendienstencatalogus'],
        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Proto Applicatie
        $component = new Component();
        $component->setName('Proto Applicatie NL Design Systeem');
        $component->setShortDescription("De Proto Applicatie levert een vooringerichte versie van het Symfony PHP framework, waarbij de NL Design System componenten zijn voorzien van template widgets. Oftewel het is mogelijk om vanuit je PHP/HTML templates direct gebruik te maken van NL Design Elementen. De business logica van de Proto Applicatie wordt geleverd door de generieke Common Ground Bundle.\n\n Framework \n De Proto Applicatie rust op het PHP Symfony Framework, daarbij importeert het de Common Ground Bundle, die het component als logica gebruikt (voor o.a. de VSBE) en NL Design System voor grafische vormgeving. Er is dus geen sprake van specifiek geschreven code, de applicatie wordt geheel vormgegeven door slim gebruik van dependency management en een klein beetje configuratie met betrekking tot hoe de applicatie zich authenticeert op Common Ground / NLX.\n\n Het dient dus als een voorbeeld voor de kracht van framework development en dependency management als methodiek, om een volledige applicatie puur te baseren op hergebruik van code en processen. NL Design System Tevens is er een widget library beschikbaar voor de Processen Catalogus, dat wil versimpeld zeggen dat er vooringerichte widgets zijn die zijn gekoppeld aan een specifieke (micro) service. Hiermee worden de grafische elementen uit NL Design System geoperationaliseerd.\n\n Voorbeelden hiervan zijn formulier-elementen zoals: ‘adres opgeven’, die gebruik maakt van de Adressen Service, om aan de hand van een huisnummer en postcode combinatie tot een BAG id te komen. En ‘bedrijf opgeven’, die aan de hand van een bedrijfsnaam een KVK-nummer suggereert. De Proto Applicatie geeft dus een invulling aan het verbinden van de door NL Design ontworpen UI en de door Common Ground Bundle geleverde componenten en API’s. \n\n Very Small Business Engine\n Onderdeel van de Proto Applicatie is de very small business engine, deze is oorspronkelijk bedacht voor het uitvoeren van simpele processen, maar heeft zich tegenwoordig gespecialiseerd in het ondersteunen van klantreizen. In de Common Ground zin wil dit dus zeggen dat het het Procestypen uit het PTC voorziet van de grafische elementen uit NL Design System (met indien nodig microservices uit het PC) en de resultaten van de klantreis als verzoek opslaat in het VRC. Met andere woorden de Proto Applicatie ondersteunt ‘out of the box’ klantreizen zoals gedefinieerd binnen Common Ground containers. Implementaties Er zijn momenteel een aantal voorbeeld implementaties van de Proto Applicatie beschikbaar vanuit de Huwelijksplanner, AdreswijzigingNL, Begraafplaatsen Registratie, COVID-19 formulieren, ROC Flevoland en Processen.");
        $component->setLongDescription("De Proto Applicatie levert een vooringerichte versie van het Symfony PHP framework, waarbij de NL Design System componenten zijn voorzien van template widgets. Oftewel het is mogelijk om vanuit je PHP/HTML templates direct gebruik te maken van NL Design Elementen. De business logica van de Proto Applicatie wordt geleverd door de generieke Common Ground Bundle.\n\n Framework \n De Proto Applicatie rust op het PHP Symfony Framework, daarbij importeert het de Common Ground Bundle, die het component als logica gebruikt (voor o.a. de VSBE) en NL Design System voor grafische vormgeving. Er is dus geen sprake van specifiek geschreven code, de applicatie wordt geheel vormgegeven door slim gebruik van dependency management en een klein beetje configuratie met betrekking tot hoe de applicatie zich authenticeert op Common Ground / NLX.\n\n Het dient dus als een voorbeeld voor de kracht van framework development en dependency management als methodiek, om een volledige applicatie puur te baseren op hergebruik van code en processen.\n\n NL Design System \n Tevens is er een widget library beschikbaar voor de Processen Catalogus, dat wil versimpeld zeggen dat er vooringerichte widgets zijn die zijn gekoppeld aan een specifieke (micro) service. Hiermee worden de grafische elementen uit NL Design System geoperationaliseerd.\n\n Voorbeelden hiervan zijn formulier-elementen zoals: ‘adres opgeven’, die gebruik maakt van de Adressen Service, om aan de hand van een huisnummer en postcode combinatie tot een BAG id te komen. En ‘bedrijf opgeven’, die aan de hand van een bedrijfsnaam een KVK-nummer suggereert. De Proto Applicatie geeft dus een invulling aan het verbinden van de door NL Design ontworpen UI en de door Common Ground Bundle geleverde componenten en API’s.\n\n Very Small Business Engine\n Onderdeel van de Proto Applicatie is de very small business engine, deze is oorspronkelijk bedacht voor het uitvoeren van simpele processen, maar heeft zich tegenwoordig gespecialiseerd in het ondersteunen van klantreizen. In de Common Ground zin wil dit dus zeggen dat het het Procestypen uit het PTC voorziet van de grafische elementen uit NL Design System (met indien nodig microservices uit het PC) en de resultaten van de klantreis als verzoek opslaat in het VRC. Met andere woorden de Proto Applicatie ondersteunt ‘out of the box’ klantreizen zoals gedefinieerd binnen Common Ground containers.\n\n Implementaties \n Er zijn momenteel een aantal voorbeeld implementaties van de Proto Applicatie beschikbaar vanuit de Huwelijksplanner, AdreswijzigingNL, Begraafplaatsen Registratie, COVID-19 formulieren, ROC Flevoland en Processen.");
        $component->setImage('images/content/Componenten/proto/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/Proto-application-NLDesign');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/250502590', 'img' => 'https://github.styleci.io/repos/250502590/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/Proto-application-NLDesign/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/Proto-application-NLDesign/workflows/Docker%20Image%20CI/badge.svg?branch=master'],

        ]);

        $this->em->persist($component);
        $this->em->flush();

        //Proces type catalogus
        $component = new Component();
        $component->setName('Proces Type Catalogus');
        $component->setShortDescription('De Proces Type Catalogus beschrijft de gebruikersreis waarmee een verzoek tot stand komt. Of om het simpel te zeggen het neemt een verzoektype en deelt deze op in stappen en secties. Hierbij moet het eindresultaat van een proces een geldig verzoek zijn. Het is dus mogelijk om properties vanuit een verzoek niet uit te vragen (ofwel niet op te nemen in een stap of sectie), mits deze property vanuit het verzoek type niet verplicht is.');
        $component->setlongDescription("De Proces Type Catalogus beschrijft de gebruikersreis waarmee een verzoek tot stand komt. Of om het simpel te zeggen het neemt een verzoektype en deelt deze op in stappen en secties. Hierbij moet het eindresultaat van een proces een geldig verzoek zijn. Het is dus mogelijk om properties vanuit een verzoek niet uit te vragen (ofwel niet op te nemen in een stap of sectie), mits deze property vanuit het verzoek type niet verplicht is.\n\n Een verzoektype kan in principe door meerdere procestypen worden gebruikt, sterker nog de wens hiertoe vormt de basis voor het uit elkaar trekken van deze twee componenten. Een denkbeeldig voorbeeld hiervan zou zijn, als een gemeente aanvullende vragen heeft bij een verhuizing vanuit het buitenland. Deze aanvullende vragen zouden dan als niet verplicht kunnen worden opgenomen in het verzoektype. Vervolgens zouden het twee processen kunnen zijn: één voor verhuizingen binnen Nederland, waarbij de aanvullende vragen niet zijn opgenomen en één voor verhuizing van buiten Nederland waarbij deze vragen wel worden gesteld.\n\n Het is bijvoorbeeld ook goed denkbaar dat verschillende kanalen gebruik maken van verschillende processen die tot hetzelfde verzoek leiden (bijvoorbeeld een webformulier en chatbot). In deze context is het wel belangrijk om te constateren dat de Proces Type Catalogus een gebruikers flow beschrijft voor het tot stand komen van een geldig verzoek, maar dat de Proces Type Catalogus op zich niet dwingend is. Sterker nog het VTC en VRC ondersteunen het opstarten van (bijvoorbeeld Camunda) BPMN processen bij status wijzigingen, zoals het opstarten van een verzoek. Dat betekent dat een BPMN-engine ook in staat is om aan de hand van een verzoektype een verzoek te maken en te valideren, mét of zonder menselijke tussenkomst.");
        $component->setImage('images/content/Componenten/vtc/1280w/Geel_Vlak.png');
        $component->setRepository('https://github.com/ConductionNL/procestypecatalogus');
        $component->setDocumentation('https://dev.zuid-drecht.nl/api/v1/ptc');
        $component->setPlatforms(['zuid-drecht']);
        $component->setBadges([
            ['href' => 'https://github.styleci.io/repos/198549944', 'img' => 'https://github.styleci.io/repos/198549944/shield?branch=master'],
            ['href' => 'https://github.com/ConductionNL/procestypecatalogus/actions?query=workflow%3ADocker+Image+CI', 'img' => 'https://github.com/ConductionNL/procestypecatalogus/workflows/Docker%20Image%20CI/badge.svg?branch=master'],
            ['href' => 'https://artifacthub.io/packages/helm/procestypecatalogus/procestypecatalogus', 'img' => 'https://img.shields.io/endpoint?url=https://artifacthub.io/badge/repository/procestypecatalogus'],
        ]);
    }
}
