<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
    {$nameErr = "Name is required";}
  else
    {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
      {
      $nameErr = "Only letters and white space allowed"; 
      }
    }

  if (empty($_POST["mail"]))
    {$emailErr = "Email is required";}
  else
    {
    $email = $_POST["mail"];
    // check if e-mail address syntax is valid
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
      {
      $emailErr = "Invalid email format"; 
      }
    }

  if (empty($_POST["url"]))
    {$website = "";}
  else
    {
    $website = $_POST["url"];
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
      {
      $websiteErr = "Invalid URL"; 
      }
    }

  if (empty($_POST["message"]))
    {$comment = "";}
  else
    {$comment = $_POST["message"];}

 $to = "tarangkhandelwal@gmail.com";
 $subject = "Yabber";

 $body = "Msg From:".$name." "."(".$email.")".$comment;
 if (mail($to, $subject, $body)) {
   //echo("<p>Email successfully sent!</p>");
     $msg="Email successfully sent!";
  } else {
//   echo("<p>Email delivery failed…</p>");
     $msg="Email delivery failed";
  }
  }
  else{
  //echo("<p>Email delivery failed…</p>");
      $msg="Email delivery failed";
  }
  
    $url="contact_us.php";

		header('Location: '.$url.'?message='.$msg );
  
  
  
?>