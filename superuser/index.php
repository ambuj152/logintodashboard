<?php
session_start();
// include('connection.php');

if(isset($_SESSION['userid']))
{
echo "<script> window.location.href='superdashboard.php'; </script>";
}
else{
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super-user Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #17a2b8;
      height: 100vh;
    }
    #login-box {
      margin-top: 120px;
      max-width: 600px;
      height: 320px;
      border: 1px solid #9C9C9C;
      background-color: #EAEAEA;
    }
    #login-box #login-form {
      padding: 20px;
    }
    #register-link {
      margin-top: -85px;
    }
  </style>
</head>
<body>


  <div id="login">
    <h3 class="text-center text-white pt-5">Super-user login</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" method="post">
              <h3 class="text-center text-info">SUPERUSER</h3>
              <div class="mb-3">
                <label for="username" class="form-label text-info">Username:</label>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label text-info">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" id="remember-me" name="remember-me" class="form-check-input">
                <label for="remember-me" class="form-check-label text-info">Remember me</label>
              </div>
              <div class="mb-3 text-center">
                <button type="submit" name="submit" class="btn btn-info btn-md">Submit</button>
              </div>
              <div id="register-link" class="text-end">
                <a href="superuserforgetpass.php" class="text-info">Forget password</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
include('../connection.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "SELECT * FROM `superuser` WHERE `username`='$username' AND `password`='$password'";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result))
		{
			$res=mysqli_fetch_assoc($result);
			$_SESSION['userid']= $res['id'];
			header('Location:superdashboard.php');
		}
		else{ 
            echo"<script>alert('incorrect login');<script>";
		}

}


?>



<?php

}

?>