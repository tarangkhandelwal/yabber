<?php
include 'controller/User_controller.php';

$email=$_POST['email'];

    $controller=new UserController();
    $controller->checkEmail($email);
?>
