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
  <div class="row content" style="height: 800px;">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>GWPL</h2>
      <?php 
      include('menu.php');
      ?><br>
    </div>
    <br>
   
    <style>
  /* Overall body background color */
  body {
    background-color: #f8f9fa;
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

  /* Style for the search button */
  /* .btn {
    width: 40%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background: linear-gradient(135deg, #B4A77B, #E9C46A);
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background: linear-gradient(135deg, #E9C46A, #B4A77B);
  } */
  .btn-primary {
    width: 40%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background: linear-gradient(135deg, #4e73df, #224abe);
    /* background: linear-gradient(135deg, #B4A77B, #E9C46A); */
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-danger{
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    /* background: linear-gradient(135deg, #4e73df, #224abe); */
    /* background: linear-gradient(135deg, #B4A77B, #E9C46A); */
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;

  }

 

  /* Style for the table */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  /* Responsive styles */
  @media screen and (max-width: 767px) {
    .container-fluid {
      width: 90%;
    }
  }
</style>

    <div class="col-sm-9">
    <div class="card-body">
    <style>
  /* Style for the input and button container */
  .input-group {
    display: flex;
    align-items: center;
   width: 60%;
   
  }

  /* Style for the input field */
  input[type="text"] {
    flex: 1;
    margin-right: 10px;
    height: 40px;
    border:1px solid grey;
  }
</style>

<div class="row">
  <div class="col-md-12">
    <form action="#" method="GET">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search Data" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
        <button type="submit" class="btn btn-primary" style="margin-top:5px;">Search</button>
      </div>
    </form>
    <br>
  </div>
</div>


            <!-- <div class="row">
                <div class="col-md-12">

                        <form action="#" method="GET">
                                <div class="input-group col-md-4">
                                        <input type="text" name="search" class="form-control" placeholder="Search Data" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
                                        
                                       <button type="submit" class="btn btn-primary flex">search</button>
                                </div>
                        </form>
                        <br>
                </div>
            </div> -->
        </div>  
    <h2>Customer Data</h2>
    <!-- <a href="formsearch.php"><button type="button" class="btn btn-primary">Search data</button></a> -->


    <div class ="row">
            <div class="col-md-12">
                <div class=" card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>USER-ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>CITY</th>
                                <th>STATE</th>
                                <th>ZIP</th>
                                <th>ADDRESS</th>



                                <th>OPERATIONS</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php
                    include ('connection.php');
                    $companyid=$_SESSION['companyid'];
                    if(isset($_GET['search']))
                    {
                        $filtervalues= $_GET['search'];
                        $query ="SELECT * FROM `profile` WHERE CONCAT(`name`,`email`,`phone`,`city`,`state`,`Zip`,`address`) LIKE '%$filtervalues%' AND `companyid`='$companyid' ";

                      }
                      else {
                        // If search button is not clicked, display all data
                        $query = "SELECT * FROM `profile` WHERE `companyid`='$companyid'";
                      }
                        $result = mysqli_query($conn, $query);
                    
                        if(mysqli_num_rows($result) > 0) {
                            foreach($result as $row) {
                                ?>
                                <tr>
                                    <td><?=$row['userid']; ?></td>
                                    <td><?=$row['name']; ?></td>
                                    <td><?=$row['email']; ?></td>
                                    <td><?=$row['phone']; ?></td>
                                    <td><?=$row['city']; ?></td>
                                    <td><?=$row['state']; ?></td>
                                    <td><?=$row['zip']; ?></td>
                                    <td><?=$row['address']; ?></td>
                                    <td><a href="orders.php?showid=<?php echo $row['userid']?>" class=" btn btn-danger">Show Orders</> </a> &nbsp;
                     <!-- <a href="editprofile.php?UDTId=<?php echo $row['userid'] ?>" class="btn btn-primary">Create Bill</a> </td>  -->

                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="8"> No Records Found</td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                            </tbody>


                    </table>

                    

                </div>

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

