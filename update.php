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
   
    <div class="col-sm-9">

  
        <center>
           

            <?php
include("connection.php");

if(isset($_GET['imgid'])) {
    $id=$_GET['imgid'];
    $sqll="SELECT * FROM `files` WHERE `id`='$id'";
    $result= mysqli_query($conn,$sqll); 

    $fetch= mysqli_fetch_assoc($result);

    ?>
    
    <div class="card-body">
    <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <img src="<?php echo $fetch['filepath'] ?>" alt="" width="40px"><br>
                <br><input class="form-control" type="file" name="uploadfile" id="uploadfile" />
                <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
                <input type="hidden" value="<?php echo $fetch['filepath']; ?>" name="old_image">
            </div>
           <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
           </div>
    </form>
    </div>
<?php
 
 if(isset($_POST['upload'])){
    $id=$_POST['id'];
    $target_file=$_POST['old_image'];

    if(!empty($_FILES['uploadfile']['name'])){
    $target_dir = "uploads/";
   echo $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

    move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file);
        
       
    
    }
    echo $query = "UPDATE `files` SET `filepath`='$target_file' WHERE `id`= '$id'";
        
        if(mysqli_query($conn,$query)) {

           echo "The file ". htmlspecialchars($filename). " has been uploaded.";
      
          
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
}
    // header("Location:uploads.php");
} 
 
?>
        </center>

        
      


       
      
       
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


