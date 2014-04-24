<?php

if(!function_exists('get_connection'))
{
  function get_connection(){
  						//host , database user, database password , database name
    $con=  mysqli_connect('localhost', 'root', 'tarang','yabber');
    
    // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
    return $con;
  }
  
}
?>
