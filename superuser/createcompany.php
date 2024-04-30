<?php
session_start();
if(isset($_SESSION['id']))
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
  <form method="post" action="#">
    <div class="row jumbotron box8">
      <br>
      <div class="col-sm-12 mx-t3 mb-4">
        
        <h4 class="text-center text-muted bg-info p-4"> <strong>Register Company</strong></h4>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-f">fullname</label>
        <input type="text" class="form-control" name="fullname" id="name-f" placeholder="Fullname" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l">Company name</label>
        <input type="text" class="form-control" name="companyname" id="name-l" placeholder="Company Name" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1">Address</label>
        <input type="address" class="form-control" name="address" id="address-1" placeholder="Locality" required>
      </div>
      <!-- <div class="col-sm-6 form-group">
        <label for="address-2">Address Line-2</label>
        <input type="address" class="form-control" name="address" id="address-2" placeholder="Village/City Name." required>
      </div> -->
      <!-- <div class="col-sm-4 form-group">
        <label for="State">State</label>
        <input type="address" class="form-control" name="State" id="State" placeholder="Enter your state name." required>
      </div>
      <div class="col-sm-2 form-group">
        <label for="zip">Postal-Code</label>
        <input type="zip" class="form-control" name="Zip" id="zip" placeholder="Postal-Code." required>
      </div> -->
      <!-- <div class="col-sm-6 form-group">
        <label for="Country">Country</label>
        <select class="form-control custom-select browser-default">
          <option value="Afghanistan">INDIA</option>
                 </select>
      </div> -->
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Registration</label>
        <input type="Date" name="dateofregistration" class="form-control" id="Date" placeholder="" required>
      </div>
   
      <div class="col-sm-2 form-group">
        <label for="cod">Country code</label>
        <select class="form-control browser-default custom-select">
          
        <option data-countryCode="IN" value="91">India (+91)</option>
        </select>
      </div>
      <div class="col-sm-4 form-group">
        <label for="tel">Phone</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
      </div>

      <div class="col-sm-6 form-group">
        <label >Username</label>
        <input type="text" name="username" class="form-control" id="pass" placeholder="Enter username" required>
      </div>
      
      <div class="col-sm-6 form-group">
        <label >Password</label>
        <input type="Password" name="password" class="form-control" id="pass" placeholder="Enter your password." required>
      </div>
      <div class="col-sm-6 form-group">
        <label >Tax percentage</label>
        <input type="text" name="taxpercentage" class="form-control" id="pass2" placeholder="Tax" required>
      </div>
      <div class="col-sm-6 form-group">
        <label >GSTIN/UIN</label>
        <input type="text" name="gstnumber" class="form-control" id="pass" placeholder="GST No." required>
      </div>

      <div class="col-sm-6 form-group">
        <label >Bank A/C No.</label>
        <input type="text" name="account" class="form-control" id="pass" placeholder="Accoun No." required>
      </div>
      <div class="col-sm-6 form-group">
        <label >IFSC</label>
        <input type="text" name="ifsc" class="form-control" id="pass" placeholder="IFSC No." required>
      </div>
      <div class="col-sm-6 form-group">
        <label >Bank</label>
        <input type="text" name="bank" class="form-control" id="pass" placeholder="Bank Name" required>
      </div>
    
    
      
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
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
include("../connection.php");
if(isset($_POST['submit']))
{

  $companyid  = "SELECT MAX(id) FROM `vendors`";

  $execute=mysqli_query($conn,$companyid);

  $arraycount=mysqli_fetch_array($execute);
    
  $unique_id= "Company-00".$arraycount[0]+1;

  $fullname=$_POST['fullname'];
  $companyname=$_POST['companyname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $dateofregistration=date('Y-m-d', strtotime($_POST['dateofregistration']));
  $mobile=$_POST['phone'];
  $gstnumber=$_POST['gstnumber'];
  $account=$_POST['account'];
  $ifsc=$_POST['ifsc'];
  $bank=$_POST['bank'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $taxation=$_POST['taxpercentage'];

  $query="INSERT INTO `vendors`( `companyid`,`fullname`, `companyname`, `email`, `address`, `dataeofregistration`, `mobile`, `gstnumber`, `account`, `ifsc`, `bank`, `username`, `password`, `taxpercentage`) VALUES ('$unique_id','$fullname','$companyname','$email','$address','$dateofregistration','$mobile','$gstnumber','$account','$ifsc','$bank','$username','$password','$taxation')";
  $fire=mysqli_query($conn,$query);

  if($fire){
    echo "<script>alert('Company Generated Successfull');</script>";
    echo "<script>window.location.href = 'createcompany.php';</script>";
    
  }
  else
  {
    echo "<script>alert('Something went wrong');</script>";
  }
  







  

}


?>
<?php
}
else{
  echo "<script>alert('please login first')</>";
  header('Location:superuser.php');
}
?>







