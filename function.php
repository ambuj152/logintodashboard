<?php
if($_POST['action_code']=='previewbill')
{ 
 previewbill();
}
// if($_POST['action_code1']=='generatebill')
// {
//   generatebill();
// }


function previewbill()
{
try {
include_once('connection.php');

$seria= "SELECT MAX(`serial`) FROM `bill`";

$exe=mysqli_query($conn,$seria);

$arraycount=mysqli_fetch_array($exe);
  
$serial= $arraycount[0]+1;

$companyid=$_SESSION['companyid'];

// serial number evaluate
  $invoice= "SELECT MAX(`invoice`) FROM `bill`";

  $exe=mysqli_query($conn,$invoice);

  $arraycount=mysqli_fetch_array($exe);
  
  $invoice= $arraycount[0]+1;

$services=$_REQUEST['services'];
$quantity=$_REQUEST['quantity'];
$price=$_REQUEST['price'];
$userid=$_REQUEST['userid'];
$modeofpayment=$_REQUEST['modeOfPayment'];
$orderdate=$_REQUEST['orderdate'];
 if(isset($_POST['billgen']))
 {
  echo "second table";
 }
	
for ($i = 0; $i < count($services); $i++) {
  
   
    $tempquery="INSERT INTO  `temppreview` (`userid`, `services`,`quantity` ,`price`,`modeofpayment`,`orderdate`) VALUES ('$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
    $fire=mysqli_query($conn, $tempquery);


   
    
    // Here you can store these values in a database or perform any other processing
  }



if($fire>0)
{
  echo '<script> alert("bill generated"); </script>';
}
else
{
echo "Invalid";
}


// for ( $j=0; $j< count($services); $j++ )
// {
//  $quiry="INSERT INTO  `bill` (`serial`,`invoice`,`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$serial','$invoice' ,'$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
//  $fire = mysqli_query($conn, $quiry,);

//  break;
// }

// if($fire>0)
// {
//   echo '<script> alert("bill generated"); </script>';
// }
// else
// {
// echo "Invalid";
// }

}

catch(Exception $e) {
echo 'Message: ' .$e->getMessage();
}
}


// function generatebill()
// {
// try {
// include_once('connection.php');


// $services=$_REQUEST['services'];
// $quantity=$_REQUEST['quantity'];
// $price=$_REQUEST['price'];
// $userid=$_REQUEST['userid'];

	
// for ($i = 0; $i < count($services); $i++) {
  

//     // $quiry="INSERT INTO  `bill` (`serial`,`invoice`,`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$serial','$invoice' ,'$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
//     // $fire = mysqli_query($conn, $quiry,);
   
//   echo  $tempquery="INSERT INTO  `temppreview` (`userid`, `services`,`quantity` ,`price`) VALUES ('$userid','$services[$i]','$quantity[$i]','$price[$i]')";
//     $fir=mysqli_query($conn, $tempquery);
   
    
//     // Here you can store these values in a database or perform any other processing
//   }

// if($fir>0)
// {
// echo "billgenerated";

// }
// else
// {
// echo "Invalid";
// }

// }

// catch(Exception $e) {
// echo 'Message: ' .$e->getMessage();
// }
// }



?>