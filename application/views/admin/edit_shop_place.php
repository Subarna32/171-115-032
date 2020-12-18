
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
                        Edit Shopping Places Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Shop Name</label>
										<input type="text" class="form-control" id="shopname" value="<?php if(set_value('shop_name')){ echo set_value('shop_name'); }else{ echo $shop[0]['Name']; }  ?>" placeholder="Enter Shop Name" name="shop_name">	
										<div class="error"><?=form_error('shop_name')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Description</label>
										<input type="text" class="form-control" id="description" value="<?php if(set_value('description')){ echo set_value('description'); }else{ echo $shop[0]['Description']; }  ?>" placeholder="Enter Description" name="description">
										<div class="error"><?=form_error('description')?></div>
									</div>
									
									
									<div class="form-group">
										<label for="">Short Description</label>
										<input type="text" class="form-control" id="Sdescription" value="<?php if(set_value('Sdescription')){ echo set_value('Sdescription'); }else{ echo $shop[0]['Sdescription']; }  ?>" placeholder="Enter Short Description" name="sdescription">
										<div class="error"><?=form_error('Sdescription')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" class="form-control" id="address" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $shop[0]['Address']; }  ?>" placeholder="Enter Address" name="address">
										<div class="error"><?=form_error('address')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Phone</label>
										<input type="text" class="form-control" id="phone" value="<?php if(set_value('phone')){ echo set_value('phone'); }else{ echo $shop[0]['Contact']; }  ?>" placeholder="Enter Phone" name="phone">
										<div class="error"><?=form_error('phone')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Type</label>
										<br>
										 
											<select id="type" name="type" class="form-control m-bot15">
												<option value="">----Select Type----</option>
												<option <?php  if(set_value('type')=='Clothing') { echo 'selected'; }else if($shop[0]['Type']=='Clothing') { echo 'selected'; }?> value="Clothing">Clothing</option>
												<option <?php  if(set_value('type')=='Cosmetics Products') { echo 'selected'; }else if($shop[0]['Type']=='Cosmetics Products') { echo 'selected'; }?>  value="Cosmetics Products">Cosmetics Products</option>
												<option <?php  if(set_value('type')=='Shoes') { echo 'selected'; }else if($shop[0]['Type']=='Shoes') { echo 'selected'; }?>  value="Shoes">Shoes</option>
												<option <?php  if(set_value('type')=='Jewellery') { echo 'selected'; }else if($shop[0]['Type']=='Jewellery') { echo 'selected'; }?>  value="Jewellery">Jewellery</option>
												<option <?php  if(set_value('type')=='Combined') { echo 'selected'; }else if($shop[0]['Type']=='Combined') { echo 'selected'; }?>  value="Combined">Combined</option>
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
										
									
									<button type="submit" class="btn btn-primary">Update</button>
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