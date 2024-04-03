<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary</title>

    <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    body {
  flex-direction: column;
  padding: 2rem;
  background-color: rgb(0, 0, 20);
  background-color:  #001a33!important;
}
body, .parent-container, .child-container {
  display: flex;
}
.parent-container {
  width: 100%;
  justify-content: center;
  gap: 30px 30px;
}
.child-container {
  width: 30%;
  height: auto;
  gap: 30px 30px;
  flex-direction: column;
}
.child-container img {
  transition: all 1s ease-in-out 0s;
 box-shadow: 2px 2px 20px gray, inset 2px 2px 10px lightgray;
}
.child-container img:hover {
  box-shadow: 4px 4px 25px black, inset 2px 2px 2px 10px rgb(0, 0, 20);
 
}

.greeting {
  text-align: center;
  color: lightblue;
  font-family: 'Open Sans', sans-serif;
  font-size: 30px;
}
.fa-brands {
  font-size: 50px;
}
.greeting, .fa-brands {
  text-shadow: 2px 2px 10px lightgray;
  
}
.rad{
  border-radius: 20px;
}
</style>


</head>
<body>


  
<div class="greeting">
  <h1 style="font-size: 50px;"><b>MY GALLARY</b></h1>
  <a href="https://codepen.io/Mysha484"><i class="fa-brands fa-codepen" target="_blank"></i></a>
  </div>
  <center>
  <div class="row">
  <div class="col-md-4">
        <div class="">
        <div class="" id="one">

        <?php
            include("connection.php");
            $query="SELECT * FROM `files`WHERE id= 7";
            $result=mysqli_query($conn,$query);
            foreach( $result as $row){
            ?><br>
               <img class="rad" src= "<?php echo $row['filepath']; ?>" width="100%" height="auto"><br>
                <?php } ?>
        </div>
        </div>  

  </div>
  
  <div class="col-md-4">    <div class="">
        <div class="" id="one">

        <?php
            include("connection.php");
            $query="SELECT * FROM `files` WHERE id= 2";
            $result=mysqli_query($conn,$query);
            foreach( $result as $row){
            ?><br>
               <img class="rad" src= "<?php echo $row['filepath']; ?>" width="100%" height="auto"><br>
                <?php } ?>
        </div>
        </div>  </div>
  <div class="col-md-4">
     <div class="">
        <div class="" id="one">

        <?php
            include("connection.php");
            $query="SELECT * FROM `files` WHERE id =3";
            $result=mysqli_query($conn,$query);
            foreach( $result as $row){
            ?><br>
               <img class="rad" src= "<?php echo $row['filepath']; ?>" width="100%" height="auto"><br>
                <?php } ?>
        </div>
        </div> 
  </div>
  </div>
  <br>
  <div class="row">
  <div class="col-md-4">
        <div class="">
        <div class="" id="one">

        <?php
            include("connection.php");
            $query="SELECT * FROM `files` WHERE id =4";
            $result=mysqli_query($conn,$query);
            foreach( $result as $row){
            ?><br>
               <img class="rad" src= "<?php echo $row['filepath']; ?>" width="100%" height="auto"><br>
                <?php } ?>
        </div>
        </div>  

  </div>
  
  <div class="col-md-4">    <div class="">
        <div class="" id="one">

        <?php
            include("connection.php");
            $query="SELECT * FROM `files` WHERE id= 5";
            $result=mysqli_query($conn,$query);
            foreach( $result as $row){
            ?><br>
               <img class="rad" src= "<?php echo $row['filepath']; ?>" width="100%" height="auto"><br>
                <?php } ?>
        </div>
        </div>  </div>
  <div class="col-md-4">
     <div class="">
        <div class="" id="one">

        <?php
            include("connection.php");
            $query="SELECT * FROM `files` WHERE id =6";
            $result=mysqli_query($conn,$query);
            foreach( $result as $row){
            ?><br>
               <img class="rad" src= "<?php echo $row['filepath']; ?>" width="100%" height="auto"><br>
                <?php } ?>
        </div>
        </div> 
  </div>
  </div>
  </center>
  
</body>
</html>