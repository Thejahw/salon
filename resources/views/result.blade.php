<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>Styly</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.2.1/css/bootstrap-slider.min.css" rel="stylesheet">

</head>



<body>
<div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img id="logo" style="height: 50px" src="https://thumbs.dreamstime.com/b/molde-do-projeto-do-logotipo-do-vetor-do-sal%C3%A3o-de-beleza-90821786.jpg"/>
        <h2 class="text-white ">  Styly</h2>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link ml-auto" href="#">Logout<span class="sr-only">(current)</span></a>
                </li>
            </ul>


        </div>

    </nav>
</div>



<div class="row mb-3">
        <div class="card" style="width: 18rem;margin-left: 100px">
            <div class="card-body">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" >Custom Search</h5>

                        <form action="/filter" method="GET"  >
                            <label>Type</label>
                            <div class="check-box">
                                <input type="checkbox" name="type1" value="1"/>
                                <label>Natural Hairstylist:</label>
                            </div>
                            <div class="check-box">
                                <input type="checkbox" name="type2" value="2"/>
                                <label>Colorist:</label>
                            </div>
                            <div class="check-box">
                                <input type="checkbox" name="type3" value="3" />
                                <label>Extention expert:</label>
                            </div>
                            <div class="check-box">
                                <input type="checkbox" name="type4" value="4"/>
                                <label>Wigmaker:</label>
                            </div>


                            <label>Location</label>
                            <select id="ddlViewBy" name="location" >

                                <option value="califonia" selected="selected" name="1">Califonia</option>

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
                            <label>Hourly rate Range</label><br/>
                            <label>Min $</label>
                            <input type="text" name="min_rate" value="0" placeholder="0">
                            <label>Max $</label>
                            <input type="integer" name="max_rate" value="1000" placeholder="1000">

                            <button class="btn btn-primary bg-primary" style="height: 25px; width:50px; margin: 5px" type="submit">Search</button>


                        </form>



                    </div>
                </div>



            </div>


        </div>


    <div style="margin: 20px">

        <h2 class="mt-5">reslt(s) for '{{request()->input('location')}} {{request()->input('name')}} {{request()->input('type')}}' </h2>

        <div class="row">
            @foreach($freelancers as $freelancer)
                <h2></h2>

                        <div >
                        <div class="card " style="width: 18rem; margin: 20px">
                            <img class="card-img-top mt-5" src="{{$freelancer->profile_pic}}" alt="Card image cap" style="height: 18rem; width: 18rem">
                            <div class="card-body">
                                <h5 class="card-title">{{$freelancer->first_name}} {{$freelancer->last_name}} </h5>
                                <p class="card-text"> <h6>Address:</h6>
                                                    {{$freelancer->home_no}}<br/>
                                                    {{$freelancer->street_address}}<br/>
                                                    {{$freelancer->city}}</p>
                                <p class="card-text"> <h6>Education:</h6>
                                                    {{$freelancer->education}}</p>
                                <p class="card-text"> <h6>Ratings:</h6>
                                                     {{$freelancer->total_rate}}</p>
                                <p class="card-text"> <h6>Rate:</h6>
                                ${{$freelancer->phase_rate}}/hour</p>
                                <form action="/details"  method="GET" >
                                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                                    <button class="btn btn-success" type="submit" name="id" value=" {{$freelancer->sid}}" >View Profile </button>
                                </form>


                            </div>
                        </div>
                    </div>



            @endforeach
        </div>



    </div>

</div>


<footer class="page-footer font-small blue pt-4 bg-dark">


    <div class="container-fluid text-center text-md-left">


        <div class="row">


            <div class="col-md-6 mt-md-0 mt-3">


                <h5 class="text-uppercase text-white">Us...</h5>
                <p class="text-white">Styly is the pioneer and #1  operator offering the most trusted online saloon & stylist connecting experience in USA</p>

            </div>


            <hr class="clearfix w-100 d-md-none pb-3"/>


            <div class="col-md-3 mb-md-0 mb-3">


                <h5 class="text-uppercase text-white">Products</h5>

                <ul class="list-unstyled ">
                    <li>
                        <a href="#!" class="text-white">Team</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Blog</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">How it work</a>
                    </li>

                </ul>

            </div>



            <div class="col-md-3 mb-md-0 mb-3 ">


                <h5 class="text-uppercase text-white">Information</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-white">About Us</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Privacy policy</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Terms and conditions</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Terms of Sale</a>
                    </li>
                </ul>

            </div>


        </div>


    </div>



    <div class="footer-copyright text-center py-3 text-white">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> StylyCollection.com</a>
    </div>


</footer>



{{-------------------------------------------------------------------------------------------------}}





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>

</body>

</html>
