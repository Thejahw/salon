import React, { Component } from 'react'
import {Link} from 'react-router-dom';

import ReactDOM from 'react-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';



export default class InnerFooter extends Component {
    constructor(){
        super();
        this.state = {
            freelancers:[],
        }
    }



    componentWillMount(){
        axios.get('/api/freelancers ').then(response=>{
            this.setState({
                freelancers:response.data
            });
        }).catch(errors=>{
            console.log(errors);
        })
    }



    render () {
        return (
            <div className="row mb-3">
                <div className="card" style="width: 18rem;margin-left: 100px">
                    <div className="card-body">
                        <h5 className="card-title">Categories</h5>
                        <form action="/filter" method="GET">
                            <button className="btn btn-light" style="margin: 5px" action="/sort" method="GET"
                                    name="type" value="1"> Natural Hairstlist
                            </button>
                            <br/>
                            <a className="btn btn-light" style="margin: 5px" action="/sort" name="type" value="2"> LOC
                                Specialist</a><br/>
                            <a className="btn btn-light" style="margin: 5px" action="/sort" name="type"
                               value="3"> Colorist</a><br/>
                            <a className="btn btn-light" style="margin: 5px" action="/sort" name="type" value="4">Extention
                                Expert</a><br/>
                            <a className="btn btn-light" style="margin: 5px" action="/sort" name="type"
                               value="5"> Wigmaker</a><br/>
                        </form>


                        <div className="card">
                            <div className="card-body">
                                <h5 className="card-title">Custom Search</h5>

                                <form action="/filter" method="GET">
                                    <label>Type</label>
                                    <select id="ddlViewBy" name="type">
                                        <option value="1" selected="selected" name="1">Natural Hairstlist</option>
                                        <option value="2" name="2">Colorist</option>
                                        <option value="3" name="3">Extention Expert</option>
                                        <option value="4" name="4">Wigmaker</option>
                                    </select>
                                    <button className="btn btn-primary bg-primary"
                                            style="height: 25px; width:50px; margin: 5px" type="submit">Search
                                    </button>


                                </form>


                            </div>
                        </div>


                    </div>


                </div>

                    <div style="margin: 20px">
                    {/*<h2 class="mt-5">reslt(s) for '{{request():input('location')}}'</h2>*/}


                        {this.state.freelancers.map(freelancer=>
                            <div className="card" style="width: 18rem; margin: 20px">
                                <img className="card-img-top mt-5" src="freelancer.profile_pic"
                                     alt="Card image cap"/>
                                <div className="card-body">
                                    <h5 className="card-title">{freelancer.first_name} {freelancer.last_name} </h5>
                                    <p className="card-text"><h6>Address:</h6>
                                        {freelancer.home_no}<br/>
                                        {freelancer.street_address}<br/>
                                        {freelancer.city}</p>
                                    <p className="card-text"><h6>Education:</h6>
                                        {freelancer.education}</p>
                                    <p className="card-text"><h6>Ratings:</h6>
                                        {freelancer.total_rate}</p>
                                    <p className="card-text"><h6>Rate:</h6>
                                        {freelancer.phase_rate}/hour
                                    </p>
                                    <form action="/details" method="GET">
                                        <meta name="csrf-token" content="{{ csrf_token() }}"/>
                                        <button className="btn btn-success" type="submit" name="id"
                                                value=" {freelancer.sid}">View Profile
                                        </button>
                                    </form>


                                </div>
                            </div>


                        )}



                    @endforeach


             </div>
            </div>
        )

    }
}

