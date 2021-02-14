<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'GreenTerra') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <style>
        .jumbotron {
            color: black;
            padding: 50px 25px;
            font-family: Montserrat, sans-serif;
        }
        .logo {
            color: green;
            font-size: 200px;
        }
        .intro-image {
            background-image: url("{{ asset('css/images/slide1.jpg') }}");
            background-color: #cccccc;
            height: 300px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .intro-text {
            text-align: center;
            position: absolute;
            background-color: whitesmoke;
            letter-spacing: 3px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            text-decoration-style: wavy;
            font-family: Arial, Helvetica, sans-serif;
        }

        .text {
            text-align: center;
            margin: 50%;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }
        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }
        
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }
        .carousel-indicators li {
            border-color: #f4511e;
        }
        .carousel-indicators li.active {
            background-color: #f4511e;
        }
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }
        .panel {
            border: 1px solid #f4511e; 
            border-radius:0 !important;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }
        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .panel-footer {
            background-color: white !important;
        }
        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }

    </style>
</head>
<body>
    <header>
    <nav class="shadow-sm bg-light navbar navbar-expand-md navbar-light fixed-top">
        <!-- Primary Navigation Menu -->
            <div class="inline-block container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <x-jet-application-mark class="block w-auto h-9"/>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>{{ config('app.name', 'GreenTerra') }}</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav nav">
                        <li class="nav-item"><a class="nav-link active" href="#home">{{__('HOME') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">{{__('ABOUT') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">{{__('CONTACT US') }}</a></li>
                        <div class="ml-auto nav justify-content-end">
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                        </div>
                    </ul>
            </div>
        </div>
    </nav>
    </header>
    
    <div id="home" class="intro-image">
        <div class="intro-text">
            <h1 style="text-transform: uppercase;"><b> Welcome to GreenTerra</b></h1> 
        </div>
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="text-center container-fluid bg-green-50">
        <div class="row">
            <div class="p-5 col">
                <h2><b>About Us</b></h2>
                <p>We are here to connect gardener and plant-parents.</p>
                <p> provide a platform where gardeners can sell their plants from their nursery's store.</p>
                <p>Thus, plant-parents can use this system to purchase their plants.</p>
                @if (Route::has('register'))
                    <br><a href="{{ route('register') }}" class="bg-green-700 btn btn-default" style="color:white;">Lets be our user</a>
                @endif
            </div>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="p-5 text-justify bg-green-100 container-fluid">
        <h2 class="text-center">CONTACT US</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us if you have any question to ask and we will try to answer your question.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Kajang, Selangor, Malaysia</p>
                <p><span class="glyphicon glyphicon-phone"></span> +601-137722913 </p>
                <p><span class="glyphicon glyphicon-envelope"></span> greenterra@gmail.com </p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-success pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <footer>
        <div class="text-center bg-green-800 jumbotron" style="margin-bottom:0">
            <p>&copy greenterra.com</p>
        </div>
    </footer>

    <script>
    $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        } // End if
    });
    
    $(window).scroll(function() {
        $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
            $(this).addClass("slide");
            }
        });
    });
    })
    </script>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!-- Optional JavaScript -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
<script src="{{ asset('/public/js/app.js') }}" defer></script>


</body>
</head>
</html>
