
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
                        Edit Gallery
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
								
									<div class="form-group">
										<label for="">Type</label>
										<br>
										 
											<select id="type" name="type" class="form-control m-bot15">
												<option value="">----Select Type----</option>
												<option <?php  if(set_value('type')=='Admin') { echo 'selected'; }else if($gallery[0]['Type']=='Admin') { echo 'selected'; }?> value="Admin">Admin</option>
												<option <?php  if(set_value('type')=='Hotel') { echo 'selected'; }else if($gallery[0]['Type']=='Hotel') { echo 'selected'; }?>  value="Hotel">Hotel</option>
											</select>
										<div class="error"><?=form_error('type')?></div>
										 
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