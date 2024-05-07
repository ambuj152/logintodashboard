<?php
if($_POST['action_code']=='testing')
{ 
 testing();
}


function testing(){

include("connection.php");

   
  // Invoice number evaluate
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

  $userid = $_POST['userid'];
  $services = $_POST['services']; 
  $price = $_POST['price'];
  $modeofpayment = $_POST['modeOfPayment'];
  $orderdate = $_POST['orderdate'];
  $quantity = $_POST['quantity'];
  
 for ($i = 0; $i < count($services); $i++) {
  
  $quiry="INSERT INTO  `bill` (`serial`,`invoice`,`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$serial','$invoice' ,'$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
  $fire = mysqli_query($conn, $quiry,);
 
  $tempquery="INSERT INTO  `tempbill` (`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
  $fir2=mysqli_query($conn, $tempquery);
 
  // Here you can store these values in a database or perform any other processing
}

 if($fire)
 {
  echo $qwerty= "SELECT * FROM `bill` WHERE `userid`='$userid' AND `modeofpayment`='$modeofpayment' AND `orderdate` ='$orderdate' ORDER  BY `id` DESC";
  $execute=mysqli_query($conn,$qwerty);
  $res=mysqli_fetch_assoc($execute);
  //  echo mysqli_error($conn);
  $resultt=$res['userid'];
  ?>
  <script> alert(' Bill generated');
  window.location.href='pdf.php?showid=<?php echo $resultt; ?>';
  </script>
  <?php
 }

 else{
  echo "<script> alert('Some thing went wrong')<script>";
 }

}
?>