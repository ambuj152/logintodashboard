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
   
    <div class="col-sm-9">
    <div class="container" style=" width:80%;">
          <center>  <div >
            <a href="" class="btn btn-danger" style="margin: 10px; padding:10px;"  onclick="generatePDF()" > Download bill</a>
            </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
            
  <script>
        function generatePDF() {
            // Create a new jsPDF instance
            var doc = new jsPDF();

            // Get the HTML content of the section you want to convert to PDF
            var content = document.getElementById('content').innerHTML;

            // Add HTML content to the PDF
            doc.html(content, {
                callback: function (doc) {
                    // Save the PDF
                    doc.save('bill.pdf');
                }
            });
        }
    </script>
          </center>

      </div>

  
       <div class="container"  id="content" style=" width:80%;border: 1px solid black;">
       <cemter><div class="row">
            <div class="col-md-12" style="background:#A8A8A8;">
            <center><h2 style="color:azure"> Bill Invoice<h2></center>
            
            

            </div>
        </div>
        <?php 
        include("connection.php");
        if(isset($_GET['showid']));
        {  
         $val=$_GET['showid'];
         $a="SELECT * FROM `profile` WHERE `userid`='$val'";
         $b=mysqli_query($conn,$a);   
            $c= mysqli_fetch_assoc($b);
        }        
        ?>
        <div class="row" style=" border-bottom: 1px solid black; " >

            <div class ="col-sm-4">
                   <h4 style="font-size:17px"> <Strong>Company Name - </Strong><?php echo $c['companyname'];?></h4>
                   <h4 style="font-size:17px"> <Strong>Name - </Strong><?php echo $c['name'];?></h4>
                   <h4 style="font-size:17px"> <Strong>GST NO. - </Strong><?php echo $c['gst'];?></h4>


            </div>
            <div class ="col-sm-3">

            </div>
            <div class ="col-sm-5">
                   <h4 style="font-size:17px"> <Strong>email - </Strong><?php echo $c['email'];?></h4>
                   <h4 style="font-size:17px"> <Strong>phone - </Strong><?php echo $c['phone'];?></h4>
                   <h4 style="font-size:17px"> <Strong>Addrees - </Strong><?php echo $c['address'];?></h4>

            </div>
           
        </div>

        <div class="row" ><br>
        <div class="col-sm-8" style="background: #A8A8A8;">
        <h4 style="font-size:17px;text-align:center"> <Strong>Services - </Strong></h4>

        </div>
        <div class="col-sm-4" style="background: #A8A8A8;">
        <h4 style="font-size:17px;text-align:center"> <Strong>Price - </Strong></h4>

        </div>


        </div>

        <div class="row" style=" border-bottom: 1px solid black;">
        <?php 
        include('connection.php');
        if(isset($_GET['showid']))
        {
            $val=$_GET['showid'];
            $x="SELECT * FROM `bill` WHERE `userid`='$val'";
            $y=mysqli_query($conn,$x);   
               $z= mysqli_fetch_assoc($y);
           } 
        
        ?>
            <div class="col-sm-8" style=" border-right: 1px solid black; height: 600px; ">
            <br>
            <h4> <strong> <?Php
          if(($z)>0){
          echo $z['services'];
          }
          else{
            echo "no bill generated";
          }
          ?></strong> </h4>
            
            </div>
            <div class="col-sm-4" style="">
           <br><h4> <strong><?Php
          if(($z)>0){
          echo $z['price'];
          }
          else{
            echo "- NA";
          }
          ?></h4></strong>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
            <h4><strong> TOTAL COST INCLUSIVE 18% GST</strong><small> &nbsp;( AND OTHER TAXES*)</small><h4>
            </div>
        </div>
        
        
    </center>

       </div>
       <br>

        
      



      
       
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


