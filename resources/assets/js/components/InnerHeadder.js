import React, { Component } from 'react'
import {Link} from 'react-router-dom';

import ReactDOM from 'react-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';



export default class InnerHeadder extends Component {
    render () {
        return (
            <div>

                <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
                    <img id="logo" style={{height: '50px'}}
                         src="https://thumbs.dreamstime.com/b/molde-do-projeto-do-logotipo-do-vetor-do-sal%C3%A3o-de-beleza-90821786.jpg"/>
                    <h2 className="text-white "> Styly</h2>

                    <div className="collapse navbar-collapse" id="navbarColor02">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item active">
                                <a className="nav-link ml-auto" href="#">Logout<span
                                    className="sr-only">(current)</span></a>
                            </li>
                        </ul>


                    </div>

                </nav>
            </div>


        )
    }
}

