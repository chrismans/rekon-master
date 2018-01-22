<?php 

$active = $this->uri->segment(1);

?>


<!DOCTYPE html>
<html lang="en">

<!--================================================================================

  Item Name: PT. Rekamulya Kontruksi
  Version: 1.0
  Author: Miftahul Huda & Tim PKL SMK Taruna Bhakti, Depok
  Author URL: http://smktarunabhakti.net
  Contact: yotando.08@gmail.com
  Github: http://github.com/

================================================================================ -->

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 2.2
  Author: GeeksLabs 
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout01/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2015 05:21:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>PT.Reka Mulia Konstruksi</title>

    <!-- Favicons-->
    <link rel="icon" href="<?=base_url().'asset/web/images/newrekon.png'?>">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?=base_url().'asset/web/images/newrekon.png'?>">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?=base_url().'assets/materialize/images/favicon/mstile-144x144.jpg'?>">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    

    <link href="<?=base_url().'assets/materialize/css/materialize.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url().'assets/materialize/css/style.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?=base_url().'assets/materialize/css/custom-style.css'?>" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?=base_url().'assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url().'assets/materialize/js/plugins/data-tables/css/jquery.dataTables.min.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url().'assets/materialize/js/plugins/jvectormap/jquery-jvectormap.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url().'assets/materialize/js/plugins/chartist-js/chartist.min.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="<?=base_url().'assets/cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css'?>" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- jQuery Library -->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/jquery-2.1.4.min.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/jquery-1.11.2.min.js'?>"></script>    

</head>

<body>
    <!-- Start Page Loading -->
<!--     <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Page Loading -->

    <!-- START HEADER -->

    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">

                <div class="nav-wrapper" style="background-color:#55B0DA;">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="<?php echo site_url('administrator');?>" class="brand-logo darken-1"><img src="<?=base_url('asset/web/images/newrekon.png')?>" style="width:40px; padding-top:5px;" alt="materialize logo">&nbsp<img src="<?=base_url('assets/materialize/images/rekon-text.png')?>" style="padding-bottom:10px;" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>

                    <ul class="right hide-on-med-and-down">        
                         <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>                
<!--                         <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a> -->
                        </li>                        
                        <!-- <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>

    </header>

       <div id="main">
    <?php $this->load->view("menu")?>

            <section id="content">

                <!--start container-->

 
                  <?php 
            $link = $this->uri->segment(3);
            if ($link) {
                $this->load->view("page/$link");
            }
            else { ?>

                            <div class="container">
               <div class="section">
              <div id="chartist-line-chart" class="section">
                  <div class="row">
                    <div class="col s12 m4 l3">
                    </div>
                                
       <video  width="500" height="500" controls>
  <source src="<?php echo base_url('assets/materialize/vidio/video1.mp4');?>" type="video/mp4">
</video>   
                  </div>
                </div>
                </div>
                </div> 
            <?php } ?>

            </section>
    </div>
  </body>
  <!-- ================================================
    Scripts
    ================================================ -->
    <script type="text/javascript" defer="true" src="<?= base_url('assets/js/string.js')?>"></script>
    
    <!--materialize js-->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/materialize.js'?>"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js'?>"></script>

   <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/data-tables/js/jquery.dataTables.min.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/data-tables/data-tables-script.js'?>"></script>


    <!-- chartist -->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/chartist-js/chartist.min.js'?>"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/chartjs/chart.min.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/chartjs/chart-script.js'?>"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/sparkline/sparkline-script.js'?>"></script>
    
    <!-- google map api -->

    <!--jvectormap-->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/jvectormap/vectormap-script.js'?>"></script>    

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins.js'?>"></script>
    <!-- Toast Notification -->
    <script type="text/javascript"></script>
  
</html>