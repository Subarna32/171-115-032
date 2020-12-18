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
				Doctors
				</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- icons page-->
	<div class="w3_wthree_agileits_icons main-grid-border">
		<div class="container">
		<h3 class="page-header icon-subheading1">Doctors</h3>
		<br>
		<br>
				
			<form action="" method="post">
			
				<div class="search col-md-11">
				
					<div class="form-group">
							<select id="address" name="address" class="form-control m-bot15">
								<option value="">--Select Hospital--</option>
								<option <?php  if(set_value('address')=='Mount Adora Hospital') { echo 'selected'; } ?>  value="Mount Adora Hospital">Mount Adora Hospital</option>
								<option <?php  if(set_value('address')=='Popular Medical Centre Ltd.') { echo 'selected'; } ?>  value="Popular Medical Centre Ltd.">Popular Medical Centre Ltd.</option>
								<option <?php  if(set_value('address')=='Medinova Diagnostic Center') { echo 'selected'; } ?>  value="Medinova Diagnostic Center">Medinova Diagnostic Center</option>
								<option <?php  if(set_value('address')=='Trust Medical Services') { echo 'selected'; } ?>  value="Trust Medical Services">Trust Medical Services</option>
								<option <?php  if(set_value('address')=='Ibn Sina Hospital Sylhet Limited') { echo 'selected'; } ?>  value="Ibn Sina Hospital Sylhet Limited">Ibn Sina Hospital Sylhet Limited</option>
								<option <?php  if(set_value('address')=='Oasis Hospital') { echo 'selected'; } ?>  value="Oasis Hospital">Oasis Hospital</option>
								<option <?php  if(set_value('address')=='Labaid Diagnostics Sylhet') { echo 'selected'; } ?>  value="Labaid Diagnostics Sylhet">Labaid Diagnostics Sylhet</option>
							</select>
						<div class="error"><?=form_error('address')?></div>
										 
					</div>

				</div>
				<div class="search col-md-1">

					<div class="form-group"> 
					
						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-search"></i></button>

					</div>

				</div>

			
			</br>
			</form>
			</br>
			</br>
			</br>
			</br>
			<?php if($results){ foreach ($results as $row) {  ?>
			<div class="grid_3 grid_4">
				<div class="bs-glyphicons">
					
					<div class="li1 col-md-12">
						
							<div class="col-md-2">
							   
							   <img style="min-height:180px;" src="<?=base_url()?>images/<?=$row['ImagePath']?>" alt="" />
					
							  
							</div>
							 
							<div class="col-md-10">
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
