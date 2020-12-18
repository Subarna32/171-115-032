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
					<a href="<?=base_url()?>welcome/tourist">Tourist Attractions Information</a>
					<span>/ / /</span>
				</li>
				
				<?php  foreach($results as $row){  ?>
				<li><?=$row['Name'];?></li>
			</ul>
		</div>
	</div>
	
	
	
	<div class="welcome" id="about">
		<div class="container">
			<h3 class="title"><?=$row['Name'];?></h3>
			<div class="col-md-6 welcome-left">
				<h4><?=$row['Sdescription'];?></h4>
				<div class="row">
					<div class="col-md-4 readmore-w3-agileits about-read">
						<a href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
					</div>
				</div>
					
			</div>
			<div class="col-md-6 welcome-right">
				<div class="welcome-right-top">
					<img style="height:250px;" src="<?=base_url()?>images/<?=$row['Image1'];?>" alt="" />
				</div>
				<div class="welcome-right-bottom">
					<img style="height:300px;" src="<?=base_url()?>images/<?=$row['Image2'];?>" alt="Beauty">
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
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
					<h4><?=$row['Name'];?></h4>
					<p></p>
					<img style="height:250px;" src="<?=base_url()?>images/<?=$row['Image1'];?>" alt="" />
					<span><?=$row['Description'];?></span>
				</div>
			</div>

		</div>
	</div>
	<br>
	<br>
	<br>
<?php } ?>