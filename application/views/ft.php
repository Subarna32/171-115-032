

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
				<li>Fare of Transports</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- Codes -->
	<div class="typo">
		<div class="container">
			<h3 class="title">Fare of Transports</h3>
			<br>
			<br>
			<form action="" method="post">
			<div class="search_div row col-lg-12">
			
				<div class="search col-md-10">
					
					<div class="form-group">
							
						<input id="user_origin" type="text" class="form-control" value="" placeholder="Enter Place From" name="user_origin">
						<div class="error"><?=form_error('user_origin')?></div>
					</div>

				</div>
				
				<div class="search col-md-2">

					<div class="form-group"> 
						
						<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>

					</div>

				</div>
			</div>
			</form>
			<br>
			<br>
			<br>
			<br>
			
			<?php echo $this->session->flashdata('message'); ?>
        
						
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>Service Name</th>
									<th>Distance From</th>
									<th>Distance To</th>
									<th>Fare(in TK)</th>
								</tr>
							</thead>
							<tbody>
							<?php if($results){ foreach ($results as $row) {  ?>	
									<tr>
										<td><?=$row['Name']?></td>
										<td><?=$row['Distance_frm']?></td>
										<td><?=$row['Distance_to']?></td>
										<td><?=$row['Fare']?></td>
										
									</tr>		 
							<?php } } ?>	 
							</tbody>
						</table>
					</div>
				
				
		</div>
	</div>
	<!-- //Codes -->
