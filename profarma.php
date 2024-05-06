<?php

session_start();
if(isset($_SESSION['id']) ) 
{
?>


<?php
include('connection.php');


$deleteQuery = "TRUNCATE TABLE `tempbill`";

$fire = mysqli_query($conn, $deleteQuery);

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
  input[type="checkbox"]
   {
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
  input[type="email"],
  input[type="date"],
  #modeOfPayment
  
  
  {
    width: 100%;
    height: 45px;
    padding: 15px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid grey;
    border-radius: 8px;
    background-color: #fff;
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
              
           
            <div class="container-fluid" style="padding-left:60px;" >
    <div class="row">
        <div class="col-md-11 offset-md-3">
            <h3 class="btn-primary" style="text-align:center; pointer-events: none;background:grey">PROFRAMA - INVOICE</h3>
        
            <form method="post" id="dynamic-form" >
            

             
            <hr style="border-top: 1px solid grey">

            <h3>Customer data</h3>
            <hr style="border-top: 1px solid grey">
               
                  <div class="row">
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label for="firstname"> Customer Name</label>
                          <input type="text" class="form-control" id="name" name="name"  >
                    </div>
                    </div>
                    <div class="col-sm-3">
                          
                          <div class="form-group">
                              <label for="lastname">Business Name</label>
                              <input type="text" class="form-control" id="business" name="business" >
                          </div>
                    </div>
                    <div class="col-sm-3">
                          <div class="form-group">
                          <label >Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone">
                      </div>
                    </div>
                    <div class="col-sm-3">
                            <div class="form-group">
                            <label for="username">Email</label>
                            <input type="email" class="form-control" id="email" name="email" >
                        </div>
                    </div>
                  </div>
            <hr style="border-top: 1px solid grey">
                  
              
              
                  <!-- <h3 class="btn-primary" style="text-align:center; pointer-events: none; background:grey">Add Services</h3> -->
            

                  <h3>Add Services</h3>
            <hr style="border-top: 1px solid grey">
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
            <button type="button"  class="btn btn-primary btn-add"><i class="glyphicon glyphicon-plus"></i> Add More Services</button>
            <hr style="border-top: 1px solid grey">
            
    

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
                  <!-- <h3 class="btn-primary" style="text-align:center; pointer-events: none; background:grey">Select mode Of Payment</h3> -->
                  <h3>Mode Of Payment</h3>
                  <hr>
                <div class="form-group" >
                    <select class="form-control" id="modeOfPayment"  name="modeOfPayment" >
                        <option id="mode" value="online"  id="modeOfPayment">Online</span></option>
                        <option id="OfPayment" value="cash">Cash</option>
                    </select>
                </div>
                  </div>
                  <div class="col-sm-6">
                                <div class="form-group">
                  <!-- <h3 class="btn-primary" style="text-align:center; pointer-events: none;background:grey">Order date</h3> -->
                  <h3>Order Date</h3>
            <hr>
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
                <!-- <button type="button" style="width: 300px;" class="btn btn-danger" name="preview" id="submitButton">Preview Bill</button> -->

                <button type="submit" style="width:30%" class="btn btn-danger" name="generate" >Generate Bill</button>

                  </div>

                </div>
               
            </form>


            
              <!-- Modal -->
<div id="previewbill" class="modal" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <span class="close"><button class="btn btn-primary"> Edit</button></span>
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Bill Preview</h4>
        
      </div>
              
      <div class="modal-body">
        <p id="modalContent"></p>
      </div>
   
    </div>

  </div>
</div>


<!-- jQuery -->


            <!--MODAL close-->
        </div>
    </div>
</div>

        
        
      
             </div>
      </div>

        
      


       
      
       
    
  
</div>
<script type="text/javaScript">
  document.getElementById('submitButton').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the form from submitting normally
  
  // Get form data
  var formData = new
  FormData(document.getElementById('dynamic-form'));
  // var formData = new FormData(this);
  
  // Get name and email values from formData
  var services = formData.get('services[]');
  var quantity = formData.get('quantity[]');
  var price = formData.get('price[]');

  // Display form data in the modal
  var modalContent = document.getElementById('modalContent');
  modalContent.innerHTML = `<p>Services: ${services}</p><p>Quantity: ${quantity}</p> <p>Price: ${price}</p>`;
  
  // Display modal
  var modal = document.getElementById('previewbill');
  modal.style.display = "block";
});

// Close the modal when the user clicks on the close button
document.getElementsByClassName('close')[0].addEventListener('click', function() {
  var modal = document.getElementById('previewbill');
  modal.style.display = "none";
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

<?php
include("connection.php");
if(isset($_POST['generate']))
{   
  // Invoice number evaluate
  $seria= "SELECT MAX(serial) FROM `profarmacustomer`";
  $exe=mysqli_query($conn,$seria);
  $arraycount=mysqli_fetch_array($exe);
  $serial= $arraycount[0]+1;

//   $companyid=$_SESSION['companyid'];
// serial number evaluate
$userid = "SELECT MAX(id) FROM `profarmacustomer`";

    $exe=mysqli_query($conn,$userid);

    $arraycount=mysqli_fetch_array($exe);
    
    $uniqueid= "temp-00".$arraycount[0]+1;





  $customername=$_POST['name'];
  $businessname=$_POST['business'];
  $mobile=$_POST['phone'];

  $email=$_POST['email'];
  $services = $_POST['services']; 
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
//   $modeofpayment = $_POST['modeOfPayment'];
  $orderdate = $_POST['orderdate'];
  
 for ($i = 0; $i < count($services); $i++) {
  

  $quiry=  "INSERT INTO  `profarmacustomer` (`serial`,`userid`,`customername`,`businessname`, `mobile`,`email`,`services`,`price`,`quantity`,`orderdate`) VALUES ('$serial','$uniqueid' ,'$customername','$businessname','$mobile','$email','$services[$i]','$price[$i]','$quantity[$i]','$orderdate')";
  $fire = mysqli_query($conn, $quiry);
 
//   $tempquery="INSERT INTO  ";
 }
 if($fire)
 {
 $qwerty= "SELECT * FROM `profarmacustomer` WHERE `userid`='$uniqueid' AND `orderdate` ='$orderdate' ORDER  BY `id` DESC";
  $execute=mysqli_query($conn,$qwerty);
  $res=mysqli_fetch_assoc($execute);
  //  echo mysqli_error($conn);
  $resultt=$res['userid'];
  echo $_SESSION['tempid']=$resultt;
  ?>
  <script> alert(' Bill generated');
  window.location.href='profarmabill.php';
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


