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
import {TwitterTimelineEmbed} from "react-twitter-embed";

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
        <div className="wrap-container8040 " style={{paddingTop: 10}}>
          <div className="container">
            <div className="post-heading-left">
              <h2 style={{color: "#4386FB"}}>Buzz</h2>
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
          </div>
        </div>
      </>
    )
}
}
