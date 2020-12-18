
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
                        Edit Fare Details Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Service Name</label>
										<input type="text" class="form-control" id="servicename" value="<?php if(set_value('service_name')){ echo set_value('service_name'); }else{ echo $fare[0]['Name']; }  ?>" placeholder="Enter Service Name" name="service_name">	
										<div class="error"><?=form_error('service_name')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Fare(in TK)</label>
										<input type="text" class="form-control" id="fare" value="<?php if(set_value('fare')){ echo set_value('fare'); }else{ echo $fare[0]['Fare']; }  ?>" placeholder="Enter Address" name="fare">
										<div class="error"><?=form_error('fare')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Distance From</label>
										<input type="text" class="form-control" id="dist_frm" value="<?php if(set_value('dist_frm')){ echo set_value('dist_frm'); }else{ echo $fare[0]['Distance_frm']; }  ?>" placeholder="Enter Origin" name="dist_frm">
										<div class="error"><?=form_error('dist_frm')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Distance To</label>
										<input type="text" class="form-control" id="dist_to" value="<?php if(set_value('dist_to')){ echo set_value('dist_to'); }else{ echo $fare[0]['Distance_to']; }  ?>" placeholder="Enter Destination" name="dist_to">
										<div class="error"><?=form_error('dist_to')?></div>
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