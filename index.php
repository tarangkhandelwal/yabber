<!DOCTYPE html>
<?php 
session_start();
require_once 'controller/Question_controller.php';
require_once 'controller/Answer_controller.php';
require_once 'controller/User_controller.php';
require_once 'controller/topic_controller.php';
	$current_page="home";							
?>
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
  <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1425264661058313', // Set YOUR APP ID
      channelUrl : 'http://hayageek.com/examples/oauth/facebook/oauth-javascript/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
 
    FB.Event.subscribe('auth.authResponseChange', function(response) 
    {
     if (response.status === 'connected') 
    {
        document.getElementById("message").innerHTML +=  "<br>Connected to Facebook";
        //SUCCESS
 
    }    
    else if (response.status === 'not_authorized') 
    {
        document.getElementById("message").innerHTML +=  "<br>Failed to Connect";
 
        //FAILED
    } else 
    {
        document.getElementById("message").innerHTML +=  "<br>Logged Out";
 
        //UNKNOWN ERROR
    }
    }); 
 
    };
 
    function Login()
    {
 
        FB.login(function(response) {
           if (response.authResponse) 
           {
                getUserInfo();
            } else 
            {
             console.log('User cancelled login or did not fully authorize.');
            }
         },{scope: 'email,user_photos,user_videos'});
 
    }
 
  function getUserInfo() {
        FB.api('/me', function(response) {
        document.getElementById('fb_name').value =response.name ;
        document.getElementById('fb_username').value =response.username ;
        document.getElementById('fb_email').value =response.email ;
    
        
        document.getElementById('flag').value ="1" ;
        document.getElementById("myForm").submit();

    });
    
    
      FB.api('/me/picture?type=normal', function(response1) {
 
        
        	   document.getElementById('fb_profilepic').value =response1.data.url;         
            
 
    });
    

    }
    function getPhoto()
    {
      
      FB.api('/me/picture?type=normal', function(response) {
 
        var str=""+response.data.url;
        	   document.getElementById('fb_profilepic').value =str ;         
            
 
    });
    
      
     
    }
    function Logout()
    {
        FB.logout(function(){document.location.reload();});
    }
 
  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
 
</script>
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	
	<?php include 'view/header_top.php' ;?>
	<header id="header">
		<?php include 'header.php' ;?>
	</header><!-- End header -->
	
	<div class="section-warp ask-me">
		<div class="container clearfix">
			<div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
				<?php 
				
				if (isset( $_SESSION['username'])) {
				
				?>
                <div class="row">
					<div class="col-md-3">
						<h2>Welcome to Yabber</h2>
					<p>Yabber.com provides you with an interface where you can put up your questions on various categories to get the views on that question from people around the globe.</p>
						<div class="clearfix"></div>
						
					</div>
					<div class="col-md-9">
						<form method="post" action="processQuestion.php" class="form-style form-style-2">
							<p>
								<textarea rows="4" id="question_title" name="ask_text" placeholder="Ask any question and get answers from people with different perception ?" required title="Enter Your Question First"></textarea>
								<i class="icon-pencil"></i>
                                
                                <span class="styled-select publish-question" style="right:0px !important;left:10px;bottom: 7px !important;">
									  <?php 
									 
    								$controller=new TopicController();
								   	$topics=$controller->getAllTopics(); ?>
									 <select name="topics">
     
								    <?php
								    foreach($topics as $val) {
        					        ?>
								    <option value="<?php echo $val->getId(); ?>">
							        <?php
								    echo $val->getTitle();
									}?>
							    </option>
							</select>
									</span>
                                
							<input type="Submit" value="Ask Now" class="fix_submit_btn">
								
							</p>
						</form>
					</div>
				</div><!-- End row -->
                <?php } else {?>
                <div class="row">
					<div class="col-md-12">
						<h2>Welcome to Yabber, ultimate destination to discuss Q&A's</h2>
						<p>Yabber.com provides you with an interface where you can put up your questions on various categories to get the views on that question from people around the globe.</p>
						<div class="clearfix"></div>
						<a class="color button dark_button medium" href="aboutus.php">About Us</a>
						<a class="color button dark_button medium" href="signUp.php">Join Now</a>
						<div class="clearfix"></div>
					<br>
					</div>
				</div>
			<?php } ?>
                
                
                
			</div><!-- End box_icon -->
		</div><!-- End container -->
	</div><!-- End section-warp -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a href="#" class="current">Recent Questions</a></li>
		                <li class="tab"><a href="#">Most Responses</a></li>
		                <li class="tab"><a href="#">Recently Answered</a></li>
		                <li class="tab"><a href="#">No answers</a></li>
		            </ul>
		            <div class="tab-inner-warp">
						<div class="tab-inner">

                                <?php 

    
								    $controller=new QuestionController();
								   $questions=$controller->getAllQuestions(); 
									$user_controller=new UserController();
										$topic_controller=new TopicController();
								    foreach($questions as $val) {
										
										$user=$user_controller->getUserByID($val->user_id);
										$topic=$topic_controller->getTopicByID($val->topic_id);
	        					    ?>
                                    <article class="question question-type-normal">
                                    	<h2>
									<a href="myquestion.php?qid=<?php  echo $val->question_id; ?>"><?php echo $val->content; ?></a>
                                    	</h2>
								</h2>
                                <div class="question-author">
									<a href="user_profile.php?email=<?php echo $user->email; ?>" original-title="<?php echo $user->name; ?>" class="question-author-img tooltip-n"><span></span><img alt="" src="<?php echo $user->profilePic; ?>"></a>
								</div>
							       <div class="question-inner">
									<div class="clearfix"></div>
									
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $topic; ?></a></span>
									<span class="question-date"><i class="icon-time">Posted on:</i><?php echo $val->date; ?></span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i><?php echo $controller->getTotalAnswersByQid( $val->question_id)." Answer"?></a></span>
									
									<div class="clearfix"></div>
								</div>
							</article>
       

       						 <?php } ?>
    
                            
                        
                        	
							
							
						
						
							
							
						
					    </div>
					</div>
					<div class="tab-inner-warp">
						<div class="tab-inner">
						<?php 
									
    
								 
								   $questions1=$controller->getMostResponse(); 
								
								    foreach($questions1 as $val) {
										
										$user=$user_controller->getUserByID($val->user_id);
										$topic=$topic_controller->getTopicByID($val->topic_id);
	        					    ?>
							 <article class="question question-type-normal">
                                    	<h2>
									<a href="myquestion.php?qid=<?php  echo $val->question_id; ?>"><?php echo $val->content; ?></a>
                                    	</h2>
								</h2>
                                <div class="question-author">
									<a href="user_profile.php?email=<?php echo $user->email; ?>" original-title="<?php echo $user->name; ?>" class="question-author-img tooltip-n"><span></span><img alt="" src="<?php echo $user->profilePic; ?>"></a>
								</div>
							       <div class="question-inner">
									<div class="clearfix"></div>
									
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $topic; ?></a></span>
									<span class="question-date"><i class="icon-time">Posted on:</i><?php echo $val->date; ?></span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i><?php echo $controller->getTotalAnswersByQid( $val->question_id)." Answer"?></a></span>
									
									<div class="clearfix"></div>
								</div>
							</article>
							<?php
							} 
							?>
							
						
					    </div>
					</div>
					<div class="tab-inner-warp">
						<div class="tab-inner">
							<?php 

    
								
								   $questions2=$controller->getRecentlyAnswered(); 
									
								    foreach($questions2 as $val) {
										
										$user=$user_controller->getUserByID($val->user_id);
										$topic=$topic_controller->getTopicByID($val->topic_id);
	        					    ?>
                                    <article class="question question-type-normal">
                                    	<h2>
									<a href="myquestion.php?qid=<?php  echo $val->question_id; ?>"><?php echo $val->content; ?></a>
                                    	</h2>
								</h2>
                                <div class="question-author">
									<a href="user_profile.php?email=<?php echo $user->email; ?>" original-title="<?php echo $user->name; ?>" class="question-author-img tooltip-n"><span></span><img alt="" src="<?php echo $user->profilePic; ?>"></a>
								</div>
							       <div class="question-inner">
									<div class="clearfix"></div>
									
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $topic; ?></a></span>
									<span class="question-date"><i class="icon-time">Posted on:</i><?php echo $val->date; ?></span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i><?php echo $controller->getTotalAnswersByQid( $val->question_id)." Answer"?></a></span>
									
									<div class="clearfix"></div>
								</div>
							</article>
       

       						 <?php } ?>
						
					    </div>
					</div>
					<div class="tab-inner-warp">
						<div class="tab-inner">
<?php 
									
    
								   
								   $questions3=$controller->getNoResponse(); 
								
								    foreach($questions3 as $val) {
										
										$user=$user_controller->getUserByID($val->user_id);
										$topic=$topic_controller->getTopicByID($val->topic_id);
	        					    ?>
							 <article class="question question-type-normal">
                                    	<h2>
									<a href="myquestion.php?qid=<?php  echo $val->question_id; ?>"><?php echo $val->content; ?></a>
                                    	</h2>
								</h2>
                                <div class="question-author">
									<a href="user_profile.php?email=<?php echo $user->email; ?>" original-title="<?php echo $user->name; ?>" class="question-author-img tooltip-n"><span></span><img alt="" src="<?php echo $user->profilePic; ?>"></a>
								</div>
							       <div class="question-inner">
									<div class="clearfix"></div>
									
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $topic; ?></a></span>
									<span class="question-date"><i class="icon-time">Posted on:</i><?php echo $val->date; ?></span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i><?php echo $controller->getTotalAnswersByQid( $val->question_id)." Answer"?></a></span>
									
									<div class="clearfix"></div>
								</div>
							</article>
							<?php
							} 
							?>
						
					    </div>
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

</body>


</html>