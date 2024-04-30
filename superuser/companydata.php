
<?php
session_start();
if(isset($_SESSION['id']))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    body {
      font-family: Arial, sans-serif;
    }
    .sidebar {
      background-color: #37474F;
      position: fixed;
      height: 100%;
      width: 250px;
      top: 0;
      left: 0;
      z-index: 1;
      overflow-x: hidden;
      padding-top: 20px;
      transition: all 0.3s;
    }
    .sidebar-heading {
      color: #ffffff;
      padding: 10px 20px;
      font-size: 1.2rem;
    }
    .sidebar-link {
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s;
    }
    .sidebar-link:hover {
      background-color: #455A64;
    }
    .navbar {
      background-color: #455A64;
      padding: 14px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      color: #ffffff;
      font-weight: bold;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
      transition: margin 0.3s;
    }
    @media (max-width: 992px) {
      .sidebar {
        margin-left: -250px;
      }
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
    <?php
    include('sidemenu.php');
    ?>
  <!-- /#sidebar -->
<style>
    @media (min-width:600px)
{
    .navbar-nav{
        display: none;
    }
}

</style>
  <!-- Page content -->
  <div class="main-content">
    <!--  -->

    <?php
    include("tooglemenu.php");
    ?>
<br>
    
    
<style>
  /* Overall body background color */
  body {
    background-color: #f8f9fa;
  }

  /* Style for the form container */
  .container-fluid {
   width: 1400px;
  }

  /* Style for the form heading */
  h2 {
    background: #455A64;
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
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <form action="#" method="GET">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search Data" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
        <button type="submit" class="btn btn-primary" style="z-index:2;height: 41px; margin-bottom:12px; margin-right:10px;">Search</button>
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
         
    <h2>Company Data</h2>
    <!-- <a href="formsearch.php"><button type="button" class="btn btn-primary">Search data</button></a> -->


    <!-- <div class ="row">
            <div class="col-md-12">
                <div class=" card mt-4">
                <div class="card-body"> -->
                    <table class="table table-bordered">
                        <thead>
                            <tr style="font-size:12px">
                                <th>COMPANY-ID</th>
                                <th>FULL NAME</th>                                                                                         
                                <th>COMPANY NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>ADDRESS</th>
                                <th>GSTIN/UIN</th>
                                <th>TAX </th>
                                <th>ADDRESS</th>
                                        


                                
                            </tr>
                        </thead>
                            <tbody>
                            <?php
                    include ('../connection.php');
                    //  $companyid=$_SESSION['companyid'];
                    if(isset($_GET['search']))
                    {
                        $filtervalues= $_GET['search'];
                        $query ="SELECT * FROM `vendors` WHERE CONCAT(`fullname`,`companyid`,`companyname`,`email`,`mobile`,`address`,`gstnumber`,`address`) LIKE '%$filtervalues%'  ";

                      }
                      else {
                        // If search button is not clicked, display all data
                        $query = "SELECT * FROM `vendors` ";
                      }
                        $result = mysqli_query($conn, $query);
                    
                        if(mysqli_num_rows($result) > 0) {
                            foreach($result as $row) {
                                ?>
                                <tr style="font-size:13px">

                                    <td><?=$row['companyid']; ?></td>
                                 <td><?=$row['fullname']; ?></td>
                                    <td><?=$row['companyname']; ?></td>
                                    <td><?=$row['email']; ?></td>
                                    <td><?=$row['mobile']; ?></td>
                                    <td><?=$row['address']; ?></td>
                                    <td><?=$row['gstnumber']; ?></td>
                                    <td><?=$row['taxpercentage']; ?></td>
                                    <td><?=$row['address']; ?></td>
                            
                      

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
                <!-- </div>
                </div>

                </div>
                </div> -->

  </div>
  </div>
  <!-- /#page-content-wrapper -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else{
  echo "<script>alert('please login first')</script>";
  header('Location:superuser.php');
}
?>








                    

                
    