	<!-- banner -->
	<div class="inner_banner_agile">

	</div>
	<!--//banner -->
	<!-- short -->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="<?=base_url()?>">Home</a>
					<span>/ /</span>
				</li>
				<li>
					<a href="<?=base_url()?>welcome/rest">Restaurants</a>
					<span>/ /</span>
				</li>
				<?php if($food){ foreach ($food as $row) {  ?>
				
				<li><?=$row['Restaurant_Name'];?></li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- about -->
	<div class="welcome" id="about">
		<div class="container">
			<h3 class="title"><?=$row['Restaurant_Name'];?></h3>
			<div class="col-md-6 welcome-left">
				<h4><?=$row['Sdescription'];?></h4>
				
				<div class="row">
					<div class="col-md-4 readmore-w3-agileits about-read">
						<a href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
					</div>
					<div class="col-md-4 readmore-w3-agileits about-menu">
						<?php if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=='User') ) { ?> 
							<a href="#" data-toggle="modal" data-target="#myModal2">See Menu</a>
						<?php }else{ ?>
							<a href="#" data-toggle="modal" data-target="#myModal3">See Menu</a>
						<?php } ?>
					</div>
					
				</div>
					
			</div>
			<div class="col-md-6 welcome-right">
				<div class="welcome-right-top">
					<img style="height:250px;" src="<?=base_url()?>images/<?=$row['Image1']?>" alt="Beauty">
				</div>
				<div class="welcome-right-bottom">
					<img style="height:300px;" src="<?=base_url()?>images/<?=$row['Image2']?>" alt="Beauty">
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- modal (popup) -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4><?=$row['Restaurant_Name'];?></h4>
					<p></p><br>
					<img style="height:250px;" src="<?=base_url()?>images/<?=$row['Image1']?>" alt="" /><br>
					<span><?=$row['Description'];?></span>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Menu</h4>
					<br>
					<br>
					<iframe style="width: 100%;min-height: 700px;" download="" src="<?=base_url()?>pdf/<?=$row['Pdf']?>" title="" ></iframe>
					
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Please Sign In As User</h4>
				</div>
			</div>

		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<!-- services -->
	<div class="wthree_services" id="services">
		<div class="container">
			<h3 class="title">Order Food Online Via</h3>
			<div class="col-md-3 wthree_services_left">
				<div class="col-xs-4 wthree_services_left_grid">
					<div class="wthree_services_left_grid11">
						<i class="fa fa-first-order" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-8 wthree_services_left_grid_left">
					<h3><a href="https://www.foodpanda.com.bd/">Food Panda<a></h3>
					</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 wthree_services_left">
				<div class="col-xs-4 wthree_services_left_grid">
					<div class="wthree_services_left_grid11">
						<i class="fa fa-first-order" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-8 wthree_services_left_grid_left">
					<h3><a href="https://www.facebook.com/FastDeliverySyl/">Fast Delivery</a></h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 wthree_services_left mid-w3l">
				<div class="col-xs-4 w3l_banner_info_left_grid">
					<div class="wthree_services_left_grid11">
						<i class="fa fa-first-order" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-8 wthree_services_left_grid_left">
					<h3><a href="https://www.facebook.com/iserv.syl.bd/">Iserve Sylhet</a></h3>
					</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 wthree_services_left">
				<div class="col-xs-4 wthree_services_left_grid">
					<div class="wthree_services_left_grid11">
						<i class="fa fa-first-order" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-8 wthree_services_left_grid_left">
					<h3><a href="https://www.facebook.com/FoodExpress365/">Food Express</a></h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-lg-4 footer-grids w3l-agileits">
					<h3><strong>Other Information</strong></h3>
					<div class="footer-one-w3ls1">
						<ul>
							<li>
								<p class="footer-one-w3ls1"> 
									<span class="fa fa-map-marker fa-lg"></span>  <?=$row['Address'];?></p>
							</li>
							<li>
								<p class="footer-one-w3ls1"><span class="fa fa-clock-o fa-lg"></span>  
								<?=$row['Business_hours'];?>
								
								</p>
							</li>
							<li>
								<p class="footer-one-w3ls1"><span class="fa fa-phone fa-lg"></span> <?=$row['Phone'];?></p>
							</li>
							
					</div>
				</div>
<?php } } ?>
