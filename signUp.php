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
<?php  $current_page = "signup";?>
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
					<h1>Yabber: Sign Up</h1>
				</div>
				
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<div class="page-content">
					<div class="boxedtitle page-title"><h2>Sign Up for Yabber</h2></div>
					
					<div class="form-style form-style-3">
						        <form method="post" action="processSignup.php" enctype="multipart/form-data">

							<div class="form-inputs clearfix">
								<p>
									<label class="required">Full Name<span>*</span></label>
									<input type="text" name="name" required>
								</p>
								
								<p>
									<label class="required">E-Mail<span>*</span></label>
									<input type="email" name="email" id="email" required> <div id="email_div"></div>
								</p>
								
								<p>
									<label class="required">Password<span>*</span></label>
								 <input type="password" name="password" required>
								</p>
								
							
							</div>
							<div class="form-style form-style-2">
								<div class="user-profile-img"><img src="http://2code.info/demo/html/ask-me/images/demo/admin.jpeg" alt="admin"></div>
								<p class="user-profile-p">
									<label>Profile Picture</label>
									<div class="fileinputs">
										<input type="file" name="picture" class="button color small " required>  
										
									</div>
								<p></p>
								<div class="clearfix"></div>
								
							</div>
							<div class="form-inputs clearfix">
							
							</div></br>
							<p class="form-submit">
								<input type="submit" value="Sign Up" class="button color small login-submit submit">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div><!-- End main -->
			<aside class="col-md-3 sidebar">
				<?php include 'sidebar.php'; ?>
			
				
			</aside><!-- End sidebar -->
		</div><!-- End row -->
	</section><!-- End container -->
	
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
        <script>
            


$(document).ready(function(){
    
var flag_email=0;
$("#email").blur(function(){
    var emailid=$("#email").val();
  if(!(emailid=="")) 
  {
  
    $.post("checkEmail.php",
    {
         email:emailid    },
    function(data,status){
      $("#email_div").html(data);
      
      if(data=="Email already registered.")
          flag_email=1;
    });
}
	
  });
});

</script>
<style>
#email_div{color:red;}
</style>
</body>
<?php include 'view/fb.php' ;?>

</html>