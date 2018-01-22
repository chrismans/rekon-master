<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Galery | PT Reka Mulia Konstruksi</title>
<!-- Bootstrap -->
<link href="<?php echo base_url();?>asset/web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>asset/web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>asset/web/css/blue.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" href="<?=base_url().'assets/materialize/images/rekon.png'?>">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url().'assets/materialize/images/newrekon.png'?>"> 
<!-- Favicons-->
<!---font-Awesome->

   	<link rel="stylesheet" href="fonts/web/css/font-awesome.min.css">
<!font-Awesome->
<!start plugins -->
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/jquery.min.js"></script>
<script src="web/js/menu.js" type="<?php echo base_url();?>asset/text/javascript"></script>
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

<style type="text/css">
body {
	background: #222;
	color: #eee;
	margin-top: 20px;
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
a {
	color: #FFF;
}
a:hover {
	color: yellow;
	text-decoration: underline;
}
.thumbnails img {
	height: 80px;
	border: 4px solid #555;
	padding: 1px;
	margin: 0 10px 10px 0;
}

.thumbnails img:hover {
	border: 4px solid #00ccff;
	cursor:pointer;
}

.preview img {
	border: 4px solid #444;
	padding: 1px;
	width: 800px;
}
</style>

<body>
<div class="header_bg" style="padding-bottom:3.4%; margin-top: -3.5%;">
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
			<li class="activate"><a href="<?php echo site_url('home/galery');?>">Gallery</a></li>
			<li><a href="<?php echo site_url('home/contact');?>">CONTACT</a></li>
			<li><a href="<?php echo site_url('administrator');?>">Sign In</a></li>
		</ul>
		</nav>
		<script src="<?php echo base_url();?>asset/web/js/menu.js" type="text/javascript"></script>
		<div class="clearfix"></div>
		</div>
		
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Gallery</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="<?php echo site_url('');?>">Home</a></li>
		  <li class="active">Gallery</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="blog"><!-- start blog -->
			<div class="blog_main col-md-9">
				<div class="blog_list">
				</div>
				<div class="clearfix"></div>
			</div>


<div class="gallery" align="center">
	<h2><font color="black">Proyek Kami :</font></h2>

	<br />

	<div class="thumbnails">
		<img onmouseover="preview.src=img1.src" name="img1" src="<?php echo base_url();?>asset/web/gallery/images/img1.jpg" alt=""/>
		<img onmouseover="preview.src=img2.src" name="img2" src="<?php echo base_url();?>asset/web/gallery/images/img2.jpg" alt=""/>
		<img onmouseover="preview.src=img3.src" name="img3" src="<?php echo base_url();?>asset/web/gallery/images/img3.jpg" alt=""/>
		<img onmouseover="preview.src=img4.src" name="img4" src="<?php echo base_url();?>asset/web/gallery/images/img4.jpg" alt=""/>
		<img onmouseover="preview.src=img5.src" name="img5" src="<?php echo base_url();?>asset/web/gallery/images/img5.jpg" alt=""/>
	</div><br/>

	<div class="preview" align="center">
		<img name="preview" src="<?php echo base_url();?>asset/web/gallery/images/img1.jpg" alt=""/>
	</div>

	<br/> <br/>

		<div class="thumbnails">
		<img onmouseover="preview.src=img6.src" name="img6" src="<?php echo base_url();?>asset/web/gallery/images/img6.jpg" alt=""/>
		<img onmouseover="preview.src=img7.src" name="img7" src="<?php echo base_url();?>asset/web/gallery/images/img7.jpg" alt=""/>
		<img onmouseover="preview.src=img8.src" name="img8" src="<?php echo base_url();?>asset/web/gallery/images/img8.jpg" alt=""/>
		<img onmouseover="preview.src=img9.src" name="img9" src="<?php echo base_url();?>asset/web/gallery/images/img9.jpg" alt=""/>
		<img onmouseover="preview.src=img10.src" name="img10" src="<?php echo base_url();?>asset/web/gallery/images/img10.jpg" alt=""/>
	</div>

	<hr/>

</div>




			<div class="clearfix"></div>
	</div><!-- end blog -->
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