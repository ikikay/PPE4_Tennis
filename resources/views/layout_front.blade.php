<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Site du club de Tennis de Tavaux</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ url('css/bootstrap_front.css')}}" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
        <link href="{{ url('css/starter-template.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ url('css/modern-business_front.css')}}" rel="stylesheet">        
        <!-- CSS du site -->
        <link href="{{ url('css/style_front.css')}}" rel="stylesheet">

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
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="img/logo_tavaux.jpg"></a>
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
                        <li>
                            <a href="{{ route('galerie') }}">Galerie</a>
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
                       
                        @if(Auth::check())
                      
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                {!!Auth::user()->nom!!}&nbsp {!!Auth::user()->prenom!!}&nbsp <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-user">
                        
                                @if ( Auth::user()->valider)
                                <li>
                                    <a href="{{ route('document.index') }}"><i class="fa fa-user fa-fw"></i>Profil</a>
                                </li> 
                               
                                @if (Auth::user()->admin)         
                                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-gear fa-fw"></i> Administration</a>
                                </li>
                                @endif
                                 
                                @else 
                                <li>
                                    <a> En attente de validation </a>
                                </li>
                                <li class="divider"></li>
                                @endif
                                
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out "></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>  
                        <!-- /.navbar-top-links -->

                    
                        @else
                        <li>
                            <a href="{{ route('login') }}">Connexion</a>
                        </li> 
                        @endif


                       
                        

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        @yield('content')


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-5">
                    © FFT - TENNIS CLUB TAVAUX
                </div>
                <div class="col-lg-5">
                    <A target="_blank" href="index_public.php?PHPSESSID=988d71740f75d430862aaaebcceec1fb&us_action=show_note&ui_id_site=1&ui_id_doc=1000200002">Mentions légales</A>   
                </div>
                <div class="col-lg-2">
                    <A target="_blank" href="xml/my_rss_breves_1.rss"><IMG width="16" height="16" border="0" align="absmiddle" src="http://www.club.fft.fr/_adc/sources/lib/sources_adcosoft/commun/img/adm/pics/images_rte/picto_rss.gif"></A>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ url('js/jquery_front.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url ('js/bootstrap.min_front.js')}}"></script>
    <!-- BootBox (modals) -->
    <script src="{{url('js/bootbox.min.js')}}"></script>
    <!-- Mon JavaScript -->
    <script src="{{url('js/perso.js')}}"></script>


    <!-- Script to Activate the Carousel -->
    <script>
                                           $('.carousel').carousel({
                                               interval: 5000 //changes the speed
                                           });
    </script>

</body>

</html>
