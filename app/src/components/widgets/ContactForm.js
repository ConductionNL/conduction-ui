import React, {Component} from 'react';
import {getCookie, setCookie} from ".././utility/CookieHandler";
import CountUp from 'react-countup';
import ReactTooltip from 'react-tooltip';
import CookieConsent from "react-cookie-consent";

import {
  BrowserRouter as Router, Link, Route, Switch,
} from "react-router-dom";

// Import the context
import ConfigContext from ".././Context/Config";

export default class ContactForm extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
  }

  // componentDidMount() {
  // }

  render() {

    return (
      <>
        <div id="contact" className="wrap-container80 bg-color">
          <div className="container">
            <div className="row">
              <div className="col-md-6">
                <div className="post-heading-center">
                  <h4>Conduction blauw past bij jou!</h4>
                  <h2 style={{color: 'white'}}> Ook werken of stage bij Conduction?</h2>
                  <p>Wij zijn altijd op zoek naar gedreven , originele vakfanaten, pioniers en creatievelingen (to
                    be). Voel je je aangesproken? Neem vooral contact met ons op! :) </p>

                </div>
              </div>

              <div className="col-md-6">
                <form action="/" method="post" className="affa-form-contact">
                  <div className="submit-status"></div>
                  <input style={{borderRadius: '25px !important'}} type="text" name="name" placeholder="Your Name"/>
                  <input style={{borderRadius: '25px !important'}} type="text" name="email"
                         placeholder="Email Address *"/>
                  <textarea style={{borderRadius: '25px !important'}} name="message"
                            placeholder="Message *"></textarea>
                  <button id="joinButton" type="submit" name="submit" className="linkWhite"
                          style={{
                            fontWeight: 'bold',
                            textTransform: 'uppercase',
                            fontSize: '15px',
                            color: 'white !important',
                            borderRadius: '25px',
                            border: '2.5px solid white',
                            width: '100%'
                          }}>
                    Join !
                  </button>
                </form>
              </div>
            </div>
          </div>

        </div>
      </>
    );
  }

}
