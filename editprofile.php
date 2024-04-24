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
                     $a="SELECT * FROM `profile` WHERE `userid`='$val'";
                     $b=mysqli_query($conn,$a);   
                        $c= mysqli_fetch_assoc($b);
                    }?>
            <div class="container" >
    <div class="row">
        <div class="col-md-11 offset-md-3">
            <h2 style="background:#B4A77B; color:white; padding:15px;">Billing Invoice</h2>
        
            <form method="post" id="dynamic-form" >
               
                  <div class="row">
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label for="firstname">Name</label>
                          <input type="text" class="form-control" id="firstname" name="firstname" disabled value="<?php echo $c['name'] ?>">
                    </div>
                    </div>
                    <div class="col-sm-3">
                          
                          <div class="form-group">
                              <label for="lastname">Email</label>
                              <input type="text" class="form-control" id="lastname" name="email" disabled value="<?php echo $c['email']?>">
                          </div>
                    </div>
                    <div class="col-sm-3">
                          <div class="form-group">
                          <label for="email">Phone</label>
                          <input type="email" class="form-control" id="email" name="phone"disabled value="<?php echo $c['phone']?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                            <div class="form-group">
                            <label for="username">City</label>
                            <input type="text" class="form-control" id="username" name="city" disabled value="<?php echo $c['city']?>">
                        </div>
                    </div>
                  </div>
                  
              
                <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                                <label for="password">State</label>

                                <input type="text" class="form-control" id="state" name="state" disabled value="<?php echo $c['state']?>">
                                <input type="hidden" name="userid" value="<?php echo $c['userid']; ?>">
                            </div>
                  </div>

                  <div class="col-sm-4">
                          <div class="form-group">
                                        <label for="password">Zip</label>
                                        <input type="text" class="form-control" id="password" name="zip" disabled value="<?php echo $c['zip']?>">
                                    </div>

                  </div>
                          <div class="col-sm-4">
                          <div class="form-group">
                                <label for="password">Address</label>
                                <input type="text" class="form-control" id="password" name="password" disabled value="<?php echo $c['address']?>">
                            </div>

                          </div> 
                           
                            
                </div>

            <h2 style="background:#B4A77B; color:white; padding:15px;">Services</h2>

               
                <!-- <div class="form-group">
                    <label for="services">Services</label>
                    <input type="text" class="form-control inputField" id="inputContainer" name="services"> 
                    <button class="btn btn-warning" id="nextButton">Next</button>
                </div> -->

                <!--service addup-->
                


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 100%;
            margin: 10px auto;
            padding: 100px;
            padding-top: 0;
            padding-right: 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        @media (max-width:600px){
          .container{
            padding: 10px;
          }
        }

        h2 {
            margin-bottom: 30px;
            font-size: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            width: 90%;
        }

        .btn-add {
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Add Services</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" name="services[]" placeholder="Add services">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" name="price[]" placeholder=" Add Price">
                        <span class="input-group-btn">
                            <button class="btn btn-danger delete-field" type="button">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div id="input-fields"></div>
            <button type="button" class="btn btn-primary btn-add"><i class="glyphicon glyphicon-plus"></i> Add More Services</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add new input field
            $(".btn-add").click(function () {
                var newInput = '<div class="row"><div class="col-md-6"><div class="input-group"><input type="text" class="form-control" name="services[]" placeholder="Add Service"></div></div><div class="col-md-6"><div class="input-group"><input type="text" class="form-control" name="price[]" placeholder=" Add Price"><span class="input-group-btn"><button class="btn btn-danger delete-field" type="button"><i class="glyphicon glyphicon-trash"></i> Delete</button></span></div></div></div>';
                $("#input-fields").append(newInput);
            });

            // Delete input field
            $(document).on("click", ".delete-field", function () {
                $(this).closest(".row").remove();
            });
        });
    </script>



    <!--service addup-->
                  </div>
                  <div class="col-md-6"></div>
                </div>
                                                        

                <div class="row">
                  <div class="col-md-12">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms">
                    <label class="form-check-label" for="terms">I agree with the <a href="#">Terms and Conditions</a>.</label>
                </div>
               
                <button type="submit" class="btn btn-primary" name="generate">Generate</button>
                  </div>

                </div>
               
            </form>
        </div>
    </div>
</div>

        
        
      
             </div>
      </div>

        
      


       
      
       
    
  
</div>

</body>

<?php

if(isset($_POST['generate']))
{
  $userid=$_POST['userid'];
  $services=$_POST['services']; 
  $price=$_POST['price'];

 for ($i = 0; $i < count($services); $i++) {
  

  $quiry="INSERT INTO  `bill` (`userid`, `services` ,`price`) VALUES ('$userid','$services[$i]','$price[$i]')";
  $fire = mysqli_query($conn, $quiry);
  // Here you can store these values in a database or perform any other processing
}



 if($fire)
 {
  echo "<script> alert(' Bill generated');</script>";
 }

 else{
  echo "<script> alert('Some thing went wrong')<script>";
 }
}

?>




</html>
  <?php




  
   
}
else{
    echo "please login to Continue";
    header("Location:admin.php");
}

?>


