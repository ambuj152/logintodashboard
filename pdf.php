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
      h4{
        font-size: 13px !important;
      } 
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script>
    function generatePDF() {
        const element = document.getElementById('content');

        html2pdf()
            .from(element)
            .save();
    }
</script>
          </center>

      </div>
       <div class="container"  id="content" style=" width:80%;">
     
        <table class="table" border="1px">
          <tr>
                     <div class="col-md-12" style="background:#A8A8A8;">
            <center><h2 style="color:azure"> Tax Invoice<h2></center>


            
        </div>
          </tr>
              <tr>
                  <td colspan="2">
                              <?php 
                                  include("connection.php");
                      // if(isset($_GET['showid']));
                      // {  
                      //  $val=$_GET['showid'];
                                    $u="SELECT * FROM `vendors` WHERE 1";
                                    $v=mysqli_query($conn,$u);   
                                    $w= mysqli_fetch_assoc($v);
                      // }        
                              ?>
                    

                        
                                <h4 style="font-size:17px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                                <h4 style="font-size:17px"> <?php echo $w['address'];?>, <?php echo $w['mobile'];?></h4>
                                <h4 style="font-size:17px"> <Strong>GSTIN/UIN :  </Strong><?php echo $w['gstnumber'];?></h4>
              

            
                 </td>
                 <td width="230px">
               
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
                              <h4 style="font-size:17px"> <Strong>Mode of Payment - </Strong><?php echo $z['modeofpayment'];?></h4>
                              <h4 style="font-size:17px"> <Strong>Order Date - </Strong><?php echo $z['orderdate'];?></h4>
                              <h4 style="font-size:17px"> <Strong>Serial No. - </Strong><?php echo $z['userid'];?></h4>

            
                 </td>
              </tr>
              <tr>
                        <td colspan="2">
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
                                  <h4 style="font-size:17px"> <Strong>Company Name - </Strong><?php echo $c['companyname'];?></h4>
                                  <h4 style="font-size:17px"> <Strong>Customer Name - </Strong><?php echo $c['name'];?></h4>
                                  <h4 style="font-size:17px"> <Strong>GST NO. - </Strong><?php echo $c['gst'];?></h4>
                        </td >
                            <td width="230px">                    
                                <h4 style="font-size:17px"> <Strong>email - </Strong><?php echo $c['email'];?></h4>
                                <h4 style="font-size:17px"> <Strong>phone - </Strong><?php echo $c['phone'];?></h4>
                                <h4 style="font-size:17px"> <Strong>Addrees - </Strong><?php echo $c['address'];?></h4>
                            </td>
              </tr>
              
              <tr style="background:#A8A8A8">
                            <td><h4 style="font-size:17px;text-align:left"> <Strong> Sr No. </Strong></h4></td>
                            <td> <h4 style="font-size:17px;text-align:left"> <Strong> Description of Services and Product - </Strong></h4> </td>
                            <td> <h4 style="font-size:17px;text-align:left"> <Strong>Price / Unit  </Strong></h4></td>
              </tr>
                                        
              <?php 
        include('connection.php');
        if(isset($_GET['showid']))
        {
            $val=$_GET['showid'];
            $i=1;
            $amt=0;
            $x="SELECT * FROM `bill` WHERE `userid`='$val'";
            $y=mysqli_query($conn,$x);   
              // $z= mysqli_fetch_assoc($y);
              foreach($y as $res){
           
        
        ?>
              <tr >
                        <td width="100px">
                              <h4><strong><?php echo $i ;?></strong></h4>
                        </td> 
                        <td>
                            <h4> 
                              <strong> 
                                  <?Php
                                    echo ucfirst( $res['services']);
                                  ?>
                               </strong> 
                            </h4>
                        </td>
                        <td>
                              <h4> <strong><?Php
                                 echo $res['price'];
                                    $amt=$amt+$res['price'];
                                    ?></h4></strong>
                                      </div>
                                        <?php
                                        $i++;
                                        }
                               }
                                        ?>
                        </td>
              </tr>
              <tr height="200px">

              </tr>
                          
              <tr>
                <td colspan="2">
                      <h4><strong> TOTAL COST INCLUSIVE 18% GST</strong><small> &nbsp;( AND OTHER TAXES*)</small><h4>
                </td>
                <td>
                      <h4><strong> Amount: <?php  echo $amt;?></strong><h4>

                </td>
              </tr>
              <tr>
                <td colspan="2"></td>
                <td width="">
                <h4 style="font-size:17px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                   <h4 style="font-size:17px"> <Strong>A/C No. : - </Strong><?php echo $w['account'];?></h4>
                   <h4 style="font-size:17px"> <Strong>IFSC Code : - </Strong><?php echo $w['ifsc'];?></h4>
                   <h4 style="font-size:17px"> <Strong><?php echo $w['bank'];?> </Strong></h4>

                </td>
              </tr>
              <tr>
                <td colspan="2">  <h4 style="font-size:17px"> <Strong>Declaration :  </Strong> We Declare that this Invoice shows the actual
            Price of the services/goods described and that all perticular are true and correct.    </h4></td>
                <td>
                <h4 style="font-size:17px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                 <br>
                   <h4 style="font-size:17px"> <Strong>Authorized Signature </Strong></h4>
                </td>
              </tr>


            </table>





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


