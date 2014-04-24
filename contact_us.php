<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Ask me – Responsive Questions and Answers Template</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	<meta name="author" content="2code.info">
	
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
<?php  $current_page = "contact";?>
<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<?php include 'view/header_top.php' ;?>
	<header id="header">
		<?php include 'header.php' ;?>
	</header><!-- End header -->
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Yabber:Contact Us</h1>
				</div>
				
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content page-full-width">
		<div class="row">
			<div class="contact-us">
				<div class="col-md-12">
					<div class="page-content">
						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Prakash+Nagar,+Indore,+Madhya+Pradesh,+India&amp;aq=0&amp;oq=prakash+nagar+indore&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Prakash+Nagar,+Navlakha,+Indore,+Madhya+Pradesh,+India&amp;t=m&amp;z=14&amp;ll=22.695744,75.881716&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Prakash+Nagar,+Indore,+Madhya+Pradesh,+India&amp;aq=0&amp;oq=prakash+nagar+indore&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Prakash+Nagar,+Navlakha,+Indore,+Madhya+Pradesh,+India&amp;t=m&amp;z=14&amp;ll=22.695744,75.881716" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					</div><!-- End page-content -->
				</div>
				<div class="col-md-7">
					<div class="page-content">
						<h2>Say hello !
                        <?php 
						if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo ":".$message;
		}
	
						
						?>
                        
                        </h2>
						<p></p>
						<script type="text/javascript">
						function mail(str){
                            		 // use get method to make an AJAX call to addnumbers.jsp
                            		 $.get( "mail.php",{name :  $('[name=name]').val(),mail :  $('[name=mail]').val(),url :  $('[name=url]').val(),message :  $('[name=message]').val()},doUpdate6);
                            		}
                  			function doUpdate6(response)
                         		{
                         		  if (response) {
                         		      $("#view6").html(response);
                         		  }
                         		
                         		}
						</script>
						<form class="form-style form-style-3 form-style-5 " name="frm1" action="mail.php" method="post">
							<div class="form-inputs clearfix">
								<p>
									<label for="name" class="required">Name<span>*</span></label>
									<input type="text" class="required-item" value="" name="name" id="name" aria-required="true" required>
								</p>
								<p>
									<label for="mail" class="required">E-Mail<span>*</span></label>
									<input type="email" class="required-item" id="mail" name="mail" value="" aria-required="true" required>
								</p>
								<p>
									<label for="url" class="required">Website</label>
									<input type="text" id="url" name="url" value="">
								</p>
							</div>
							<div class="form-textarea">
								<p>
									<label for="message" class="required">Message<span>*</span></label>
									<textarea id="message" class="required-item" name="message" aria-required="true" cols="58" rows="7" required></textarea>
								</p>
							</div>
							<p class="form-submit">
								<input name="submit" type="submit" value="Send" class="submit button small color">
							</p>
						</form>
						<div id="view6"></div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-5">
					<div class="page-content">
						<h2>About Us</h2>
						<p>Yabber.com provides you with an interface where you can put up your questions on various categories to get the views on that question from people around the globe.</p>
						<div class="widget widget_contact">
							<ul>
								<li><i class="icon-map-marker"></i>Address :<p>5, Prakash Nagar,Navlakkha Indore(M.P.)</p></li>
								<li><i class="icon-phone"></i>Phone number :<p>(+91) 7828389555</p></li>
								<li><i class="icon-envelope-alt"></i>E-mail :<p>tarangkhandelwal@gmail.com</p></li>
								<li>
									<i class="icon-share"></i>Social links :
									<p>
										<a href="https://www.facebook.com/tarangkhandelwal" original-title="Facebook" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#3b5997" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-facebook"></i>
												</span>
											</span>
										</a>
										<a href="https://twitter.com/tarangkhandelwa" original-title="Twitter" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#00baf0" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-twitter"></i>
												</span>
											</span>
										</a>
										
										<a href="http://in.linkedin.com/pub/tarang-khandelwal/8a/452/262" original-title="Linkedin" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#006599" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-linkedin"></i>
												</span>
											</span>
										</a>
										
									</p>
								</li>
							</ul>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End contact-us -->
		</div><!-- End row -->
	</section><!-- End container -->
	
	
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