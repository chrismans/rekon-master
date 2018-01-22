
<!DOCTYPE html>
<html lang="en" >

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.2
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout01/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2015 05:25:22 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | REKA MULIA KONSTRUKSI</title>

  <!-- Favicons-->
      <link rel="icon" href="<?=base_url().'asset/web/images/newrekon.png'?>">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url().'asset/web/images/newrekon.png'?>">
<!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?=base_url().'assets/materialize/css/materialize.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=base_url().'assets/materialize/css/style.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?=base_url().'assets/materialize/css/custom-style.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=base_url().'assets/materialize/css/page-center.css'?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?=base_url().'assets/materialize/css/prism.css'?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?=base_url().'assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css'?>" type="text/css" rel="stylesheet" media="screen,projection"> 
</head>

<body class="teal">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
<style type="text/css">
  #gmb{
    width: 200px;
    height: 500px;
  }
</style>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <div class="row">
          <div class="input-field col s12 center">
            <img id="gmb" src="<?=base_url().'asset/web/images/newrekon.png'?>" style="width:32%; padding-top:5px;" class="rectangle responsive-img valign profile-image-login">
            <p class="center login-form-text"><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp PT Reka Mulia Konstruksi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></p>
          </div>
        </div>
        <?=form_open('action/cek_login');?>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="userid" name="userid" type="text" required>
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="userpass" name="userpass" type="password" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" value="Login" class="btn waves-light col s12" style="color:#fff;background-color:#3c3c3c;border:solid 1px #3c3c3c;width:100%;">
          </div>
        <?=form_close();?>
        </div>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?=base_url().'assets/materialize/js/jquery-1.11.2.min.js'?>"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?=base_url().'assets/materialize/js/materialize.js'?>"></script>
  <!--prism-->
  <script type="text/javascript" src="<?=base_url().'assets/materialize/js/prism.js'?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js'?>"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?=base_url().'assets/materialize/js/plugins.js'?>"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout01/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2015 05:25:25 GMT -->
</html>