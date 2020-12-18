
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
                        Insert Fare of Transports Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Service Name</label>
										<input type="text" class="form-control" id="servicename" value="<?=set_value('service_name')?>" placeholder="Enter Service Name" name="service_name">	
										<div class="error"><?=form_error('service_name')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Fare(in TK)</label>
										<input type="text" class="form-control" id="fare" value="<?=set_value('fare')?>" placeholder="Enter Fare" name="fare">
										<div class="error"><?=form_error('fare')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Distance From</label>
										<input type="text" class="form-control" id="dist_frm" value="<?=set_value('dist_frm')?>" placeholder="Enter Origin" name="dist_frm">
										<div class="error"><?=form_error('dist_frm')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Distance To</label>
										<input type="text" class="form-control" id="dist_to" value="<?=set_value('dist_to')?>" placeholder="Enter Destination" name="dist_to">
										<div class="error"><?=form_error('dist_to')?></div>
									</div>
									
									<br>
									
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