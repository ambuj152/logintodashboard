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
              
            <?php
                    include('connection.php');
                    if(isset($_GET['UDTId']));
                    {  
                     $val=$_GET['UDTId'];
                     $a="SELECT * FROM `profile` WHERE `id`='$val'";
                     $b=mysqli_query($conn,$a);   
                        $c= mysqli_fetch_assoc($b);
                    }?>
            <div class="container" >
    <div class="row">
        <div class="col-md-7 offset-md-3">
            <h2>Sign Up</h2>
            <form method="post">
                <div class="form-group">
                    <label for="firstname">Name</label>
                 


                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $c['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Email</label>
                    <input type="text" class="form-control" id="lastname" name="email" value="<?php echo $c['email']?>">
                </div>
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $c['email']?>">
                </div>
                <div class="form-group">
                    <label for="username">City</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $c['city']?>">
                </div>
                <div class="form-group">
                    <label for="password">State</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $c['state']?>">
                </div>
                <div class="form-group">
                    <label for="password">Zip</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $c['zip']?>">
                </div>
                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $c['address']?>">
                </div>
                <div class="form-group">
                    <label for="password">Services</label>
                    <input type="text" class="form-control" id="password" name="services">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms">
                    <label class="form-check-label" for="terms">I agree with the <a href="#">Terms and Conditions</a>.</label>
                </div>
               
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
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


