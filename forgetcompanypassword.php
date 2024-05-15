<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		echo "<script> window.location.href='dashboard.php'</script>";
        $companyid= $_SESSION['$companyid'];

	}
	else{
	?>
	
	
	<!DOCTYPE html>
	<html lang="en">

	<head>
	<meta charset="UTF-8">
	<title>Log In</title>

	<link rel="stylesheet" href="css/style.css" />

	</head>
	<style>
		

	body {
		background: url(http://private.indocyber.pro/test/image/background.png) fixed 50% no-repeat white;
		font-family: Elephant;
	}

	h2 {
		color: #336895;
	}

	/* NAVIGATION */

	nav {
		position: fixed;
		top: 10px;
		left: 10px;
	}

	nav a {
		color: #4889C2;
		font-weight: bold;
		text-decoration: none;
		opacity: .3;
		-moz-transition: all .4s;
	}

	nav a:hover {
		opacity: 1;
	}

	nav a.focus {
		opacity: 1;
	}

	/* LOGIN & REGISTER FORM */

	form {
		width: 280px;
		height: 260px;
		margin: 200px auto;
		background: white;
		border-radius: 3px;
		box-shadow: 0 0 10px rgba(0,0,0, .4); 
		text-align: center;
		padding-top: 1px;
	}

	form.register{																				/* Register form height */
		height: 420px;
	}

	form .text-field {																			/* Input fields; Username, Password etc. */
		border: 1px solid #a6a6a6;
		width: 230px;
		height: 40px;
		border-radius: 3px;
		margin-top: 10px;
		padding-left: 10px;
		color: #6c6c6c;
		background: #fcfcfc;
		outline: none;
	}

	form .text-field:focus {
		box-shadow: inset 0 0 2px rgba(0,0,0, .3);
		color: #a6a6a6;
		background: white;
	}

	form .button {																				/* Submit button */
		border-radius: 3px;
		border: 1px solid #336895;
		box-shadow: inset 0 1px 0 #8dc2f0;
		width: 242px;
		height: 40px;
		margin-top: 20px;
		
		background: linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
		background: -o-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
		background: -moz-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
		background: -webkit-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
		background: -ms-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
		
		cursor: pointer;
		color: white;
		font-weight: bold;
		text-shadow: 0 -1px 0 #336895;
		
		font-size: 13px;
	}

	form .button:hover {
		background: linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
		background: -o-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
		background: -moz-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
		background: -webkit-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
		background: -ms-linear-gradient(bottom, #5c96c9 0%, #6bafea 100%);
	}

	form .button:active {
		background: linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
		background: -o-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
		background: -moz-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
		background: -webkit-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
		background: -ms-linear-gradient(bottom, #5BA7E9 0%, #4889C2 100%);
		
		box-shadow: inset 0 0 2px rgba(0,0,0, .3), 0 1px 0 white;
	}
	</style>
	<body>



	<!-- <nav><a href="#" class="focus">Log In</a></nav> -->

	<form action="#" method="post">

		<h2 style="font-family:'Courier New', Courier, monospace; font-size:20px;">Forget Your Password</h2>
		<input type="email" name="email" class="text-field" placeholder="Email"required />

		<input type="text" name="username" class="text-field" placeholder=" Enter Username" required/>
		
	<a href=""><input type="submit"  class="button" value="Validate" name="check" /></a><br> <br> <br>

	</form>



    


	<!-- php code -->
	<?php
include("connection.php");

if(isset($_POST["check"])){
    $email = $_POST['email'];
    $username = $_POST['username'];

    $sql = "SELECT * FROM `vendors` WHERE `username`='$username' AND `email`='$email'";
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

                  </body>

</html>

<?php
    }
?>






