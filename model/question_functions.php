<?php

require_once('model/dbconfig.php');
require_once('model/question.php');

class QuestionFunctions{

    function __construct() {
        
    }

    
    function addNewQuestion($question){
     
        
         $con=  get_connection();
         $user_id=(int)$question->user_id;
         
        $sql = "INSERT INTO questions ( content, user_id, date, topic_id,likes) VALUES ('$question->content', $user_id,NOW(), $question->topic_id,'$question->likes')";
		if (!mysqli_query($con,$sql))
  			{
			  die('Error: ' . mysqli_error($con));
  			}
		
	
		mysqli_close($con);
         
        
    }
    
    
    
      function getAllQuestions(){
     
         
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select * from questions order by date desc");
       
       $questions= array();
       while($row=mysqli_fetch_array($result)){
           
           $temp=new question($row["id"],$row["content"], $row["user_id"],$row["date"],$row["topic_id"],$row["likes"]);
           array_push($questions,$temp);
        }
        
        mysqli_close($con); 
        return $questions;
       
         
        
    }
	
	function getAllQuestionsByTopic($topicid){
     
         
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select * from questions where topic_id='$topicid' order by date desc");
       
       $questions= array();
       while($row=mysqli_fetch_array($result)){
           
           $temp=new question($row["id"],$row["content"], $row["user_id"],$row["date"],$row["topic_id"],$row["likes"]);
           array_push($questions,$temp);
        }
        
        mysqli_close($con); 
        return $questions;
       
         
        
    }
	
	
	function getMostResponse(){
     
         
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select count(id)  as ansnum, question_id from answer group by question_id order by ansnum desc");
		$questions= array();
	  while($row1=mysqli_fetch_array($result)){
	  
			$qid=$row1["question_id"];
			
			$result1=  mysqli_query($con, "select * from questions where id='$qid'");
			if($row=mysqli_fetch_array($result1)){
			
			$temp=new question($row["id"],$row["content"], $row["user_id"],$row["date"],$row["topic_id"],$row["likes"]);
           array_push($questions,$temp);
		   
		   
			}
	   }
        mysqli_close($con); 
        return $questions;
       
         
        
    }
	
	function getNoResponse(){
     
         
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select * from questions where id not in (Select distinct question_id from answer);");
		$questions= array();
	  while($row=mysqli_fetch_array($result)){
		
			
			$temp=new question($row["id"],$row["content"], $row["user_id"],$row["date"],$row["topic_id"],$row["likes"]);
           array_push($questions,$temp);
		   
		   
			
	   }
        mysqli_close($con); 
        return $questions;
       
         
        
    }
	
	
	function getRecentlyAnswered(){
     
         
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select question_id from answer group by question_id order by max(date) desc");
		$questions= array();
	  while($row1=mysqli_fetch_array($result)){
	  
			$qid=$row1["question_id"];
			
			$result1=  mysqli_query($con, "select * from questions where id='$qid'");
			if($row=mysqli_fetch_array($result1)){
			
			$temp=new question($row["id"],$row["content"], $row["user_id"],$row["date"],$row["topic_id"],$row["likes"]);
           array_push($questions,$temp);
		   
		   
			}
	   }
        mysqli_close($con); 
        return $questions;
       
         
        
    }
	
    function getQuestionsNumber($email){
     
         $count=0;
       $con=  get_connection();
       $result=  mysqli_query($con, "select * from user where email='$email'");
	   if($row=mysqli_fetch_array($result)){
		$uid=$row["id"];
			$result1=  mysqli_query($con, "select count(id) as num from questions where user_id='$uid'");
			if($row1=mysqli_fetch_array($result1)){
				
				$count=$row1["num"];
        }
	   }
	}
	    function getAllQuestionsNumber(){
     
         $count=0;
       $con=  get_connection();
       $result=  mysqli_query($con, "select count(id) as num from questions ");
	   if($row=mysqli_fetch_array($result)){
		$count=$row["num"];
			
	   }
       
        mysqli_close($con); 
        return $count;
       
         
        
    }
    
    function getQuestionByID($qid){
        
        
           
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select * from questions where id='$qid'");
       
       if($row=mysqli_fetch_array($result)){
           
           $question=new question($row["id"], $row["content"], $row["user_id"], $row["date"], $row["topic_id"], $row["likes"]);
           
       }
       
       
        mysqli_close($con); 
        return $question;
       
       }
	   
	   
	     function getTotalAnswersByQid($qid){
        
        
           
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select count(*) as total from answer where question_id='$qid'");
     
       if($row=mysqli_fetch_array($result)){
           
		   $total=$row["total"];
		
       }
       
       
        mysqli_close($con); 
        return $total;
       
       }
	
	
	
    
    
}

?>
