<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap_front.css')}}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/starter-template.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/modern-business_front.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url ('font-awesome_front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logo_tavaux.jpg" alt="Chania"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Le club</a>
                    </li>
                    <li>
                        <a href="#">L'enseignement</a>
                    </li>
                    <li>
                        <a href="#">La compétition</a>
                    </li>
                    <li>
                        <a href="#">Infos Adhérents</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Divers<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('documentation') }}">Documentation</a>
                            </li>
                            <li>
                                <a href="#">Gallerie</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">L'enseignement <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">L'équipe pédagogique</a>
                            </li>
                            <li>
                                <a href="#">L'école de tennis</a>
                            </li>
                            <li>
                                <a href="#">Les cours collectifs adultes</a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>   
                    <li>
                      <a href="{{ route('login') }}">Connexion</a>
                    </li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
@yield('content')
   
<hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ url('js/jquery_front.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url ('js/bootstrap.min_front.js')}}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    </script>

</body>

</html>
