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

         <div class="card-header">
            <h3> Search the Enquiry</h3>

         </div>
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
                                <th>MESSAGE</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php
                    include ('connection.php');
                    if(isset($_GET['search']))
                    {
                        $filtervalues= $_GET['search'];
                        $query ="SELECT * FROM `enquiry` WHERE CONCAT(`name`,`email`,`phone`,`message`) LIKE '%$filtervalues%' ";
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
                                    <td><?=$row['message']; ?></td>

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
                    ?>
                            </tbody>


                    </table>

                    

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
    header("Location:index.php");
}

?>


