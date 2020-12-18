
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="alert alert-success">Welcome to the Hotel Panel</div>
		<div class="market-updates">
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Visitors</h4>
					<h3>13,500</h3>
					<p>And counting</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users</h4>
						<h3>1,250</h3>
						<p>And counting</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		<br>
		<br>
		<div class="gallery">
		<br>
				<h2 class="w3ls_head">Gallery</h2>
				<div class="gallery-grids">
						<div class="gallery-top-grids">
							<?php if($gallery){ foreach ($gallery as $row) {  ?>
	
							<div class="col-sm-4 gallery-grids-left">
								<div class="gallery-grid">
									<a class="example-image-link" href="" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
										<img src="<?=base_url()?>images/<?=$row['Image']?>" alt="" />
										
									</a>
								</div>
							</div>
							
							<?php } } ?>
							
							<div class="clearfix"> </div>
						</div>
						
						<div class="clearfix"> </div>
						
				
			</div>
			</div>
		
		<div class="clearfix"> </div>
</section>
<br>
<br>
<br>
<br>
