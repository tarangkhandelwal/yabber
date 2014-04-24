
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
						  <form action="processLogin.php" method="post" id="myForm">
                                  <input type="hidden" name="flag" value="0" id="flag">
     							   <input type="hidden" name="fb_name" id="fb_name" >
						        <input type="hidden" name="fb_username" id="fb_username" >
						        <input type="hidden" name="fb_email" id="fb_email" >
						        <input type="hidden" name="fb_profilepic" id="fb_profilepic" >
	
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text"  placeholder="Username"  name="username" required>
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" placeholder="Password" required name="password">
										<i class="icon-lock"></i>
										
									</p>
								</div>
								<p class="form-submit login-submit">
                          
									<input type="submit" value="Log in" class="button color small login-submit submit">
								</p>
								<div class="rememberme">
									<label><input type="checkbox" checked="checked"> Remember Me</label>
								</div>
							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>Register Now</h2>
						<p>Get an account at Yabber now!</p>
						<a href="signUp.php" class="button color small ">Create an account</a>
                        <img src="images/LoginWithFacebook.png" style="cursor:pointer;width:210px" onclick="Login()">
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
						<input type="password" value="">
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input type="password" value="">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>Lost Password<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
			<form>
      			<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Reset" class="button color small submit">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
    
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					<li><a href="contact_us.php"><i class="icon-envelope"></i>Contact</a></li>
				 <?php 
				if (!isset( $_SESSION['username'])) {
					?>
					<li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
					<?php } ?>
					
					
				</ul>
			</nav>
			<div class="header-search">
            <?php 
				if (isset( $_SESSION['username'])) {
				$username=$_SESSION['username'];
				$email=$_SESSION['email'];
				$profile_pic=$_SESSION['profilepic'];
			echo "Welcome,"." ".$username;
			?>
            <img src="<?php echo $profile_pic;?>" style="width:42px;">
           
                     <a href="logout.php" class="button small lime-green-button">Logout</a>
           

            
            <?php }?>
            
            </div>
		</section><!-- End container -->
	</div><!-- End header-top -->