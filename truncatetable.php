<?php
if($_REQUEST['action_code'] == 'temppreview')
{ 
        temppreview();
}

function temppreview()
{
include('connection.php');
$sqltruncate = "TRUNCATE TABLE `temppreview`";
$firepreview = mysqli_query($conn, $sqltruncate);


}

?>