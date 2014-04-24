<?php
require_once 'model/dbconfig.php';
class AnswerFunction{
    
    function __construct() {
        
    }

    function submitAnswer($ans){
        $con= get_connection();
         
        $user_id=(int)$ans->user_id;
        $question_id=(int)$ans->question_id;
        $sql = "INSERT INTO answer ( content, user_id, date,question_id) VALUES ('$ans->content', $user_id,NOW(), $question_id)";
		if (!mysqli_query($con,$sql))
  			{
			  die('Error: ' . mysqli_error($con));
  			}
	
	
		mysqli_close($con);
    }
    
    function getAllAnswerNumber(){
     
         $count=0;
       $con=  get_connection();
       $result=  mysqli_query($con, "select count(id) as num from answer ");
	   if($row=mysqli_fetch_array($result)){
		$count=$row["num"];
			
	   }
       
        mysqli_close($con); 
        return $count;
       
         
        
    }
	
	
    function getAllAnswer($qid){
     
         
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select * from answer where question_id='$qid' order by date ");
       
       $answers= array();
       while($row=mysqli_fetch_array($result)){
           
           $temp=new answer($row["id"],$row["content"],$row["date"], $row["user_id"],$row["question_id"]);
           array_push($answers,$temp);
        }
        
        mysqli_close($con); 
        return $answers;
       
         
        
    }
	function getAnswerNumber($email){
     
         $count=0;
       $con=get_connection();

       $result=  mysqli_query($con, "select * from user where email='$email'");
	   if($row=mysqli_fetch_array($result)){
		$uid=$row["id"];
			$result1=  mysqli_query($con, "select count(id) as num from answer where user_id='$uid'");
			if($row1=mysqli_fetch_array($result1)){
				
				$count=$row1["num"];
        }
	   }

	   mysqli_close($con); 
        return $count;
       
         
        
    }
}

?>
