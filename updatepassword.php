<?php
session_start();
if(isset($_SESSION['id']))
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

  input[type="text"]::placeholder,
  input[type="email"]::placeholder {
    color: #888;
    font-size: 14px;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="checkbox"]:focus {
    background-color: #e8e8e8;
  }
  </style>
  <script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirmPassword");

document.getElementById('signupLogo').src = "https://s3-us-west-2.amazonaws.com/shipsy-public-assets/shipsy/SHIPSY_LOGO_BIRD_BLUE.png";
enableSubmitButton();

function validatePassword() {
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    return false;
  } else {
    confirm_password.setCustomValidity('');
    return true;
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function enableSubmitButton() {
  document.getElementById('submitButton').disabled = false;
  document.getElementById('loader').style.display = 'none';
}

function disableSubmitButton() {
  document.getElementById('submitButton').disabled = true;
  document.getElementById('loader').style.display = 'unset';
}

function validateSignupForm() {
  var form = document.getElementById('signupForm');
  
  for(var i=0; i < form.elements.length; i++){
      if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
        console.log('There are some required fields!');
        return false;
      }
    }
  
  if (!validatePassword()) {
    return false;
  }
  
  onSignup();
}

function onSignup() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    
    disableSubmitButton();
    
    if (this.readyState == 4 && this.status == 200) {
      enableSubmitButton();
    }
    else {
      console.log('AJAX call failed!');
      setTimeout(function(){
        enableSubmitButton();
      }, 1000);
    }
    
  };
  
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
  </script>
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
  <div class="row content" style="height: 800px;">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <?php 
      include('menu.php');
      ?><br>
    </div>
    <br>
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
        Login to your account
      </h2>
      
       <div class="inputDiv">
      <label class="inputLabel" for="oldpasword">Old Password</label>
      <input type="password" id="oldpassword" name="oldpassword">
    </div>
      
      
    <div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="password" required>
    </div>
      
    <input type="hidden" name="id"  value="<?php echo $_SESSION['id'];?>" >

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
	include("connection.php");
  
  echo '.<br>';
	if(isset($_POST["submit"])){

		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['confirmPassword'];
    $id=$_POST["id"];

	  $sql= "SELECT * FROM `vendors` WHERE `id`='$id' AND `password`='$oldpassword'";
		$result=mysqli_query($conn,$sql);  
    

		if(mysqli_num_rows($result)>0)
		{ 
      $sqll = "UPDATE `vendors` SET password = '$newpassword' WHERE id = 1";
      echo"old password is matched";

      if (mysqli_query($conn, $sqll)) {
  
          echo "Password updated successfully";
      } else {
          echo "Error updating password: " . mysqli_error($conn);
      }
		}
		else{ 
      echo" old password is not matched";
    		}
    echo '.<br>';
   
	}

}
else{
  echo "please login to Continue";
  header("Location:index.php");
}