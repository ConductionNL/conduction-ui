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
import {LangSwitch} from "./utility/LangSwitch";
import {metadata} from "./utility/Metadata";
import {registerAction} from "./utility/GoogleAnalytic";

export default class ContactPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
    metadata('Conduction | Contact')
    LangSwitch('nl');
    registerAction('contact page visited', '/contact');
  }

  render() {

    return (
      <>
        <div className="wrap-container8040">
          <div className="container">
            <div className="post-heading-left">
              <h2 className="color-bright-blue">Contact</h2>
              <h5>Conduction is een ICT bedrijf met een sterke idealistische en sociale inslag. Daarom worden wij ook
                erg blij van de co-working space waar wij kantoor houden, daar wemelt het van de creatievelingen en
                wereldverbeteraars.<br/> We zitten ook nog op een geweldige plek: Lauriergracht 14h in Amsterdam.
                <br/><br/>Een keer langskomen of koffie drinken? Mail of bel ons!
              </h5>
              <br/>
              <a href="mailto:  info@conduction.nl"
                 className="custom-button color-bright-blue"><i
                className="fa fa-envelope"></i> Mail ons!</a>
              <a href="mailto:  info@conduction.nl"
                 className="custom-button color-bright-blue"
              style={{marginLeft: "30px"}}><i
                className="fa fa-phone"
                style={{marginRight: "10px", transform: "rotate(90deg)"}}></i>Telefoon gesprek / Video bellen</a>
              <br/>
              <br/>
              <p><h5>Wilt u snel een antwoord op uw vraag? Start nu de live chat!</h5></p>
              <p><h5>Stuurt u een bericht buiten werktijden? Geen nood, we reageren zo snel mogelijk! </h5></p>
              </div>
          </div>
        </div>

        <TwitterFeed />

        <ContactForm/>
      </>
    );
  }

}
