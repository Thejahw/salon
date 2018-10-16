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
            <div  >


                <nav className="navbar navbar-expand-lg navbar-dark bg-dark">


                    <img id="logo" src="https://thumbs.dreamstime.com/b/molde-do-projeto-do-logotipo-do-vetor-do-sal%C3%A3o-de-beleza-90821786.jpg" />
                    <h2 className="text-white ">  Styly</h2>



                    <form action="/search" method="GET" className="search-form row">

                        <meta name="csrf-token" content="{{ csrf_token() }}"/>

                                <select id="home-dropdown" name="location" defaultValue="Location">
                                    <option  value="">--None--</option>
                                    <option  value="califonia">califonia</option>
                                    <option value="florida" >florida</option>
                                    <option  value="Florence"  >Florence</option>
                                    <option value="Huntsville" >Huntsville</option>
                                    <option value="Decatur" > Decatur</option>
                                    <option value="Birmingham" >Birmingham</option>
                                    <option value="Anniston">Anniston</option>
                                    <option value="Phoenix">Phoenix</option>
                                    <option value="Oakland">Oakland</option>
                                    <option value="Sanfransisco">Sanfransisco</option>
                                    <option value="San Jose">San Jose</option>
                                    <option value="Albany">Albany</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="Urbana">Urbana</option>
                                    <option value="Sioux City">Sioux City</option>
                                    <option value="New Orleans">	New Orleans</option>
                                    <option value="Davenport"> Davenport</option>
                                    <option value="Pikeville">Pikeville</option>
                                    <option value="Portland">Portland</option>
                                    <option value="Boston">Boston</option>
                                    <option value="Concord">Concord</option>
                                    <option value="Las Vegas">Las Vegas</option>
                                    <option value="New York City">New York City</option>
                                    <option value="Tulsa">Tulsa</option>
                                    <option value=" St.George"> St.George</option>
                                    <option value="Madison">Madison</option>


                                </select>




                        <div id="search-row">
                            <input type="text" className="form-control mr-sm-2" name="name" placeholder="First name"/>
                        </div>
                        <div id="search-row">
                            <button className="btn btn-outline-light my-2 my-sm-0 raw" type="submit">Search</button>
                        </div>
                    </form>

                    <div className="collapse navbar-collapse" id="navbarColor02">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item active">
                                <a className="nav-link" href="#">Login <span className="sr-only">(current)</span></a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#">Signup</a>
                            </li>

                        </ul>



                    </div>


                </nav>
            </div>




        )
    }
}

