import React, {Component} from 'react';
import {getCookie, setCookie} from "./utility/CookieHandler";
import CountUp from 'react-countup';
import ReactTooltip from 'react-tooltip';
import CookieConsent from "react-cookie-consent";
import {LangSwitch} from "./utility/LangSwitch";

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

    LangSwitch('nl');
  }
  render() {

    return (
      <>
        <div className="header-content" style={{backgroundColor: '#4376FC', color: 'white', paddingBottom: '40px'}}>
          <div className="container">
            <div className="row">
              <div className="col-sm-6">
                <div className="header-text" style={{paddingTop: '0'}}>
                  <div className="post-heading-left-white header-heading">
                    <h1 style={{color: 'white'}}>Trouwen</h1>
                    <h4 style={{marginTop: '30px', color: 'white'}}>
                      <a className="linkWhite custom-button"
                         href="https://www.huwelijksplanner.online" target="_blank">Bezoek de Huwelijksplanner</a>
                    </h4>
                  </div>
                  <br/>
                  <p style={{marginTop: '-35px'}}>Samen met de gemeente Utrecht, Almere, Rotterdam en Westfriese
                    gemeenten bouwen wij een online huwelijksplanner waarbij de burger centraal staat, waarvan
                    de technische architectuur zo zuiver mogelijk is en deelbaar-herbruikbaar is voor andere
                    gemeenten en applicaties.</p>
                  <br/>
                  <img src="/images/gemeenteutrecht.png" width="110px"/>
                  <img src="/images/gemeentealmere.png" width="110px"/>
                  <img src="/images/gemeentewestfrieslandblauw.png" width="110px"/>
                  <img src="/images/gemeenterotterdam.png" width="110px"/>
                  <br/>
                  <p>Nieuwsgierig wat Conduction voor jou kan betekenen?</p>
                  <br/>
                  <Link to="/contact" className="custom-button">
                    Neem contact op</Link>
                </div>
              </div>

              <div className="col-sm-6">
                <div className="header-img">
                  <figure className="animation animated animation-fade-in-right"
                          data-animation="animation-fade-in-right">
                    <img src="/images/trouwenproject.png"/>
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
                    <h1 id="verhuizen"  className="color-bright-blue">Verhuizen</h1>


                    <p>Samen met de gemeente 's-Hertogenbosch, Eindhoven en de Solviteers hebben we een
                      applicatie
                      gebouwd voor het melden van een verhuizing. Waarbij wij ons vooral hebben gericht op het
                      ontwikkelen van de backend en de Solviteers op de frontend.</p>
                    <br/>
                      <img src="/images/gemeenteeindhovengrijzeachtergrond.png" width="110px"/>
                        <img src="/images/Gemeentedenboschgrijzeachtergrond.png" width="110px"/>
                          <img src="/images/solviteersgrijzeachtergrond.png" width="110px"/>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/verhuizenproject.png"/>
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
                    <h2 id="overlijden"  className="color-bright-blue">Overlijden</h2>

                    <p>Samen met de Westfriese gemeenten zijn wij aan het ontwikkelen op de gebeurtenis
                      overlijden,
                      daar komt een hoop bij kijken. Zoals bijvoorbeeld de totale cyclus van een graf, van het
                      plannen
                      van de begrafenis tot het ruimen van een graf. Wij ondersteunen op de digitale
                      ontwikkeling van
                      dit proces, weer volgens het common ground principe: Data bij de bron, deelbaar en
                      schaalbaar.</p>
                    <br/>
                      <img src="/images/gemeentewestfriesland.png" width="110px"/>
                        <img src="/images/018-Logo-HTA.png" width="110px" style={{marginLeft: '30px'}}/>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/overlijdenproject.png"/>
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
                    <h2 id="overlijden"  className="color-bright-blue">Digitale Stages</h2>
                    <h4  className="color-bright-blue">Product: Online Platform</h4>
                    <p>
                      Op dit moment staat er in het onderwijs een stille ramp op stapel. Door het
                      sluiten van kantoren, thuiswerken en de druk op organisaties, lukt het met
                      name MBO- en in mindere mate HBO-studenten die een opleiding volgen voor
                      een “kantoorbaan”, niet of nauwelijks om een stageplaats te vinden. Terwijl
                      zij die wel nodig hebben om af te studeren. Het project digitale stages
                      biedt hier een oplossing voor. Samen met het ROC Almere werken we nu dan
                      ook aan een proof of concept voor ‘thuiswerk’-stages voor studenten
                      applicatieontwikkeling.
                    </p>
                    <br/>
                      <img alt="SIDN Logo" src="/images/SIDN_Logo.png" width="110px"/>
                        <img src="/images/logo-rocvf.png" width="110px"/>
                  </div>
                </div>

              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/DigitaleStage/1280w/Grijsvlak.png"/>
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
                    <h2 id="overlijden"  className="color-bright-blue">(Nood) Formulieren</h2>
                    <h4  className="color-bright-blue">Product: Verzoeken en StUF-koppeling</h4>
                    <p>
                      Direct na het uitbreken van de Coronacrisis, wilden wij iets kunnen
                      bijdragen. Wij wilden graag onze techniek ter beschikking stellen om te
                      helpen bij het versnellen en vergemakkelijken van BBZ of Tozo aanvragen. We
                      zijn samen met de gemeenten, waar wij onze Common Ground projecten mee
                      doen, om de tafel gegaan. Binnen enkele dagen hebben we een generiek(e)
                      applicatie/formulier op kunnen tuigen, gekoppeld aan Common Ground
                      componenten. Je kunt hiermee allerlei formulieren maken die schaalbaar
                      zijn. De mogelijkheden zijn onbegrensd.
                    </p>
                    <br/>

                      <br/>
                        <a href="/projecten/formulieren" className="custom-button"
                           style={{marginRight: '20px'}}>
                          Lees meer</a>
                        <a href="https://dev.zuid-drecht.nl/ptc/" target="_blank"
                            className="custom-button">
                          Demo</a>


                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Formulieren/1280w/Blauw_Vlak.png"/>
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
                    <h2 id="overlijden"  className="color-bright-blue">Nabijheids App</h2>
                    <h4  className="color-bright-blue">Product: Online Platform</h4>

                    <p>
                      Het rijk wil de Corona crisis te lijf gaan met een nabijheids- app. We
                      hebben de vraag van de overheid bestudeerd en begrijpen wat men probeert te
                      bereiken. Dit moet wel op een privacy veilige manier, we wonen immers niet
                      in een totalitaire staat:)
                    </p>
                    <p>
                      We hebben de handschoen opgepakt en een oplossing bedacht waarbij de
                      privacy en het maatschappelijke draagvlak leidend zijn.
                    </p>
                  </div>
                </div>

              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/NabijheidsApp/1280w/Grijsvlak.png"/>
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
                    <h2 id="overlijden"  className="color-bright-blue">Componenten</h2>
                    <p>
                      Het Afgelopen jaar is Conduction, in partnerschap met overheidsorganisaties,
                      als ontwikkelpartij bezig geweest met het ontwikkelen van componenten en applicaties voor Common
                      Ground.
                      De huwelijksplanner samen met Utrecht en ‘verhuizen’ samen met ‘s Hertogenbosch, Eindhoven en de
                      Solviteers,
                      zijn onze eerste projecten en daar zijn wij reuze trots op. Alle componenten en applicaties zijn
                      open source beschikbaar en deelbaar.
                    </p>
                    <br/>

                      <br/>
                        <a href="/componenten"
                            className="custom-button">
                          Componenten overzicht</a>


                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/content/Componenten/proto/1280w/Blauw_vlak.png"/>
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
                    <h2 id="overlijden"  className="color-bright-blue">Odyssey</h2>
                    <p>
                      Conduction is participating in the Odyssey 2020 hackathon! We are a startup in the public/civic
                      tech and we build open source software for municipalities.
                      Therefor we decided to participate in the SSI track and we want to share our common building
                      blocks with the participants of Odyssey 2020. You could see us as your 7th team member.
                      <br/>
                        <br/>
                          All building blocks listed below are open source available. The building blocks shown here are
                          commonly used in the world of municipalities. If you are looking for something specific drop
                          us an email, we can probably help you!
                    </p>
                    <br/>

                      <br/>
                        <Link to="/odyssey"
                            className="custom-button color-bright-blue">
                          Read more</Link>

                  </div>
                </div>


              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="animation animated animation-fade-in-right" data-animation="animation-fade-in-right">
                  <img src="/images/Conduction-website_losgeknipt_0023_afb24.png" alt="Open source software ontwikkelen voor digitale ecosytemen"/>
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
