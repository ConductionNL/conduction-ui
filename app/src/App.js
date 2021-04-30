import React, {Component} from 'react';
import './App.css';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import ConfigContext from "./components/Context/Config";
import {HomeCss} from "./components/utility/HomeStyling";
import Header from "./components/Header";
import Footer from "./components/Footer";
import HomePage from "./components/HomePage";
import TeamPage from "./components/TeamPage";
import ProjectenPage from "./components/ProjectenPage";
import PartnersPage from "./components/PartnersPage";
import CommongroundPage from "./components/CommongroundPage";
import CaasPage from "./components/CaasPage";
import OdysseyPage from "./components/OdysseyPage";
import ContactPage from "./components/ContactPage";


export default class App extends Component {

  constructor(props) {
    super();
    let api = null;
    let url = null;

    if (window.location.href.includes('http://localhost')) {
      url = 'http://localhost:3000';
      api = 'http://localhost:83/api';
    } else {
      url = 'https://www.dashkube.com';
      api = 'https://www.dashkube.com/api';
    }

    this.state = {
      url: url,
      api: api,
    }

    document.getElementsByTagName("body")[0].style.overflow = "auto";
  }

  render() {
    return (
      <>
        <ConfigContext.Provider value={this.state}>
          <Router>
            <HomeCss/>
            <Header/>
            <Switch>
              <Route path="/team" component={TeamPage}/>
              <Route path="/odyssey" component={OdysseyPage}/>
              <Route path="/projecten" component={ProjectenPage}/>
              <Route path="/partners" component={PartnersPage}/>
              <Route path="/common-ground" component={CommongroundPage}/>
              <Route path="/contact" component={ContactPage}/>
              <Route path="/caas" component={CaasPage}/>
              <Route path="/" component={HomePage}/>
            </Switch>
            <Footer/>
          </Router>
        </ConfigContext.Provider>
      </>
    );
  }
}


