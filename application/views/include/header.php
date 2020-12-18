<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Essential Information of Sylhet</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Travel Tours Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?=base_url()?>asset/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?=base_url()?>asset/css/font-awesome.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
	<link href="<?=base_url()?>asset/css/lsb.css" rel="stylesheet" type="text/css" media="all">
	<!-- Font-Awesome-Icons-CSS -->
	
	<link rel="stylesheet" href="<?=base_url()?>asset/css/lightbox.css">  
	<link rel="stylesheet" href="<?=base_url()?>asset/css/owl.carousel.css" type="text/css" media="all">
	<link href="<?=base_url()?>asset/css/owl.theme.css" rel="stylesheet">

	<!-- //font-awesome icons -->
	<!-- font -->
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<!-- //font -->
	<script src="<?=base_url()?>asset/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 4,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
	 
		});
		
	}); 
	</script>

</head>
<body>
	<!-- header -->
	<div class="header-w3l">
		<!-- navigation -->
		<div class="nav-agile">
			<nav class="navbar navbar-default">
				<div class="navbar-header logo-w3layouts">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- logo -->
					<h1>
						<a href="<?=base_url()?>">Essential Info</a>
					</h1>
					<!-- //logo -->
				</div>
				<!-- navbar-header -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="<?=base_url()?>" class="active">Home</a>
							</li>
							<li>
								<a href="<?=base_url()?>welcome/about">About</a>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li <?php if($this->uri->segment(2)=='hotel'){ echo 'class="active"'; } ?> >
										<a href="<?=base_url()?>welcome/hotel">Hotel</a>
									</li>
									<li <?php if($this->uri->segment(2)=='rest'){ echo 'class="active"'; } ?> >
										<a href="<?=base_url()?>welcome/rest">Restaurants</a>
									</li>
									<li <?php if($this->uri->segment(2)=='sc'){ echo 'class="active"'; } ?> >
										<a href="<?=base_url()?>welcome/sc">Shopping Complex</a>
									</li>
									<li <?php if($this->uri->segment(2)=='ft'){ echo 'class="active"'; } ?> >
										<a href="<?=base_url()?>welcome/ft">Fare of Transports</a>
									</li>
									<li <?php if($this->uri->segment(2)=='emer'){ echo 'class="active"'; } ?> >
										<a href="<?=base_url()?>welcome/emer">Emergency Services</a>
									</li>
									<li <?php if($this->uri->segment(2)=='tourist'){ echo 'class="active"'; } ?> >
										<a href="<?=base_url()?>welcome/tourist">Travel Attractions</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?=base_url()?>welcome/gallery">Gallery</a>
							</li>
							<li>
								<a href="<?=base_url()?>welcome/contact">Contact</a>
							</li>
							
							
							<?php if($this->session->userdata('ID')) { ?>
							<li> 
								<a href="<?=base_url()?>Logout">Logout</a>				
							</li>
							
							<?php }else{ ?>
							<li <?php if($this->uri->segment(1)=='signin'){ echo 'class="active"'; } ?>> 
								<a href="<?=base_url()?>signin">Sign In</a>				
							</li>
							<li <?php if($this->uri->segment(1)=='signup'){ echo 'class="active"'; } ?>> 
								<a href="<?=base_url()?>signup">Sign Up</a>				
							</li>

							<?php } ?>
							
						</ul>
					
					
					<div class="clearfix"> </div>
				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<div class="slider_banner_info">
								<h4>
									<span>Explore</span> the Essential Information of
									<span>Sylhet</span>
								</h4>
								<p>Go, fly, roam, travel, voyage, explore, journey, discover, adventure.</p>
								<div class="readmore-w3-agileits">
									<a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-2">
							<div class="slider_banner_info">
								<h4>
									<span>Explore</span> the Essential Information of
									<span>Sylhet</span>
								</h4>
								<p>Go, fly, roam, travel, voyage, explore, journey, discover, adventure.</p>
								<div class="readmore-w3-agileits">
									<a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-3">
							<div class="slider_banner_info">
								<h4>
									<span>Explore</span> the Essential Information of
									<span>Sylhet</span>
								</h4>
								<p>Go, fly, roam, travel, voyage, explore, journey, discover, adventure.</p>
								<div class="readmore-w3-agileits">
									<a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>