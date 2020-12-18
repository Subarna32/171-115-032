
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
                        Edit Tourist Attractions Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Place Name</label>
										<input type="text" class="form-control" id="placename" value="<?php if(set_value('place_name')){ echo set_value('place_name'); }else{ echo $tourist[0]['Name']; }  ?>" placeholder="Enter Place Name" name="place_name">	
										<div class="error"><?=form_error('place_name')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Description</label>
										<input type="text" class="form-control" id="description" value="<?php if(set_value('description')){ echo set_value('description'); }else{ echo $tourist[0]['Description']; }  ?>" placeholder="Enter Description" name="description">
										<div class="error"><?=form_error('description')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Short Description</label>
										<input type="text" class="form-control" id="sdescription" value="<?php if(set_value('sdescription')){ echo set_value('sdescription'); }else{ echo $tourist[0]['Sdescription']; }  ?>" placeholder="Enter Short Description" name="sdescription">
										<div class="error"><?=form_error('sdescription')?></div>
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