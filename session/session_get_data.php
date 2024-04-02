<?php

session_start();
if(isset($_SESSION["username"]) ) 
{
  echo "Welcome".$_SESSION['username'];
  echo "<br> password is ".$_SESSION['password'];
  echo"<br>";  
}
else{
    echo "please login to Continue";
}

?>