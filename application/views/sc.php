
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
				<li>Shopping Complex Information</li>
			</ul>
		</div>
	</div>
	

	<!-- icons page-->
	<div class="trips-section">
		<div class="container">
			<h3 class="title">Shopping Complex Information</h3>
			</br>
			</br>
			<form action="" method="post">
			
				<div class="search col-md-10">
				
					<div class="form-group">
							<select id="Type" name="Type" class="form-control m-bot15">
								<option value="">----Select Shopping Type----</option>
								<option <?php  if(set_value('Type')=='Clothing') { echo 'selected'; } ?>  value="Clothing">Clothing</option>
								<option <?php  if(set_value('Type')=='Cosmetics Products') { echo 'selected'; } ?>  value="Cosmetics Products">Cosmetics Products</option>
								<option <?php  if(set_value('Type')=='Shoes') { echo 'selected'; } ?>  value="Shoes">Shoes</option>
								<option <?php  if(set_value('Type')=='Jewellery') { echo 'selected'; } ?>  value="Jewellery">Jewellery</option>
								<option <?php  if(set_value('Type')=='Combined') { echo 'selected'; } ?>  value="Combined">Combined</option>
							</select>
						<div class="error"><?=form_error('Type')?></div>
										 
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
				
				<img style="height:260px;" src="<?=base_url()?>images/<?=$row['Image1']?>" alt="" />
				<div class="grid-ec1">
					<h3><?=$row['Name']?></h3>
					<div class="readmore-w3-agileits shop text-center">
						<a href="<?=base_url()?>welcome/about_sc/<?=$row['ID']?>">Read More</a>
					</div>
				</div>
				<br>
				<br>
				<br>
			</div>
			<?php } } ?>
			
		</div>
	</div>
