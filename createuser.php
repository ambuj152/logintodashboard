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
  <div class="row content" style="height: 900px;">
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
 <style>
     .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
  /* Style for the form container */
  .container-fluid {
   
  }

  /* Style for the form heading */
  h2 {
    background: linear-gradient(135deg, #B4A7, #E9C46A);
    color: white;
    padding: 15px 20px;
    border-radius: 10px 10px 0 0;
    margin-top: 0;
    text-align: center;
  }

  /* Style for form labels */
  label {
    font-weight: bold;
    color: #555;
  }

  /* Style for form inputs */
  select{
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    margin-bottom: 20px;
    border: none;
    border-radius: 6px;
    background-color: #f8f8f8;
    transition: all 0.3s ease;
  }
  input[type="text"],
  input[type="email"],
  input[type="checkbox"] {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    margin-bottom: 20px;
    border: none;
    border-radius: 6px;
    background-color: #f8f8f8;
    transition: all 0.3s ease;
  }
  select:focus,
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="checkbox"]:focus {
    background-color: #e8e8e8;
  }

  /* Style for form buttons */
  .btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background: linear-gradient(135deg, #B4A77B, #E9C46A);
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn:hover {
    background: linear-gradient(135deg, #E9C46A, #B4A77B);
  }

  /* Style for the Master Data link */
  .master-data-link {
    display: block;
    margin-top: 10px;
    text-align: center;
    color: #777;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .master-data-link:hover {
    color: #333;
  }
  select{
    width: 100% !important;
    height: 45px !important;
    padding: 15px !important;
    margin-top: 10px !important;
    margin-bottom: 20px !important;
    border: 1px solid grey !important;
    border-radius: 8px !important;
    background-color: #f8f8f8 !important;
    transition: all 0.3s ease;
    font-size: 16px;

  }
  input[type="number"],
  input[type="text"],
  input[type="email"],
  input[type="checkbox"] {
    width: 100%;
    height: 45px;
    padding: 15px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid grey;
    border-radius: 8px;
    background-color: #f8f8f8;
    transition: all 0.3s ease;
    font-size: 16px;
  }
  select::placeholder,
  input[type="text"]::placeholder,
  input[type="email"]::placeholder {
    color: #888;
    font-size: 14px;
  }
  select:focus,
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="checkbox"]:focus {
    background-color: #e8e8e8;
  }
</style>


 <div class="container-fluid" width="80%" style="margin:50px;margin-top:0px;">
 <h2 style="">Create Customer</h2>

   <form method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Name</label>
      <input type="hidden" name="id">
      <input type="text" class="form-control is-valid"  placeholder="fullname"
        name="name">
      <div class="valid-feedback">
       
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>Email</label>
      <input type="Email" class="form-control is-valid"  placeholder="@gmail.com"
        name="email">
     
    </div>
    <div class="col-md-4 mb-3">
      <label>Mobile Number</label>
             
        <input type="number" class="form-control is-invalid" name="phone"  placeholder="Mobile"
           required>
       
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
      <label for="validationServer033">Address</label>
      <input type="text" class="form-control is-invalid" name="address" id="validationServer033" placeholder="Address"
        required>
      <div class="invalid-feedback">
     &nbsp;
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label >City</label>
      <input type="text" class="form-control is-invalid" name="city"  placeholder="City"
        required>
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
    <label>State</label>
      <select class="form-control is-invalid" id="property" name="state">
        <option selected>Select State</option>
        <option value="Up">Uttar Pradesh</option>
        <option value="other">Other</option>
      </select>
      <div class="invalid-feedback">
      &nbsp;
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>Zip</label>
      <input type="number" class="form-control is-invalid" name="zip"  placeholder="Zip"
        required>
      <div class="invalid-feedback">
       &nbsp;
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>Company Name</label>
      <input type="text" class="form-control is-invalid" name="companyname"  placeholder="Company name"
        >
      <div class="invalid-feedback">
     &nbsp;
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label>Industry Type</label>
      <input type="text" class="form-control is-invalid" name="industry" placeholder="Industry Type"
        >
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
  </div>

 
  <button  style="margin-left:10px; background:#337AB7" class="btn btn-primary" type="submit" name="submit">Create User</button>
  <!-- <a href="Masterdata.php" style="margin-left:10px; color:black ;font-weight:600;" class="btn btn-warning">Master Data</></a> -->
 
</form></div>

 </div>   
  

  </div>
</div>
<?php

include('connection.php');
if(isset($_POST["submit"]))
{
    $userid  = "SELECT MAX(id) FROM `profile`";

    $exe=mysqli_query($conn,$userid);

    $arraycount=mysqli_fetch_array($exe);
    
    $uniqueid= "USER-00".$arraycount[0]+1;

    $companyid=$_SESSION['companyid'];

    $name           =   $_POST['name'];
    $email          =   $_POST['email'];
    $phone          =   $_POST['phone'];
    $address        =   $_POST['address'];
    $city           =   $_POST['city'];
    $state          =   $_POST['state'];
    $zip            =   $_POST['zip'];
    $companyname    =   $_POST['companyname'];
    $industry       =   $_POST['industry'];
    $gst            =   $_POST['gst'];
    $companypan     =   $_POST['companypan']; 
    // $companybank    =   $_POST['companybank'];   
    // customerid
    $companyid=$_SESSION['companyid'];

    $customer= "SELECT COUNT(id) FROM `profile` WHERE `companyid`= '$companyid' ";
    $execust=mysqli_query($conn,$customer);
    $arraycountt=mysqli_fetch_array($execust);
    $customerid= "CUSTOMER-00".$arraycountt[0]+1;
// customerid close

    // $profile_query =" INSERT INTO `profile` (`id`,`name`,`email`,`phone`,`city`,`state`,`zip`,`address`,`companyname`,`industry`,`gst`) VALUES ('$id','$name','$email','$phone','$city','$state','$zip','$address',$companyname,$industry,$gst)"; 
    // $fire_profile_query = mysqli_query($conn, $profile_query);
    $profile_query = "INSERT INTO `profile`(`customerid`,`companyid`,`userid`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `companyname`, `industry`, `gst`,`companypan`)
    VALUES ('$customerid','$companyid','$uniqueid','$name','$email','$phone','$address','$city','$state','$zip','$companyname','$industry','$gst','$companypan')";
    $fire_profile_query = mysqli_query($conn,$profile_query);
    
    
    if($fire_profile_query)
    {
        echo "<script> alert('Recorded Successfully'); </script>";
        echo "<script>window.location.href = 'createuser.php';</script>";
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
    header("Location:index.php");
}

?>

