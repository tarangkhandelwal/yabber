<?php
require_once('model/dbconfig.php');
require_once('model/topic.php');

class TopicFunctions{

    function __construct() {
        
    }

    
   function getAlltopics(){
       
       $con=  get_connection();
       
       $result=  mysqli_query($con, "select * from topics");
       
       $topics= array();
       while($row=mysqli_fetch_array($result)){
           
           $temp=new Topic($row["id"], $row["title"], $row["description"]);
           array_push($topics,$temp);
        }
        
        mysqli_close($con); 
        return $topics;
       
       
   }
   
   
    function getTopicByID($id){
       
        $con=  get_connection();
	 $result = mysqli_query($con,"select * from topics where id='$id'");
         
	  
	if($row=mysqli_fetch_array($result)){
         
            $topic=$row["title"];
         
        }
        else
            $topic=null;
        
          mysqli_close($con); 
        return $topic;
       
       
   }
    
}
?>
