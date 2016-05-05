<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="">

        <title>Ecoplast</title>
        
    
        
        


<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/jquery.dataTables.min.css">

<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.min.css">
<link href="assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/buttons.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/datatables/scroller.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/core.css">
<link rel="stylesheet" type="text/css" href="assets/css/components.css">
<link rel="stylesheet" type="text/css" href="assets/css/icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/pages.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">


  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
<script type='text/javascript' src="assets/js/modernizr.min.js"></script>
        
        
</head>
<body class="fixed-left widescreen">
    <!-- Begin Page -->
    <div id="wrapper">
        
        <div class="topbar">
            <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="dashboard" class="logo"><i class="icon-magnet icon-c-logo"></i><span>EC<i class="md md-album"></i>PLAST</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                          
                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Perfil</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Configuracion</a></li>
                                       
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i>Cerrar Sesion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div><!-- TOP BAR END -->
        
        <!-- LEFT SIDE-MENU START -->
        <div class="left side-menu">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 607px;"><div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 607px;">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                          <li class="text-muted menu-title"></li>

                            <li {{{Request::is('dashboard')? 'class=active' :''}}}>
                                    <a class="" href="{{ url('/dashboard') }}"><i class="fa fa-area-chart"></i> Dashboard</a>
                            </li>

                            <li {{{Request::is('embarques')? 'class=active' :''}}}>
                                    <a class="" href="{{ url('/embarques') }}"><i class="fa fa-paper-plane"></i> Embarques</a>
                            </li>


                         

                            <li {{{Request::is('rastreo')? 'class=active' :''}}}>
                                    <a class="" href="{{ url('/rastreo') }}"><i class="fa fa-map-marker"></i> Rastreo</a>
                            </li>


                            <li {{{Request::is('empresas')? 'class=active' :''}}}>
                                    <a class="" href="{{ url('/empresas') }}"><i class="fa fa-building-o"></i> Empresas</a>
                            </li>

                     

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-th-list"></i><span> Catalogos </span> </a>
                                <ul class="list-unstyled">

                                    <li {{{Request::is('perfiles')? 'class=active' :''}}}>
                                    <a class="" href="{{ url('/perfiles') }}">Perfiles</a>
                                    </li>


                                    <li {{{Request::is('usuarios')? 'class=active' :''}}}>
                                        <a class="" href="{{ url('/usuarios') }}">Usuarios</a>
                                    </li>

                                    <li {{{Request::is('ubicaciones')? 'class=active' :''}}}>
                                        <a class="" href="{{ url('/ubicaciones') }}">Ubicaciones</a>
                                    </li>
    
                                </ul>
                            </li>

                            

                        
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div><div class="slimScrollBar" style="width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 607px; visibility: visible; background: rgb(220, 220, 220);"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
            </div>
        <!-- Left Side Bar Menu End -->
        
          <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->