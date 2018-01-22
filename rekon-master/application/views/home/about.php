<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>About | PT Reka Mulia Konstruksi</title>
<!-- Bootstrap -->
<link href="<?php echo base_url();?>asset/web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>asset/web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>asset/web/css/blue.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" href="<?=base_url().'assets/materialize/images/rekon.png'?>">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url().'assets/materialize/images/newrekon.png'?>"> 
<!--start plugins -->
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/bootstrap.min.js"></script>
<!-- Owl Carousel Assets -->
<link href="<?php echo base_url();?>asset/web/css/owl.carousel.css" rel="stylesheet">
<script src="<?php echo base_url();?>asset/web/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>
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
			<li class="activate"><a href="<?php echo site_url('home/about');?>">ABOUT</a></li>
			<li><a href="<?php echo site_url('home/galery');?>">Gallery</a></li>
			<li><a href="<?php echo site_url('home/contact');?>">CONTACT</a></li>
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
		<h3 class="style pull-left">ABOUT</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="<?php echo site_url('Home');?>">Home</a></li>
		  <li class="active"> About</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="main  span_of_3">
		<h3>Company Profile </h3>
		<p class="para">History of PT. REKON was begin as Technical dan Construction Division within PT. RELIFE PROPERTY since its founding at 2007, and has became established as Legal Company by the Decree of Minister of Law and Human Right No. AHU-20730.AH.01.01 Tahun 2012 at month of May 2012<br/><br/>
PT. REKON vast experience includes industrial buildings (Factory), commercial buildings, Housing, golf courses, sport and recreation facilities, as well as roads and bridges, water supply, sewerage and drainage systems.
As a construction and engineering ﬁrm, PT. REKON provides a full range of Services from planning, design and engineering to construction management services, that contribute to all aspects of the construction program.<br/><br/>
The construction philosophy at PT. REKON is a pragmatic design approach that Balances both aesthetic and functional objectives of the client/project, with the Restriction and limitations of time, quality and resources.<br/>
This compromise has created little conﬂict and PT. REKON is proud that is has reached a happy equilibrium among the triad of forces that determine success: Client requirements, design imperatives, and team ingenuity.<br/><br/>
PT. REKON projects are eloquent proof.<hr/>
		<div class="main  span_of_3">
			<h3>Vision & Mission</h3>
			<p class="para">
			<b>Vision</b><br/>
			To be a leading Group in property development business, property management business, and other property related business by promoting green development concept.<br/><br/>
			<b>Mission</b><br/>
			 Profit<br/>

    - Creating sustainable growth and profit for stakeholders<br/>
    - Fulfilling housing demand for up-medium society<br/>

People<br/>

    - Recruiting and developing professional employees under healthy and challenging working environment<br/>
    - Being responsible of community development for societies around the company's projects<br/>
    - Preserving family values and guiding customers transformation<br/>

Planet<br/>

    - Green development concept in all of its products</h6>


			</p>
			<hr/>
		</div>	
		<div class="main  span_of_3">
		<h3>Achievement</h3>
			<p class="para">
				

INDOCEMENT AWARD<br/>
Relife Property is awarded in Indocement Award 2010 for "the best marketing strategy and customer satisfaction" Indonesian Developer<br/><br/>
GREEN PROPERTY AWARD<br/>
Green Property Award is achieved for Relife Property's consistency applying Green Development Concept in every product we made. The Award was organized by Housing Estate Magazine and the award was given by Indonesia Housing Minister at the time,  Mr. Suharso Monoarfa

			</p>

		</div>	
		<div class="col-md-3 span1_of_3">
			
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="cursual"><!--  start cursual  -->
		<h4>our happy clients<span class="line"></span></h4>
	</div>
	<div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
<!-- 		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c4.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c2.png" alt="Lazy Owl Image">
			</div>
		</div> -->
	</div><!----//End-img-cursual---->
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