<?php
require_once('model/user_functions.php');
require_once('model/user.php');


class UserController{
    
    public $model;
    
    
    
    function __construct() {
        $this->model= new UserFunctions();
        
        
    }
    
    function addNewUser($name, $email, $file, $password, $fname){
        
        $user=new User($name, $password, $email, $fname, $file);
       
        $this->model->addUser($user);

        
    }
	function addNewUserFb($name, $email, $file, $password, $fname){
        
        $user=new User($name, $password, $email, $fname, $file);
       
        $this->model->addUserFb($user);
		

        
    }
    
 function checkLogin($username,$password){
        
        //username here is the email of the user
		
         $user=new User("", $password, $username, "", "");
		 
         $ans=$this->model->checkLogin($user);
		 return $ans;
		
         
        
    }
    
    function checkEmail($email){
        
     
          $this->model->checkEmail($email);
         
    }
    
    
    function getUserByEmail($email){
        
          $user=$this->model->getUserByEmail($email);
        
            return $user;
        
    }
    
    function getUserIDByEmail($email){
                  $user=$this->model->getUserIDByEmail($email);
        
                    return $user;
    }
    
    
    function getUserByID($id){
        
                      $user=$this->model->getUserByID($id);
        
                    return $user;
        
        
    }
    
    
    
    
}
?>
