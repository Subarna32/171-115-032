
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
    <section class="login-wrap1">
	<?php echo $this->session->flashdata('message'); ?>
        <div class="main_w3agile">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab"></label>
            <div class="login-form">
                <!-- signin form -->
                <div class="signin_wthree">
				</br>
				</br>
                    <form method="post" action="#">
					
					<div id="e_message"></div>
					
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="user_email" type="email" name="user_email" value="" class="input">
							
						</div>
						
                       <div class="group">
                            <label for="password1" class="label">Password</label>
                            <input id="user_password" type="password" name="user_password" value="" class="input" data-type="password">
						</div>
						
						</br>
                        <div class="group">
                            <input type="button" onclick="check_login()" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            New Member? <a href="<?=base_url()?>signup">Create Account</a>
                        </div>
                    </form>
                </div>
                <!-- //signin form -->
				
            </div>
        </div>
    </section>
	
    </br>
	</br>
    </br>
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