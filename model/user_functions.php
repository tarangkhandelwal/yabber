<?php
include 'model/dbconfig.php';
require_once('model/user.php');
class UserFunctions{
    
    
    function __construct() {
        
    }




	//fb singup
	
	function addUserFb(User $user){
      
	  //db storing
	 
      $con=  get_connection();
	 $result = mysqli_query($con,"select * from user where email='$user->email'");
	if($row=mysqli_fetch_array($result)){
		header("Refresh: 3; URL=userHome.php"); 
             
	}else{
           $sql = "INSERT INTO user ( name, password, email, profilepic) VALUES ('$user->name', '$user->password','$user->email', '$user->profilePic')";
		if (!mysqli_query($con,$sql))
  			{
			  die('Error: ' . mysqli_error($con));
  			}
		
	
		mysqli_close($con);
		
	
	
	 header("Refresh: 3; URL=userHome.php");
	
	
	//db end

    
  }
  }
	
	//fb_end
	
	
    function addUser(User $user){
              
   
      
      //db storing
      $con=  get_connection();
	 $result = mysqli_query($con,"select * from user where email='$user->email'");
	if($row=mysqli_fetch_array($result)){
		header("Refresh: 3; URL=index.php"); 
                echo "user already exist...";
	}else{
            
             if ((($user->file["type"] == "image/gif") || ($user->file["type"] == "image/jpeg") || ($user->file["type"] == "image/jpg") || ($user->file["type"] == "image/pjpeg") || ($user->file["type"] == "image/x-png") || ($user->file["type"] == "image/png")))
  {
  
  if ($user->file["error"] > 0)
    {
    //echo "Return Code: " . $user->file["error"] . "<br>";
    }
  else
    {
    
    
    if (file_exists($user->profilePic))
      {
     //echo $user->email . " already exists. ";
      }
    else
      {
      
      move_uploaded_file($user->file["tmp_name"], $user->profilePic);
    //  echo "Stored in: " . "users/profile_pic/" .$user->profilePic;
      }
            
            
            
            
            
            
		$sql = "INSERT INTO user ( name, password, email, profilepic) VALUES ('$user->name', '$user->password','$user->email', '$user->profilePic')";
		if (!mysqli_query($con,$sql))
  			{
			  die('Error: ' . mysqli_error($con));
  			}
	//	echo "User Registered";
	
		mysqli_close($con);
		
	}
	

header("location:index.php");	
//	 header("Refresh: 1; URL=index.php");
	
	
	//db end

    }
  }

        
        
        
        
        
    }
    
    
    
    
    function checkLogin($user){
     
         $con=  get_connection();
          $result = mysqli_query($con,"select * from user where email='$user->email' and password='$user->password'");
	if($row=mysqli_fetch_array($result)){
           
         

				$ans=new User($row["name"], "", $row["email"], $row["profilepic"],"");
			 mysqli_close($con); 
				return $ans;
			   
        
    }
    else
    {
		    
		    mysqli_close($con); 
			$ans=null;
			
			 return $ans;  
    }
  
    
}

function checkEmail($email){
    
     $con=  get_connection();
	 $result = mysqli_query($con,"select * from user where email='$email'");
	if($row=mysqli_fetch_array($result)){
	
                echo "Email already registered.";
	}else{
            
            echo "User Available";
            
        }
       mysqli_close($con); 
}


function getUserByEmail($email){
        
          
        
          $con=  get_connection();
	 $result = mysqli_query($con,"select * from user where email='$email'");
         
	if($row=mysqli_fetch_array($result)){
            $user=new User($row["name"], $row["password"], $row["email"], $row["profilepic"], "")   ;
         
        }
        else
            $user=null;
        
          mysqli_close($con); 
        return $user;
        
    }
    
    
    
    
    function getUserIDByEmail($email){
         
          $con=  get_connection();
	 $result = mysqli_query($con,"select * from user where email='$email'");
         
	if($row=mysqli_fetch_array($result)){
            $user=$row["id"]  ;
         
        }
        else
            $user=null;
        
          mysqli_close($con); 
        return $user;
        
        
    }
    
    
    
        
    function getUserByID($id){
         
          $con=  get_connection();
	 $result = mysqli_query($con,"select * from user where id='$id'");
         
	  
	if($row=mysqli_fetch_array($result)){
            $user=new User($row["name"], $row["password"], $row["email"], $row["profilepic"], "")   ;
         
        }
        else
            $user=null;
        
          mysqli_close($con); 
        return $user;
        
        
    }



}//class ends

?>
