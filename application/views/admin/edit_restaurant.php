
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
                        Edit Restaurant Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Restaurant Name</label>
										<input type="text" class="form-control" id="restname" value="<?php if(set_value('restaurant_name')){ echo set_value('restaurant_name'); }else{ echo $restaurant[0]['Restaurant_Name']; }  ?>" placeholder="Enter Restaurant Name" name="restaurant_name">	
										<div class="error"><?=form_error('restaurant_name')?></div>
									</div>
									
									 <div class="form-group">
										<label class="" for="inputSuccess">Select Available cuisines</label>
										<div class="">
											<label class="checkbox-inline">
												<input type="checkbox" name="cuisine" id="inlineCheckbox1" <?php  if(set_value('cuisine')=='Asian') { echo 'checked'; }else if($restaurant[0]['Cuisine']=='Asian') { echo 'checked'; }?> value="Asian"> Asian
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="cuisine" id="inlineCheckbox2" <?php  if(set_value('cuisine')=='Bangladeshi') { echo 'checked'; }else if($restaurant[0]['Cuisine']=='Bangladeshi') { echo 'checked'; }?> value="Bangladeshi"> Bangladeshi
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="cuisine" id="inlineCheckbox3" <?php  if(set_value('cuisine')=='Indian') { echo 'checked'; }else if($restaurant[0]['Cuisine']=='Indian') { echo 'checked'; }?> value="Indian"> Indian
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="cuisine" id="inlineCheckbox8" <?php  if(set_value('cuisine')=='Chinese') { echo 'checked'; }else if($restaurant[0]['Cuisine']=='Chinese') { echo 'checked'; }?>  value="Chinese"> Chinese
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="cuisine" id="inlineCheckbox8" <?php  if(set_value('cuisine')=='Thai') { echo 'checked'; }else if($restaurant[0]['Cuisine']=='Thai') { echo 'checked'; }?>  value="Thai"> Thai
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="cuisine" id="inlineCheckbox8" <?php  if(set_value('cuisine')=='Sea Food') { echo 'checked'; }else if($restaurant[0]['Cuisine']=='Sea Food') { echo 'checked'; }?>  value="Sea Food"> Sea Food
											</label>

										</div>
										
									</div>
									
									<div class="form-group">
										<label for="">Description</label>
										<input type="text" class="form-control" id="description" value="<?php if(set_value('description')){ echo set_value('description'); }else{ echo $restaurant[0]['Description']; }?>"  placeholder="Enter Description" name="description">
										<div class="error"><?=form_error('description')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Short Description</label>
										<input type="text" class="form-control" id="sdescription" value="<?php if(set_value('sdescription')){ echo set_value('sdescription'); }else{ echo $restaurant[0]['Sdescription']; }?>"  placeholder="Enter Short Description" name="sdescription">
										<div class="error"><?=form_error('sdescription')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" class="form-control" id="address" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $restaurant[0]['Address']; }?>"  placeholder="Enter Address" name="address">
										<div class="error"><?=form_error('address')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Phone</label>
										<input type="text" class="form-control" id="phone" value="<?php if(set_value('phone')){ echo set_value('phone'); }else{ echo $restaurant[0]['Phone']; }?>"  placeholder="Enter Phone" name="phone">
										<div class="error"><?=form_error('phone')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Business Hours</label>
										<input type="text" class="form-control" id="business_hours" value="<?php if(set_value('business_hours')){ echo set_value('business_hours'); }else{ echo $restaurant[0]['Business_hours']; }?>"  placeholder="Enter Business Hours" name="business_hours">
										<div class="error"><?=form_error('business_hours')?></div>
									</div>
									
									<div class="form-group">
										
										<label for="">Upload Pdf</label>
										<input type="file" name="pdffile" accept='.pdf'>
										<div class="error"><?=form_error('pdffile')?></div>
								
									</div>
										
									<div class="form-group">
										
										<label for="">Upload Image</label>
										<input type="file" name="organization_image" accept='image'>
										<div class="error"><?=form_error('organization_image')?></div>
								
									</div>
										
									<div class="form-group">
										
										<label for="">Upload Image</label>
										<input type="file" name="organization_image1" accept='image'>
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