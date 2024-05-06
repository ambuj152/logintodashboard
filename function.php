<?php
if($_POST['action_code']=='previewbill')
{ 
 previewbill();
}



function previewbill()
{
try {
include_once('connection.php');


$services=$_REQUEST['services'];
$quantity=$_REQUEST['quantity'];
$price=$_REQUEST['price'];
$userid=$_REQUEST['userid'];

	
for ($i = 0; $i < count($services); $i++) {
  

    // $quiry="INSERT INTO  `bill` (`serial`,`invoice`,`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$serial','$invoice' ,'$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
    // $fire = mysqli_query($conn, $quiry,);
   
    $tempquery="INSERT INTO  `temppreview` (`userid`, `services`,`quantity` ,`price`) VALUES ('$userid','$services[$i]','$quantity[$i]','$price[$i]')";
    $fir=mysqli_query($conn, $tempquery);
   
    
    // Here you can store these values in a database or perform any other processing
  }

if($fir>0)
{
echo "bill generated";

}
else
{
echo "Invalid";
}

}

catch(Exception $e) {
echo 'Message: ' .$e->getMessage();
}
}






?>