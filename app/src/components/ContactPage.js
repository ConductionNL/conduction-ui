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
import TwitterFeed from "./widgets/TwitterFeed";

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
                  <h5>Conduction is een ICT bedrijf met een sterke idealistische en sociale inslag. Daarom worden wij ook erg blij van de co-working space waar wij kantoor houden, daar wemelt het van de creatievelingen en wereldverbeteraars.<br/> We zitten ook nog op een geweldige plek: Lauriergracht 14h in Amsterdam.
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

        <TwitterFeed />

        <ContactForm />
      </>
  );
  }

  }
