<?php
session_start();
if(isset($_SESSION['userid']))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    body {
      font-family: Arial, sans-serif;
    }
    .sidebar {
      background-color: #37474F;
      position: fixed;
      height: 100%;
      width: 250px;
      top: 0;
      left: 0;
      z-index: 1;
      overflow-x: hidden;
      padding-top: 20px;
      transition: all 0.3s;
    }
    .sidebar-heading {
      color: #ffffff;
      padding: 10px 20px;
      font-size: 1.2rem;
    }
    .sidebar-link {
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s;
    }
    .sidebar-link:hover {
      background-color: #455A64;
    }
    .navbar {
      background-color: #455A64;
      padding: 14px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      color: #ffffff;
      font-weight: bold;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
      transition: margin 0.3s;
    }
    @media (max-width: 992px) {
      .sidebar {
        margin-left: -250px;
      }
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <?php
  include('sidemenu.php')
  ?>
  <!-- /#sidebar -->
<style>
    @media (min-width:600px)
{
    .navbar-nav{
        display: none;
    }
}

</style>
  <!-- Page content -->
  <div class="main-content">
   <?php
   include('tooglemenu.php');
   ?>

    <style>
    label {
    font-weight: 600;
    color: #666;
}
body {
  background: #f1f1f1;
}
.box8{
  box-shadow: 0px 0px 5px 1px #999;
}
.mx-t3{
  margin-top: -3rem;
}
</style>

<br>
<div class="container mt-4" style=" padding: 20px !important;">

<?php
include('../connection.php');
if(isset($_GET['cu']))
{
  $companydata=$_GET['cu'];
  $select="SELECT * FROM `vendors` WHERE `id`='$companydata'";
  $runQ=mysqli_query($conn,$select);
  $fet=mysqli_fetch_assoc($runQ);

?>
  <form method="post" enctype="multipart/form-data">
    <div class="row jumbotron box8">
      <br>
      <div class="col-sm-12 mx-t3 mb-4">
        
        <h4 class="text-center text-muted bg-info p-4"> <strong>Register Company</strong></h4>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-f">fullname</label>
        <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $fet['fullname']?>">
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l">Company name</label>
        <input type="text" class="form-control" name="companyname" placeholder="Company Name"  value="<?php echo $fet['companyname']?>" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email"  placeholder="Enter your email."  value="<?php echo $fet['email']?>" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1">Address</label>
        <input type="address" class="form-control" name="address"  placeholder="Locality" value="<?php echo $fet['address']?>" required>
      </div>
     
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Registration</label>
        <input type="date" name="dateofregistration" class="form-control"  placeholder=""  value="<?php echo $fet['dataeofregistration']?>" >
      </div>
   
      <div class="col-sm-2 form-group">
        <label for="cod">Country code</label>
        <select class="form-control browser-default custom-select">
          
        <option data-countryCode="IN" value="91">India (+91)</option>
        </select>
      </div>
      <div class="col-sm-4 form-group">
        <label for="tel">Phone</label>
        <input type="tel" name="phone" class="form-control"  placeholder="Enter Your Contact Number."  value="<?php echo $fet['mobile']?>" required>
      </div>

      <div class="col-sm-6 form-group">
        <label >Username</label>
        <input type="text" name="username" class="form-control"  placeholder="Enter username"  value="<?php echo $fet['username']?>" required>
      </div>
      
      <div class="col-sm-6 form-group">
        <label >Password</label>
        <input type="Password" name="password" class="form-control" placeholder="Enter your password."  value="<?php echo $fet['password']?>" required>
      </div>
      <!-- <div class="col-sm-6 form-group">
        <label >Tax percentage</label>
        <input type="text" name="taxpercentage" class="form-control" id="pass2" placeholder="Tax" required>
      </div> -->
      <div class="col-sm-6 form-group">
        <label >GSTIN/UIN</label>
        <input type="text" name="gstnumber" class="form-control"  placeholder="GST No."  value="<?php echo $fet['gstnumber']?>" required>
      </div>

      <div class="col-sm-6 form-group">
        <label >Bank A/C No.</label>
        <input type="text" name="account" class="form-control"  placeholder="Accoun No."  value="<?php echo $fet['account']?>" required>
      </div>
      <div class="col-sm-6 form-group">
        <label >IFSC</label>
        <input type="text" name="ifsc" class="form-control"  placeholder="IFSC No."  value="<?php echo $fet['ifsc']?>"required>
      </div>
      <div class="col-sm-6 form-group">
        <label >Bank</label>
        <input type="text" name="bank" class="form-control" placeholder="Bank Name"  value="<?php echo $fet['bank']?>"required>
      </div>
      <div class="col-sm-6 form-group">
        <label >Company PAN No.</label>
        <input type="text" name="pancard" class="form-control"  placeholder="Pan Card"  value="<?php echo $fet['companypan']?>" required>
    <input type="test" name="old_photo" value="<?php echo $fet['filepath'];?>">

      </div>
      <div class="col-sm-6 form-group">
        <label >Invoice Prefix</label>
        <input type="text" name="prefix" class="form-control"  placeholder="Invoice prefix"  value="<?php echo $fet['in-prefix']?>" required>
      </div>
      <div class="mb-6">
                            <label for="fileInput" class="form-label">Choose Signature</label>
                            <input type="file" class="form-control" id="fileInput" name="filename">
                          </div>
      
      <!-- <div class="col-sm-6 form-group">
        <label>Status</label>  
        <select name="status" id="" form="status-form" class="form-control">
        <option value="enabled">Enable</option>
        <option value="disabled">Disable</option>
        </select>

     </div> -->
     <hr style="border:1px solid #F1F1F1">
     <hr>
    </div>
    <br>
    
    
      
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>
      <br>
      <div class="col-sm-12 form-group mb-0">
        <input type="submit" class="btn btn-primary float-right" name="submit"><hr><br>
      </div>
      <br>

    </div>
    <br>
  </form>

  <?php
}
  ?>
  <br>
</div>
<br>
   
  </div>

  <!-- /#page-content-wrapper -->


  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include('../connection.php');
if(isset($_POST['submit']))
{
  $fullname = $_POST['fullname'];
  $companyname = $_POST['companyname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $dateofregistration = date('Y-m-d', strtotime($_POST['dateofregistration']));
  $mobile = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $gstnumber = $_POST['gstnumber'];
  $account = $_POST['account'];
  $ifsc = $_POST['ifsc'];
  $bank = $_POST['bank'];
  $pancard = $_POST['pancard'];
  $prefix = $_POST['prefix'];
  $target_file1 = $_POST['old_photo'];
  $target_dir = "signature/";

  if(!empty($_FILES['filename']['name'])){
    $target_file1 = 'signature/'.base64_encode(date('Y/m/d').time()).'.png';
    $target_file ='../'. $target_file1;
    move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file);
  }
  echo $companydata;
 $query = "UPDATE `vendors` SET `fullname`='$fullname',`companyname`='$companyname',`email`='$email',`address`='$address',`dataeofregistration`='$dateofregistration',`mobile`='$mobile',`gstnumber`='$gstnumber',`account`='$account',`ifsc`='$ifsc',`bank`='$bank',`username`='$username',`password`='$password',`companypan`='$pancard',`in-prefix`='$prefix',`filepath`='$target_file1' WHERE `id` = '$companydata' ";
  
  $fireexe=mysqli_query($conn, $query);
  echo mysqli_error($conn);
  if($fireexe){
    echo "<script>alert('Company Updated Successfully');</script>";
    echo mysqli_error($conn);
    echo "<script>window.location.href = 'companydata.php';</script>";
  }
  else {
    echo "<script>alert('Something went wrong');</script>";
  }
}

}
else{
  echo "<script>alert('please login first')</>";
  header('Location:index.php');
}
?>






