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
import {TwitterTimelineEmbed} from "react-twitter-embed";

export default class ContactPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
  }

  render() {

    return (
      <>
        <div className="wrap-container8040">
          <div className="container">
            <div className="post-heading-left">
              <h2 className="color-bright-blue">Contact</h2>
              <br/>
              <br/>
              <h5>Conduction is een ICT bedrijf met een sterke idealistische en sociale inslag. Daarom worden wij ook
                erg blij van de co-working space waar wij kantoor houden, daar wemelt het van de creatievelingen en
                wereldverbeteraars.<br/> We zitten ook nog op een geweldige plek: Lauriergracht 14h in Amsterdam.
                <br/><br/>Een keer langskomen of koffie drinken? Mail of bel ons!
              </h5>
              <br/>
              <a href="mailto:  info@conduction.nl"
                 className="custom-button color-bright-blue"><i
                className="fa fa-envelope"></i> Mail ons!</a>
            </div>
            <div className="margin-top80 flex-s-b">
            </div>
          </div>
        </div>

        <div className="wrap-container8040 " style={{paddingTop: '0px'}}>
          <div className="container">
            <div className="post-heading-left">
              <h2 className="color-bright-blue">Buzz</h2>
            </div>
            <div className="col-md-6 col-md-offset-3">
              {/*<iframe id="twitter-widget-0" scrolling="no" frameBorder="0" allowTransparency="true"*/}
              {/*        allowFullScreen="true" className="twitter-timeline twitter-timeline-rendered"*/}
              {/*        style={{position: 'static', visibility: 'visible', display: 'inline-block', width: '866px', height: '1020px', padding: '0px', border: 'none', maxWidth: '100%', minWidth: '180px', marginTop: '0px', marginBottom: '0px', minHeight: '200px'}}*/}
              {/*        data-widget-id="profile:conduction_nl" title="Twitter Timeline"></iframe>*/}
              {/*<script async="" src="https://platform.twitter.com/widgets.js" charSet="utf-8"></script>*/}
              <TwitterTimelineEmbed
                sourceType="profile"
                screenName="conduction_nl"
                theme="dark"
                options={{height: 800}}
              />
            </div>
            {/*<div className="col">*/}
            {/*  <div className="col-md-6">*/}
            {/*    <div className="iframely-embed">*/}
            {/*      <div></div>*/}
            {/*    </div>*/}
            {/*    <script async="" src="//cdn.iframe.ly/embed.js" charSet="utf-8"></script>*/}
            {/*    <div className="iframely-embed">*/}
            {/*      <div></div>*/}
            {/*    </div>*/}
            {/*    <script async="" src="//cdn.iframe.ly/embed.js" charSet="utf-8"></script>*/}
            {/*  </div>*/}
            {/*</div>*/}
          </div>
        </div>

        <ContactForm/>
      </>
    );
  }

}
