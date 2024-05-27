<?php

session_start();


if(isset($_SESSION['id']) ) 
{
//   if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 600)) {
//     // If user is inactive for more than 10 minutes, redirect to logout page
//     header("Location: logout.php");
//     exit;
// } else {
//     // Update session variable with current time to track user's activity
//     $_SESSION['last_activity'] = time();
// }
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
</head>
<body>

<nav class="navbar navbar-inverse visible-xs" >
  <div class="container-fluid">
    <div class="navbar-header" >
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

<div class="container-fluid"style="height: 800px;">
  <div class="row content" style="height:100%;">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>GWPL</h2>
      <?php
      include('menu.php');
      ?><br>
    </div>
    <br>
   
    <div class="col-sm-9" style="width:70%;justify-content:center ;">
    <center><h3><strong>Download bill</strong></h3></center>
    <hr>
    <table class="table">
        <tr>
        <th>Name</th>
        <th>Customer-id</th>


          <th>Date</th>
          <th>Userid</th>
          <th>Serial</th>
          <th>DOWNLOAD BILL</th>
        </tr>
  
     <?php

     include('connection.php');
     $companyid=$_SESSION['companyid'];

     $query= "SELECT * FROM `bill` WHERE `companyid` = '$companyid' GROUP BY `serial`";
     $fireing = mysqli_query($conn, $query);
     foreach ($fireing as $restt)
     {
?>
     

        <tbody>
          <tr>
          <td><?php echo $restt['name'];?></td>

          <td><?php echo $restt['customerid'];?></td>

          <td><?php echo $restt['orderdate'];?></td>
          <td><?php echo $restt['userid'];?></td>
          <td><?php echo $restt['serial'];?></td>
          <td>
            
          <a href="billtable.php?showtable=<?php echo $restt['serial']?>"><button type="button" class="btn" style="background:red; width:40%"> Download</button></a>
          <!-- <a href="billtable.php?showtable=<?php echo $restt['serial']?>"><button type="button" class="btn" style="background:blue; width:40%"> EDIT</button></a> -->
        
        </td></a>
            
        </tr>

        

        </tbody>

        <?php
     }

     ?>
      </table>




        
      


       
      
       
    </div>
  </div>
</div>

</body>
</html>
  <?php




  
   
}
else{
    echo "please login to Continue";
    header("Location:index.php");
}

?>


