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
   
    <style>
    

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

    .no-data {
        text-align: center;
        padding: 20px;
        font-weight: bold;
    }
</style>
    <div class="col-sm-9">
    <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                        <form action="#" method="GET">
                                <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Search Data" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
                                        <br>
                                       <button type="submit" class="btn btn-primary flex">search</button>
                                </div>
                        </form>
                        <br>
                </div>
            </div>
        </div>  
    <h2>Enquiry Data</h2>
    <!-- <a href="formsearch.php"><button type="button" class="btn btn-primary">Search data</button></a> -->


    <div class ="row">
            <div class="col-md-12">
                <div class=" card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
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
                    if(isset($_GET['search']))
                    {
                        $filtervalues= $_GET['search'];
                        $query ="SELECT * FROM `profile` WHERE CONCAT(`name`,`email`,`phone`,`city`,`state`,`Zip`,`address`) LIKE '%$filtervalues%' ";
                        $result = mysqli_query($conn, $query);


                        if(mysqli_num_rows($result) > 0)
                        {
                            foreach($result as $row)
                            {
                                ?>
                                <tr>
                                    <td><?=$row['id']; ?></td>
                                    <td><?=$row['name']; ?></td>
                                    <td><?=$row['email']; ?></td>
                                    <td><?=$row['phone']; ?></td>
                                    <td><?=$row['city']; ?></td>
                                    <td><?=$row['state']; ?></td>
                                    <td><?=$row['zip']; ?></td>
                                    <td><?=$row['address']; ?></td>
                                    <td><a href='?id=<?php echo $row['id']?>' class=" btn btn-danger">Show bill</> </a> &nbsp;
                     <a href="editprofile.php?UDTId=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a> </td> 





                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="4"> No Record Found</td>
                            </tr>
                            <?php
                        
                        }
                      }
                      else {
                        // If search button is not clicked, display all data
                        $query = "SELECT * FROM `profile`";
                        $result = mysqli_query($conn, $query);
                    
                        if(mysqli_num_rows($result) > 0) {
                            foreach($result as $row) {
                                ?>
                                <tr>
                                    <td><?=$row['id']; ?></td>
                                    <td><?=$row['name']; ?></td>
                                    <td><?=$row['email']; ?></td>
                                    <td><?=$row['phone']; ?></td>
                                    <td><?=$row['city']; ?></td>
                                    <td><?=$row['state']; ?></td>
                                    <td><?=$row['zip']; ?></td>
                                    <td><?=$row['address']; ?></td>
                                    <td><a href='?id=<?php echo $row['id']?>' class=" btn btn-danger">Show bill</> </a> &nbsp;
                     <a href="editprofile.php?UDTId=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a> </td> 

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

