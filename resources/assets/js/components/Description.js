import React, { Component } from 'react'
import {Link} from 'react-router-dom';

import ReactDOM from 'react-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.bundle.min';




export default class Description extends Component {
    render () {
        return (

            <div>
                <div id="topimg">

                    <div className="card bg-dark text-black-100">
                        <img className="card-img" id="top-img" src="https://www.stylecraze.com/wp-content/uploads/2012/12/Techniques-To-Get-Chic-Wavy-Hair.jpg" alt="Card image"/>
                        <div className="card-img-overlay text-white">
                            <h1 className="card-title">Grab your opportunity </h1>
                            <p  className="card-text">Find out the best option for you in evolutional  Styling world</p>

                            <p className="card-text"></p>
                        </div>
                    </div>

                </div>


                <div className="card text-center w-75 mx-auto" >
                    <div className="card-body ">
                        <h5 className="jumbotron font-weight-bold bg-dark text-white">Become a freelancing hair stylist at Styly</h5>
                        <ul>
                            <ul>
                                <img id="cardimg" src="http://amydarr.com/wp-content/uploads/2015/06/sarasota-hair-stylist.png" alt="Card image"/>
                            </ul>
                            <ul>
                                <h3 className="card-text " >"No matter how much experience you have, how many degrees you have, or how well known you have become — there is always something new to learn. Don’t rest on your past experiences.
                                    If you do nothing to improve your skills, you won’t stay where you are.It never ceases to amaze me that companies spend millions to attract new customers (people they don…"Upgrade your user, not
                                    product.Freelancing is tough. It can be very difficult, in fact. It can wear people down, making them lose sight of what they used to love because they have to do everything else just to get by Value is less about the stuff and more about the stuff the stu…</h3>

                            </ul>
                        </ul>


                    </div>
                </div>

                <div className="card text-center w-75 mx-auto">
                    <div className="card-body">
                        <h5 className="jumbotron font-weight-bold text-white bg-dark">Hire the best stylist for your job

                        </h5>
                        <img id="cardimg" src="https://lovelace-media.imgix.net/getty/521055924.jpg" alt="Card image"/>
                        <h3 className="card-text  text-center ">There is no employing class, no working class, no farming class. You may pigeonhole a man or woman as a farmer
                            or a worker or a professional man or an employer or even a banker. But the son of the farmer will be a doctor
                            or a worker or even a banker, and his daughter a teacher. The son of a worker will be an employer - or maybe president.
                        </h3>

                    </div>
                </div>

                <div className="card text-center font-weight-bold w-75 mx-auto">
                    <div className="card-body">
                        <h5 className="jumbotron font-weight-bold text-white bg-dark">Make money

                        </h5>
                        <img id="cardimg" src="http://1.bp.blogspot.com/-R8WR2BKxteE/U2D4wBquGbI/AAAAAAAAAUI/1K5fsIU9g9g/s1600/earn+money+daily.JPG" alt="Card image"/>
                        <h3 className="card-text">Money. It has been said that money makes the world go around. I am not sure that money is truely has THAT level of importance, but having money does make life easier.

                            We all need money. We all money. And most of us feel we don’t have enough of it.
                            This post is a collection of motivational money quotes. These wise quotes about money are
                            meant to inspire you to go the extra mile to earn more money or to give you some financial wisdom to help you keep hold of what money you have.</h3>

                    </div>
                </div>


            </div>

        )

    }
}

