<?php
require_once('model/answer.php');
require_once('controller/Answer_controller.php');
require_once('controller/User_controller.php');

session_start();



$question_id=$_REQUEST["qid"];
$answer=$_REQUEST["answer"];
$email=$_SESSION["email"];


$user_id=(new UserController())->getUserIDByEmail($email);
$answer_controller=(new Answer_controller())->submit_answer($answer,$user_id, $question_id);
$ans_user=(new UserController())->getUserByEmail($email);
$datetime=date("Y-m-d H:i:s");
$output="<li class='comment'><div class='comment-body comment-body-answered clearfix'> 
					            <div class='avatar'><img alt='' src='".$ans_user->profilePic."'></div>
					            <div class='comment-text'>
					                <div class='author clearfix'>
					                	<div class='comment-author'><a href='#'>".$ans_user->name."</a></div>
					                	
					                	
					                	<div class='comment-meta'>
					                        <div class='date'><i class='icon-time'></i>".$datetime."</div> 
					                    </div>
					                    
					                </div>
					                <div class='text'><p>".$answer."</p>
					                </div>
									
					            </div>
					        </div>
					       
					    </li>";
						echo $output;




?>
