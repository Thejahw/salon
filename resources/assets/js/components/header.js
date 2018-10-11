import React, { Component } from 'react'
import {Link} from 'react-router-dom';

import ReactDOM from 'react-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';



export default class Header extends Component {
    render () {
        return (
            <div>

                <nav className="navbar navbar-expand-lg navbar-dark bg-info">
                    <a className="navbar-brand" href="#">Styly</a>
                    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarColor02">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item active">
                                <a className="nav-link" href="#">Login <span className="sr-only">(current)</span></a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#">Signup</a>
                            </li>

                        </ul>
                        <form action="/search" method='GET' className="search-form">
                            <meta name="csrf-token" content="{{ csrf_token() }}" />

                            <input className="form-control mr-sm-2" type="text" name='location'
                                   />
                                <button className="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                        </form>

                    </div>
                </nav>
            </div>



        )
    }
}

