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
import TwitterFeed from "./widgets/TwitterFeed";
import {LangSwitch} from "./utility/LangSwitch";
import {metadata} from "./utility/Metadata";
import {registerAction} from "./utility/GoogleAnalytic";

export default class HomePage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
    metadata('Conduction | Faciliteren van Open Source Digitale Ecosystemen', 'Conduction is een Public Tech bedrijf in Amsterdam. Wij faciliteren Open Source Ecosystemen en ontwikkelen techniek waarbij mens en community centraal staan')
    LangSwitch('nl');
    registerAction('home page visited', '/');
  }

  // componentDidMount() {
  // }

  render() {

    return (
      <>
        <div className="header-content" style={{backgroundColor: '#4376FC', color: 'white', paddingBottom: '40px'}}>
          <div className="container">
            <div className="row">
              <div className="col-sm-6">
                <div className="header-text" style={{paddingTop: '0'}}>
                  <div className="post-heading-left-white header-heading">
                    <p>Conduction faciliteert digitale ecosystemen </p>
                    <h1 style={{color: 'white'}}>Public Tech.</h1>
                  </div>
                  <p>Wij zijn wat je zou kunnen noemen Digital Socials,
                    wij ontwikkelen techniek volgens de Common Ground principes, waarbij mens en community centraal
                    staan.
                    Graag dragen we dan ook bij aan het ontwikkelen van digitale oplossingen voor maatschappelijke
                    vraagstukken:</p>
                  <p style={{marginTop: 15}}><b>‘Tech to serve people’.</b></p>
                  <p>Meer weten over ons bedrijf? Plan een afspraak.</p>
                  <br/>
                  <Link to="/contact" hrefLang='nl'
                        style={{
                          fontWeight: 'bold',
                          textTransform: 'uppercase',
                          fontSize: '15px',
                          color: 'white',
                          padding: '7.5px 15px 7.5px 15px',
                          borderRadius: '25px',
                          border: '2.5px solid white'
                        }}>
                    Maak kennis met het bedrijf</Link>
                </div>
              </div>
              <div className="col-sm-6">
                <div className="hovereffect">
                  <div className="header-img">
                    <img className="img-responsive" src="/images/Conduction_HOME_0000_afb1.png"
                         alt="Maak kennis met het team"/></div>
                  <div className="overlay">
                    <h5>Het team</h5>
                    <a className="info2" href="/team">Maak kennis met het team</a>
                  </div>
                  <br/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="wrap-container8040 bg-grey">
          <div className="container">
            <div className="post-heading-left">
              <h2 style={{color: "#4386FB"}}>Wat doen we</h2>
            </div>
            <div className="row">
              <div className="col-sm-12 col-md-6">
                <img style={{marginTop: "40px"}} src="images/Conduction-website_losgeknipt_0023_afb24.png"
                     alt="Open source software ontwikkelen voor digitale ecosytemen" width="100%"/>
              </div>
              <div className="col-sm-12 col-md-6">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <div className="row" style={{marginTop: "20px"}}>
                      <div className="col-sm-6">
                        <h5 style={{color: "#4386FB"}}>Bouwen</h5>
                        <p>Wij ontwikkelen open source software ter ondersteuning van maatschappelijke vraagstukken voor
                          de publieke, maar ook voor de commerciële sector. Bekijk onze <Link to="/projecten"
                                                                                              hrefLang='nl'>
                            projecten</Link> hier.</p>
                      </div>
                      <div className="col-sm-6">
                        <h5 style={{color: "#4386FB"}}>Implementatie en beheer</h5>
                        <p>Wij kunnen als gewenst op verschillende manieren deze software voor u beheren en
                          ondersteuning bieden, ook bij het implementeren. Meer weten? Klik <Link to="/caas"
                                                                                                  hrefLang='nl'>hier</Link>.
                        </p>
                      </div>
                    </div>
                    <div className="row" style={{marginTop: "55px"}}>
                      <div className="col-sm-6">
                        <h5 style={{color: "#4386FB"}}>Dashkube</h5>
                        <p>Ons DashKube dashboard maakt het mogelijk en eenvoudig om uw eigen omgevingen te beheren.
                          Bekijk <a href="https://www.dashkube.com">DashKube</a> hier.</p>
                      </div>
                      <div className="col-sm-6">
                        <h5 style={{color: "#4386FB"}}>Consultancy</h5>
                        <p>Wij ontwikkelen al geruime tijd volgens het Common Ground principe en deze ervaring delen wij
                          graag. Benieuwd? Klik <Link to="/contact" hrefLang='nl'>hier</Link>.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="features3" className="wrap-container8040 ">
          <div className="container">
            <div className="post-heading-left">
              <h2 style={{color: "#4386FB"}}>Hoe doen we dat</h2>
              <div className="col-sm-12 col-md-6" style={{textAlign: "left"}}>
                <img src="images/samen.png" alt="Samen organiseren" width="100%"/>
                <div style={{padding: "20px 60px 0 40px"}}>
                  <h5 style={{color: "#4386FB"}}>Samen</h5>
                  <p>Wij geloven in de kracht van samen organiseren, daarom ontwikkelen wij het liefst samen.
                    Om zo een idee, droom of ideaal op de beste manier vorm te kunnen geven.</p>
                </div>
              </div>
              <div className=" col-sm-12 col-md-6" style={{textAlign: "left"}}>
                <img src="images/Conduction_HOME_0005_afb6.png" alt="Open source community" width="100%"/>
                <div style={{padding: "20px 60px 0 40px"}}>
                  <h5 style={{color: "#4386FB"}}>Open</h5>
                  <p>Alles wat wij ontwikkelen is open source, voor iedereen te gebruiken. Wij geven (onze techniek)
                    graag terug aan de community, zodat anderen er ook mee aan de slag kunnen en mooie concepten
                    kunnen ontwikkelen.</p>
                </div>
              </div>
              <div className="col-sm-12 col-md-6" style={{textAlign: "left"}}>
                <img src="images/Conduction_HOME_0006_afb7.png" alt="Duurzame en innovatieve software ontwikkeling"
                     width="100%"/>
                <div style={{padding: "20px 60px 0 40px"}}>
                  <h5 style={{color: "#4386FB"}}>Duurzaam en innovatief</h5>
                  <p>Alles wat wij maken sluit aan op de behoefte van nu, maar is voorbereid op de toekomst, dat
                    wil
                    zeggen: flexibel genoeg om mee te gaan op bewegingen (on- en offline) van de toekomst. </p>
                </div>
              </div>
              <div className="col-sm-12 col-md-6" style={{textAlign: "left"}}>
                <img src="images/Conduction_HOME_0007_afb8.png" alt="Verantwoord ondernemen" width="100%"/>
                <div style={{padding: "20px 60px 0 40px"}}>
                  <h5 style={{color: "#4386FB"}}>Verantwoord</h5>
                  <p>Op een bewuste en verantwoorde wijze ontwikkelen en ondernemen staat bij ons hoog in het
                    vaandel.
                    Transparantie en eerlijkheid zijn daarbij key, dus daar houden wij ons aan :)</p>
                </div>
              </div>

              <div className="col-xs-12" style={{textAlign: "left", marginTop: '30px'}}>
                <p className='color-bright-blue'><b>Meer weten over wat wij doen?</b></p>
                <br/>
                <Link hrefLang='nl' to="/contact" className="custom-button color-bright-blue">Neem contact op</Link>
              </div>
            </div>
          </div>
        </div>

        <div id="features2" className="wrap-container8040">
          <div className="container">
            <div className="margin-bottom40">
              <div className="post-heading-left text-center-sm text-center-xs">
                <div className="post-heading-left">
                  <h2 style={{color: "#4386FB"}}>Met wie doen we dat</h2>
                </div>
              </div>
              <div className="row">
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://vng.nl/">
                      <img src="images/VNG.png" alt="VNG logo"/>
                    </a>
                  </div>
                </div>
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.almere.nl/">
                      <img src="images/gemeentealmere.png" alt="Gemeente Almere logo"/>
                    </a>
                  </div>
                </div>
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.s-hertogenbosch.nl/">
                      <img src="images/Gemeentedenbosch.png" alt="Gemeente Den Bosch logo"/>
                    </a>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.eindhoven.nl/">
                      <img src="images/gemeenteeindhoven.png" alt="Gemeente Eindhoven logo"/>
                    </a>
                  </div>
                </div>
              </div>

              <div className="row">
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.hoorn.nl/">
                      <img src="images/gemeentehoorn.png" alt="Gemeente Hoorn logo"/>
                    </a>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.rotterdam.nl/">
                      <img src="images/gemeenterotterdam.png" alt="Gemeente Rotterdam logo"/>
                    </a>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.tilburg.nl/">
                      <img src="images/gemeentetilburg.png" alt="Gemeente Tilburg logo"/>
                    </a>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.utrecht.nl/">
                      <img src="images/gemeenteutrecht.png" alt="Gemeente Utrecht logo"/>
                    </a>
                  </div>
                </div>
              </div>

              <div className="row">
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://regiowestfriesland.nl/index.php/nl">
                      <img src="images/gemeentewestfriesland.png" alt="Gemeente West-Friesland logo"/>
                    </a>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.solviteers.nl/">
                      <img src="images/solviteers.png" alt="Solviteers logo"/>
                    </a>
                  </div>

                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://ritense.com/">
                      <img src="images/ritense.png" alt="Ritense logo"/>
                    </a>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.htasoftware.eu/">
                      <img src="images/018-Logo-HTA.png" alt="HTA software logo"/>
                    </a>
                  </div>
                </div>
              </div>
              <div className="row">
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.rocvanflevoland.nl/#">
                      <img src="images/logo-rocvf.png" alt="ROC van Flevoland logo"/>
                    </a>
                  </div>
                </div>
                <div className="col-sm-3">
                  <div className="affa-feature-img">
                    <a href="https://www.sidnfonds.nl/">
                      <img src="images/SIDN_Logo.png" alt="SIDN fond"/>
                    </a>
                  </div>
                </div>
              </div>
              {/*<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur officia deserunt sunt in culpa qui officia deserunt mollit perspiciatis unde omnis natus culpa qui deserunt mollit anim est laborum.</p>*/}
              {/*<p className="margin-bottom30">Excepteur fugiat occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laborum perspiciatis unde omnis natus esse cillum dolore.</p>*/}
            </div>
          </div>
        </div>

        <div id="features3" className="wrap-container8040 bg-grey">
          <div className="container">
            <div className="post-heading-left"
                 style={{display: "inline !important", verticalAlign: 'top', lineHeight: '22px'}}>
              <h2 style={{color: "#4386FB", display: "inline"}}>Met wie doen we wat</h2>
              <p style={{display: "inline"}} className="color-bright-blue"><b>Meer weten over onze producten en
                wat dit voor jou kan betekenen? </b></p>
              <Link to="/contact" hrefLang='nl'
                    className="custom-button color-bright-blue">Plan een (video) bel afspraak in</Link>
            </div>
            <div className="row">
              <div className="col-xs-12 col-sm-6 col-md-4">
                <a href="/projecten"> <img style={{maxWidth: "300px;"}} src="images/trouwen.png"
                                           alt="Wat doet de trouwen applicatie"
                                           height="300px"
                                           width="100%"/></a>
              </div>
              <div className="col-xs-12 col-sm-6 col-md-4">
                <a href="/projecten#verhuizen"> <img style={{maxWidth: "300px"}} alt="Wat doet de verhuizen applicatie"
                                                     src="images/verhuizen.png" height="300px"
                                                     width="100%"/></a>
              </div>
              <div className="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
                <a href="/projecten#overlijden"> <img style={{maxWidth: "300px"}}
                                                      alt="Wat doet de overlijden applicatie"
                                                      src="images/overlijden.png"
                                                      height="300px"
                                                      width="100%"/>
                </a>
              </div>
            </div>
          </div>
        </div>

        <TwitterFeed/>

        <div id="features3" className="wrap-container8040 hidden">
          <div className="container">
            <div className="row">
              <div className="col-sm-10 col-md-6 col-lg-5 col-sm-offset-1 col-md-offset-0">
                <figure className="margin-bottom40 animation" data-animation="animation-fade-in-left">
                  <img src="images/content/landing/feature-2.png" alt="Image"/>
                </figure>
              </div>

              <div className="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-0 col-lg-offset-1">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left margin-bottom20">
                    <h4>Flatland Landing Page</h4>
                    <h2>Why It’s Best #2</h2>
                    <p>Lorem ipsum dolor sit amet, consequat aute irure dolor in reprehenderit in
                      voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                  <div className="list-row">
                    <div className="list-col">
                      <ul className="list-icon">
                        <li><i className="fa fa-check"></i> Meeting time</li>
                        <li><i className="fa fa-check"></i> Invite people</li>
                        <li><i className="fa fa-check"></i> Share location</li>
                        <li><i className="fa fa-check"></i> Reminder</li>
                      </ul>
                    </div>
                    <div className="list-col">
                      <ul className="list-icon">
                        <li><i className="fa fa-check"></i> Notification by email</li>
                        <li><i className="fa fa-check"></i> List of meeting materials</li>
                        <li><i className="fa fa-check"></i> Made very important</li>
                        <li><i className="fa fa-check"></i> Go out and take holiday</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="about" className="wrap-container8040 hidden">
          <div className="container">
            <div className="post-heading-center">
              <h2>What makes our cookie crumble</h2>
              <p>Conduction kan snel leveren omdat we het afgelopen jaar ons eigen op API gebaseerde
                framework hebben
                ontwikkeld.</p>
            </div>
            <div className="row-custom">
              <div className="col-left">
                <div className="affa-feature-icon">
                  <i className="fa fa-lightbulb-o animation" data-animation="animation-fade-in-left"></i>
                  <div className="feature-text">
                    <h4>In Jip en Janneke taal</h4>
                    <p>Het platform van Conduction is opgebouwd uit verschillende bouwstenen. Iedere
                      bouwsteen
                      bevat een eigen functionaliteit. Denk hierbij aan contractvorming, een
                      marktplaats en
                      chatfuncties. Deze bouwstenen kunnen samen of als losse modules voor jouw
                      idee worden
                      ingezet.
                    </p>
                    <p>
                      Bij digitale ecosystemen heb je het over een scala aan spelers, die ieder
                      direct of
                      indirect met elkaar verbonden zijn, elkaar nodig hebben en elkaar
                      versterken.</p>
                  </div>
                </div>

                <div className="affa-feature-icon">
                  <i className="fa fa-users animation" data-animation="animation-fade-in-left"></i>
                  <div className="feature-text">
                    <h4>Hoe werkt dit</h4>
                    <p>Jij hebt een idee waarbij je met een online platform een of meerdere groepen
                      met elkaar
                      wilt verbinden, wij helpen jou vervolgens bij het bouwen, inrichten,
                      uitrollen en/of tot
                      leven brengen hiervan. Denk bijvoorbeeld aan het verbinden van kopers en
                      verkopers,
                      huurders en verhuurders, beroepsgroepen, kennisbanken, buurtteams, etc...
                    </p>
                    <p>
                      Wij zijn gespecialiseerd in maatwerk pakketten aan de hand van bouwstenen,
                      dus van Duplo
                      tot Technisch-lego. Dit kan als partner, maar ook in opdracht.</p><br/><br/>
                  </div>
                </div>
              </div>

              <div className="col-center">
                <figure className="margin-bottom40 animation" data-animation="animation-fade-in-down">
                  <img src="images/content/landing/feature-3.png" alt="Nexus Black"/>
                </figure>
              </div>

              <div className="col-right">
                <div className="affa-feature-icon">
                  <i className="fa fa-question animation" data-animation="animation-fade-in-left"></i>
                  <div className="feature-text">
                    <h4>Waarom</h4>
                    <p>Wij geloven in samen. Samen vul je elkaar aan. Samen ben je meer dan de som
                      der delen.
                      Samen heb je de kracht om een vliegwiel op gang te brengen. Wij zien
                      hierdoor de enorme
                      kracht van online verbinden, de mogelijkheden zijn oneindig. Zowel op
                      technisch vlak,
                      als professioneel en persoonlijk.
                    </p>
                    <p>
                      Wij maken online persoonlijk en brengen mensen bij elkaar..</p>
                  </div>
                </div>

                <div className="affa-feature-icon">
                  <i className="fa fa-link animation" data-animation="animation-fade-in-right"></i>
                  <div className="feature-text">
                    <h4>Onze bouwstenen</h4>
                    <p>De bouwstenen kun je zien als de code waaruit de verschillende modules zijn
                      opgebouwd.
                      Per uitdaging onderzoeken we samen wat jouw vraag of wens precies is. Mocht
                      een
                      gevraagde module nog niet bestaan, dan kijken we of die toegevoegd moet
                      worden. Alle
                      platformen kunnen gebruik maken van alle modules, ook de nieuwe.
                    </p>
                    <p>
                      Door hergebruik van eerder gebouwde modules bouwen wij flexibel, snel en
                      wordt het
                      bouwen van een online platform betaalbaar.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="counter" className="bg-parallax hidden" data-parallax="scroll" data-speed="0.2"
             data-natural-width="1920"
             data-natural-height="1080" data-image-src="images/content/bg/1.jpg">
          <div className="bg-overlay50 wrap-container8040">
            <div className="container">
              <div className="row">
                <div className="col-sm-3">
                  <div className="affa-counter">
                    <img src="images/content/icon/stats.png" alt="Icon" className="animation"
                         data-animation="animation-fade-in-down"/>
                    <h4><span>198</span>k</h4>
                    <p>Times Download</p>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-counter">
                    <img src="images/content/icon/clock.png" alt="Icon" className="animation"
                         data-animation="animation-fade-in-down" data-delay="300"/>
                    <h4><span>200</span>k</h4>
                    <p>Hours of Development</p>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-counter">
                    <img src="images/content/icon/coffe-cup.png" alt="Icon" className="animation"
                         data-animation="animation-fade-in-down" data-delay="600"/>
                    <h4><span>64</span>k</h4>
                    <p>Cups of Coffee</p>
                  </div>
                </div>

                <div className="col-sm-3">
                  <div className="affa-counter">
                    <img src="images/content/icon/user.png" alt="Icon" className="animation"
                         data-animation="animation-fade-in-down" data-delay="900"/>
                    <h4><span>256</span>k</h4>
                    <p>Satisfied Members</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </>
    );
  }

}
