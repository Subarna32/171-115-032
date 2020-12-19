
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 col-xs-4 footer-grids">
					<h2>More Information</h2>
					<p class="footer-one-w3ls">We have always tried our best to satisfy our customers.
					Each and every team member of ours are always dedicated to fulfill user's
					demand. </p>
				</div>
				<div class="col-md-5 col-xs-5 footer-grids w3l-agileits">
					<h3>Helpful Links</h3>
					<div class="social-w3r">
						<ul>
							<li>
								<a href="<?=base_url()?>welcome/contact">Contact</a>
							</li>
							<li>
								<a href="<?=base_url()?>welcome/ft">Fare of Transports</a>
							</li>
							<li>
								<a href="<?=base_url()?>welcome/emer">Emergency Services</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-3 footer-grids social-agileits">
					<h3>Connect With Us</h3>
					<div class="social-w3l">
						<ul>
							<li>
								<a href="#" class="wthree_facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="wthree_twitter">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="wthree_dribbble">
									<i class="fa fa-dribbble" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="social-w3r">
						<ul>
							<li>
								<a href="#">Facebook</a>
							</li>
							<li>
								<a href="#">Twitter</a>
							</li>
							<li>
								<a href="#">Dribbble</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- copyright -->
	<div class="copy-section">
		<p>© 2020 Essential Info. All rights reserved | Developed by
			<a href="">Subarna</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="<?=base_url()?>asset/js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="<?=base_url()?>asset/js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	
	<!-- js for gallery -->
	<script src="<?=base_url()?>asset/js/lsb.min.js"></script>
	<script>
		$(window).load(function () {
			$.fn.lightspeedBox();
		});
	</script>

	<!-- banner Slider -->
	<script src="<?=base_url()?>asset/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //banner Slider -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="<?=base_url()?>asset/css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="<?=base_url()?>asset/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- smooth scrolling -->
	<script src="<?=base_url()?>asset/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="<?=base_url()?>asset/js/move-top.js"></script>
	<script src="<?=base_url()?>asset/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	

	<!-- //services -->
	<script src="<?=base_url()?>asset/js/jarallax.js"></script>
	<script src="<?=base_url()?>asset/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="<?=base_url()?>asset/js/responsiveslides.min.js"></script>
	<!-- Tabs-JavaScript -->
	<script src="<?=base_url()?>asset/js/owl.carousel.js"></script> 
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	
	<script>	
			function check_login(){

			

				var user_email=$('#user_email').val();
				var user_password=$('#user_password').val();

				var user_email=encodeURIComponent(user_email);
				var user_password=encodeURIComponent(user_password);

 				 
				var myurl="<?=base_url()?>Signin/check_login/"+user_email+"/"+user_password+"";

				$.get( myurl, function( data ) {

					 
				   if(data=='YesA'){

				   	window.location.replace("http://localhost/171115032/Admin");

				   }else if(data=='YesB'){

				   	window.location.replace("http://localhost/171115032/welcome");

				   }
				   else if(data=='YesC'){

				   	window.location.replace("http://localhost/171115032/Hotel");

				   }
				   else if(data=='YesD'){

				   	window.location.replace("http://localhost/171115032/Restaurant");

				   }else{

				    
				   	 $('#e_message').html('<div class="alert alert-danger">Wrong User email or Password</div>');

				   }
				});
			}


	</script>
	<script src="<?=base_url()?>asset/js/jquery-3.3.1.min.js"></script>
	<script src="<?=base_url()?>asset/js/owl.carousel.js"></script>  

</body>

</html>
