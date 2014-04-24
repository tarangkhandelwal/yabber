<?php
include 'controller/User_controller.php';


$flag=$_REQUEST["flag"];

$controller=new UserController();
if($flag=="1")
{
    $name=$_REQUEST["fb_name"];
    $username=$_REQUEST["fb_username"];
    $email=$_REQUEST["fb_email"];
    $profilepic=$_REQUEST["fb_profilepic"];
	$password="ObMG=15uV_^P";
 
	$controller->addNewUserFb($name, $email, $profilepic, $password, $profilepic);
	session_start(); 
         $_SESSION['flag']=1;
		 $_SESSION['username']=$name;
		 $_SESSION['email']=$email;
		 $_SESSION['profilepic']=$profilepic;
                 
                    $url="index.php";
                     header('Location: '.$url);
         
}
else
{
   $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
	
  $ans=$controller->checkLogin($username,$password);
     if($ans!=null)
    {
         $url="index.php";
         
         
         
         //session starts
         session_start(); 
         $_SESSION['flag']=0;
		 $_SESSION['username']=$ans->getName();
		 $_SESSION['email']=$ans->getEmail();
		 $_SESSION['profilepic']=$ans->getProfilePic();
		 
		 
		 header('Location: '.$url);
    }
    else
    {
		
           $url="login.php";
            $msg="Invalid Login Details";
		header('Location: '.$url.'?message='.$msg );

    }
}


?>
