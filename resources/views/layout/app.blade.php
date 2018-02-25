<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Voyageons ensemble &mdash; </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

  

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

<link rel="icon" type="image/png" href="insc/images/icons/favicon.ico"/>

<link rel="stylesheet" type="text/css" href="insc/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="insc/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="insc/css/util.css">
    <link rel="stylesheet" type="text/css" href="insc/css/main.css">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    </head>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">

            	  <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="index.html">Voyageons ensemble</a> 
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/" data-nav-section="home"><span>Accueil</span></a></li>
                        <li><a href="/deposer_voyage" data-nav-section="services"><span>deposer un voyage</span></a></li>
                        <li><a href="/rechercher_voyage" data-nav-section="explore"><span>rechercher un voyage</span></a></li>
                        
                        <li><a href="#" data-nav-section="faq"><span>FAQ</span></a></li>
                        <li><a href="#" data-nav-section="trusted"><span>LISTE</span></a></li>
                    
             


              <!--  <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                 <!--   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
               <!--     <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    
                    
                </div> -->

              
                    <!-- Left Side Of Navbar -->
                   
                           @if (Auth::check())
                        <li><a href="{{url('/profile')}}/{{ Auth::user()->slug }}">Profile</a></li>
                      
                         @endif
                 

                    <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        
                        <li> <a href="">
                                <img src="{{url('../')}}/public/img/{{Auth::user()->pic}}" width="30px" height="30px" class="img-circle"/>
                               </a>  
                        </li>
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ ucwords(Auth::user()->name) }} <span class="caret"></span>
                                </a>

                               
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                             
                            </li>
                        @endif
          
               </ul>
           
                </div>
            </nav>
  @if (Auth::check())

        @yield('contenue')
        @else
         



        @endif
          @yield('content')
         

          
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>