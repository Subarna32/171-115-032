
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
				<li>Hotel</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- Codes -->
	<div class="trips-section">
		<div class="container">
			<h3 class="title">Hotel</h3>
			<br><br><br>
			<form action="" method="post">
			
			<div class="search_div row col-lg-12">

				<div class="search col-md-4">
				
					<div class="form-group">
						<select id="Room_Type" name="Room_Type" class="form-control" onkeyup="load_data()">
							<option value="">----Select Room Type----</option>
							<option <?php  if(set_value('Room_Type')=='Single') { echo 'selected'; } ?>  value="Single">Single</option>
							<option <?php  if(set_value('Room_Type')=='Double') { echo 'selected'; } ?>  value="Double">Double</option>
							<option <?php  if(set_value('Room_Type')=='Triple') { echo 'selected'; } ?>  value="Triple">Triple</option>
							<option <?php  if(set_value('Room_Type')=='Quad') { echo 'selected'; } ?>  value="Quad">Quad</option>
							<option <?php  if(set_value('Room_Type')=='Suite') { echo 'selected'; } ?>  value="Suite">Suite</option>
						</select>
						<div class="error"><?=form_error('Room_Type')?></div>
										 
					</div>

				</div>

				<div class="search col-md-3">

					<div class="form-group"> 
						<input type="text" onfocus="(this.type='date')" id="date" class="form-control" value="<?=set_value('check_in')?>" placeholder="Check-in Date" name="check_in"  style="line-height: 20px;">
						<div class="error"><?=form_error('check_in')?></div>
					</div>

				</div>


				<div class="search col-md-3">

					<div class="form-group"> 
						<input type="text" onfocus="(this.type='date')" id="date" class="form-control" value="<?=set_value('check_out')?>" placeholder="Check-out Date" name="check_out"  style="line-height: 20px;">
						<div class="error"><?=form_error('check_out')?></div>
					</div>

				</div>
					
										
									
				
			 
				
				<div class="search col-md-2">

					<div class="form-group"> 
					
						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-search"></i></button>

					</div>

				</div>

			</div>
			
			</br>
			</br>
			</br>
			</br>

			</form>

			<?php echo $this->session->flashdata('message'); ?>
			<?php if($results){ foreach ($results as $row) {  ?>
				 
			
		
			<div class="col-lg-4 exce-grid1-mmstyle">
				<img style="height:260px;" src="<?=base_url()?>images/<?=$row['Photo1'];?>" alt="">
				<div class="grid-ec3">
					<h3><?=$row['Hotel_name']?>(<?=$row['Room_no']?>)</h3>
					<h3><?=$row['Room_Type']?></h3>
					<h3><?=$row['Price']?></h3>
					<div class="readmore-w3-agileits hotel text-center">
						<a href="<?=base_url()?>welcome/about_room/<?=$row['ID']?>">Read More</a>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
			</div>

			
			<?php } } ?>
			
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- //Codes -->
