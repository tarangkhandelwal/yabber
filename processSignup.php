<?php
include 'controller/User_controller.php';


$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$file=$_FILES["picture"];
$password=$_REQUEST["name"];
$temp = explode(".", $file["name"]);
$fname = $email.".".end($temp);
$fname = "users/profile_pic/" .$fname;

$controller=new UserController();
$controller->addNewUser($name, $email, $file, $password, $fname);

?>
