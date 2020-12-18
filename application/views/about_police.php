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
				Police Service
				</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- icons page-->
	<div class="w3_wthree_agileits_icons main-grid-border">
		<div class="container">
		<h3 class="page-header icon-subheading1">Police Service</h3>
		<br>
		<br>
		
			<?php if($results){ foreach ($results as $row) {  ?>
			<div class="grid_3 grid_4">
				<div class="bs-glyphicons">
					
					<div class="li2 col-md-12">
						
							<div class="col-md-3">
							   
							   <img style="min-height:180px;" src="<?=base_url()?>images/<?=$row['ImagePath']?>" alt="" />
					
							  
							</div>
							 
							<div class="col-md-9">
								<br>
								<br>
								<h1><?=$row['Address']?></h1>
								<br>
								<p><strong><?=$row['Organization_name']?><strong></p>
								<p><strong>Contact Number(For Serial): </strong><?=$row['Phone']?></p>
							 
							</div>
						
					</div>
					<div class="clearfix1"> </div>
				</div>
				
			</div>
			<?php } } ?>
		</div>

	</div>
