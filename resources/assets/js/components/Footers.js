import React, { Component } from 'react'
import {Link} from 'react-router-dom';

import ReactDOM from 'react-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';



export default class Footers extends Component {
    render () {
        return (
            <div>

                <footer className="page-footer font-small blue pt-4 bg-dark">


                    <div className="container-fluid text-center text-md-left">


                        <div className="row">


                            <div className="col-md-6 mt-md-0 mt-3">


                                <h5 className="text-uppercase text-white">Us...</h5>
                                <p className="text-white">Styly is the pioneer and #1  operator offering the most trusted online saloon & stylist connecting experience in USA</p>

                            </div>


                            <hr className="clearfix w-100 d-md-none pb-3"/>


                            <div className="col-md-3 mb-md-0 mb-3">


                                <h5 className="text-uppercase text-white">Contact</h5>

                                <ul className="list-unstyled ">
                                    <li>
                                        <a href="#!" className="text-white">2067 Market St,<br/> San Francisco,<br/> CA 94114,<br/> USA </a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-white">+1 415-645-3453</a>
                                    </li>

                                </ul>

                            </div>



                            <div className="col-md-3 mb-md-0 mb-3 ">


                                <h5 className="text-uppercase text-white">Information</h5>

                                <ul className="list-unstyled">
                                    <li>
                                        <a href="#!" className="text-white">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-white">Privacy policy</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-white">Terms and conditions</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-white">Terms of Sale</a>
                                    </li>
                                </ul>

                            </div>


                        </div>


                    </div>



                    <div className="footer-copyright text-center py-3 text-white">© 2018 Copyright:
                        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> StylyCollection.com</a>
                    </div>


                </footer>





            </div>


        )

    }
}

