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
import ComponentenPageItem from "./ComponentenPageItem";
import {HashLoader} from "react-spinners";
import { css } from "@emotion/css";
import {LangSwitch} from "./utility/LangSwitch";

export default class ComponentenPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);

    this.state = {
      components: null,
      override: css`
        display: block;
        margin-left: auto;
        margin-right: auto;
      `
    }

    LangSwitch('nl');
  }

  componentDidMount() {
    let url = this.context.api + '/components';

    fetch(url, {cache: 'force-cache'})
      .then(response => response.json())
      .then(data => this.setState({components: data['hydra:member']}))
      .catch()
  }

  render() {

    return (
      <>
        <div className="header-content" style={{backgroundColor: '#4376FC', color: 'white'}}>
          <div className="container">
            <div className="row">

              <div
                className="col-sm-10 col-md-6 col-lg-9 col-sm-offset-1 col-md-offset-0 text-center-sm text-center-xs">
                <div className="margin-bottom40 header-text" style={{paddingTop: "0"}}>
                  <div className="post-heading-left-white header-heading">
                    <h1 style={{color: 'white'}}>Componenten</h1>
                  </div>
                  <p style={{color: 'white'}}>
                    De kracht van de architecturale principes van Common Ground zit hem in kleine microservices verdeeld over vijf lagen.
                    Hierbij is herbruikbaarheid en schaalbaarheid een belangrijk uitgangspunt. Dit leidt ertoe dat er sprake is van een steep dependency curve.
                    Kleine applicaties hebben van start af aan een divers ecosysteem aan componenten nodig om te kunnen functioneren, maar het toevoegen van extra applicaties leidt niet tot een sterke toename van componenten.
                    Dit beeld zien we terug bij de melding verhuizen en huwelijksplanner. Afhankelijk van de inrichtings- en functionaliteit keuzes worden voor deze processen tussen de 12 en 26 componenten gebruikt.
                    Waarbij alle componenten vanuit verhuizen worden hergebruikt bij de melding huwelijk. Hieronder een overzicht van de componenten die voor beide applicaties worden gebruikt en hun doel binnen het ecosysteem.
                  </p>
                </div>
              </div>

              <div className="col-sm-10 col-md-6 col-lg-2 col-sm-offset-1 col-md-offset-0 col-lg-offset-1">

              </div>

            </div>
          </div>
        </div>
        {
          this.state.components === null &&
          <div className="text-center" style={{marginTop: "10%", marginBottom: "10%"}}>
            <HashLoader color={"#4376FC"} loading={true} css={this.state.override} size={50} />
            <h4 style={{color: "#4376FC", paddingTop: '50px'}} className="mt-3 mb-3">Componenten aan het laden</h4>
          </div>
        }
        {
          this.state.components !== null && this.state.components.length > 0 &&
            this.state.components.map((item, i) => (
              <>
                {
                  i % 2 === 0
                    ?
                      <ComponentenPageItem component={item} grey={true} />
                    :
                      <ComponentenPageItem component={item} grey={false} />
                }
              </>
            ))
        }
      </>
    );
  }

}
