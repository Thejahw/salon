import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';

import Header from './Header'
import Footers from './Footers'
import Description from './Description'

export default class Index extends Component {
    render () {
        return (
            <BrowserRouter>
            <div>
            <Header />


            <Description/>
            <Footers/>
            </div>
            </BrowserRouter>
    )
    }
}

if(document.getElementById('app')){
    ReactDOM.render(<Index />, document.getElementById('app')) ;
}

