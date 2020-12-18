
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
                        Edit User Information
                    </header>
                    
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data"  >
									
									<?php echo $this->session->flashdata('message'); ?>
									
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" id="user_name" value="<?php if(set_value('user_name')){ echo set_value('user_name'); }else{ echo $user[0]['Name']; }  ?>" placeholder="Enter Name" name="user_name">	
										<div class="error"><?=form_error('user_name')?></div>
									</div>
								
									<div class="form-group">
										<label for="">Email</label>
										<input type="text" class="form-control" id="user_email" value="<?php if(set_value('user_email')){ echo set_value('user_email'); }else{ echo $user[0]['Email']; }  ?>" placeholder="Enter Email" name="user_email">
										<div class="error"><?=form_error('user_email')?></div>
									</div>
									
									<div class="form-group">
										<label for="">Mobile</label>
										<input type="text" class="form-control" id="mobile" value="<?php if(set_value('user_mobile')){ echo set_value('user_mobile'); }else{ echo $user[0]['Mobile']; }  ?>" placeholder="Enter Phone" name="user_mobile">
										<div class="error"><?=form_error('user_mobile')?></div>
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