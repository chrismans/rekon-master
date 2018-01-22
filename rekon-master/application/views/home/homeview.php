<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Homepage | PT Reka Mulia Konstruksi</title>
<!-- Bootstrap -->
<link href="<?php echo base_url();?>asset/web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>asset/web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>asset/web/css/blue.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" href="<?=base_url().'assets/materialize/images/newrekon.png'?>">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url().'assets/materialize/images/newrekon.png'?>"> 

<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/web/js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/web/css/fwslider.css" media="all">
    <script src="<?php echo base_url();?>asset/web/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>asset/web/js/css3-mediaqueries.js"></script>
    <script src="<?php echo base_url();?>asset/web/js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="<?php echo base_url();?>asset/web/css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>asset/web/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/web/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/web/js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="web/js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->
	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
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
			<li class="activate"><a href="<?php echo site_url('');?>">HOME</a></li>
			<li><a href="<?php echo site_url('home/about');?>">ABOUT</a></li>
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
    <div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="<?php echo base_url();?>asset/web/images/slider1.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->

                        <!-- <h4 class="title">Felicity</h4> -->

                        <!-- /Text title -->
                        <!-- Text description -->
                        <p class="description">" FELICITY TOWN HOUSE "</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="<?php echo base_url();?>asset/web/images/slider2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- <h4 class="title">Relife Greenville</h4> -->
                        <p class="description">" RELIFE GREENVILLE CILEUNGSI "</p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="<?php echo base_url();?>asset/web/images/slider3.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- <h4 class="title">Greenland</h4> -->
                        <p class="description">" GREENLAND FOREST PARK RESIDENCE "</p>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="<?php echo base_url();?>asset/web/images/slider4.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- <h4 class="title">Felicity</h4> -->
                        <p class="description">" FELICITY VILLAGE "</p>
                    </div>
                </div>
            </div>
                        <div class="slide">
                <img src="<?php echo base_url();?>asset/web/images/slider6.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- <h4 class="title">Felicity</h4> -->
                        <p class="description">" RELIFE GREENVILLE DARUL ISTIQAMAH "</p>
                    </div>
                </div>
            </div>
                         <div class="slide">
                <img src="<?php echo base_url();?>asset/web/images/slider5.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- <h4 class="title">Felicity</h4> -->
                        <p class="description">" FILECITY MADANI "</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid">
		<div class="bottom_grid">
			<div class="span_of_4"><!-- start span_of_4 -->
			<div class="col-md-6 span1_of_3">
				<div class="span4_of_list">
				<img src="<?php echo base_url();?>asset/web/images/felicitylogo.jpg">
					<span class="active"><i class="fa fa-thumbs-o-up"></i></span>
					<h3>Felicity</h3>
					<p>Felicity Townhouse memahami hasrat dan keinginan anda akan sebuah apresiasi diri dalam menempati rumah.
Felicity Townhouse mengembangkan konsep Urban Serenity, sebuah hunian ideal yang menunjang aktivitas dan bisnis anda di Jakarta.</p>
				</div>
			</div>
			<div class="col-md-6 span1_of_3">
				<div class="span4_of_list">
				<img src="<?php echo base_url();?>asset/web/images/relifegreenvilelogo.jpg">
					<span><i class="fa fa-lock"></i></span>
					<h3>Relife GreenVille</h3>
					<p>pengembang properti PT Refile Property Development menargetkan, proyek perumahan Relife Greenville Cileungsi tahap I, sebanyak 319, unit bisa terjual 100% &nbsp&nbspRelife GreenVille Menjamin Anda Untuk Kehidupan Yang lebih Nyaman Dan Damai. </p>
				</div>	
			</div>
			<div class="col-md-12 span1_of_3">
				<div class="span4_of_list">
				<img src="<?php echo base_url();?>asset/web/images/greenlanbogorlogo.jpg">
					<span><i class="fa fa-flag"></i></span>
					<h3>GreenLand Forest Hill</h3>
					<p>Dibangun dengan memenuhi prinsip Sustainable green Development. Posisi Terbuka dibuat dengan sistem cross ventilation untuk menunjang udara yang segar di dalam rumah. Setiap Ruangan didalamnnya juga di desain sedemikian rupa sehingga mendapatkan cahaya yang cukup tanpa lampu menyala di siang hari. </p>	
				</div>
			</div>
			<div class="col-md-6 span1_of_3">
				<div class="span4_of_list">
				<img src="<?php echo base_url();?>asset/web/images/greenlandparklogo.jpg">
					<span><i class="fa fa-flask"></i></span>
					<h3>GreenLand Forest Park</h3>
					<p>Greenland dikembangkan diatas lahan seluas 8 ha, dengan mengusung konsep “forest park residence“. Keunikan konsep ini tertuang dalam FOREST PARK, sebuah taman hutan seluas 7.000 m2 yang indah di tengah-tengah perumahan. Forest Park berfungsi sebagai ruang terbuka &  hijau sehingga memberikan udara segar dan sehat tidak hanya bagi para penguninya</p>				
				</div>
			</div>
			<div class="col-md-6 span1_of_3">
				<div class="span4_of_list">
				<img src="<?php echo base_url();?>asset/web/images/felicitymadanilogo.jpg">
					<span><i class="fa fa-flask"></i></span>
					<h3>Felicity Madani</h3>
					<p>PT Relife Realty Indonesia, pengembang sejumlah perumahan di Bodetabek, merilis perumahan baru Felicity Madani di Parung, Bogor, Jawa Barat.  Ini perumahan ketiga yang dikembangkan Relife dengan nama Felicity.Sebelumnya pengembang tersebut sudah mengembangkan Felicity Townhouse di Bojongsari dan Felicity Village di Pondok Petir, keduanya di Depok.  </p>				
				</div>
			</div>
		</div>
		
			<div class="clearfix"></div>
		</div><!-- end span_of_4 -->
	</div>
</div>
</div>
<div class="main1_bg"><!-- start main1 -->
<div class="container">
	<!-- <div class="main slider_text texxt-center">
		<h4>why modus versus</h4>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div> -->
</div>
<!-- start banner -->
<!-- <div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
               		<li><img src="<?php echo base_url();?>asset/web/images/slider_pic1.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic2.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic4.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic5.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic4.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php echo base_url();?>asset/web/images/slider_pic5.jpg" alt="" class="img-responsive"/></li>
                      
                </ul>    
          </div>
</div>
</div>
 <!-- end banner -->
</div>
 <!-- start main_btm -->
<div class="container">
	<div class="main span_of_3">

		</div>
		<div class="clearfix"></div>
	</div>
	<div class="cau_hide">
	<div class="cursual"><!--  start cursual  -->
		<h4>&nbsp;&nbsp;&nbsp;Sponsor by :<span class="line"></span></h4>
	</div>
	<div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php echo base_url();?>asset/web/images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
	</div><!----//End-img-cursual---->
	</div>
</div>
</div><!-- start footer -->
<div class="container">

		<div class="col-md-4 footer1_of_3">
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
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