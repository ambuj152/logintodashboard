<?php

session_start();
if(isset($_SESSION['id']) ) 
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <?php 
      include('mobilemenu.php');
      ?>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>GWPL</h2>
      <?php 
      include('menu.php');
      ?><br>
    </div>
    <br>
   <!-- css of registration-->
   <style>
   body{
    background-color: #ffff;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
 <div class="col-sm-9 hidden-xs">
    <h2>Company Profile</h2>
<?php
include("connection.php");
$p="SELECT * FROM `vendors` where 1";
$q=mysqli_query($conn, $p);
$r=mysqli_fetch_assoc($q);
?>
 <div class="container-fluid" width="60%" style="margin:100px;margin-top:50px;">
   <form method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Company Name</label>
      <!-- <input type="hidden" name="companyname"> -->
      <input type="text" class="form-control is-valid"  placeholder="fullname"
        name="companyname" value="<?php echo $r['companyname'];?>" required>
      <div class="valid-feedback">
       
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>GSTIN/UIN</label>
      <input type="text" class="form-control is-valid"  placeholder="gstnumber"
        name="gstnumber" value="<?php echo $r['gstnumber'];?>" required>
     
    </div>
    <div class="col-md-4 mb-3">
      <label>Mobile Number</label>
             
        <input type="text" class="form-control is-invalid" name="mobile"  placeholder="Mobile"
          value="<?php echo $r['mobile'];?>" required>
       
      </div>
    </div>
   
    <div class="form-row">
      <div class="col-md-12 mb-3">
      <br>
      <label>Address</label>
      <input type="text" class="form-control is-invalid" name="address" id="validationServer033" placeholder="Address"
       value="<?php echo $r['address'];?>" required>
      <div class="invalid-feedback">
     &nbsp;
      </div>
    </div>
      </div>

  
   <div class="valid-feedback">
      &nbsp;
      </div>
     
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label >Account Number</label>
      <input type="text" class="form-control is-invalid" name="account"  placeholder="Bank Account no"
       value="<?php echo $r['account'];?>" required>
      <div class="invalid-feedback">
      &nbsp;
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>IFSC</label>
      <input type="text" class="form-control is-invalid" name="ifsc"  placeholder="State"
       value="<?php echo $r['ifsc'];?>" required>
      <div class="invalid-feedback">
      &nbsp;
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>Bank Name</label>
      <input type="text" class="form-control is-invalid" name="bank"  placeholder="bank" value="<?php echo $r['bank'];?>"
        required>
      <div class="invalid-feedback">
       &nbsp;
      </div>
    </div>
  </div>
  <!-- <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Company Name</label>
      <input type="text" class="form-control is-invalid" name="companyname"  placeholder="Company name"
        required>
      <div class="invalid-feedback">
     &nbsp;
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>Industry Type</label>
      <input type="text" class="form-control is-invalid" name="industry" placeholder="Industry Type"
        required>
      <div class="invalid-feedback">
       
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>GST number</label>
      <input type="text" class="form-control is-invalid" name="gst" placeholder="GST number"
        required>
      <div class="invalid-feedback">
       &nbsp;
      </div>
    </div>
  </div> -->
  
      
    
  
  <div class="form-group" style="padding-left:12px;">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input is-invalid" id="invalidCheck33" required>
      <label class="custom-control-label" for="invalidCheck33">Agree to terms and conditions</label>
      <div class="invalid-feedback">
        <!-- You must agree before submitting. -->
      </div>
    </div>
   &nbsp;
  </div>
  <button  style="margin-left:10px;" class="btn btn-primary" type="submit" name="submit">Update Company Profile</button>
  <!-- <a href="Masterdata.php" style="margin-left:10px; color:black ;font-weight:600;" class="btn btn-warning">Master Data</></a> -->
 
</form></div>

 </div>   
  

  </div>
</div>
<?php
include('connection.php');
if(isset($_POST["submit"]))
{
    // $userid             = "SELECT MAX(id) FROM `profile`";
    // $exe=mysqli_query($conn,$userid);
    // $arraycount=mysqli_fetch_array($exe);
    // $uniqueid= "USER-00".$arraycount[0]+1;
    $companyname    =   $_POST['companyname'];
    $gst            =   $_POST['gstnumber'];
    $mobile         =   $_POST['mobile'];
    $address        =   $_POST['address'];
    $account        =   $_POST['account'];
    $ifsc           =   $_POST['ifsc'];
    $bank           =   $_POST['bank'];
    // $companyname    =   $_POST['companyname'];
    // $industry       =   $_POST['industry'];
    // $gst            =   $_POST['gst'];


    // $profile_query =" INSERT INTO `profile` (`id`,`name`,`email`,`phone`,`city`,`state`,`zip`,`address`,`companyname`,`industry`,`gst`) VALUES ('$id','$name','$email','$phone','$city','$state','$zip','$address',$companyname,$industry,$gst)"; 
    // $fire_profile_query = mysqli_query($conn, $profile_query);
    $profile_query = "UPDATE `vendors` SET `companyname`='$companyname',`address`=' $address',`mobile`='$mobile',`gstnumber`='$gst',`account`='$account',`ifsc`='$ifsc',`bank`=' $bank' WHERE 1";
    $fire_profile_query = mysqli_query($conn,$profile_query);
    
    
    if($fire_profile_query)
    {
        echo "<script> alert('Recorded Successfully'); </script>";
        echo "<script>window.location.href = 'vendors.php';</script>";
    }
    else{
        echo "<script> alert('failed'); </script>";
    }
    
}

?>
</body>
</html>
  <?php




  
   
}
else{
    echo "please login to Continue";
    header("Location:admin.php");
}

?>

