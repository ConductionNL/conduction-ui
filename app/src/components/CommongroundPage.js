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

export default class CommongroundPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
    LangSwitch('nl');
    metadata('Conduction | Common Ground | Open Source Componenten & Applicaties','Wij ontwikkelen Open Source Componenten & Applicaties volgens de Common Ground principes. Nieuwsgierig? Ontdek dan onze uitgebreide componentencatalogus Wij ontwikkelen Open Source Componenten & Applicaties volgens de Common Ground principes. Nieuwsgierig? Ontdek dan onze uitgebreide componentencatalogus');
  }

  render() {

    return (
      <>
        <div className="wrap-container">
          <div className="container">
            <div className="row">
              <div className="col-sm-6 col-sm-push-6">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img className="img-responsive" src="/images/Commonground_afb1.jpg"/>
                </figure>
              </div>
              <div className="col-sm-6 col-sm-pull-6">
                <div className="post-heading-left-orange">
                  <br/>
                  <br/>
                  <h2 className="color-vivid-orange">Common Ground</h2>
                </div>
                <div className="post-heading-left">
                  <p>Gemeenten hebben een nieuwe, moderne, gezamenlijke informatievoorziening nodig voor het
                    uitwisselen
                    van
                    gegevens.
                    Want het huidige stelsel voor gegevensuitwisseling maakt het lastig om snel en flexibel te
                    vernieuwen,
                    te voldoen aan privacywetgeving en efficiënt om te gaan met data.
                    Dat staat de verbetering van de gemeentelijke dienstverlening in de weg.
                    Dus tijd voor een nieuwe beweging:
                    Common Ground werd geboren, waarbij hervorming van de huidige gemeentelijke
                    informatievoorziening,
                    deelbaarheid, data bij de bron en vooral de burger centraal staat.</p>
                  <br/>
                  <p>Meer weten wat Conduction voor jouw gemeente kan betekenen? </p>
                  <br/>
                  <Link to="/contact"
                        className="custom-button color-vivid-orange">Maak hier een afspraak</Link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container conduction-orange">
          <div className="container">
            <div className="row">
              <div className="col-sm-6 col-sm-push-6">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img className="img-responsive" src="/images/Commonground_afb2.jpg"/>
                </figure>

              </div>

              <div className="col-sm-6 col-sm-pull-6">

                <div style={{color: 'white'}} className="margin-bottom40 post-heading-left-white">
                  <h2 style={{color: 'white', marginTop: '52px'}}>Conduction
                    <i className="fas fa-heart"></i> Common Ground
                  </h2>
                </div>
                <div style={{color: 'white'}} className="margin-bottom40 post-heading-left">
                  <p>Wij geloven in online gemeenschappen. Wij geloven in delen, duurzaamheid en transparantie.
                    Vanuit deze gedachte zijn we ook toegetreden tot het Common Ground initiatief van de Nederlandse
                    Gemeenten.
                    Binnen dit initiatief staat samenwerking en publiek eigenaarschap centraal. Sinds 3 Juli 2019
                    zijn
                    wij
                    ook toegetreden tot het groeipact Common Ground.
                    Met het ondertekenen van dit convenant proberen wij een actieve bijdrage te leveren aan het
                    succes
                    van
                    Common Ground.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div style={{paddingTop: '40px'}} className="wrap-container conduction-grey">
          <div className="container">
            <div className="row">
              <div className=" col-sm-12 col-md-6 col-md-push-6">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img className="img-responsive" src="/images/Commonground_afb3.jpg"/>
                </figure>

              </div>

              <div className="col-sm-12 col-md-6 col-md-pull-6">

                <div className="post-heading-left">

                  <h2>Onze componenten en successen</h2>


                  <p>Het Afgelopen jaar is Conduction, in partnerschap met overheidsorganisaties, als ontwikkelpartij
                    bezig geweest met het ontwikkelen van componenten en applicaties voor Common Ground. De
                    huwelijksplanner samen met Utrecht en ‘verhuizen’ samen met ‘s Hertogenbosch, Eindhoven en de
                    Solviteers, zijn onze eerste projecten en daar zijn wij reuze trots op. Alle componenten en
                    applicaties zijn open source beschikbaar en deelbaar.
                    <br/>
                    <br/>
                    <br/>
                    <Link to="/componenten"
                       className="custom-button color-bright-blue">
                      Componenten overzicht</Link>
                    <br/>
                    <br/>
                    <br/>
                    Benieuwd naar ondersteuning op een component
                    of het ontwikkelen van uw eigen component? Dit is wat wij voor u kunnen betekenen:</p>
                </div>

              </div>

            </div>

            <div className="row">
              <div className="col-sm-12 col-md-6 col-md-push-6">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img className="img-responsive" src="/images/Commonground_afb3.jpg" style={{visibility: 'hidden'}}/>
                </figure>
              </div>
              <div className="col-sm-12  col-md-6 col-md-pull-6">
                <div className="post-heading-left">
                  <h4>Common Ground as a service</h4>
                  <p>Uw gemeente wil graag aan de slag met Common Ground, of wil een Common Ground applicatie
                    gebruiken.
                    Maar u heeft nog geen ervaring met kubernetes en of het draaien van Common Ground applicaties?
                    Geen probleem, we ontzorgen u van A tot Z en verzorgen zowel het beheer van uw omgevingen,
                    certificaten als het installeren en onderhouden van componenten als applicaties.
                    Zo bent u snel online zonder de zorgen. Wilt u later de omgeving in eigen beheer?
                    Geen probleem, wij dragen de omgeving graag aan u over. Zo heeft u een snelle en risicoloze
                    manier
                    om als organisatie te experimenteren met de kracht van Common Ground.</p>
                </div>
                <br/>
                <Link to="/caas"
                   className="custom-button color-bright-blue">
                  Lees meer</Link>
              </div>
            </div>

            <div className="row" style={{marginTop: '40px'}}>
              <div className="col-sm-6 col-sm-push-6">
                <a href="images/Commonground_afb4.jpg">
                  <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                          data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                    <img className="img-responsive img-fluid" src="/images/Commonground_afb4.jpg"
                         style={{marginTop: '-130px', paddingBottom: '30px'}}/>
                  </figure>
                </a>
              </div>

              <div className="col-sm-6 col-sm-pull-6">

                <div className="post-heading-left">

                  <h4>Beheer en ondersteuning</h4>


                  <p>Wilt u een open source component of applicatie gebruiken van Conduction, maar wilt u wel
                    graag de
                    zekerheid van ondersteuning en een helpdesk?
                    Dat kan, wij bieden zowel abonnementen als strippenkaarten voor praktische en technische
                    ondersteuning.
                    Daarnaast kunnen wij op verzoek ook trainingen faciliteren. Zo combineert u de vrijheid
                    van open
                    source met de zekerheid van een contractuele beschikbaarheidsafspraak (SLA).</p>
                </div>
                <br/>

                <div className="post-heading-left">
                  <h4>Advies</h4>
                  <p>Bij de ontwikkelingen van onze componenten, applicaties en diensten heeft Conduction
                    veel
                    ervaring
                    opgedaan met het ontwikkelen en werken volgens het Common Ground principe.
                    Deze ervaring delen wij uiteraard graag in de vorm van documentatie en tutorials, maar
                    is er
                    behoefte aan meer praktische, inhoudelijke of langdurige ondersteuning,
                    dan behoort dat zeker ook tot de mogelijkheden!.</p>
                  <br/>
                  <p>Een afspraak voor een vrijblijvend gesprek is altijd mogelijk.</p>
                  <br/>
                  <Link to="/contact"
                        className="custom-button color-bright-blue">Plan een afspraak</Link>
                </div>
                <br/>
                <div className="post-heading-left">

                  <h4>Ontwikkeling</h4>

                  <p>De afgelopen tijd heeft conduction geïnvesteerd in een proto component en proto
                    applicatie.
                    Die
                    gebruikt kunnen worden om snel Common Ground development te faciliteren.
                    Deze zijn uiteraard open source te gebruiken en kunt u hier vinden. Heeft u echter
                    behoefte
                    aan
                    ondersteuning of uitvoering bij ontwikkeling dan leveren wij dat natuurlijk graag.
                    Het ontwikkelen van Common Ground componenten en applicaties is onze kernactiviteit
                    en
                    we
                    zijn
                    altijd benieuwd hoe we u kunnen helpen uw open source droom te realiseren. </p>
                </div>
                <br/>
              </div>
            </div>

            <div className="row">

              <div className="col-sm-6 col-sm-push-6">
                <figure className="animation col-img40 margin-bottom40 animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <img className="img-responsive" src="/images/Commonground_afb5.jpg" style={{marginTop: '-230px'}}/>
                </figure>

              </div>

              <div className="col-sm-6 col-sm-pull-6">
                <div className="post-heading-left">
                  <h4>Community</h4>
                  <p>Eenmaal ontwikkelde componenten moeten ook worden onderhouden en doorontwikkeld, op verzoek kan
                    Conduction hierbij ondersteunen. Dit is een maatwerk afspraak naar behoefte, waarbij u bijvoorbeeld
                    kunt denken aan (kleine) updates van code, veiligheidsupdates of zelfs het dragen van een
                    gebruikersgroep.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="wrap-container conduction-white">
          <div className="container">
            <div className=" post-heading-left" style={{paddingTop: '20px'}}>
              <div className="row">
                <div className="col-md-6">
                  <div className="post-heading-left">
                    <h2 className="color-bright-blue">Join!</h2>
                  </div>
                  <div className="ml-5">
                    <p>Common Ground is voor en van iedereen.
                      Wilt u ook bijdragen aan het succes van Common Ground, bel, mail of stuur ons een
                      berichtje
                      via de chat, ook voor vragen uiteraard.
                      Wij gaan graag samen met u aan de slag!
                    </p>
                    <br/>
                    <br/>
                    <Link to="/contact"
                          className="custom-button color-bright-blue">
                      Contact</Link>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

        <ContactForm/>
      </>
    )
      ;
  }

}
