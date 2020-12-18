
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
                        Edit Hotel Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Description</label>
										<input type="text" class="form-control" id="description" value="<?php if(set_value('description')){ echo set_value('description'); }else{ echo $hotel[0]['Description']; }  ?>" placeholder="Enter Description" name="description">
										<div class="error"><?=form_error('description')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" class="form-control" id="address" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $hotel[0]['Address']; }  ?>" placeholder="Enter Address" name="address">
										<div class="error"><?=form_error('address')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Contact</label>
										<input type="text" class="form-control" id="phone" value="<?php if(set_value('phone')){ echo set_value('phone'); }else{ echo $hotel[0]['Phone']; }  ?>" placeholder="Enter Contact" name="phone">
										<div class="error"><?=form_error('phone')?></div>
									</div>
									<div class="form-group">
										<label for="">Room Number</label>
										<input type="text" class="form-control" id="roomno" value="<?php if(set_value('roomno')){ echo set_value('roomno'); }else{ echo $hotel[0]['Room_no']; }  ?>" placeholder="Enter Room Number" name="roomno">	
										<div class="error"><?=form_error('roomno')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Room Type</label>
										<br>
										 
											<select id="type" name="type" class="form-control m-bot15">
												<option value="">----Select Room Type----</option>							
												<option <?php  if(set_value('type')=='Single') { echo 'selected'; }else if($hotel[0]['Room_Type']=='Single') { echo 'selected'; }?> value="Single">Single</option>
												<option <?php  if(set_value('type')=='Double') { echo 'selected'; }else if($hotel[0]['Room_Type']=='Double') { echo 'selected'; } ?>  value="Double">Double</option>
												<option <?php  if(set_value('type')=='Triple') { echo 'selected'; }else if($hotel[0]['Room_Type']=='Triple') { echo 'selected'; } ?>  value="Triple">Triple</option>
												<option <?php  if(set_value('type')=='Quad') { echo 'selected'; } else if($hotel[0]['Room_Type']=='Quad') { echo 'selected'; }?>  value="Quad">Quad</option>
												<option <?php  if(set_value('type')=='Suite') { echo 'selected'; }else if($hotel[0]['Room_Type']=='Suite') { echo 'selected'; } ?>  value="Suite">Suite</option>
											</select>
										<div class="error"><?=form_error('type')?></div>
										 
									</div>
									
									<div class="form-group">
										<label for="">Price</label>
										<input type="text" class="form-control" id="price" value="<?php if(set_value('price')){ echo set_value('price'); }else{ echo $hotel[0]['Price']; }  ?>" placeholder="Enter Price" name="price">
										<div class="error"><?=form_error('price')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Room Description</label>
										<input type="text" class="form-control" id="rdescription" value="<?php if(set_value('rdescription')){ echo set_value('rdescription'); }else{ echo $hotel[0]['Room_description']; }  ?>" placeholder="Enter Room Description" name="rdescription">
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
										
									
									<br>
								
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