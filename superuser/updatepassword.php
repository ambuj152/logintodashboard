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


<?php 
include('sidemenu.php');
?>
<!-- Sidebar -->
  <!-- <nav id="sidebar" class="sidebar">
    <div class="sidebar-heading">SuperUser</div>
    <hr style="color:white">
    <ul class="list-unstyled">
      <li><a href="#" class="sidebar-link">Dashboard</a></li>
      <li><a href="createcompany.php" class="sidebar-link">Create A Company</a></li>

      <li><a href="companydata.php" class="sidebar-link">Company Data</a></li>
      <li><a href="#" class="sidebar-link">Products</a></li>
      <li><a href="#" class="sidebar-link">Orders</a></li>
      <li><a href="#" class="sidebar-link">Settings</a></li>
    </ul>
  </nav> -->
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
        
        .mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #f9f9f9;
    font-family: 'Open Sans', sans-serif;
  }
 .cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
  }
#signupLogo {
  max-height: 100px;
  margin: auto;
  display: flex;
  flex-direction: column;
}
.formTitle{
  font-weight: 600;
  margin-top: 20px;
  color: #2F2D3B;
  text-align: center;
}
.inputLabel {
  font-size: 12px;
  color: #555;
  margin-bottom: 6px;
  margin-top: 24px;
}
  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }
input {
  height: 40px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
input:disabled {
  cursor: not-allowed;
  border: solid 1px #eee;
}
.buttonWrapper {
  margin-top: 40px;
}
  .submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
.submitButton:disabled,
button[disabled] {
  border: 1px solid #cccccc;
  background-color: #cccccc;
  color: #666666;
}


    </style>
  
    <center><div class="col-sm-9">
    <div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
<!--       <img src="" id="signupLogo"/> -->
      
      <h2>
        Update Password
      </h2>
      
       <div class="inputDiv">
      <label class="inputLabel" for="oldpasword">Old Password</label>
      <input type="password" id="oldpassword" name="oldpassword">
    </div>
      
      
    <div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="password" required>
    </div>
      
    <input type="hidden" name="id"  value="<?php echo $_SESSION['userid'];?>" >

 <!--mandatary to pass id along with the form-->
    <div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword">
    </div>
    
    <div class="buttonWrapper">
      <button type="submit" name="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
        <span>Continue</span>
        <span id="loader"></span>
      </button>
    </div>
      
  </form>
  </div>
</div>      
</div></center>
  </div>
</div>

</body>
</html>

<?php
	include('../connection.php');
  
  echo '.<br>';
	if(isset($_POST["submit"])){

		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['confirmPassword'];
    $id=$_POST['id'];

	  $sql= "SELECT * FROM `superuser` WHERE `id`='$id' AND `password`='$oldpassword'";
		$result=mysqli_query($conn,$sql);  
    

		if(mysqli_num_rows($result)>0)
		{ 
      $sqll = "UPDATE `superuser` SET password = '$newpassword' WHERE id = 1";
      echo"old password is matched";

      if (mysqli_query($conn, $sqll)) {
  
          echo "<script>alert('Password updated successfully');</script>";
      } else {
          echo "Error updating password: " . mysqli_error($conn);
      }
		}
		else{ 
      echo" old password is not matched";
    		}
    echo '.<br>';
   
	}
?>
  </div>
  <!-- /#page-content-wrapper -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else{
  echo "<script>alert('please login first')</script>";
  header('Location:superuser.php');
}
?>