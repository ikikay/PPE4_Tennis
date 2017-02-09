<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Tennis Tavaux</title>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Le choix du skin par defaut est bleu.
        On peu le changer par d'autres skin, vérifiez bien d'appliquer la classe du skin, au tag Body pour que ça prenne effet
    -->
    <link rel="stylesheet" href="{{url('css/skins/skin-blue.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{ route("admin.dashboard") }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">T.T.</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>TENNIS </b>TAVAUX</span>
            </a>


            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Menu déroulant</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Vous avez 4 méssages</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!-- User Image -->
                                                    <img src="{{url('img/userp-160x160.jpg') }}" class="img-circle" alt="User Image">
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Administrateur
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>La partie admin du site.</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                </li>
                                <li class="footer"><a href="#">Voir toutes les méssages</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Vous avez 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li><!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 nouvelles inscriptions aujourd'hui
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Tout voir</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Vous avez 9 tâches</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    Créer le panel admin
                                                    <small class="pull-right">5%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class="progress xs">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 5%" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">5% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">Voir toutes les tâches</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{url('img/userp-160x160.jpg') }}" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Sebastien Pernelle</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{url('img/userp-160x160.jpg') }}" class="img-circle" alt="User Image">

                                    <p>
                                        Sebastien Pernelle - Developper Web
                                        <small>Membre depuis Nov. 2014</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Se déconnecter</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{url('img/userp-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Sebastien Pernelle</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Rechercher ...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">Menu principal</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Articles</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route("article.create") }}">Ajouter</a></li>
                            <li><a href="{{ route("article.index") }}">Administrer</a></li>
                        </ul>	

                    </li>
                    <li class="treeview">
                        <a href="{{ route("photo.index") }}"><i class="fa fa-link"></i> <span>Galerie</span>  </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ route("album.index") }}"><i class="fa fa-link"></i> <span>Galerie album</span>  </a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Utilisateurs</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route("user.create") }}">Ajouter</a></li>
                            <li><a href="{{ route("user.index") }}">Administrer</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="{{ route("equipe.index") }}"><i class="fa fa-link"></i> <span>Equipes</span></a>
                    </li>
                    <li class="treeview">
                        <a href="{{ route("rencontre.index") }}"><i class="fa fa-link"></i> <span>Rencontres</span></a>
                    </li>
                    <li class="header">Modification Site</li>
                    <li class="treeview">
                        <a href="{{ route("coordonnee.index") }}"><i class="fa fa-link"></i> <span>Coordonnées</span>  </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->

            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('title')
            </section>

            <!-- Main content -->
            <section class="content">

                @if(Session::has('error'))
                <div class="row">
                    <div class="alert alert-danger">
                        <center><strong>Erreur : </strong> {{Session::get('error')}}</center>
                    </div>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="row">
                    <div class="alert alert-success">
                        <center><strong>Succès : </strong> {{Session::get('success')}}</center>
                    </div>
                </div>
                @endif

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Club de tennis de Tavaux
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2016 <a href="{{ route("admin.dashboard") }}">Club de tennis de Tavaux</a>.</strong> tous droits reservés.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Activités récentes</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Anniverssaire de Denis</h4>

                                    <p>Aura 23 ans le 24 Avril</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Progressions des tâches</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <h4 class="control-sidebar-subheading">
                                    Création du panel Admin
                                    <span class="pull-right-container">
                                        <span class="label label-danger pull-right">5%</span>
                                    </span>
                                </h4>

                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 5%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">Options générales</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Une option
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Quelques options...
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="{{url('js/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{url('js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('js/app.min.js') }}"></script>
    <!-- CK Editor -->
    <script src="{{ url('js/ckeditor/ckeditor.js')}}"></script>
    <!-- BootBox (modals) -->
    <script src="{{url('js/bootbox.min.js')}}"></script>

    <!-- Mon JavaScript -->
    <script src="{{url('js/perso.js')}}"></script>

    <script>
$(function () {
// Replace the <textarea id="editor"> with a CKEditor
// instance, using default configuration.
    CKEDITOR.replace('editor');
//bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
});
    </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
</body>
</html>
