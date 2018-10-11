<!doctype html>
<html lang="{{ app()->getLocale() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>Styly</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}


</head>
<body>
<div id='search'>
<!-- {{--<script src="assets/js/app.js"></script>--}} -->
</div>
<div >

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img id="logo" style="height: 50px  " src="https://thumbs.dreamstime.com/b/molde-do-projeto-do-logotipo-do-vetor-do-sal%C3%A3o-de-beleza-90821786.jpg"/>
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









<script src="js/page2.js"></script>
<div>
    <div class="col-md-3 mb-md-0 mb-3" >
    <div class="card mx-auto mt-5" style="width: 18rem; ">
        <img class="card-img-top"  src="{{$profile[0]->profile_pic}}" alt="Card image cap">
        <div class="card-body">

            <h3>{{$profile[0]->first_name}} {{$profile[0]->last_name}}</h3>
            <p class="card-text">{{$profile[0]->gender}} <br/>
                {{$profile[0]->total_rate}}<br/>
                ${{$profile[0]->phase_rate}}/hour <br/><br/>
                {{$profile[0]->description}} <br/></p>
        </div>
    </div>
</div>

<button type="button" class="btn btn-secondary btn-lg bg-success" >Resrve now</button>
<div class="row ">
    <div class="col-md-3 mb-md-0 mb-3">
        <div class="card mt-5" style="width: 18rem;">
            <div class="card-header">
                Contact details
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h2>Address:</h2> <br/><p>
                        {{$profile[0]->home_no}}<br/> {{$profile[0]->street_address}}<br/>{{$profile[0]->city}}<br/>{{$profile[0]->state}}
                    </p></li>
                <li class="list-group-item"><h2>Telephone</h2> <br/><p>
                        {{$profile[0]->contact}}<br/>

                    </p></li>
                <li class="list-group-item"><h2>Email</h2> <br/><p>

                        {{$profile[0]->email}}
                    </p></li>


            </ul>
        </div>
    </div>

</div>

</div>




<div class="card mt-5">
    <h5 class="card-header mt-5">Experiance</h5>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">{{$profile[0]->Experiance}}</p>

    </div>
</div>

<div class="card mt-5">
    <h5 class="card-header">Educational</h5>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">{{$profile[0]->education}}</p>

    </div>
</div>
<div class="card mt-5">
    <h5 class="card-header">Skills</h5>
    <div class="card-body">
        <h5 class="card-title">Skill set</h5>
        @foreach($profile as $skill)

            @switch($skill->skill_id)
                @case(1)
                <p class="card-text">Natural Hairstlist</p>
                @break

                @case(2)
                <p class="card-text">LOC Specialist</p>
                @break

                @case(3)
                <p class="card-text">Colorist</p>
                @break

                @case(4)
                <p class="card-text">Extention Expert</p>
                @break

                @default
                <p class="card-text">Wigmaker</p>
            @endswitch

        @endforeach
    </div>
</div>

<div class="card mt-5">
    <h5 class="card-header">Calendar</h5>
    <div class="card-body">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css">

        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}

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
