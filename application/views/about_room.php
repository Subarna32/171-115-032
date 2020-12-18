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
					<a href="<?=base_url()?>welcome/hotel">Hotel</a>
					<span>/ /</span>
				</li><?php if($results){ foreach ($results as $row) {  ?>	
	
				<li><?=$row['Hotel_name'];?></li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<div class="welcome" id="about">
		<div class="container">
		<?php echo $this->session->flashdata('message'); ?>
			<h3 class="title"><?=$row['Hotel_name'];?></h3>	
			<br>
			<br>
			<div class="col-md-6 welcome-left">
				<h4><?=$row['Description'];?></h4>
				
				<div class="row">
					<div class="col-md-4 readmore-w3-agileits about-read">
						<a href="#" data-toggle="modal" data-target="#myModal1">About Room</a>
					</div>
					<div class="col-md-4 readmore-w3-agileits about-book">
						<?php if($this->session->userdata('ID')) { ?> 
							<a href="#" data-toggle="modal" data-target="#myModal2">Book Now</a>
						<?php }else{ ?>
							<a href="#" data-toggle="modal" data-target="#myModal3">Book Now</a>
						<?php } ?>
					</div>
				</div>
					
			</div>
			<div class="col-md-6 welcome-right">
				<div class="welcome-right-top">
					<img style="height:250px;"  src="<?=base_url()?>images/<?=$row['Photo1'];?>" alt="Beauty">
				</div>
				<div class="welcome-right-bottom">
					<img style="height:300px;" src="<?=base_url()?>images/<?=$row['Photo2'];?>" alt="Beauty">
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<!-- modal (popup) -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4><?=$row['Room_Type'];?></h4><br>
					<h3 style="text-align:center";><?=$row['Room_no'];?></h3>
					<br>
					<img style="height:250px;" src="<?=base_url()?>images/<?=$row['Photo1'];?>" alt="" />
					<span><?=$row['Room_description'];?></span>
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
					<h4>Please Sign In</h4>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content modal-dialog-scrollable">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Book A Room</h4>
					
					
					<div class="modal-body">
						    <div class="panel-body">
								<div class="position-center">
									<form role="form" action="" method="post" enctype="multipart/form-data"  >
										
										
										<div class="form-group"> 
											 
											<input type="hidden" class="form-control" value="<?=$results[0]['ID']?>" placeholder="Room ID" name="room_id"  style="line-height: 20px;">

											<input type="hidden" class="form-control" value="<?=$results[0]['Room_Type']?>" placeholder="Room ID" name="room_type"  style="line-height: 20px;">
											 
										</div>
										<div class="form-group"> 
											<label for="">Check-in Date</label>
											<input type="date" class="form-control" value="<?=set_value('check_in')?>" placeholder="Check-in Date" name="check_in"  style="line-height: 20px;">
											<div class="error"><?=form_error('check_in')?></div>
										</div>
										
										<div class="form-group"> 
											<label for="">Check-out Date</label>
											<input type="date" class="form-control" value="<?=set_value('check_out')?>" placeholder="Check-out Date" name="check_out"  style="line-height: 20px;">
											<div class="error"><?=form_error('check_out')?></div>
										</div>
										
										<div class="my_btn col-lg-12 text-center">
											
											<button type="submit" name="submit" value="submit" class="btn btn-primary">Book Now</button>
				
										</div>
										
										<br>
										<br>
								</form>
								</div>

							</div>

					</div>
				</div>
			</div>

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
								<p class="footer-one-w3ls1"><span class="fa fa-map-marker fa-lg"></span>  <?=$row['Address'];?></p>
							</li>
							<li>
								<p class="footer-one-w3ls1"><span class="fa fa-phone fa-lg"></span>  <?=$row['Phone'];?></p>
							</li>
					</div>
				</div>
				<?php  } }?>