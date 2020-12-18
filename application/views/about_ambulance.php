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
					<a href="<?=base_url()?>welcome/emer">Emergency Services</a>
					<span>/ / /</span>
				</li>
				<li>
				Ambulance Services
				</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<div class="w3_wthree_agileits_icons main-grid-border">
		<div class="container">
		<h3 class="page-header icon-subheading1">Ambulance Service</h3>
			<br>
			<br>
			<br>
			<?php if($results){ foreach ($results as $row) {  ?>
			<div class="col-md-4 service-grid-wthree text-center">
				<div class="ser-fashion-gridambulance">
					
					<img style="height:260px; width: 100%; " src="<?=base_url()?>images/<?=$row['ImagePath']?>" alt="" />
					<br>
					<br>
					<br>
					<div class="ser-sevice-grid">
						<h3><?=$row['Organization_name']?></h3>
						<div class="readmore-w3-agileits about-fire">
							<p><strong>Address:</strong> <?=$row['Address']?></p>
							<p><strong>Contact:</strong> <?=$row['Phone']?></p>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
			</div>
			
			<?php } } ?>
			
			
		</div>		
	</div>