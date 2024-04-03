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
    *{
	margin: 0; 
	padding: 0; 
	box-sizing: border-box;
}

#content{
	width: 50%;
	justify-content: center;
	align-items: center;
	margin: 20px auto;
	border: 1px solid #cbcbcb;
}
form{
	width: 50%;
	margin: 20px auto;
}

#display-image{
	width: 100%;
	justify-content: center;
	padding: 5px;
	margin: 15px;
}
img{
	margin: 5px;
	width: 350px;
	height: 250px;
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
   
    <div class="col-sm-9">

    <div id="content">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <input class="form-control" type="file" name="uploadfile" id="uploadfile" value="" />
            <input type="hidden"
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
        </div>
    </form>
</div>
<div id="display-image">
<?php
include("connection.php");

if(isset($_POST['upload'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

    if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) {
        $filename = basename($_FILES["uploadfile"]["name"]);
        $filepath = $target_file;
        $query = "INSERT INTO files (`filename`, `filepath`) VALUES ('$filename', '$filepath')";
        
        if(mysqli_query($conn, $query)) {

            echo "The file ". htmlspecialchars($filename). " has been uploaded.";
            echo"<script> alert('image is successfully uploaded'); window.location.href = 'uploads.php';</script>";
          
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    // header("Location:uploads.php");
    
}
?>
</div>
        

        
      


       
      
       
    </div>
  </div>
</div>

</body>
</html>
  <?php




  
   
}
else{
    echo "please login to Continue";
    header("Location:admin.php");
}

?>





<!--main upload above-->











