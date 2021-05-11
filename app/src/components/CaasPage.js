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
import {LangSwitch} from "./utility/LangSwitch";
import {metadata} from "./utility/Metadata";

export default class ProjectenPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
    metadata('Conduction | Common Ground as a Service | CAAS','Wilt u deelnemen aan Common Ground, maar heeft u nog geen ervaring? Dan is Common Ground as a service iets voor u! Benieuwd naar de voordelen? Neem contact op')
    LangSwitch('nl');
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
                    <h1 style={{color: 'white'}}>CAAS</h1>
                    <h4 style={{color: 'white', marginTop: '20px'}}>Product: Commonground as a Service</h4>
                  </div>
                  <br/>
                  <p style={{marginTop: '-45px'}}>Uw gemeente wil graag aan de slag met Common Ground, of wil een Common
                    Ground applicatie gebruiken. Maar u heeft nog geen ervaring met kubernetes en of het draaien van
                    Common Ground applicaties? Geen probleem, we ontzorgen u van A tot Z en verzorgen zowel het beheer
                    van uw omgevingen, certificaten als het installeren en onderhouden van componenten en applicaties.
                    Zo bent u snel online zonder de zorgen. Wilt u later de omgeving in eigen beheer? Geen probleem,
                    wij dragen de omgeving graag aan u over.</p>
                  <p style={{marginBottom: '15px'}}>Wil je weten of de CAAS iets voor jouw gemeente is?</p>
                  <Link to="/contact" className="custom-button">
                    Maak hier een vrijblijvende afspraak</Link>
                  <br/>
                  <p style={{marginTop: '10px'}}>In de onderstaande punten gaan we dieper in op wat de
                    CAAS is en waarom het u ontzorgt.</p>
                </div>
              </div>
              <div className="col-sm-6">
                <div className="header-img">
                  <figure className="animation animated animation-fade-in-right"
                          data-animation="animation-fade-in-right">
                    <img src="/images/grijs_vlak_5.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Uw eigen private cloud</h2>
                    <p>Volgens het Haven principe, richten we voor u een eigen private cloud in. In deze cloud staat
                      alles wat u nodig heeft. Dit is de fundering, ook wel laag 0 genoemd, waar we de componenten die u
                      nodig heeft voor uw Common Ground applicatie op installeren. We ontzorgen u met de implementatie,
                      ondersteuning en het onderhoud. Op deze manier heeft u de zekerheid van een support overeenkomst
                      waarmee u het beheer van uw omgeving regelt.</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/content/Componenten/evc/1280w/Geel_Vlak.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Haven en de CAAS</h2>
                    <p>De CAAS is Haven compliant en flexibel. Dit betekent dat de omgeving voldoet aan de Haven eisen,
                      maar op maat kan worden ingericht naar de eisen van uw organisatie. Dit stelt u in staat om te
                      kunnen kiezen de CAAS bijvoorbeeld on premise op Azure te draaien of in een datacenter op
                      Openstack. Door de Haven compliancy te volgen voorkomt u ook om “Locked-in” te raken. Haven
                      compliant stacks zouden uitwisselbaar moeten zijn.</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/content/Ecosysteem/1280w/Blauw_Vlak.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Aangepast op uw behoeften</h2>
                    <p>De wensen met betrekking tot de infrastructuur voor uw omgeving, worden in grote mate bepaald
                      door de wensen die u heeft omtrent het aantal componenten en de intensiteit van het gebruik.
                      Daarbij moet een productieomgeving natuurlijk soepeler draaien dan een ontwikkelomgeving.</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/content/Componenten/wrc/1280w/Grijs_vlak.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Één aanspreekpunt</h2>
                    <p>Vaak horen wij: “Open source? Maar wie bel ik voor support?” Doordat de CAAS in zijn volledigheid
                      wordt ondersteund betekent het dat u&nbsp; één aanspreekpunt heeft voor alles wat op de CAAS
                      draait. Dit betekent dat er geen onduidelijkheid is bij wie de verantwoordelijkheid ligt als er
                      issues optreden. Het komt nogal eens voor dat er onduidelijkheid ontstaat tussen een software
                      leverancier en een infra leverancier, dit willen wij voorkomen door u zoveel mogelijk te ontzorgen
                      met één duidelijk aanspreekpunt.</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/geel_vak_3.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Beheer goed geregeld!</h2>
                    <p>Doordat er één aanspreekpunt is en wij support leveren voor alle vijf de Common Ground lagen en
                      de infrastructuur, valt alles binnen één SLA. Dit zorgt voor overzicht en u weet wat u mag
                      verwachten over zowel de infrastructuur als de software die erop draait.</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/content/CitizenCoder/1280w/Lichtblauw_vlak.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Welke applicaties kunt u draaien op de CAAS?</h2>
                    <p>In principe kunt u alle Common Ground applicaties draaien op de CAAS zolang zij voldoen aan de
                      standaarden uit Common Ground. Vaak zal hier overlap in componenten zijn, denk hierbij aan een
                      component wat gebruikt wordt voor&nbsp; de “Verhuis-service”, maar ook gebruikt wordt voor de
                      huwelijksplanner. Dit is een voordeel want we hanteren daar waar kan het principe van hergebruik.
                      U hoeft dan de overlappende componenten niet 2 keer te installeren</p>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/content/Componenten/cmc/1280w/Blauw_vlak.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Kan ik ook andere dingen draaien op de CAAS die
                      niet CG
                      zijn?</h2>
                    <p>In het kort: <em>“Ja dat kan.”</em>&nbsp; Wel zal u rekening moeten houden met een stukje
                      maatwerk om het passend te maken. We zullen samen met u een intake doen om te kijken hoe en ’óf de
                      “non” Common Ground applicatie past binnen de CAAS. Mogelijk zijn hier dan ook andere beheer
                      afspraken voor nodig.</p>
                    <Link to="/contact" className="custom-button">
                      Plan een intake</Link>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img src="/images/content/Componenten/tc/1280w/Geel_Vlak.png"/>
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
                    <h2 id="verhuizen" className="color-bright-blue">Cyso X Conduction</h2>
                    <p>Wij bieden de CAAS aan samen met Cyso, zij hebben al ruim 20 jaar ervaring met het
                      hosten van omgevingen. Dat is waar hun kracht ligt, onze kracht zit m veel meer
                      in het ontwikkelen van (open source) software en het bedenken van slimme architecturele
                      oplossingen, die digitale processen /ecosystemen kunnen versimpelen en verbeteren. Samen
                      kunnen wij een compleet product aanbieden. Samen daar houden wij van 🙂</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <ContactForm/>
      </>
    );
  }

}
