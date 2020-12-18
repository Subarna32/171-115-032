
<br>
<br>
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
		<!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Insert Hotel Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Hotel Description</label>
										<input type="text" class="form-control" id="description" value="<?=set_value('description')?>" placeholder="Enter Description" name="description">
										<div class="error"><?=form_error('description')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" class="form-control" id="address" value="<?=set_value('address')?>" placeholder="Enter Address" name="address">
										<div class="error"><?=form_error('address')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Contact</label>
										<input type="text" class="form-control" id="phone" value="<?=set_value('phone')?>" placeholder="Enter Contact" name="phone">
										<div class="error"><?=form_error('phone')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Room Number</label>
										<input type="text" class="form-control" id="roomno" value="<?=set_value('roomno')?>" placeholder="Enter Room Number" name="roomno">
										<div class="error"><?=form_error('roomno')?></div>
									</div>
									
									
									<div class="form-group">
										<label for="">Room Type</label>
										<br>
										 
											<select id="type" name="type" class="form-control m-bot15">
												<option value="">----Select Room Type----</option>
												<option <?php  if(set_value('type')=='Single') { echo 'selected'; } ?>  value="Single">Single</option>
												<option <?php  if(set_value('type')=='Double') { echo 'selected'; } ?>  value="Double">Double</option>
												<option <?php  if(set_value('type')=='Triple') { echo 'selected'; } ?>  value="Triple">Triple</option>
												<option <?php  if(set_value('type')=='Quad') { echo 'selected'; } ?>  value="Quad">Quad</option>
												<option <?php  if(set_value('type')=='Suite') { echo 'selected'; } ?>  value="Suite">Suite</option>
											</select>
										<div class="error"><?=form_error('type')?></div>
										 
									</div>
									
									<div class="form-group">
										<label for="">Price</label>
										<input type="text" class="form-control" id="price" value="<?=set_value('price')?>" placeholder="Enter Price" name="price">
										<div class="error"><?=form_error('price')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Room Description</label>
										<input type="text" class="form-control" id="rdescription" value="<?=set_value('rdescription')?>" placeholder="Enter Room Description" name="rdescription">
										<div class="error"><?=form_error('rdescription')?></div>
									</div>
									
									<br>
									<div class="form-group">
										
										<input type="file" name="organization_image">
										<div class="error"><?=form_error('organization_image')?></div>
								
									</div>
									<div class="form-group">
										
										<input type="file" name="organization_image1">
										<div class="error"><?=form_error('organization_image1')?></div>
								
									</div>
										
									<button type="submit" class="btn btn-primary">Insert</button>
									<br>
									<br>
                            </form>
                            </div>

					</div>
                </section>
				
            </div>
        </div>
       </div>
</section>
<br>
<br>
<br>
<br>