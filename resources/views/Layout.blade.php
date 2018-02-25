
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
    <body>
        <header role="banner" id="fh5co-header">
        <div class="fluid-container">
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
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">register</a></li>
                        <li><a href="#" data-nav-section="faq"><span>FAQ</span></a></li>
                        <li><a href="#" data-nav-section="trusted"><span>LISTE</span></a></li>
                    
                    </ul>
                </div>
            </nav>
      </div>
    </header>
        @yield('contenue');
    </body>
   

   
    </html>