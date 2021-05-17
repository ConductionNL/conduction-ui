import React, {Component} from 'react';
import {BrowserRouter as Router, Link} from "react-router-dom";
import {getCookie, setCookie} from "./utility/CookieHandler";

// Import the context
import ConfigContext from "./Context/Config";

export default class Menu extends Component {
  static contextType = ConfigContext;

  render() {
    return (
      <>
        <header id="header">

          {/*For the sticky navbar*/}
          <div style={{display: 'block',  height: "120px", width: "100%"}} ></div>


        {/*#navigation*/}
        <nav id="navigation" className="navbar navbar-fixed-top" style={{backgroundColor: 'rgb(67, 118, 252)'}}>

          {/*.container*/}
          <div className="container">

            {/*Brand and toggle get grouped for better mobile display */}
            <div className="navbar-header">
              <button type="button" className="navbar-toggle collapsed" data-toggle="collapse"
                      data-target="#menu-collapse-1">
                <span className="sr-only">Menu</span>
                <span className="icon-bar"></span>
                <span className="icon-bar"></span>
                <span className="icon-bar"></span>
              </button>
              <div className="navbar-brand"><Link to="/"><img src="images/logo.png" alt="Logo"/></Link></div>
              {/*site logo */}
            </div>

            {/*Collect the nav links, forms, and other content for toggling */}
            <div className="collapse navbar-collapse" id="menu-collapse-1">
              <ul className="nav navbar-nav navbar-right">
                <li><Link hrefLang='nl' to={'/'} className="smooth-scroll">Home</Link></li>
                <li><Link hrefLang='nl' to={'/team'} className="smooth-scroll">Wie</Link></li>
                <li><Link hrefLang='nl' to={'/projecten'} className="smooth-scroll">Wat</Link></li>
                <li><Link hrefLang='nl' to={'/partners'} className="smooth-scroll">Hoe</Link></li>
                <li><Link hrefLang='nl' to={'/common-ground'} className="smooth-scroll">Common Ground</Link></li>
                <li><Link hrefLang='nl' to={'/caas'} className="smooth-scroll">CAAS</Link></li>
                <li><Link hrefLang='en' to={'/odyssey'} className="smooth-scroll">Odyssey</Link></li>
                <li><Link hrefLang='nl' to={'/contact'} className="smooth-scroll">Contact</Link></li>
                {/*<li><a href="/beveiliging" class="smooth-scroll">Beveiliging</a></li>*/}
                {/*       <li><a href="https://www.conduction.nl/#features" class="smooth-scroll">Features</a></li> */}
              </ul>
            </div>
          </div>
          {/*.container end */}
        </nav>
        {/*#navigation end */}
        {/* .header-content */}
        {/* /.header-content*/}
      </header>
      </>
    );
  }
}

