
<?php


include('connection.php');
if(isset($_GET['showid']))
session_start();
// $userid = $_SESSION['showid'];
{
  $userid=($_GET['showid']);

  $companyid=$_SESSION['companyid'];

  $seria= "SELECT MAX(serial) FROM `bill` WHERE `companyid`= '$companyid' ";
  $exe=mysqli_query($conn,$seria);
  $arraycount=mysqli_fetch_array($exe);
  $serial= $arraycount[0]+1;
  // $invoice= $arraycount[0]+1;



  // $invoice= "SELECT MAX(`invoice`) FROM `bill`";
  // $exe=mysqli_query($conn,$invoice);
  // $arraycount=mysqli_fetch_array($exe);
  // $invoice= $arraycount[0]+1;
  

  
$billinsert="SELECT * FROM `temppreview` WHERE `userid`='$userid'";
$querychaloa= mysqli_query($conn, $billinsert);
// $fetch =  mysqli_fetch_assoc($querychaloa);

foreach($querychaloa as $rest){

 $companyid=$_SESSION['companyid'];
 $email=$rest['email'];
 $address=$rest['address'];
 $phone=$rest['phone'];
 $customerid=$rest['customerid'];
 $gst=$rest['customergst'];
 $companyname=$rest['companyname'];
  
$services=$rest['services'];
$hsn=$rest['hsn'];
$quantity=$rest['quantity'];
$price=$rest['price'];
$modeofpayment=$rest['modeofpayment'];
$orderdate=$rest['orderdate'];
$tax=$rest['tax'];
$customerid=$rest['customerid'];
$name=$rest['name'];
$state=$rest['state'];
$insertSql = "INSERT INTO `bill` (`userid`,`services`, `quantity`, `price`,`serial`,`modeofpayment`,`orderdate`, `companyid`,`tax-p`,`hsn`,`customerid`,`name`,`email`,`phone`,`gst`,`address`,`state`,`companyname`) VALUES ('$userid','$services' , '$quantity', '$price', '$serial', '$modeofpayment','$orderdate','$companyid','$tax','$hsn','$customerid','$name','$email','$phone','$gst','$address','$state','$companyname' ) ";
$sql=mysqli_query($conn, $insertSql);



// $seria= "SELECT count(`serialcount`)";
// $exe=mysqli_query($conn,$seria);
// $arraycount=mysqli_fetch_array($exe);
// $serialcount= $arraycount[0]+1;


$insert_serial="INSERT INTO `serial` (`taxcount`,`serialcount`) VALUES ('$tax', '$serial')";
$chalao= mysqli_query($conn, $insert_serial);
}



$query = "SELECT * FROM `profile` WHERE `userid`='$userid'";

$result = mysqli_query($conn, $query);
$res= mysqli_fetch_assoc($result);


 if($sql)
 {  $redirecturl="pdf.php?showid=$userid";
    header("Location:$redirecturl");
    exit;
 }

  // Step 3: Directly insert data into destination table with automatically generated additional columns

 

}

?>
