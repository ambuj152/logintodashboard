<?php

session_start();
if(isset($_SESSION['id']) ) 
{
?>


<?php
include('connection.php');


if(isset($_POST['userid']))
{

    $userid=$_POST['userid'];
    $deleteQuery= "DELETE FROM `tempbill` WHERE `userid`= '$userid'";
    $exec= mysqli_query($conn,$deleterow);
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
                            <input type="hidden" name="action_code" value="previewbill">
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
                    <div class="col-sm-4">
                    <div class="form-group">
                    <label for="firstname"> Customer Name</label>
                          <input type="text" class="form-control" id="customername" name="customername"  value="<?php echo $c['name'] ?>">
                    </div>
                    </div>
                    <div class="col-sm-4">
                          
                          <div class="form-group">
                              <label for="lastname">Email</label>
                              <input type="text" class="form-control" id="email" name="email"  value="<?php echo $c['email']?>">
                          </div>
                    </div>
                    <div class="col-sm-4">
                          <div class="form-group">
                          <label >Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $c['phone']?>">
                      </div>
                    </div>
                   
                  </div>
                  
              
                <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                                <label for="password">Customer ID</label>

                                <input type="text" class="form-control" id="cid" name="customerid" disabled value="<?php echo $c['userid']?>">
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
                                <input type="text" class="form-control" id="address" name="address"  value="<?php echo $c['address']?>">
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

                        <input type="text" class="form-control" name="services[]" id="services[]" placeholder="Add services" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                      <label for=""> QTY/PER</label>
                        <input type="number" class="form-control" name="quantity[]" id="quantity[]" value="1" min="1" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                    <label for="">Add Price</label>

                        <input type="number" class="form-control" name="price[]" id="prices[]" placeholder=" Add Price" required>
                        
                        <span class="input-group-btn" style="padding-top:24px">
                            <button class="btn btn-danger delete-field" type="button">
                                <i class="glyphicon glyphicon-trash"></i> Delete
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div id="input-fields"></div>
            <button type="button"  class="btn btn-primary btn-add"><i class="glyphicon glyphicon-plus"></i> Add More Services</button>
            
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add new input field
            $(".btn-add").click(function () {
                var newInput = '<div class="row"><div class="col-md-6"><div class="input-group"><input type="text" class="form-control" name="services[]" id="services[]" placeholder="Add Service" required></div></div> <div class="col-md-2"><div class="input-group"><input type="number" class="form-control" name="quantity[]" id="quantity[]" placeholder="" value="1" required></div></div> <div class="col-md-4"><div class="input-group"><input type="number" class="form-control" name="price[]" id="price[]" placeholder=" Add Price" required><span class="input-group-btn"><button class="btn btn-danger delete-field" type="button"><i class="glyphicon glyphicon-trash"></i> Delete</button></span></div></div></div>';
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
                    <input type="date" class="form-control" id="orderdate" name="orderdate">


                    <script>
// Function to get the current date in YYYY-MM-DD format
function getCurrentDate() {
  var today = new Date();
  var year = today.getFullYear();
  var month = ('0' + (today.getMonth() + 1)).slice(-2); // Add leading zero if needed
  var day = ('0' + today.getDate()).slice(-2); // Add leading zero if needed
  return year + '-' + month + '-' + day;
}

// Set the value of the hidden input field with the current date
document.getElementById("orderdate").value = getCurrentDate();
</script>
                  </div>
                </div>
                  </div>
                                                        

                <div class="row">
                  <div class="col-sm-12">
                 
                <br><?php
                 include ('connection.php');
                 $companyid=$_SESSION['companyid'];
                ?>
                <button type="submit" style="width: 300px;" class="btn btn-danger" onclick="modaldata('<?php  echo $c['userid']; ?>')"
                data-toggle="modal" data-target="#myModal">Preview Bill</button>

                <button type="button" style="margin-left:430px ;width:30%" class="btn btn-primary" id="generatepage"  onclick="finalpage('<?php  echo $c['userid']; ?>')" >Generate Bill</button>
                  </div>
                </div>         
            </form>



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
          <div class="modal-content" style="width:900px;" >
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title" style="text-align:center;">Bill Preview</h4>
             </div>
              <div class="modal-body">
                  <p id="ShowDis" style="text-align:center;font-family: Garamond;"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="deltable('<?php  echo $c['userid']; ?>')">Done</button>
              </div>
          </div>
      
    </div>
  </div>
                            <p id="userid">

                            </p>
                              <script>
                                   function finalpage(userid)
                                  {
                                    var userid=userid;
                                  //alert(PackageTour);
                                  $.ajax({
                                    url: "showfunction.php",
                                    method: "POST",
                                    data: {
                                      pageid: userid,
                                    },
                                    success: function(data)
                                    {
                                    
                                    $("userid").html(data);
                                    }
                                  });   }

                                  function deltable(userid)
                                  {
                                    var userid=userid;
                                  //alert(PackageTour);
                                  $.ajax({
                                    url: "showfunction.php",
                                    method: "POST",
                                    data: {
                                      userid: userid,
                                    },
                                    success: function(data)
                                    {
                                    
                                    $("userid").html(data);
                                    }
                                  });   }

                                  </script>
                                  <script>
                                  $(document).ready(function() {
                                      $("#dynamic-form").on('submit', function(e) {
                                          e.preventDefault();
                                          $.ajax({
                                              url: "function.php",
                                              type: "POST",
                                              data: new FormData(this),
                                              contentType: false,
                                              processData: false,
                                              success: function(data) {
                                                  if (data === 'Invalid') {
                                                      failed_password();
                                                  }
                                                  else{
                                                    modaldata('<?php echo $c['userid']; ?>');
                                                  }
                                              }
                                          });
                                      });
                                  });

                                  $(document).ready(function() {
                                      $("#generatepage").on('click', function(e) {
                                        alert('hi');
                                          e.preventDefault();
                                          $.ajax({
                                              url: "showfunction.php",
                                              type: "POST",
                                              data: new FormData(this),
                                              contentType: false,
                                              processData: false,
                                              success: function(data) {
                                                  if (data === 'Invalid') {
                                                      failed_password();
                                                  }
                                                  else{
                                                    
                                                  }
                                              }
                                          });
                                      });
                                  });




                                  function modaldata(userid)
                                  {
                                    var EnqId=userid;
                                  //alert(PackageTour);
                                  $.ajax({
                                    url: "ShowFunction.php",
                                    method: "POST",
                                    data: {
                                    EnqId: EnqId,
                                    },
                                    success: function(data)
                                    {
                                    $("#ShowDis").html(data);
                                    }
                                  });     
                                      

                                  }
                              </script> 
    
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
if(isset($_POST['generate']))
{   
  // Invoice number evaluate
  $seria= "SELECT MAX(`serial`) FROM `bill`";

  $exe=mysqli_query($conn,$seria);

  $arraycount=mysqli_fetch_array($exe);
  
  $serial= $arraycount[0]+1;
  

  $companyid=$_SESSION['companyid'];


// serial number evaluate
  $invoice= "SELECT MAX(`invoice`) FROM `bill`";

  $exe=mysqli_query($conn,$invoice);

  $arraycount=mysqli_fetch_array($exe);
  
  $invoice= $arraycount[0]+1;




  $userid = $_POST['userid'];
  $services = $_POST['services']; 
  $price = $_POST['price'];
  $modeofpayment = $_POST['modeOfPayment'];
  $orderdate = $_POST['orderdate'];
  $quantity = $_POST['quantity'];
  


 for ($i = 0; $i < count($services); $i++) {
  

  $quiry="INSERT INTO  `bill` (`serial`,`invoice`,`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$serial','$invoice' ,'$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
  $fire = mysqli_query($conn, $quiry,);
 
  $tempquery="INSERT INTO  `tempbill` (`companyid`,`userid`, `services`,`quantity` ,`price` ,`modeofpayment`,`orderdate`) VALUES ('$companyid','$userid','$services[$i]','$quantity[$i]','$price[$i]','$modeofpayment','$orderdate')";
  $fir2=mysqli_query($conn, $tempquery);
 
  
  // Here you can store these values in a database or perform any other processing
}





 if($fire)
 {
  echo $qwerty= "SELECT * FROM `bill` WHERE `userid`='$userid' AND `modeofpayment`='$modeofpayment' AND `orderdate` ='$orderdate' ORDER  BY `id` DESC";
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
    header("Location:index.php");
}

?>


