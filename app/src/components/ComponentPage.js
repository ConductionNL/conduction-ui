import React, {Component} from 'react';

// Import the context
import ConfigContext from "./Context/Config";
import ContactForm from "./widgets/ContactForm";
import {HashLoader} from "react-spinners";
import { css } from "@emotion/css";
import {LangSwitch} from "./utility/LangSwitch";
import {metadata} from "./utility/Metadata";

export default class ComponentPage extends Component {
  static contextType = ConfigContext;

  constructor(props) {
    super(props);
    metadata('Conduction | Onze Componenten');
    this.state = {
      component: null,
      override: css`
        display: block;
        margin-left: auto;
        margin-right: auto;
      `
    }

    LangSwitch('nl');
  }

  componentDidMount() {
    if (this.props.match !== undefined && this.props.match.params.name !== undefined) {
      let url = this.context.api + '/components?name=' + this.props.match.params.name;
      fetch(url, {cache: "force-cache"})
        .then(response => response.json())
        .then(this.handleComponent)
        .catch()
    } else {
      window.location = this.context.url = '/componenten';
    }
  }

  handleComponent = (data) => {
    if (data['hydra:member'].length === 0 ) {
      window.location = this.context.url = '/componenten';
    }

    this.setState({component: data['hydra:member'][0]});
  }

  render() {

    return (
      <>
        <div className="header-content" style={{backgroundColor: '#4376FC', color: 'white'}}>

        </div>
        <div className="wrap-container8040">
          <div className="container">
            <div className="row">
              {
                this.state.component == null &&
                <div className="text-center" style={{marginTop: "10%", marginBottom: "10%"}}>
                  <HashLoader color={"#4376FC"} loading={true} css={this.state.override} size={50} />
                  <h4 style={{color: "#4376FC", marginTop: '50px'}} className="mt-3 mb-3">Component aan het laden</h4>
                </div>
              }
              {
                this.state.component !== null &&
                  <>
                    <div className="col-sm-10 col-md-7 col-lg-7">
                      <div className="col-text20 margin-bottom20">
                        <div className="post-heading-left">
                          <h2>{this.state.component['name']}</h2>
                          {
                            this.state.component['badges'] !== null && this.state.component['badges'].length > 0 &&
                            this.state.component['badges'].map((item) => (
                              <>
                                <a href={item.href} target="_blank">
                                  <img src={item.img} alt="StyleCI" style={{height: '20px', marginRight: "5px"}} />
                                </a>
                              </>
                            ))
                          }
                          <p>
                            {
                              this.state.component['longDescription']
                            }
                          </p>
                          <br />
                          {
                            this.state.component['platforms'] !== null && this.state.component['platforms'].length > 0 &&
                            this.state.component['platforms'].map((item) => (
                              <>
                                {
                                  item === 'zuid-drecht' &&
                                  <a target="_blank" href="https://www.zuid-drecht.nl">
                                    <img alt="" width="110px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iw5HDq8Ouw6lfMSIgZGF0YS1uYW1lPSLDkcOrw67DqSAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA5MzkuNTcgMTA5OC44OSI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNjMDA7fS5jbHMtMntmaWxsOiMzNjY5YTU7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT56dWlkIERyZWNodCBOb3BheW9mZjwvdGl0bGU+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTc2LDk2Ny4xMWMtNTYsNDEuMzktMTAxLjQzLDY2LjA1LTExMSw3MS4xMWE0LDQsMCwwLDEtMy43MiwwYy0yNS41Ny0xMy41LTMwNy40OC0xNjctMzYxLjM3LTQwNmE0LDQsMCwwLDEsNy4zOC0yLjgxYzM4LjU0LDY4LjkzLDEyNS4zNywxMTkuMjYsMTg3LjUxLDE1Mi42OSw1Mi41LDI4LjIzLDExMy42Miw1MC4yMSwxNjguMzQsODAuMzZDNTA4LjIyLDg4Ny4yOSw1NDksOTE3LjY5LDU3Nyw5NjEuNzVBNCw0LDAsMCwxLDU3Niw5NjcuMTFaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODM0LjcxLDIxNS44NFYxMDEuNjVhOC45LDguOSwwLDAsMC04LjktOC45MWgtMjczQTE0LjU5LDE0LjU5LDAsMCwwLDUzOS40MywxMDNsLTE5LDcwLjI4YTE0LjU4LDE0LjU4LDAsMCwxLTEzLjM1LDEwLjIxSDM4M1YxNDcuMTJjMzYuODQtMS4zNCw2Mi40Mi03LjQ1LDgwLjE2LTE1LjEsMjkuNDktMTIuNzQsMzcuMzUtMjkuNzgsMzkuMzYtMzYuNDRhMi4yMiwyLjIyLDAsMCwwLTIuMTMtMi44NEgzMzQuNjFjLTMzLjg4LDAtNjcuOTEsOS4yLTg2LjA4LDQwLjEtMTkuMzgsMzIuOTQtMTguMjQsNzguMDctMTYuNDksMTE0Ljg5LDAsMC01MC02Ni4yMi00MC43Ni0xNDguODdhNS41MSw1LjUxLDAsMCwwLTUuNDgtNi4xMkgxMDAuMzJhOC43OSw4Ljc5LDAsMCwwLTguNzgsOC43OVYxMjRjNC44Niw3OS4yNiw0OS4xNCwyODguNTcsMzcxLjU4LDM4NS40QzczNSw1OTEuMDYsNzc1LjQyLDcxNi4zLDc4My4zMiw3MzguMjRhMS4zOCwxLjM4LDAsMCwwLDIuNTMuMTdjNzUuMy0xNDMuOS04MS40OS0yNDcuNTItODEuNDktMjQ3LjUyLDMxLjMzLDAsNzkuMjMsMTcuOTQsMTE4LDM5Ljc5YTguMjgsOC4yOCwwLDAsMCwxMi4zNy03LjIxVjM2My44M2ExNC42LDE0LjYsMCwwLDAtMTguMTUtMTQuMTdjLTEzLjUsMy4zOS0zMCw2LjY4LTMyLjg3LDcuMjMtMzkuNDYsNy43Ny04NC43NSwxMS4xNS0xMjItOC43M3MtNDcuMjYtNjYuMjctMTguMzMtOTguMjNjMjUuMy0yOCw2NS41My0zNy41LDEwMi4yOS0zNSwyMy41NiwxLjYyLDU1LjE4LDcuNTksNzMuNzEsMTIuNjNBMTIuMTYsMTIuMTYsMCwwLDAsODM0LjcxLDIxNS44NFoiLz48cGF0aCBjbGFzcz0iY2xzLTIiIGQ9Ik02NTQuODcsOTAxLjVhNCw0LDAsMCwxLTYtLjExYy0xMy41Ni0xNi4yNS03NS40Ni04Ni0xODUuNzMtMTQ2LjQyQTc1Ni40NCw3NTYuNDQsMCwwLDAsMzgzLDcxN2MtMTczLjUzLTcwLjE3LTI4Mi42OS0xNDMuMy0yOTEuNDItMzM4LjF2LTYuMjJhNCw0LDAsMCwxLDcuMjEtMi4zNGM2My42MSw4NywxNDQuNjksMTM3LjksMjQzLjE2LDE4Ni43Nyw0MC4yOCwyMCw4MS4xNywzNi4zMiwxMjEuMjEsNTMuMjUsNjYuMTUsMjgsMTMwLDU3LjU0LDE4NC43MywxMDcuOCwxNi4xOCwxNC44NSwyOS4wOSwyOS4xNSwzNi44MSw1MEM2OTUuNzUsNzk4LjEzLDcwMi41NSw4NDkuMTcsNjU0Ljg3LDkwMS41WiIvPjwvc3ZnPg=="/>
                                  </a>
                                }
                                {
                                  item === 'trouwen' &&
                                  <img alt={"Wat doet de trouwen applicatie"} src="/images/trouwen.png" width="110px" style={{marginLeft: "30px"}} />
                                }
                                {
                                  item === 'verhuizen' &&
                                  <img alt={"Wat doet de verhuizen applicatie"} src="/images/verhuizen.png" width="110px" style={{marginLeft: "30px"}} />
                                }
                                {
                                  item === 'overlijden' &&
                                  <img alt={"Wat doet de overlijden applicatie"} src="/images/overlijden.png" width="110px" style={{marginLeft: "30px"}} />
                                }
                              </>
                            ))
                          }
                          <br />
                          <br />
                          <a href={this.state.component['repository']}
                             style={{marginRight: "20px", fontWeight: "bold", textTransform: "uppercase", fontSize: "15px", color: "#4376FC", padding: "7.5px 15px 7.5px 15px", borderRadius: "25px", border: "2.5px solid #4376FC"}}
                             target="_blank"> Bekijk repository</a>
                          <a href={this.state.component['documentation']}
                             style={{marginRight: "20px", fontWeight: "bold", textTransform: "uppercase", fontSize: "15px", color: "#4376FC", padding: "7.5px 15px 7.5px 15px", borderRadius: "25px", border: "2.5px solid #4376FC"}}
                             target="_blank"> Bekijk documentatie</a>
                        </div>
                      </div>
                    </div>
                    <div className="col-sm-10 col-md-5 col-lg-5">
                      <figure class="animation col-img40 margin-bottom40" data-animation="animation-fade-in-right" style={{width: "600px !important"}}>
                        <img alt={""}  src={this.state.component['image']} width="100%" />
                      </figure>
                    </div>
                  </>
              }
            </div>
          </div>
        </div>
        <ContactForm />
      </>
    );
  }

}
