<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Contact | PT Reka Mulia Konstruksi</title>
<!-- Bootstrap -->
<link href="<?php echo base_url();?>asset/web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>asset/web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>asset/web/css/blue.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" href="<?=base_url().'assets/materialize/images/newrekon.png'?>">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url().'assets/materialize/images/newrekon.png'?>"> 

<!--font-Awesome-->
   	<!-- <link rel="stylesheet" href="fonts/web/css/font-awesome.min.css"> -->
<!---font-Awesome-->
<!-- start plugins -->
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/web/js/menu.js" type="text/javascript"></script>
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="<?php echo site_url('Home');?>"><img width="150" height="100" src="<?php echo base_url();?>asset/web/images/newrekon.png" alt="" height="100" width="370"/></a>
		</div> 
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav style="padding-top:20px;">
		<ul class="menu list-unstyled">
			<li><a href="<?php echo site_url('');?>">HOME</a></li>
			<li><a href="<?php echo site_url('home/about');?>">ABOUT</a></li>
			<li><a href="<?php echo site_url('home/galery');?>">Gallery</a></li>
			<li class="activate"><a href="<?php echo site_url('home/contact');?>">CONTACT</a></li>
			<li><a href="<?php echo site_url('administrator');?>">Sign In</a></li>
		</ul>
		</nav>
		<script src="<?php echo base_url();?>asset/web/js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Contact us</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="<?php echo site_url('Home');?>">Home</a></li>
		  <li class="active">contact</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="contact">
		<div class="contact_main">
			    <div class="col-md-4 company_ad">
				    <h2>find Address :</h2>
      				<address>
						 <p>Jl.Arief Rahman Hakim</p>
						 <p>No.3 Ruko Graha Depok Mas</p>
						 <p>Depok, Indonesia</p>
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
				  	<?=form_open('action/save_contact');?>
				  		<td><input type="text" name="nama" placeholder="Nama"></td>
				  		<td><input type="text" name="email" placeholder="Email"></td>
				  		<td><input type="text" name="subject" placeholder="Subject"></td>
				  		<td><textarea name="pesan" placeholder="Your Message Here...."></textarea></td>
				  		<td><input type="submit" value="submit" name="submit" > </td>
				  	<?=form_close();?>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
		</div>
	</div>
</div>
</div>

<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span><marquee>&#169; All rights reserved |&nbsp;<a href="#">PT Reka Mulia Konstruksi</a></marquee></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>