import React, { Component } from 'react'
import {Link} from 'react-router-dom';

import ReactDOM from 'react-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';



export default class InnerFooter extends Component {
    render () {
        return (
            <div id="foot">
                <footer className="page-footer font-small bg-dark">


                    <div className="footer-copyright text-center py-3 text-white">© 2018 Copyright:
                        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Stylycolection</a>
                    </div>


                </footer>
            </div>


        )
    }
}

