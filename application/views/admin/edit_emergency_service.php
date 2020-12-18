
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
                        Edit Emergency Services Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Organization Name</label>
										<input type="text" class="form-control" id="orgname" value="<?php if(set_value('org_name')){ echo set_value('org_name'); }else{ echo $service[0]['Organization_name']; }  ?>" placeholder="Enter Organization Name" name="org_name">	
										<div class="error"><?=form_error('org_name')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Type</label>
										<br>
										 
											<select id="type" name="type" class="form-control m-bot15">
												<option value="">----Select Type----</option>
												<option <?php  if(set_value('type')=='Fire') { echo 'selected'; }else if($service[0]['Type']=='Fire') { echo 'selected'; }?>  value="Fire">Fire</option>
												<option <?php  if(set_value('type')=='Health') { echo 'selected'; }else if($service[0]['Type']=='Health') { echo 'selected'; }?>  value="Health">Health</option>
												<option <?php  if(set_value('type')=='Ambulance') { echo 'selected'; }else if($service[0]['Type']=='Ambulance') { echo 'selected'; }?>  value="Ambulance">Ambulance</option>
												<option <?php  if(set_value('type')=='Pathology') { echo 'selected'; }else if($service[0]['Type']=='Pathology') { echo 'selected'; }?>  value="Pathology">Pathology</option>
												
											</select>
										<div class="error"><?=form_error('type')?></div>
										 
									</div>
									
									<div class="form-group">
										<label for="">Address</label>
										<input type="text" class="form-control" id="address" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $service[0]['Address']; }  ?>" placeholder="Enter Address" name="address">
										<div class="error"><?=form_error('address')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Phone</label>
										<input type="text" class="form-control" id="phone" value="<?php if(set_value('phone')){ echo set_value('phone'); }else{ echo $service[0]['Phone']; }  ?>" placeholder="Enter Phone" name="phone">
										<div class="error"><?=form_error('phone')?></div>
									</div>
									
									
									<br>
									<div class="form-group">
										
										<input type="file" name="organization_image">
										<div class="error"><?=form_error('organization_image')?></div>
								
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