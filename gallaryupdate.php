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
      ?>
      <br>
    </div>
    <br>
   
    <div class="col-sm-9">

    <div class="card-header">
           <center> <h2> Update the Gallary</h2></center>
           <div class="card-body">
                    

                   
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th >Serial No</th>
                                        <th >Image-name</th>
                                        <th >Image</th>
                                        <th >Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Image-1</td>
                                        <td width="30%"  > <?php
                                             include("connection.php");
                                             $query="SELECT * FROM `files`WHERE id= 7";
                                             $result=mysqli_query($conn,$query);
                                             foreach( $result as $row){
                                             ?><br>
                                             <img style="border-radius: 10px; margin:1px;" src= "<?php echo $row['filepath']; ?>" width="20%"><br>
                                             <?php } ?>              
                                        </td>
                                        <td>  
                                            <button type="submit" class="btn btn-primary flex">Update</button>
                                            <button type="submit" class="btn btn-danger flex">delete</button>
                                       </td>
                                    </tr>
                                    <!-- second row-->
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Image-2</td>
                                        <td width="30%"  > <?php
                                             include("connection.php");
                                             $query="SELECT * FROM `files`WHERE id= 2";
                                             $result=mysqli_query($conn,$query);
                                             foreach( $result as $row){
                                             ?><br>
                                             <img style="border-radius: 10px; margin:1px;" src= "<?php echo $row['filepath']; ?>" width="20%"><br>
                                             <?php } ?>              
                                        </td>
                                        <td>  
                                            <button type="submit" class="btn btn-primary flex">Update</button>
                                            <button type="submit" class="btn btn-danger flex">delete</button>
                                       </td>
                                    </tr>

                                    <!-- Third row-->
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Image-3</td>
                                        <td width="30%"  > <?php
                                             include("connection.php");
                                             $query="SELECT * FROM `files`WHERE id= 3";
                                             $result=mysqli_query($conn,$query);
                                             foreach( $result as $row){
                                             ?><br>
                                             <img style="border-radius: 10px; margin:1px;" src= "<?php echo $row['filepath']; ?>" width="20%"><br>
                                             <?php } ?>              
                                        </td>
                                        <td>  
                                            <button type="submit" class="btn btn-primary flex">Update</button>
                                            <button type="submit" class="btn btn-danger flex">delete</button>
                                       </td>
                                    </tr>

                                    <!-- Fourth row-->
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Image-4</td>
                                        <td width="30%"  > <?php
                                             include("connection.php");
                                             $query="SELECT * FROM `files`WHERE id= 4";
                                             $result=mysqli_query($conn,$query);
                                             foreach( $result as $row){
                                             ?><br>
                                             <img style="border-radius: 10px; margin:1px;" src= "<?php echo $row['filepath']; ?>" width="20%"><br>
                                             <?php } ?>              
                                        </td>
                                        <td>  
                                           <a href="update.php?imgid=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-primary flex">Update</button></a>
                                            <button type="submit" class="btn btn-danger flex">delete</button>
                                       </td>
                                    </tr>

                                    <!-- fifth row-->
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Image-5</td>
                                        <td width="30%"  > <?php
                                             include("connection.php");
                                             $query="SELECT * FROM `files`WHERE id= 5";
                                             $result=mysqli_query($conn,$query);
                                             foreach( $result as $row){
                                             ?><br>
                                             <img style="border-radius: 10px; margin:1px;" src= "<?php echo $row['filepath']; ?>" width="20%"><br>
                                             <?php } ?>              
                                        </td>
                                        <td>  
                                            <button type="submit" class="btn btn-primary flex">Update</button>
                                            <button type="submit" class="btn btn-danger flex">delete</button>
                                       </td>
                                    </tr>

                                    <!-- sixth row-->
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Image-6</td>
                                        <td width="30%"  > <?php
                                             include("connection.php");
                                             $query="SELECT * FROM `files`WHERE id= 6";
                                             $result=mysqli_query($conn,$query);
                                             foreach( $result as $row){
                                             ?><br>
                                             <img style="border-radius: 10px; margin:1px;" src= "<?php echo $row['filepath']; ?>" width="20%"><br>
                                             <?php } ?>              
                                        </td>
                                        <td>  
                                            <button type="submit" class="btn btn-primary flex">Update</button>
                                            <button type="submit" class="btn btn-danger flex">delete</button>
                                       </td>
                                    </tr>
                                  
                                </tbody>
                           </table>

                 
               </div>

         </div>
        
        <div class= card>

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


