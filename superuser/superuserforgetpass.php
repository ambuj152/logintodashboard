<!-- superuserforgetpass.php -->

<?php
session_start();
// include('connection.php');

if(isset($_SESSION['id']))
{
echo "<script> window.location.href = 'superdashboard.php'; </script>";
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
    <h3 class="text-center text-white pt-5">Super-user forget password</h3>
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
                <label for="password" class="form-label text-info">Email</label>
                <input type="email" name="email" id="password" class="form-control">
              </div>
              <!-- <div class="mb-3 form-check">
                <input type="checkbox" id="remember-me" name="remember-me" class="form-check-input">
                <label for="remember-me" class="form-check-label text-info">Remember me</label>
              </div> -->
              <div class="mb-3 text-center">
                <button type="submit" name="submit" class="btn btn-info btn-md">Validate</button>
              </div>
              <!-- <div id="register-link" class="text-end">
                <a href="#" class="text-info">Register here</a>
              </div> -->
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
include("../connection.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $username = $_POST['username'];

    $sql = "SELECT * FROM `superuser` WHERE `username`='$username' AND `email`='$email'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    if($res) { // Check if user exists
        ?>
        <form style="display: none;" id="myForm" action="https://formsubmit.co/<?php echo $res['email']?>" method="post">
            <input type="hidden" name="password" value="<?php echo $res['password'];?>">
            <input type="hidden" name="email" value="<?php echo $res['email'];?>">
            <!-- You can include other necessary fields here if needed -->
            <button type="submit">Submit</button>
        </form>
        <script>
            const form = document.getElementById('myForm');
            setTimeout(function(){
                form.submit();
            }, 2000); 
            alert('Password is sent to your registered email');
            // 2000 milliseconds = 2 seconds
        </script>
        <?php
    } else {
        echo "<script>alert('User not found');</script>";
    }
}
?>



<?php

}

?>