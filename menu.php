<style>
  /* Style for the navigation menu */
  .nav-pills {
    background-color: #f8f9fa; /* Light gray background */
    border-radius: 10px;
    padding: 10px;
  }

  .nav-pills li {
    margin-bottom: 10px;
  }

  .nav-pills a {
    color: #333; /* Text color */
    font-weight: bold;
    transition: all 0.3s ease;
    border-radius: 5px;
  }

  .nav-pills a:hover {
    background-color: #e9ecef; /* Light gray background on hover */
    color: #555; /* Darker text color on hover */
    text-decoration: none;
  }

  .nav-pills .active a {
    background-color: #3259CA; /* Blue background for active item */
    color: #fff; /* White text color for active item */
  }
</style>

<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="dashboard.php">Dashboard</a></li>
  <li><a href="createuser.php">Create Customer Profile</a></li>
  <li><a href="Masterdata.php">Customer Data</a></li>
  <li><a href="customerorder.php">Customer Orders</a></li>
  <li><a href="profarma.php">Profarma</a></li>
  <li><a href="vendors.php">Company Profile</a></li>
  <li><a href="updatepassword.php">Change Password</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
