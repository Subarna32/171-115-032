
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
                        Insert Tourist Attactions Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Place Name</label>
										<input type="text" class="form-control" id="placename" value="<?=set_value('place_name')?>" placeholder="Enter Place Name" name="place_name">	
										<div class="error"><?=form_error('place_name')?></div>
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