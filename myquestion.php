<?php
session_start();
require_once('controller/Question_controller.php');
require_once('controller/User_controller.php');
require_once('controller/Answer_controller.php');
require_once('controller/topic_controller.php');
$question_id=$_REQUEST["qid"];
$val=(new QuestionController())->getQuestionByID($question_id);
$user_controller=new UserController();
$current_page="none";
$topic=(new TopicController())->getTopicByID($val->topic_id);
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
<input type="hidden" id="current_user_name" value="<?php echo $_SESSION['username']?>; ">
<input type="hidden" id="current_user_pic" value="<?php echo  $_SESSION['profilepic']?>; ">

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<?php include 'view/header_top.php' ;?>
	<header id="header">
		<?php include 'header.php'; ?>
	</header><!-- End header -->
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Yabber:Question Page</h1>
				</div>
				
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>
						<?php echo $val->content; ?>
					</h2>
					
					<div class="question-inner">
						<div class="clearfix"></div>
						
						<span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $topic; ?></a></span>
									<span class="question-date"><i class="icon-time">Posted on:</i><?php echo $val->date; ?></span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
						<div class="clearfix"></div>
					</div>
				</article>
				
				<!-- End share-tags -->
				
		<!--		<div class="about-author clearfix">
				    <div class="author-image">
				    	<a href="#" original-title="admin" class="tooltip-n"><img alt="" src=""></a>
				    </div>
				    <div class="author-bio">
				        <h4>About the Author</h4>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor neque. Nullam lobortis, sapien vitae lobortis tristique.
				    </div>
				</div><!-- End about-author -->
			
				
				<div id="commentlist" class="page-content">
                 <?php
					$allAnswer=(new Answer_controller())->getAllAnswer($val->question_id);
					?>
					<div class="boxedtitle page-title"><h2>Answers ( <span class="color"><?php echo sizeof($allAnswer);?></span> )</h2></div>
					<ol class="commentlist clearfix" id="answer_list">
                     <?php
					    foreach($allAnswer as $val) {
			             $ans_user=$user_controller->getUserByID($val->  user_id);
        ?>
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar"><img alt="" src="<?php echo $ans_user->profilePic;?>"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#"><?php echo $ans_user->name;?></a></div>
					                	
					                	
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i><?php echo $val->date; ?></div> 
					                    </div>
					                    
					                </div>
					                <div class="text"><p><?php echo $val->content; ?></p>
					                </div>
									
					            </div>
					        </div>
					       
					    </li>
					   <?php } ?>
                       
                       
                        
                        
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				
				<div id="respond" class="comment-respond page-content clearfix">
				    
				 <?php 
				 if(isset($_SESSION["username"]))
				 {
				 ?>
                 <div class="boxedtitle page-title"><h2>Post your answer</h2></div>
                    <form  action="submit_Answer.php" method="post" id="commentform" class="comment-form">
                    <input type="hidden" id="qid" name="qid" value="<?php echo $question_id;?>">

				        
				        <div id="respond-textarea">
				            <p>

				                <textarea id="comment" name="answer"  aria-required="true" cols="58" rows="8"></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="button" id="submit_answer" value="Post your answer" class="button small color">
				        </p>
						<p>
						<input name="reset" type="reset" style="display:none;" id="reset_frm" value="RESET" class="button small color" >
						</p>
				    </form>
                    <?php 
				 }
				 else{
					?>
                                     <div class="boxedtitle page-title"><h2>You need to login to answer this question.</h2>
                                     
                                     <a href="login.php" class="button small color ">Login</a>
                                     </div>
                                     <?php }?>
                    
                    
				</div>
				
				
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
 $("#submit_answer").click(function(){

    var comment=$("#comment").val();
	 var question_id=$("#qid").val();
	 var name=$("#current_user_name").val();
 	 var profilepic=$("#current_user_pic").val();

    $.post("submit_Answer.php",
    {
         qid:question_id,answer:comment    },
    function(data,status){

  // $( "#answer_list" ).append( data );
  $("#reset_frm").click();
$(data).appendTo("#answer_list").hide().fadeIn(300);
						
  
    });
     });
});

</script>

</body>
<?php include 'view/fb.php' ;?>


</html>