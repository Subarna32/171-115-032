
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
                        Insert Shopping Places Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Shop Name</label>
										<input type="text" class="form-control" id="shopname" value="<?=set_value('shop_name')?>" placeholder="Enter Shop Name" name="shop_name">	
										<div class="error"><?=form_error('shop_name')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Description</label>
										<input type="text" class="form-control" id="description" value="<?=set_value('description')?>" placeholder="Enter Description" name="description">
										<div class="error"><?=form_error('description')?></div>
									</div>
									
									
									<div class="form-group">
										<label for="">Short Description</label>
										<input type="text" class="form-control" id="sdescription" value="<?=set_value('sdescription')?>" placeholder="Enter Short Description" name="sdescription">
										<div class="error"><?=form_error('sdescription')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" class="form-control" id="address" value="<?=set_value('address')?>" placeholder="Enter Address" name="address">
										<div class="error"><?=form_error('address')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Phone</label>
										<input type="text" class="form-control" id="phone" value="<?=set_value('phone')?>" placeholder="Enter Phone" name="phone">
										<div class="error"><?=form_error('phone')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Type</label>
										<br>
										 
											<select id="type" name="type" class="form-control m-bot15">
												<option value="">----Select Shopping Type----</option>
												<option <?php  if(set_value('type')=='Clothing') { echo 'selected'; } ?>  value="Clothing">Clothing</option>
												<option <?php  if(set_value('type')=='Cosmetics Products') { echo 'selected'; } ?>  value="Cosmetics Products">Cosmetics Products</option>
												<option <?php  if(set_value('type')=='Shoes') { echo 'selected'; } ?>  value="Shoes">Shoes</option>
												<option <?php  if(set_value('type')=='Jewellery') { echo 'selected'; } ?>  value="Jewellery">Jewellery</option>
												<option <?php  if(set_value('type')=='Combined') { echo 'selected'; } ?>  value="Combined">Combined</option>
											</select>
										<div class="error"><?=form_error('type')?></div>
										 
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