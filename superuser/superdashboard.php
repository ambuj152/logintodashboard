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
  <nav id="sidebar" class="sidebar">
    <div class="sidebar-heading">SuperUser</div>
    <hr style="color:white">
    <ul class="list-unstyled">
      <li><a href="#" class="sidebar-link">Dashboard</a></li>
      <li><a href="createcompany.php" class="sidebar-link">Create A Company</a></li>

      <li><a href="companydata.php" class="sidebar-link">Company Data</a></li>
      <li><a href="#" class="sidebar-link">Products</a></li>
      <li><a href="#" class="sidebar-link">Orders</a></li>
      <li><a href="#" class="sidebar-link">Settings</a></li>
    </ul>
  </nav>
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
    <?php
    include('tooglemenu.php');
    ?>
    <div class="container-fluid">
      <h1 style="margin:50px">Welcome to the Admin Dashboard</h1>
      <!-- <p>This is a simple example of an admin dashboard using Bootstrap v5.</p> -->
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