

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
				<li>Gallery</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h3 class="title">Our Gallery</h3>
			<div class="w3layouts_gallery_grids">
				<?php if($gallery){ foreach ($gallery as $row) {  ?>
	
				<div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
					<a href="<?=base_url()?>images/<?=$row['Image']?>" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?=base_url()?>images/<?=$row['Image']?>" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text">
									<h3></h3>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php } } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
