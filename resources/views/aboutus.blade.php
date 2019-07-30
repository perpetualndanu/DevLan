
@include('layouts.head')
<body>
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="">
</div>
<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
	 <!--Navbar--->
     <div class="row">
			<nav class="navbar navbar-default redq" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand large" href='/'><img src="assets/img/logo.png" alt="Dev Lan"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
				<div class="collapse navbar-collapse">
					<a class="navbar-brand mobile pull-left" href="#"><i class="fa fa-diamond"></i>Dev<span class="logo-style">Lan</span></a>
					<a class="mobile-menu-close"><i class="fa fa-random"></i></a>
					<ul class="nav navbar-nav nav-list">
						<li>
						    	<a href="/">
									<i class="fa fa-bolt"></i>
										<span class="link-item">Home</span>
								</a>
						</li>

						<li class="dropdown active redq-halfwidth">
								<a href="/devlan_aboutus">
									<i class="fa fa-bolt"></i>
										<span class="link-item">About Us</span>
								</a>
						
						</li>
						
						<li class="dropdown redq-fullwidth">
						<a href="/devlan_team">
								<i class="fa fa-bolt"></i>
								<span class="link-item">Le' Gang</span>
							</a>
						
						</li>

						

						<li class="dropdown redq-fullwidth">
						<a href="/devlan_platform">
								<i class="fa fa-bolt"></i>
								<span class="link-item">DevLan Platform</span>
							</a>
						
						</li>

						
						
					</ul>
					<!-- end .nav .navbar-nav -->
				</div>
				
			</div>
			<!-- end .container -->
			</nav>
			<!-- end nav -->
		</div>

	<!-- end .container -->
</div>
<!-- end .header -->
</header>
<!-- Slider
================================================== -->
<section>
<div class="customtypewowslider fullwidth flexslider clearfix cayman-slider" style="max-height:700px;">
<ul class="slides slider-content-style1">

	<li style="background-color:#000;">	
	<img src="assets/img/demo/business1.jpg" alt=""/>
	<div class="row">
		<div class="flex-caption" style="top:18%;">
			<h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">Real Time </h2>
			<h1 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s">Networking <span class="font500"> And </span><span class="font500">Software Development Projects</span></span></h1>
			<a class="btn btn-primary wow bounceInRight" href="#about" data-wow-duration="1.0s" data-wow-delay="0.9s">About DevLan </a>
		</div>
	</div>	
	</li>
</ul>
</div>
</section>

<!--About Us
================================================== -->
<section id="about" class="page-wrapper gray">
<div class="container">
	<h2 class="title">About Us</h2>
	<p class="tagline">
    DevLan is an oline platform that provides hosting for software development version control. We also provide access control and several collaboration features such as bug tracking, feature requests, task management, and wikis for every networking or coding project. 
    In addition to software development and network projects, DevLan supports the following formats and features:
    <b>Projects Documentation</b>, <b>Issue tracking Features</b> and <b>Email notifications.</b>
        
	</ul>
	</p>

	
</div>
</section>

<!-- Footer
================================================== -->
@include('layouts.footer')
<!-- JavaScript
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/parallax.js"></script>
<script src='assets/js/countto.js'></script>
<script src="assets/js/portfolio.js"></script>
<script src="assets/js/scripts.js"></script>
<script>
jQuery(document).ready(function($) {
   'use strict';
	$('.customtypewowslider').flexslider({
		pauseOnHover: false,    
		slideshow: true,
		smoothHeight: false,
		slideshowSpeed: 6000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 900,
		animation: "fade",              //String: Select your animation type, "fade" or "slide"
		easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
		direction: "horizontal",
		controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
		touch: true, 
		directionNav: false,
	});
});
</script>
</body>

</html>