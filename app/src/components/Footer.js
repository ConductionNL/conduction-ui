import React, {Component} from 'react';

// Import the context
import ConfigContext from "./Context/Config";
import {BrowserRouter as Router} from "react-router-dom";
import {getCookie, setCookie} from "./utility/CookieHandler";
import CookieConsent from "react-cookie-consent";

export default class Footer extends Component {
  static contextType = ConfigContext;

  render() {
    return (
      <>
        <footer id="footer">

          <div className="footer-socials">
            <div className="container">
              <a onClick="captureOutboundLink('http://www.twitter.com','visit'); return false;"
                 href="https://twitter.com/conduction_nl" title="Twitter"
                 className="animation animated animation-bounce-in" data-animation="animation-bounce-in"><i
                className="fab fa-twitter"></i></a>
              <a onClick="captureOutboundLink('http://www.facebook.com','visit'); return false;"
                 href="https://www.facebook.com/conductionnl/" title="Facebook"
                 className="animation animated animation-bounce-in" data-animation="animation-bounce-in"
                 data-delay="200"><i className="fab fa-facebook-f"></i></a>
              <a onClick="captureOutboundLink('http://www.instagram.com','visit'); return false;"
                 href="https://www.instagram.com/conduction_nl" title="Instagram"
                 className="animation animated animation-bounce-in" data-animation="animation-bounce-in"
                 data-delay="800"><i className="fab fa-instagram"></i></a>
              <a onClick="captureOutboundLink('http://www.linkedin.com','visit'); return false;"
                 href="https://www.linkedin.com/company/conduction/about/" title="LinkedIn"
                 className="animation animated animation-bounce-in" data-animation="animation-bounce-in"
                 data-delay="1000"><i className="fab fa-linkedin"></i></a>
              <a onClick="captureOutboundLink('http://www.github.com','visit'); return false;"
                 href="https://github.com/ConductionNL" title="Github"
                 className="animation animated animation-bounce-in" data-animation="animation-bounce-in"
                 data-delay="1200"><i className="fab fa-github"></i></a>
            </div>
          </div>

          <div className="footer-copyright">
            <div className="container">
              <p>© 2018 Copyright. All Rights Reserved. Made with love by <a href="https://www.conduction.nl"
                                                                             target="_blank">Conduction</a>.</p>
            </div>
          </div>

        </footer>
        {
          getCookie('cookieConsent') == null &&
          <CookieConsent
            onAccept={() => {
              setCookie('cookieConsent', 'true', 1000);
            }}
          >
            This website uses cookies to improve your user experience. By accepting and closing the
            cookie information banner when first visiting the page you consent to our use of cookies.
          </CookieConsent>
        }
      </>
    );
  }
}

