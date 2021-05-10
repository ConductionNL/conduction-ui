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

export default class OdysseyPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);

    LangSwitch('en');
  }

  render() {

    return (
      <>
        <div className="header-content" style={{backgroundColor: '#4376FC', color: 'white'}}>
          <div className="container">
            <div className="row">
              <div className="col-sm-6">
                <div className="header-img">
                  <figure className="animation animated animation-fade-in-right"
                          data-animation="animation-fade-in-right">
                    <img src="/images/Conduction-website_losgeknipt_0023_afb24.png"/>
                  </figure>
                </div>
                <br/>
              </div>
              <div className="col-sm-5">
                <div className="header-text" style={{paddingTop: '0'}}>
                  <div className="post-heading-left-white header-heading">
                    <h1 style={{color: 'white'}}>Odyssey 2020</h1>
                  </div>
                  <p style={{marginTop: '-35px'}}>Conduction is participating in the Odyssey 2020 hackathon! We are a
                    startup in the public/civic tech and we build open source software for municipalities.
                    Therefor we decided to participate in the SSI track and we want to share our common building blocks
                    with the participants of Odyssey 2020. You could see us as your 7th team member.
                    <br/>
                      <br/>
                        All building blocks listed below are open source available. The building blocks shown here are
                        commonly used in the world of municipalities. If you are looking for something specific drop us
                        an email, we can probably help you!</p>
                  <br/>
                </div>
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
                    <h1 className="color-bright-blue">"BRP" Basic Registration of Persons</h1>
                    <h4 className="color-bright-blue">A data source/registration for all inhabitants in the Netherlands</h4>
                    <p> The "BRP" or Basic Registration of Persons is a collection of all inhabitants in the
                      Netherlands.
                      This is the core data source which most dutch governmental organisations make use of. <br/>Do we
                        have a database of all the people in the Netherlands?
                        No of course not that would be a gross violation of the GDPR and some other very important laws.
                        But what is this then, I hear you ask.
                        This is an API that functions as the BRP api currently developed by the dutch government.
                        It can be filled with test persons which you then can use to develop or test your own solutions.
                        <br/>
                          <br/>
                            If there is enough interest we will host a test BRP with a simple interface where you can
                            upload your own person that fits for your solutions at the hackathon.
                    </p>
                    <br/>
                      <br/>
                        <a href="https://github.com/ConductionNL/brpservice"
                           style={{marginRight: '20px'}} className="custom-button color-bright-blue"><i
                          className="fab fa-github"> </i> GitHub</a>

                        &nbsp;  &nbsp;
                        <a href="https://brp.dev.zuid-drecht.nl/"
                           className="custom-button color-bright-button"><i
                          className="fa fa-book"></i>
                          Redoc</a>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="col-img40 margin-bottom40 animation animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <a
                    href="https://www.rijksoverheid.nl/onderwerpen/privacy-en-persoonsgegevens/basisregistratie-personen-brp">
                    <img src="/images/content/Odyssey/RVO.png" width="140%"/>
                  </a>
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
                    <h1 className="color-bright-blue">DigiSpoof</h1>
                    <h4 className="color-bright-blue">A mock version of the dutch national online identifier</h4>
                    <p>DigiD is the mostly used method in which someone can identify themselves with the online services
                      of the government.
                      This component is a open source mock version of this method. This component contains a frontend to
                      simulate the login and an API to handle the backend,
                      from the outside it functions as the real thing. The DigiSpoof component works in tandem with the
                      BRP building block mentioned above.
                    </p>
                    <br/>
                      <br/>
                        <a href="https://github.com/ConductionNL/bzk-mock"
                           style={{marginRight: '20px'}} className="custom-button color-bright-blue"><i
                          className="fab fa-github"> </i> GitHub</a>
                        <a href="https://ds.dev.zuid-drecht.nl/"
                           className="custom-button color-bright-blue"><i
                          className="fa fa-book"> </i> Demo</a>
                  </div>
                  &nbsp; &nbsp;
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="col-img40 margin-bottom40 animation animated animation-fade-in-right"
                        data-animation="animation-fade-in-right" style={{width: '600px !important'}}>
                  <a href="https://digid.nl/en">
                    <img src="/images/content/Odyssey/digid2.png"/></a>
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
                    <h1 className="color-bright-blue">Assent/consent service</h1>
                    <h4 className="color-bright-blue">A service which formally facilitates assents asked and given.</h4>


                    <p>The assent/consent service or “instemmingservice” in dutch handles the assent given by a person.
                      Where would you use a service as this? To choose one example this service is used in a wedding
                      scheduler in development by
                      the municipality of Utrecht. The municipality must establish that assent is given by both parties
                      of a wedding.
                      But the assent service can be used for anything which requires an assent given by a party. A
                      request for data to name one of them.
                    </p>
                    <br/>
                      <br/>
                        <a href="https://github.com/ConductionNL/instemmingservice"
                           style={{marginRight: '20px'}} className="custom-button color-bright-blue"><i
                          className="fab fa-github"> </i> GitHub</a>
                        <a href="https://irc.dev.zuid-drecht.nl/"
                           className="custom-button color-bright-blue">
                          <i className="fa fa-book"></i> Redoc</a>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="col-img40 margin-bottom40 animation animated animation-fade-in-right"
                        data-animation="animation-fade-in-right">
                  <img src="/images/content/Odyssey/Assent.png"/></figure>
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
                    <h1 className="color-bright-blue">Requests</h1>
                    <p>If you want to arrange something with a (local) government you as an individual or organisation
                      can send them a “request”.
                      The (local) government will process your request and communicate the result back. The difficulty
                      with this is that many municipalities have different
                      systems to process requests which have limited interoperability. This method aims to tackle this
                      problem by standardizing the collection of data.
                      <br/>
                        The method is a bit abstract, let’s use an example to illustrate this subject. You as a person
                        would like to have a parking permit in your street.
                        Usually you will fill out an application form (either digitally or physically) and send this to
                        the department of the municipality that has jurisdiction
                        over this application. As an individual you are sending a “request” for a parking permit.
                        What is a request in this context? An request is a way to structure the dataset. The request
                        type describes what information is needed in an abstract way.
                        The request is self contains the data needed for the processing of the request.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div className="row">
              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 className="color-bright-blue">Request Type Catalogue (VTC)</h2>
                    <p>The request type is a template of the dataset needed in an request. These templates are stored in
                      a catalogue. The template is just a
                      template and thus holds no data. It does describe what the requirement are for the data. For
                      example a “date of birth” would have the type date and “name”
                      would be a string. To maximize reusability of this building block there is no “business logic”
                      within the request type. The business logic is stored in another
                      component which we will release soon.
                    </p>
                    <br/>
                      <br/>
                        <a href="https://github.com/ConductionNL/verzoektypecatalogus"
                           style={{marginRight: '20px'}} className="custom-button color-bright-blue"><i
                          className="fab fa-github"> </i> GitHub</a>
                        <a href="https://vtc.zaakonline.nl/"
                           className="custom-button color-bright-blue"><i
                          className="fa fa-book"></i> Redoc</a>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="col-img40 margin-bottom40 animation animated animation-fade-in-right"
                        data-animation="animation-fade-in-right">
                  <a href="https://vtc.dev.zuid-drecht.nl/">
                    <img src="/images/content/Componenten/vtc/1280w/Geel_Vlak.png"/>
                  </a>
                </figure>
              </div>
            </div>

            <div className="row">
              <div className="col-sm-10 col-md-7 col-lg-7 ">
                <div className="col-text20 margin-bottom20">
                  <div className="post-heading-left">
                    <h2 className="color-bright-blue">Request registration Component (VRC)</h2>
                    <p>A request it self is stored in a registration, the VRC (verzoek registratie component in Dutch).
                      The request uses the request type to determine
                      the template of the data set and collects the data. It can be saved and continued at any point in
                      time, tis creates flexibility for the user who in example starts the
                      request on their phone but finishes the request on a laptop. When the request is complete the
                      status is set to “submitted”. It is then ready to be picked up by the
                      concerning department of the municipality to be processed.
                    </p>
                    <br/>
                      <br/>
                        <a href="https://github.com/ConductionNL/verzoekregistratiecomponent"
                           style={{marginRight: '20px'}} className="custom-button color-bright-blue"><i
                          className="fab fa-github"> </i> GitHub</a>
                        <a href="https://vrc.zaakonline.nl/"
                           className="custom-button color-bright-blue"><i
                          className="fa fa-book"></i> Redoc</a>
                  </div>
                </div>
              </div>

              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="col-img40 margin-bottom40 animation" data-animation="animation-fade-in-right">
                  <a href="https://vrc.dev.zuid-drecht.nl/">
                    <img src="/images/content/Componenten/vrc/1280w/Blauw_vlak.png"/>
                  </a>
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
                    <h1 className="color-bright-blue">More to come!</h1>
                    <h4 className="color-bright-blue"> We will add building blocks every week</h4>
                    <p>The governmental ecosystem is vast and complex. We will add building blocks to this page every
                      week. If you have a suggestion which building blocks you will need in the hackathon let us know
                      and we will make those a priority! </p>
                    <br/>
                    <br/>
                    <a href="mailto:matthias@conduction.nl"
                       className="custom-button color-bright-blue"><i
                      className="fa fa-envelope"></i> Mail the team Captain!</a>
                  </div>
                </div>
              </div>
              <div className="col-sm-10 col-md-5 col-lg-5">
                <figure className="col-img40 margin-bottom40 animation animated animation-fade-in-right"
                        data-animation="animation-fade-in-right">
                  <img src="/images/Conduction-website_losgeknipt_0012_afb13.png"/>
                </figure>
              </div>
            </div>
          </div>
        </div>

        <ContactForm/>
      </>
  );
  }

  }
