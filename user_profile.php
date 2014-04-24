<?php

$email=$_REQUEST['email'];
$current_page="none";
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
					<h1>Yabber:User Profile </h1>
				</div>
				
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="user-profile">
						<div class="col-md-12">
							<div class="page-content">
							
							<?php 
									
									require_once 'controller/User_controller.php';
									require_once 'controller/Question_controller.php';
									require_once 'controller/Answer_controller.php';
									$user_controller=new UserController();
										
								    	
										$user=$user_controller->getUserByEmail($email);
										$QueNum=(new QuestionController())->getQuestionsNumber($user->email);
										$AnsNum=(new Answer_controller())->getAnswerNumberByEmail($user->email);
										
	        					    ?>
							
								<h2>About <?php echo $user->name; ?></h2>
								<div class="user-profile-img"><img width="60" height="60" src="<?php echo $user->profilePic; ?>" alt="admin"></div>
								<div class="ul_list ul_list-icon-ok about-user">
									<ul>
										<li><i class="icon-plus"></i>Name : <span><?php echo $user->name; ?></span></li>
										<li><i class="icon-map-marker"></i>Email : <span><?php echo $user->email; ?></span></li>
										
									</ul>
								</div>
							
								<div class="clearfix"></div>
							
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
						<!-- End col-md-12 -->
					</div><!-- End user-profile -->
				</div><!-- End row -->
				<div class="clearfix"></div>
				<!-- End page-content -->
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

</body>
<?php include 'view/fb.php' ;?>

</html>