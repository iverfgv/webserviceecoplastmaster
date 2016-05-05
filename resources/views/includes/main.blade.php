<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="">

        <title>Ecoplast</title>
        
    
        
        


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/datatables/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/datatables/scroller.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/core.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">


  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
        
        
</head>
<body class="fixed-left widescreen">
    <!-- Begin Page -->
    <div id="wrapper">
        
        <div class="topbar">
            <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url(); ?>dashboard" class="logo"><i class="icon-magnet icon-c-logo"></i><span>EC<i class="md md-album"></i>PLAST</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                          
                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
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



                            <li class="<?php if($this->uri->segment(1)=="embarques"){echo "active";}?>">
                                    <a class="<?php if($this->uri->segment(1)=="embarques"){echo "active";}?>" href="<?=base_url('embarques')?>"><i class="fa fa-paper-plane"></i> Embarques</a>
                            </li>


                         

                            <li class="<?php if($this->uri->segment(1)=="rastreo"){echo "active";}?>">
                                    <a class="<?php if($this->uri->segment(1)=="rastreo"){echo "active";}?>" href="<?=base_url('rastreo')?>"><i class="fa fa-map-marker"></i> Rastreo</a>
                            </li>


                            <li class="<?php if($this->uri->segment(1)=="empresas"){echo "active";}?>">
                                    <a class="<?php if($this->uri->segment(1)=="empresas"){echo "active";}?>" href="<?=base_url('empresas')?>"><i class="fa fa-building-o"></i> Empresas</a>
                            </li>

                     

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-th-list"></i><span> Catalogos </span> </a>
                                <ul class="list-unstyled">

                                    <li class="<?php if($this->uri->segment(1)=="perfiles"){echo "active";}?>">
                                    <a class="<?php if($this->uri->segment(1)=="perfiles"){echo "active";}?>" href="<?=base_url('perfiles')?>">Perfiles</a>
                                    </li>


                                    <li class="<?php if($this->uri->segment(1)=="usuarios"){echo "active";}?>">
                                        <a class="<?php if($this->uri->segment(1)=="usuarios"){echo "active";}?>" href="<?=base_url('usuarios')?>">Usuarios</a>
                                    </li>

                                    <li class="<?php if($this->uri->segment(1)=="ubicaciones"){echo "active";}?>">
                                        <a class="<?php if($this->uri->segment(1)=="ubicaciones"){echo "active";}?>" href="<?=base_url('ubicaciones')?>">Ubicaciones</a>
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
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-3.jpg" alt="">
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

    


<!-- /Right-bar Contenido -->










<div class="content-page">
            <!-- Start content -->
<div class="content">
    <div class="container">




    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <?php $this->load->view($main_view);?>
               
            </div>
        </div>
    </div>


    </div> <!-- container -->

</div> <!-- content -->

</div>


















<!-- Footer -->
        
        
<!-- <footer class="footer text-right"> </footer> -->
</div> <!-- End wrapper -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script> -->
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/pages/datatables.init.js"></script>





<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/peity/jquery.peity.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/pages/jquery.dashboard_3.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootbox.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>





<!--BOOTBOX -->
  <script>
  $(".alertP").click(function(e)
  {

  });

  </script>
<!--BOOTBOX -->
        
  <script type="text/javascript">
      $(document).ready(function() {
          $('#datatable').dataTable({
            "oLanguage":{
              "sSearch": "Buscar"
            }
          });
          $('#datatable-keytable').DataTable( { keys: true } );
          $('#datatable-responsive').DataTable();
          $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
          var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );


          $('#tablaPerfiles').DataTable({
            "oLanguage":{
              "sSearch":"Buscar"
            }

          });
      } );
      TableManageButtons.init();

  </script>      
        
        
        
        
        
        
        

        

        
		
		
		

        
        
   </body>  

</html>


