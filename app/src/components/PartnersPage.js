import React, {Component} from 'react';
import {getCookie, setCookie} from "./utility/CookieHandler";
import CountUp from 'react-countup';
import ReactTooltip from 'react-tooltip';
import CookieConsent from "react-cookie-consent";

import {
  BrowserRouter as Router, Link, Route, Switch,
} from "react-router-dom";

// Import the context
import ConfigContext from "./Context/Config";
import ContactForm from "./widgets/ContactForm";

export default class ProjectenPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
  }

  render() {

    return (
      <>
        <div className="header-content" style={{backgroundColor: '#4376FC', color: 'white'}}>
          <div className="container">
            <div className="row">
              <div className="col-sm-6">
                <div className="header-text" style={{paddingTop: '0'}}>
                  <div className="post-heading-left-white header-heading">
                    <h1 style={{color: 'white'}}>Open source</h1>
                  </div>
                  <p style={{marginTop: '-35px'}}>Voor ons betekent open source: het maken van producten die voor
                    anderen herbruikbaar zijn, dat gaat verder dan code delen en licentie. Open source betekent
                    hergebruik van je product op de eerste plaats zetten. Dat klinkt natuurlijk logisch, maar in de
                    praktijk zien we dat open source te vaak neerkomt op het “over de schutting gooien” van een reeds
                    gemaakt (en vaak super specifiek) project.</p>
                  <br/>
                  <p>Om hier voor onze projecten invulling aan te geven, hebben we voor onszelf de volgende richtlijnen opgesteld.</p>
                  <br/>
                  <p>enieuwd hoe open source een rol kan spelen binnen jouw organisatie?</p>
                  <br/>
                  <Link to="/contact"
                     style={{
                       fontWeight: 'bold',
                       textTransform: 'uppercase',
                       fontSize: '15px',
                       color: 'white',
                       padding: '7.5px 15px 7.5px 15px',
                       borderRadius: '25px',
                       border: '2.5px solid white'
                     }}>
                    Ga naar contactpagina</Link>
                </div>
              </div>

              <div className="col-sm-6">
                <div className="header-img">
                  <figure className="animation animated animation-fade-in-right"
                          data-animation="animation-fade-in-right">
                    <img className="img-responsive" src="/images/content/Opensource/1280w/Blauw_Vlak.png"/>
                  </figure>
                </div>
                <br/>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040 bg-grey">
          <div className="container">
            <div className="row">
              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="verhuizen" className="color-bright-blue">Bouwen voor de community</h2>

                    <p>Ga op zoek naar welke software er nog mist en bouw die. Niet voor onszelf,
                      maar voor de gemeenschap, waarbij wijzelf één van de gebruikers zijn.
                      Met andere woorden we maken geen organisatie specifieke software die je in het
                      ecosysteem probeert aan te sluiten, maar we bouwen iets voor het ecosysteem dat
                      wijzelf ook kunnen gebruiken. Hiermee voorkom je latere problemen rondom adaptatie.
                      Daarnaast is open source zonder afname een holle term.
                    </p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Product/1280w/Geel_Vlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="overlijden" className="color-bright-blue">Citizen Coders </h2>

                    <p>Wij geloven in de democratiserende kracht van software, door (overheids)processen
                      open en inzichtelijk te maken kunnen individuele burgers hier controle op uitvoeren én
                      verbeteringen op voorstellen. Dat betekent dat we prioriteit moeten geven aan het “leesbaar”
                      maken van code door kleine codebases en goede documentatie. Zodat we bijdragen aan het
                      zuiverende karakter van open source, fouten sneller worden gevonden en lekken eerder worden
                      gedicht.
                    </p>
                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/CitizenCoder/1280w/Lichtblauw_vlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040 bg-grey" id="stages">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="stage" className="color-bright-blue">Internationaal boven lokaal</h2>
                    <p>
                      Het Nederlandse ICT Ecosysteem staat bol van lokale (vaak overheids-)standaarden,
                      dat levert legio problemen op in koppelvlakken. Daarom is ons uitgangspunt:
                      bouwen naar europese/internationale standaarden, zodat onze software overal
                      gebruikt en aangesloten kan worden.
                    </p>
                  </div>
                </div>

              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Internationaal/1280w/Geel_Vlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="overlijden" className="color-bright-blue">Engels boven Nederlands</h2>
                    <p>
                      Wij kiezen voor Engels als het gaat om coderen en documenteren.
                      Waarom? Omdat veel code en standaarden van nature al in het engels zijn.
                      Ook omdat iedereen buiten Nederland dan onze code en documentatie kan lezen,
                      verbeteren en gebruiken.
                    </p>

                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Samen/1280w/Grijsvlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040 bg-grey">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="overlijden" className="color-bright-blue">Componenten in plaats van Silo’s</h2>
                    <p>
                      Om te kunnen voldoen aan inzichtelijke en onderhoudbare code, moeten we projecten
                      en codebases klein en overzichtelijk houden. Waarbij we afscheid nemen van zogenaamde
                      silo applicaties ten gunste van microservices architectuur. Kleine stukken code die
                      gemeenschappelijk een ecosysteem aan functionaliteit leveren, waarbij meerdere
                      applicaties gebruik kunnen maken van dezelfde code door deze als API aan te roepen.
                      Een goed voorbeeld hiervan is een DigiD koppeling, het elke keer opnieuw bouwen
                      hiervan in ieder applicatie is zonde van het geld en de ontwikkelingscapaciteit.
                    </p>
                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Duurzaam/1280w/Blauw_Vlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040 ">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="overlijden" className="color-bright-blue">Uitbreidbaar ecosysteem</h2>
                    <p>
                      Voor het creëren van een sterk (Nederlands)ecosysteem is het cruciaal dat
                      softwarepakketten makkelijk uit te breiden zijn door derden. Hier is op
                      internationaal niveau binnen open source communities al veel ervaring mee
                      opgedaan en dat heeft bijna overal tot dezelfde oplossing geleid: frameworks
                      en package management. Bijna alle grote open source applicatie projecten
                      (Wordpress, Joomla, Drupal, Wikipedia, Symfony, Larvel, Zend, Django, Rails)
                      zijn opgebouwd als een uitbreidbaar framework. Daarom maken wij voor het bouwen
                      van applicaties gebruik van een framework en brengen wij eventuele afwijkingen onder
                      in een package. Zo houden we een applicatie uitbreidbaar voor derden en kunnen andere
                      ook weer gebruik maken van onze packages.
                    </p>
                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Ecosysteem/1280w/Grijsvlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040 bg-grey">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="overlijden" className="color-bright-blue">Containers in plaats van Servers</h2>
                    <p>
                      Onze code is geschikt om op virtuele machines, in de vorm van containers,
                      te draaien. Dat maakt de software onafhankelijk van hardware en stelt anderen
                      is staat een breed scala aan componenten te kunnen draaien, zonder een heel
                      serverpark in te richten. Key voor ons is: Het maken van ‘geschikte’ code en het
                      aanleveren van deze containers, zodat de code plug and play zonder installatie te draaien is.
                    </p>
                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Componenten/rest/1280w/Geel_Vlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container8040 ">
          <div className="container">
            <div className="row">


              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 id="overlijden" className="color-bright-blue">Beheer vooraf goed organiseren</h2>
                    <p>
                      Open source code die niet wordt onderhouden is doodzonde. Om te voorkomen
                      dat projecten en code na oplevering een stille dood sterven, is het heel belangrijk
                      om op voorhand afspraken te maken over het onderhoud. Een bijzonder aandachtspunt
                      hierbij is dat gebrekkige documentatie of slechte code niet het probleem mag worden
                      van de onderhoudende partij. Daarom zou een aantal jaar onderhoud onderdeel moeten
                      zijn van development opdrachten.
                    </p>
                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right">
                  <img src="/images/content/Beheer/1280w/Blauw_Vlak.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <ContactForm />
      </>
    );
  }

}
