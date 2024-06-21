<?php

session_start();
if(isset($_SESSION['id']) ) 
{
?>


<?php
include('connection.php');


if(isset($_GET['editbilltable']))
{

    $userid=$_GET['editbilltable'];
    $deleteQuery= "DELETE FROM `temppreview` WHERE `userid`= '$userid'";
    $exec= mysqli_query($conn,$deleteQuery);
}
   

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
  input[type="date"],

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
  input[type="date"]:focus,

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="checkbox"]:focus {
    background-color: #e8e8e8;
  }

  /* Style for form buttons */
  .btn-primary{
    /* width: 100%; */
    right:10px;
    /* margin-left: 300px; */
    margin-top: 10;
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
    padding: 12px;
    border: none;
    border-radius: 6px;
    height: 45px;
    transition: all 0.3s ease;
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
  input[type="date"],
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
  input [type="date"]::placeholder,

  input[type="email"]::placeholder {
    color: #888;
    font-size: 14px;
  }
  input[type="date"]:focus,

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
                    if(isset($_GET['editbilltable']));
                    {  
                     $val=$_GET['editbilltable'];
                     $a="SELECT * FROM `profile` WHERE `userid`='$val'";
                     $b=mysqli_query($conn,$a);   
                        $c= mysqli_fetch_assoc($b);
                    }?>
            <div class="container-fluid" style="padding-left:60px;" >
    <div class="row">
        <div class="col-md-11 offset-md-3" >
            <h2 style="background:#337AB7;">Billing Invoice</h2>
        
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
                    <div class="col-sm-4">
                    <div class="form-group">
                    <label for="firstname">Company Name</label>
                          <input type="text" class="form-control" id="firstname" name="companyname" disabled value="<?php echo $w['companyname'] ?>">
                    </div>
                    </div>
                    <div class="col-sm-4">
                          
                          <div class="form-group">
                              <label for="lastname">Company Id</label>
                              <input type="text" class="form-control" id="lastname" name="invoice" disabled value="<?php echo $w['companyid']?>">
                          </div>
                    </div>
                    <!-- <div class="col-sm-3">
                          <div class="form-group">
                          <label for="email">Order Date</label>
                          <input type="text" class="form-control" id="email" name="phone"disabled value="<?php echo $w['dataeofregistration']?>">
                      </div>
                    </div> -->
                    <div class="col-sm-4">
                            <div class="form-group">
                            <label for="username">Address</label>
                            <input type="text" class="form-control" id="username" name="city" disabled value="<?php echo $w['address']?>">
                            <input type="hidden" name="action_code" value="previewbill">
                            <!-- <input type="hidden" name="action_code1" value="generatebill"> -->
                          </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                                <label for="password">Mobile</label>

                                <input type="text" class="form-control" id="state" name="state" disabled value="<?php echo $w['mobile']?>">
                                <input type="hidden" name="userid" value="<?php echo $c['userid']; ?>">
                            </div>
                  </div>

                  <!-- <div class="col-sm-4">
                          <div class="form-group">
                                        <label for="password">Serial No.</label>
                                        <input type="text" class="form-control" id="password" name="zip" disabled value="<?php echo $w['id']?>">
                                    </div>

                  </div> -->
                          <div class="col-sm-6">
                          <div class="form-group">
                                <label for="password">GSTIN/UIN</label>
                                <input type="text" class="form-control" id="password" name="password" disabled value="<?php echo $w['gstnumber']?>">
                            </div>

                          </div> 
                           
                            
                </div>
                <?php
                
                      }?>
              <hr style="border-top: 1px solid #c2c2c2">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
              <div class="row">
                <div class="col-sm-6">
                <h3>Customer data</h3>
                </div>

                <div class="col-sm-6">
                  <?php
                  include('connection.php');

                   if(isset($_GET['editbilltable'])){
                    $val= $_GET['editbilltable'];
                        $query = "SELECT * FROM `bill` WHERE `id`='$val' ";
                      
                        $result = mysqli_query($conn, $query);
                        $rest = mysqli_fetch_assoc($result);

                        $orderdate=$rest['orderdate'];
                        $formatted_orderdate = date('Y-m-d', strtotime($orderdate));
                   
                   ?>
            <a href="updatecustomer.php?showID=<?php echo $rest['userid']?>" class=" btn btn-warning" style="font-size: 10px; margin-top:20px; float:right"><i class="fas fa-edit"></i> Edit</a>  </span>
                   
                </div>
                </div>
         

              <hr style="border-top: 1px solid #c2c2c2">

               
               
                  
              
                <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                                <label for="password">Customer ID</label>

                                <input type="hidden" class="form-control" id="cid" name="customerid" disabled value="<?php echo $rest['customerid']?>">
                                <input type="hidden" name="userid" value="<?php echo $c['userid']; ?>">
                                <input type="hidden" name="serial" value="<?php echo $rest['serial']; ?>">


                                <input type="text" class="form-control" name="custid" value="<?php echo $rest['customerid']; ?>">


                            </div>
                  </div>

                  <div class="col-sm-4">
                          <div class="form-group">
                                        <label for="password"> Order Date</label>
                                        <input type="date" class="form-control" id="orderdate" name="orderdate" value="<?php echo  htmlspecialchars($formatted_orderdate);?>">
                                    </div>

                  </div>

                           
                            
              
                  <div class="col-sm-4">
                  <div class="form-group">
                                <label for="password">Serial ID</label>

                                <input type="hidden" class="form-control" id="cid" name="customerid" disabled value="<?php echo $rest['customerid']?>">
                                <input type="hidden" name="userid" value="<?php echo $rest['userid']; ?>">
                                <input type="hidden" name="serial" value="<?php echo $rest['serial']; ?>">


                                <input type="text" class="form-control" name="custid" value="<?php echo $rest['serial']; ?>">


                            </div>
                  </div>
                  </div>



                           
                            
                </div>


                <?php
                   }
                    ?>
              <hr style="border-top: 1px solid #c2c2c2">
                        
            <h3>Services</h3>
              <hr style="border-top: 1px solid #c2c2c2">
            

       
                


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



<?php
include('connection.php');

if(isset($_GET['seriall']))
{
  $serial=$_GET['seriall'];
 $selectservice="SELECT * FROM `bill` WHERE `serial`='$serial'";
$runslect=mysqli_query($conn, $selectservice);
echo mysqli_error($conn);
foreach($runslect as $serialwise)
{
?>
    
        <!-- <h2>Add Services</h2> -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                    <label for=""> Add services</label>
                        
                    <input type="hidden" class="form-control" name="id[]" id="id[]" placeholder="Add services" value="<?php echo $serialwise['id']?>" required>

                        <input type="text" class="form-control" name="services[]" id="services[]" placeholder="Add services" value="<?php echo $serialwise['services']?>" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                    <label for=""> HSN/SAC</label>

                        <input type="text" class="form-control" name="hsn[]" id="hsn[]" placeholder="HSN/SAC"  value="<?php echo $serialwise['hsn']?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                      <label for=""> QTY/PER</label>
                        <input type="number" class="form-control" name="quantity[]" id="quantity[]" value="1" min="1"  value="<?php echo $serialwise['quantity']?>"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                    <label for="">Add Price</label>

                        <input type="number" class="form-control" name="price[]" id="price[]" placeholder=" Add Price"  value="<?php echo $serialwise['price']?>" required>
                        
                        <span class="input-group-btn" style="padding-top:24px">
                            <button class="btn btn-danger delete-field" type="button">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <?php
              }
            }
            ?>
            <!-- <div id="input-fields"></div>
            <button type="button"  class="btn btn-primary btn-add"><i class="glyphicon glyphicon-plus"></i> Add More Services</button> -->
            
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add new input field
            // $(".btn-add").click(function () {
            //     var newInput = '<div class="row"><div class="col-md-4"><div class="input-group"><input type="text" class="form-control" name="services[]" id="services[]" placeholder="Add Service" required></div></div> <div class="col-md-2"><div class="input-group"><input type="text" class="form-control" name="hsn[]" id="hsn[]" placeholder="HSN/SAC" ></div>          </div><div class="col-md-2"><div class="input-group"><input type="number" class="form-control" name="quantity[]" id="quantity[]" placeholder="" value="1" required></div></div> <div class="col-md-4"><div class="input-group"><input type="number" class="form-control" name="price[]" id="price[]" placeholder=" Add Price" required><span class="input-group-btn"><button class="btn btn-danger delete-field" type="button"><i class="glyphicon glyphicon-trash"></i> Delete</button></span></div></div></div>';
            //     $("#input-fields").append(newInput);
            // });

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
              <hr style="border-top: 1px solid #c2c2c2">
                    
                  <!-- <h3 class="text-center;">Select Mode of Payment:</h3> -->
              <!-- <hr style="border-top: 1px solid #c2c2c2"> -->

                <div class="form-group">
                <label for="">Payment Mode</label>
                    <select class="form-control" id="modeOfPayment" name="modeOfPayment" style=" width: 100%;
    height: 45px;
    border-radius: 8px;
    background-color: #f8f8f8;
    transition: all 0.3s ease;
    font-size: 16px;">
                        <option value="online" style="">Online</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>
                  </div>
                  <div class="col-sm-6">
              <hr style="border-top: 1px solid #c2c2c2">

                  <div class="form-group">
                    <label for="" style="margin-bottom: -20px;">Tax percentage %</label>
                        <input type="text" class="form-control" name="taxp" placeholder="Enter tax percentage"   value="<?php echo $serialwise['tax-p']?>"required style="margin-top: 5px;" >
                    </div>
                  </div>
                  </div>  
               

              
                
                  </div>
                  <div class="row">
             
                </div>
                                                        

                <div class="row">
              <hr style="border-top: 1px solid #c2c2c2">

                  <div class="col-sm-6">
                 
                <br><?php
                          include ('connection.php');
                          $companyid=$_SESSION['companyid'];
                ?>
                <button type="submit" style="width: 60%;" class="btn btn-danger" name="updatesubmit">   Update Bill   </button>

              
                  </div>

                  <div class="col-sm-6">
                    <br>
                  <!-- <button type="submit" style="margin-left:90px; margin-top:10px;width:60%;" class="btn btn-primary" name="billgen" id="gneratebill">   Generate Bill </button> -->
                  </div>
              <hr style="border-top: 1px solid #C2C2C2">

                  
                </div>    
                     
            </form>
          
                            <p id="userid">

                            </p>
                                 
                                </div>
                            </div>
                       </div>      
                  </div>
             </div>
       </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

<?php
include("connection.php");
if(isset($_POST['updatesubmit']))
{   
  $id=$_POST['id'];
  $serial=$_POST['serial'];
  $userid=$_POST['userid'];

  $services = $_POST['services']; 
  $price = $_POST['price'];
  $modeofpayment = $_POST['modeOfPayment'];
  $orderdate = $_POST['orderdate'];
  $quantity = $_POST['quantity'];
  $hsn= $_POST['hsn'];
  $tax= $_POST['taxp'];
  
 for ($i = 0; $i < count($services); $i++) {
  

 echo  $tempquery = "UPDATE `bill` 
              SET `services` = '$services[$i]',
                  `hsn` = '$hsn[$i]',
                  `quantity` = '$quantity[$i]',
                  `price` = '$price[$i]',
                  `modeofpayment` = '$modeofpayment',
                  `orderdate` = '$orderdate',
                  `tax-p` = '$tax'

              WHERE `id`='$id[$i]'"; // Replace $id with the actual unique identifier of the row you want to update

  $fire = mysqli_query($conn, $tempquery);
  echo mysqli_error($conn);
 

 
}


 if($fire)
 {

  // $resultt=$res['serial'];
  ?>
  <script> alert(' Bill generated');
  window.location.href='editedpdf.php?showid=<?php echo $serial; ?>';
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
    header("Location:index.php");
}

?>


