



<?php


include('connection.php');
if(isset($_GET['showid']))
// session_start();
// $userid = $_SESSION['showid'];
{
  $userid=($_GET['showid']);
  $seria= "SELECT MAX(`serial`) FROM `bill`";
  $exe=mysqli_query($conn,$seria);
  $arraycount=mysqli_fetch_array($exe);
  $serial= $arraycount[0]+1;
  $companyid=$_SESSION['companyid'];

  $invoice= "SELECT MAX(`invoice`) FROM `bill`";
  $exe=mysqli_query($conn,$invoice);
  $arraycount=mysqli_fetch_array($exe);
  $invoice= $arraycount[0]+1;
  

  
$billinsert="SELECT * FROM `temppreview` WHERE `userid`='$userid'";
$querychaloa= mysqli_query($conn, $billinsert);
// $fetch =  mysqli_fetch_assoc($querychaloa);

foreach($querychaloa as $rest){
$services=$rest['services'];
$quantity=$rest['quantity'];
$price=$rest['price'];
$modeofpayment=$rest['modeofpayment'];
$orderdate=$rest['orderdate'];
$insertSql = "INSERT INTO `bill` (`userid`,`services`, `quantity`, `price`,`serial` , `invoice`,`modeofpayment`,`orderdate`) VALUES ('$userid','$services' , '$quantity', '$price', '$serial',$invoice, '$modeofpayment','$orderdate' ) ";
$sql=mysqli_query($conn, $insertSql);

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
