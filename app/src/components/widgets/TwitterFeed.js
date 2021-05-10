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
    return(
      <>
        <div className="wrap-container8040 " style={{paddingTop:10}}>
          <div className="container">
            <div className="post-heading-left">
              <h2 style={{color: "#4386FB"}}>Buzz</h2>
            </div>
            <div className="col">
              <div className="col-md-6">
                <a className="twitter-timeline" data-width="866" data-height="1020" data-theme="light"
                   href="https://twitter.com/conduction_nl?ref_src=twsrc%5Etfw">Tweets by conduction_nl</a>
                <script async src="https://platform.twitter.com/widgets.js" charSet="utf-8"></script>
              </div>
            </div>


            <div className="col">
              <div className="col-md-6">
                <div className="iframely-embed">
                  <div className="iframely-responsive"><a
                    href="https://commonground.nl/blog/view/54476659/de-common-ground-is-als-het-huwelijk%25E2%2580%25A6-je-moet-er-in-geloven-anders-wordt-het-nietsDe"
                    data-iframely-url="//cdn.iframe.ly/b9FLPL1"></a></div>
                </div>
                <script async src="//cdn.iframe.ly/embed.js" charSet="utf-8"></script>


                <div className="iframely-embed">
                  <div className="iframely-responsive"><a
                    href="https://www.binnenlandsbestuur.nl/digitaal/nieuws/collectief-staan-gemeenten-sterker-in-ict.12646934.lynkx"
                    data-iframely-url="//cdn.iframe.ly/PYoZFMZ"></a></div>
                </div>
                <script async src="//cdn.iframe.ly/embed.js" charSet="utf-8"></script>
              </div>
            </div>
          </div>
        </div>
      </>
    )
}
}
