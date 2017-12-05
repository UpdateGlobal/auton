<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Auton</title>
	<meta name="description" content="A Responsive HTML Theme" />
	<meta name="keywords" content="html, responsive, theme" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- CSS -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/grid.css" type="text/css" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<link rel="stylesheet" href="css/header-footer.css" type="text/css" />
	<link rel="stylesheet" href="css/elements.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="css/linecons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.min.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
 
</head>
 
<body>
	<!-- HEADER -->
	<header id="site-header" class="dark-header slider-nav bounceInDown animated">
		
		<nav class="container"><!-- CONTAINER -->
			<div id="mobile-nav"></div><!-- MOBILE NAV -->
			
			<!-- <div id="logo-header"><a class="logo" href="index.html">Auton<span>*</span></a></div> -->

			<div id="logo-header"><a class="logo" href="index.php"><img src="imagenes/logo/logo-auton.svg" width="245px" alt=""></a></div>
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>
				<li>
					<a href="index.php#nosotros">Quienes Somos</a>
				</li>
				<li>
					<a href="index.php#servicios">Servicios</a>
				</li>
				<li>
					<a href="index.php#productos">Productos</a>
				</li>
				<li>
					<a href="contacto.php">Contacto</a>
				</li>
				<li class="sociallinks">
					<a href="tel:+946431464"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp +51 946431464</a>
				</li>

			</ul>
		</nav><!-- CONTAINER END -->
	</header>
	<!-- HEADER END -->
	
	<div id="slider" class="slidecontainer slider">
        <ul>                
            <li class="bg-red" style="background-image: url(img/slide-10.jpg);">
	            <header style=" padding-top: 200px">
					<div class="title-1">Página no existe</div>
					<div class="title-2">404 Error</div>
					
					<div class="mar-b-30"></div><!-- GAP -->
					<br>
					<div class="hr-wrap short">
						<div class="hr-left"><hr></div>
						<div class="hr-mid"><i class="fa fa-star"></i></div>
						<div class="hr-right"><hr></div>
					</div>
					<br>
					<div>
						<a class="btn" href="index.html">Volver al Inicio</a>
					</div>
				</header>
			</li>
        </ul>
    </div>
	
<!-- FOOTER -->
	<footer id="site-footer" class="dark-footer" style="background-image: url(http://via.placeholder.com/1500x556)">
		<div class="container"><!-- CONTAINER -->
			<div class="row">
				<div class="col full-width text-center">
					<a class="logo" href="#site-header"><img src="imagenes/logo/logo-auton.svg" width="245px" alt=""></a>
				</div>
			</div>
			<nav class="row text-center">	
				<div class="col one-fourth">
					<h6><a href="index.php#nosotros">Quienes somos</a></h6>
					<hr class="short2px">
				</div>
				<div class="col one-fourth">
					<h6><a href=index.php#servicios>Servicios</a></h6>
					<hr class="short2px">
				</div>
				<div class="col one-fourth">
					<h6><a href="index.php#productos">Productos</a></h6>
					<hr class="short2px">
				</div>
				<div class="col one-fourth">
					<h6><a href="contacto.php">Contacto</a></h6>
					<hr class="short2px">

				</div>
			</nav>
			<aside class="row text-center">
				<ul class="col full-width sociallinks">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li><!--
					--><li><a href="#"><i class="fa fa-facebook"></i></a></li><!--
					--><li><a href="#"><i class="fa fa-youtube"></i></a></li><!--
					--><li><a href="#"><i class="fa fa-dribbble"></i></a></li><!--
					--><li><a href="#"><i class="fa fa-vimeo-square"></i></a></li><!--
					--><li><a href="#"><i class="fa fa-rss"></i></a></li>
				</ul>
				<div class="col full-width">
					<p><small>© 2017 <a>Auton - Perú</a> desarrollado por <a href="http://www.update.pe" target="_blank">Update Global Marketing</a></small></p>
				</div>
			</aside>
		</div><!-- CONTAINER END -->
		
		<a id="totop" href="#top"><i class="fa fa-angle-up"></i></a>
	</footer>
	<!-- FOOTER END -->
	
	<!-- JAVASCRIPT -->
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		"use strict";
		 new WOW().init();
	</script>
	<script src="js/plugins.js"></script>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 8]>
	<script src="js/ie8.js"></script>
	<![endif]-->
	<script src="js/desoslide.min.js"></script>
	<script>
		$(window).load(function() {
			"use strict";
		    $('#img_gallery1').desoSlide({
			    thumbs: $('ul.thumbs1 li > a'),
			    overlay: 'none'
			});
		});
	</script>
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			"use strict";
			// PRODUCT SLIDER
			
			$('.product-slider').owlCarousel({
			    center: true,
			    loop: true,
			    margin: 100,
			    items: 2

			});
			
			// MULTI-SLIDER
			var owl1 = $(".multi-slider");
			
			$('.multi-slider').owlCarousel({
			    loop: true,
			    
			    responsive:{
				    1000:{
			            items:5
			        },
			        600:{
			            items:3
			        },
			        360:{
			            items:1
			        }
			    }
			});
			
			$(".multi-slider-nav .next").click(function(){
				owl1.trigger('next.owl');
			})
			$(".multi-slider-nav .prev").click(function(){
				owl1.trigger('prev.owl');
			})
			
			// FOOTER-CAROUSEL
			var owl2 = $("#footer-carousel");
			
			$("#footer-carousel").owlCarousel({
				slideSpeed: 300,
				autoHeight: true,
				loop:true,
				items : 1
			});
		
			
			$(".footer-nav .next").click(function(){
				owl2.trigger('next.owl');
			})
			$(".footer-nav .prev").click(function(){
				owl2.trigger('prev.owl');
			})
		});
	</script>
	<script src="js/event.move.js"></script>
	<script src="js/twentytwenty.js"></script>
	<script>
		$(window).load(function(){
			"use strict";
			$("#container1").twentytwenty();
		});
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			"use strict";
			$(".rslides").responsiveSlides({
				auto: false,
				speed: 750,
				nav: true,
				prevText: "&#xf104",
				nextText: "&#xf105"
			});
		});
	</script>
	<script src="js/masonry-docs.min.js"></script>
	<script>
		$(function() {
			"use strict";
			var $container = $('.masonry-wrap');
			// initialize Masonry after all images have loaded
			$container.imagesLoaded(function() {
				$container.masonry({
					itemSelector: '.item',
					columnWidth: 1,
				});
			});
		});
	</script>
	<script src="js/view.min9df2.js?auto"></script>
	<script src="js/sudoslider.min.js"></script>
	<script>
		$(document).ready(function(){	
		    "use strict";
		    var sudoSlider = $("#slider").sudoSlider({
			    prevNext: false,
				responsive: true,
		    });
		});
	</script>
</body>
</html>