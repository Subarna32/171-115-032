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
				<li>Restaurants Information</li>
			</ul>
		</div>
	</div>
	

	<!-- icons page-->
	<div class="trips-section">
		<div class="container">
			<h3 class="title">Restaurants Information</h3>
			</br>
			</br>
			<form action="" method="post">
			
				<div class="search col-md-10">
				
					<div class="form-group">
							<select id="Cuisine" name="Cuisine" class="form-control m-bot15">
								<option value="">----Select Cuisine----</option>
								<option <?php  if(set_value('Cuisine')=='Asian') { echo 'selected'; } ?>  value="Asian">Asian</option>
								<option <?php  if(set_value('Cuisine')=='Bangladeshi') { echo 'selected'; } ?>  value="Bangladeshi">Bangladeshi</option>
								<option <?php  if(set_value('Cuisine')=='Indian') { echo 'selected'; } ?>  value="Indian">Indian</option>
								<option <?php  if(set_value('Cuisine')=='Chinese') { echo 'selected'; } ?>  value="Chinese">Chinese</option>
								<option <?php  if(set_value('Cuisine')=='Thai') { echo 'selected'; } ?>  value="Thai">Thai</option>
								<option <?php  if(set_value('Cuisine')=='Sea Food') { echo 'selected'; } ?>  value="Sea Food">Sea Food</option>
							</select>
						<div class="error"><?=form_error('Cuisine')?></div>
										 
					</div>

				</div>
				<div class="search col-md-2">

					<div class="form-group"> 
					
						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-search"></i></button>

					</div>

				</div>

			
			</br>
			</form>
			<br>
			<br>
			<br>
			<br>
			<?php echo $this->session->flashdata('message'); ?>
        
			<?php if($results){ foreach ($results as $row) {  ?>
			<div class="col-lg-4 exce-grid1-mmstyle">
				
				<img style="min-height:260px;" src="<?=base_url()?>images/<?=$row['Image1']?>" alt="" />
				<div class="grid-ec1">
					<h3><?=$row['Restaurant_Name']?></h3>
					<p><?=$row['Cuisine']?></p>
					<div class="readmore-w3-agileits rest text-center">
						<a href="<?=base_url()?>welcome/about_restaurant/<?=$row['ID']?>">Read More</a>
					</div>
				</div>
				<br>
				<br>
				<br>
			</div>
			<?php } } ?>
			
		</div>
	</div>
