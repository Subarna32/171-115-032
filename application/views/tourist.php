
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
				<li>Tourist Attractions Information</li>
			</ul>
		</div>
	</div>
	

	<!-- icons page-->
	<div class="trips-section">
		<div class="container">
			<h3 class="title">Tourist Attractions Information</h3>
			</br>
			</br>
				
			</br>
			<?php if($results){ foreach ($results as $row) {  ?>
			<div class="col-lg-4 exce-grid1-mmstyle">
				
				<img style="height:260px;" src="<?=base_url()?>images/<?=$row['Image1']?>" alt="" />
				<div class="grid-ec1">
					<h3><?=$row['Name']?></h3>
					<div class="readmore-w3-agileits tour text-center">
						<a href="<?=base_url()?>welcome/about_tourist/<?=$row['ID']?>">Read More</a>
					</div>
				</div>
				<br>
				<br>
				<br>
			</div>
			<?php } } ?>
			
		</div>
	</div>
