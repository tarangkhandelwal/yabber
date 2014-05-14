<?php 
session_start();
if (isset( $_SESSION['username'])) {


					$url="index.php";
                     header('Location: '.$url);
}

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>
<?php  $current_page = "login";?>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Yabber – Destination QnA's</title>
	<meta name="description" content="Yabber – Destination QnA's">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/strong_cyan.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
  
</head>
<body>
<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<?php include 'view/header_top.php' ;?>
	<header id="header">
			<?php include 'header.php' ;?><!-- End container -->
	</header><!-- End header -->
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Login</h1>
				</div>
				
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->

	<section class="container main-content">
 <?php

if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo $message." .Please try again.";
}
?>
		<div class="login">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Yabber:Login</h2>
						<div class="form-style form-style-3">
												  <form action="processLogin.php" method="post" id="myForm">
                                                                                    <input type="hidden" name="flag" value="0" id="flag">
     						   <input type="hidden" name="fb_name" id="fb_name" >
   						       <input type="hidden" name="fb_username" id="fb_username" >
        						<input type="hidden" name="fb_email" id="fb_email" >
        						<input type="hidden" name="fb_profilepic" id="fb_profilepic" >

								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" placeholder="Username" required name="username">
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password"  placeholder="Password" required name="password">
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
					<div class="page-content">
						<h2>Register Now</h2>
						<p>Get an account at Yabber now!</p>
						<a  href="signUp.php" class="button small color ">Create an account</a>
                        <img src="images/LoginWithFacebook.png" style="cursor:pointer;width:210px" onclick="Login()">
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End row -->
		</div><!-- End login -->
	</section><!-- End container -->
	</br>	</br>
	<!-- End footer -->
	<footer id="footer-bottom">
		<section class="container">
				<div class="copyrights f_left">Copyright 2014 Yabber | <a href="#">Theme: Ask Me (ThemeForest)</a></div>
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script src="js/tabs.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/tags.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->

</body>
<?php include 'view/fb.php' ;?>

</html>