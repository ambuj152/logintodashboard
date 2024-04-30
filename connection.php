<?php

$host = "localhost";  
$db_username = "root";  
$db_password = ""; 
$dbname = "gstproject";  

// Create connection
$conn = new mysqli($host, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "";

// Close connection (optional here, typically at the end of your script)

?>
