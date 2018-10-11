import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';

import InnerHeadder from './InnerHeadder'
import InnerFooter from './InnerFooter'


export default class Search extends Component {
    render () {
        return (
            <BrowserRouter>
                <div>
                    <InnerHeadder />

                    <h1>search results................</h1>

                    <InnerFooter/>
                </div>
            </BrowserRouter>
        )
    }
}

if(document.getElementById('page2')){
    ReactDOM.render(<Search />, document.getElementById('page2')) ;
}

