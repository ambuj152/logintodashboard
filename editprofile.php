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
  .btn-primary{
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    /* background: linear-gradient(135deg, #B4A77B, #E9C46A); */
    background: linear-gradient(135deg, #4e73df, #224abe);
    
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-danger{
    height: 45px;
margin-top: 10px;
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
  input[type="number"],
  input[type="text"],
  input[type="email"] {
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

  input[type="checkbox"] .form-check-label{
    display: flex;

  }
  input[type="text"]::placeholder,
  input[type="number"]::placeholder,

  input[type="email"]::placeholder {
    color: #888;
    font-size: 14px;
  }
  input[type="number"]:focus,
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="checkbox"]:focus {
    background-color: #e8e8e8;
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

<div class="container-fluid" >
  <div class="row content" style="height:1200px">
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
            <div class="container-fluid" style="padding-left:60px;" >
    <div class="row">
        <div class="col-md-11 offset-md-3">
            <h2>Billing Invoice</h2>
        
            <form method="post" id="dynamic-form" >
            <div class="row">

            <?php 
                                  include("connection.php");
                    $companyid=$_SESSION['companyid'];

                      if(isset($_SESSION['companyid']));
                      {  
                      //  $val=$_GET['showid'];
                                    $u="SELECT * FROM `vendors` WHERE `companyid`='$companyid'";
                                    $v=mysqli_query($conn,$u);   
                                    $w= mysqli_fetch_assoc($v);
                             
                              ?>
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label for="firstname">Company Name</label>
                          <input type="text" class="form-control" id="firstname" name="companyname" disabled value="<?php echo $w['companyname'] ?>">
                    </div>
                    </div>
                    <div class="col-sm-3">
                          
                          <div class="form-group">
                              <label for="lastname">Company Id</label>
                              <input type="text" class="form-control" id="lastname" name="invoice" disabled value="<?php echo $w['companyid']?>">
                          </div>
                    </div>
                    <div class="col-sm-3">
                          <div class="form-group">
                          <label for="email">Order Date</label>
                          <input type="text" class="form-control" id="email" name="phone"disabled value="<?php echo $w['dataeofregistration']?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                            <div class="form-group">
                            <label for="username">Address</label>
                            <input type="text" class="form-control" id="username" name="city" disabled value="<?php echo $w['address']?>">
                        </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                                <label for="password">Mobile</label>

                                <input type="text" class="form-control" id="state" name="state" disabled value="<?php echo $w['mobile']?>">
                                <input type="hidden" name="userid" value="<?php echo $c['userid']; ?>">
                            </div>
                  </div>

                  <div class="col-sm-4">
                          <div class="form-group">
                                        <label for="password">Serial No.</label>
                                        <input type="text" class="form-control" id="password" name="zip" disabled value="<?php echo $w['id']?>">
                                    </div>

                  </div>
                          <div class="col-sm-4">
                          <div class="form-group">
                                <label for="password">GSTIN/UIN</label>
                                <input type="text" class="form-control" id="password" name="password" disabled value="<?php echo $w['gstnumber']?>">
                            </div>

                          </div> 
                           
                            
                </div>
                <?php
                
                      }?>

            <h2>Customer data</h2>
               
                  <div class="row">
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label for="firstname"> Customer Name</label>
                          <input type="text" class="form-control" id="firstname" name="firstname"  value="<?php echo $c['name'] ?>">
                    </div>
                    </div>
                    <div class="col-sm-3">
                          
                          <div class="form-group">
                              <label for="lastname">Email</label>
                              <input type="text" class="form-control" id="lastname" name="email"  value="<?php echo $c['email']?>">
                          </div>
                    </div>
                    <div class="col-sm-3">
                          <div class="form-group">
                          <label >Phone</label>
                          <input type="text" class="form-control" id="email" name="phone" value="<?php echo $c['phone']?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                            <div class="form-group">
                            <label for="username">Invoice</label>
                            <input type="text" class="form-control" id="username" name="userid" disabled value="<?php echo $c['userid']?>">
                        </div>
                    </div>
                  </div>
                  
              
                <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                                <label for="password">Customer ID</label>

                                <input type="text" class="form-control" id="state" name="state" disabled value="<?php echo $c['id']?>">
                                <input type="hidden" name="userid" value="<?php echo $c['userid']; ?>">
                            </div>
                  </div>

                  <div class="col-sm-4">
                          <div class="form-group">
                                        <label for="password">Zip</label>
                                        <input type="text" class="form-control" id="password" name="zip" value="<?php echo $c['zip']?>">
                                    </div>

                  </div>
                          <div class="col-sm-4">
                          <div class="form-group">
                                <label for="password">Address</label>
                                <input type="text" class="form-control" id="password" name="password"  value="<?php echo $c['address']?>">
                            </div>

                          </div> 
                           
                            
                </div>

            <h2>Services</h2>

               
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




    
        <!-- <h2>Add Services</h2> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                    <label for=""> Add services</label>

                        <input type="text" class="form-control" name="services[]" placeholder="Add services" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                      <label for=""> QTY/PER</label>
                        <input type="number" class="form-control" name="quantity[]" value="1" min="1" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                    <label for="">Add Price</label>

                        <input type="number" class="form-control" name="price[]" placeholder=" Add Price" required>
                        
                        <span class="input-group-btn" style="padding-top:24px">
                            <button class="btn btn-danger delete-field" type="button">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div id="input-fields"></div>
            <button type="button" class="btn btn-primary btn-add"><i class="glyphicon glyphicon-plus"></i> Add More Services</button>
            
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add new input field
            $(".btn-add").click(function () {
                var newInput = '<div class="row"><div class="col-md-6"><div class="input-group"><input type="text" class="form-control" name="services[]" placeholder="Add Service" required></div></div> <div class="col-md-2"><div class="input-group"><input type="number" class="form-control" name="quantity[]" placeholder="" value="1" required></div></div> <div class="col-md-4"><div class="input-group"><input type="number" class="form-control" name="price[]" placeholder=" Add Price" required><span class="input-group-btn"><button class="btn btn-danger delete-field" type="button"><i class="glyphicon glyphicon-trash"></i> Delete</button></span></div></div></div>';
                $("#input-fields").append(newInput);
            });

            // Delete input field
            $(document).on("click", ".delete-field", function () {
                $(this).closest(".row").remove();
            });
        });
    </script>



    <!--service addup-->
                  
                  <div class="row">
                    <br>
                    <br>
                  <div class="col-sm-6">
                  <h2 class="text-center">Select Mode of Payment:</h2>
                <div class="form-group">
                    <select class="form-control" id="modeOfPayment" name="modeOfPayment">
                        <option value="online">Online</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>
                  </div>
                  <div class="col-sm-6">
                                <div class="form-group">
                    <h2 class="text-center">Order Date:</h2> 
                    <input type="date" class="form-control" id="birthday" name="orderdate">
                  </div>
                </div>
                  </div>
                                                        

                <div class="row">
                  <div class="col-sm-12">
                 
                <br><?php
                 include ('connection.php');
                 $companyid=$_SESSION['companyid'];
                ?>
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
include("connection.php");
if(isset($_POST['generate']))
{   
  


  $userid=$_POST['userid'];
  $services=$_POST['services']; 
  $price=$_POST['price'];
  $modeofpayment=$_POST['modeOfPayment'];
  $orderdate=$_POST['orderdate'];
  $quantity= $_POST['quantity'];
  


 for ($i = 0; $i < count($services); $i++) {
  

  $quiry="INSERT INTO  `bill` (`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
  $fire = mysqli_query($conn, $quiry);
  // Here you can store these values in a database or perform any other processing
}



 if($fire)
 {
  echo $qwerty="SELECT * FROM `bill` WHERE `userid`='$userid' AND `modeofpayment`='$modeofpayment' AND `orderdate`='$orderdate' ORDER  BY `id` DESC";
  $execute=mysqli_query($conn,$qwerty);
  $res=mysqli_fetch_assoc($execute);
  //  echo mysqli_error($conn);
  $resultt=$res['userid'];
  ?>
  <script> alert(' Bill generated');
  window.location.href='pdf.php?showid=<?php echo $resultt; ?>';
  </script>
  <?php
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


