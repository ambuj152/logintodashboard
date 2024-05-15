<?php
session_start();
session_unset();
session_destroy();


$message = "This is an alert message!";
// echo "<script>alert('$message');</script>";
header("Location:index.php");

?>