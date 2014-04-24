<?php
require_once('controller/Question_controller.php');
require_once('controller/User_controller.php');
session_start();

$user_id=(new UserController())->getUserIDByEmail($_SESSION["email"]);
$topic_id=$_REQUEST["topics"];
$content=$_REQUEST["ask_text"];
$likes=0;
$date="";


(new QuestionController())->addNewQuestion($content, $user_id, $date, $topic_id, $likes);
header("location: index.php");

?>
