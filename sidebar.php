<?php 
require_once 'controller/Question_controller.php';
require_once 'controller/Answer_controller.php';
$controller=new QuestionController();
$questions=$controller->getAllQuestions(); 

?>
<div class="widget widget_stats">
					<h3 class="widget_title">Site Stats</h3>
					<div class="ul_list ul_list-icon-ok">
							<?php
										$QueNum=(new QuestionController())->getAllQuestionsNumber();
										$AnsNum=(new Answer_controller())->getAllAnswerNumber();
							?>
						<ul>
							<li><i class="icon-question-sign"></i>Questions ( <span><?php echo $QueNum;?></span> )</li>
							<li><i class="icon-comment"></i>Answers ( <span><?php echo $AnsNum;?></span> )</li>
						</ul>
					</div>
				</div>
				
				
				
				
				
				<div class="widget widget_highest_points">
					<h3 class="widget_title">Highest points</h3>
					<ul>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="http://2code.info/demo/html/ask-me/images/demo/admin.jpeg" alt=""></a>
							</div> 
							<h6><a href="#">admin</a></h6>
							<span class="comment">12 Points</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="../../ask-me/images/demo/avatar.png" alt=""></a>
							</div> 
							<h6><a href="#">vbegy</a></h6>
							<span class="comment">10 Points</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="../../ask-me/images/demo/avatar.png" alt=""></a>
							</div> 
							<h6><a href="#">ahmed</a></h6>
							<span class="comment">5 Points</span>
						</li>
					</ul>
				</div>
				
				
				
				<div class="widget">
					<h3 class="widget_title">Recent Questions</h3>
					<ul class="related-posts">
                   <?php 
				   $count=0;
				   
				    foreach($questions as $val) { 
					
					$count=$count+1;
					if($count==5)
					break;
					?>
                    
						<li class="related-item">
							<h3>	<a href="myquestion.php?qid=<?php  echo $val->question_id; ?>"><?php echo $val->content; ?></a></h3>
							
							<div class="clear"></div><span><?php echo $val->date; ?></span>
						</li>
						
                        
                        <?php }
						?>
					</ul>
				</div>