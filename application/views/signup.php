
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <section class="login-wrap">
        <div class="main_w3agile">
		<?php echo $this->session->flashdata('message'); ?>
        
            <input id="tab-1" type="radio" name="tab" class="sign-in">
            <label for="tab-1" class="tab"></label>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked>
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
				<!-- signup form -->
                <div class="signup_wthree">
                    <form method="post" action="#">
					
                        <div class="group">
                            <label for="user1" class="label">Username</label>
                            <input id="user1" type="text" name="user_name" value="<?=set_value('user_name')?>" class="input">
							<div class="error"><?=form_error('user_name')?></div>
                        </div>
						
						<div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" type="email" name="user_email" value="<?=set_value('user_email')?>" class="input">
							<div class="error"><?=form_error('user_email')?></div>
						</div>
						
						<div class="group">
                            <label for="phone" class="label">Mobile</label>
                            <input id="phone" type="text" name="user_mobile" value="<?=set_value('user_mobile')?>" class="input">
							<div class="error"><?=form_error('user_mobile')?></div>
						</div>
						
						<div class="group">
                            <label for="password1" class="label">Password</label>
                            <input id="password1" type="password" name="user_password" value="<?=set_value('user_password')?>" class="input" data-type="password">
							<div class="error"><?=form_error('user_password')?></div>
						</div>
                        
						<div class="group">
                            <label for="password2" class="label">Re-Enter Password</label>
                            <input id="password2" type="password" name="user_c_password" value="<?=set_value('user_c_password')?>" class="input" data-type="password">
							<div class="error"><?=form_error('user_c_password')?></div>
						</div>
						
						<div class="group" style="text-align: center;"> 
							
							<label for="type" class="label">Type</label> 
							
							<input type="radio" id="type" name="type" <?php  if(set_value('type')=='User') { echo 'checked'; } ?>  value="User"> User
							<input type="radio" id="type" name="type"  <?php  if(set_value('type')=='Hotel Manager') { echo 'checked'; } ?>   value="Hotel Manager"> Hotel Manager
							
							<div class="error"><?=form_error('type')?></div>
						</div>
						
						<div class="group" style="text-align: center;">
                            <input id="check" name="check" type="checkbox" class="check">
                            <label for="check">
                                <span class="icon"></span> I agree to the <a style="font-size: 17px; color: black;" href="#">terms and conditions</a>
							</label>
							<br>
								<div class="error"><?=form_error('check')?></div>
                        </div> 						
                        
						<div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
						<br>
                        
						<div class="foot-lnk">
                            <a href="<?=base_url()?>signin">Already Member?</a>
                        </div>
                    </form>
									
                </div>
                <!-- //signup form -->
              </br>
			</br>
            </div>
        </div>
    </section>
	</br>
    </br>
    </br>
	</br>
    </br>
    </br>
    <!-- //section -->
</body>
<!-- //Body -->

</html>