
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
          <center>  <div>
            <a href="" class="btn btn-danger" style="margin: 10px; padding:10px;"  onclick="printDiv('content')" > Download bill</a>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script>
   function printDiv(divId) {
    var content = document.getElementById(divId).innerHTML;
    var printWindow = window.open('', '_blank');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print</title></head><body>');
    printWindow.document.write(content);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}

</script>



<style>
  
  /* Example CSS for table borders */
table {
    border-collapse: collapse !important;
    width: 100%;
}
th, td {
    border: 1px solid #000 !important;
    padding-left: 20px !important;
    text-align: left;
}

@media print {
    table {
        border-collapse: collapse !important;
    }
    th, td {
        border: 1px solid #000 !important;
    }
}

</style>
          </center>

      </div>
       <div class="container"  id="content" style=" width:80%;" >
     
        <table border="1px">
                         <tr style="border:none;">

                     <div class="col-md-12" style="background:#eff5f5;">
            <center><h2 style=" background: linear-gradient(135deg, #B4A7, #E9C46A);
    color: white;
    padding: 15px 20px;
    border-radius: 10px 10px 0 0;
    margin-top: 0;
    text-align: center;"> Tax Invoice<h2></center>


            
        </div>
          </tr>
                            <tr style="">

                  <td colspan="4" width="50%" style="border-right:1px solid grey; border-top:none;border-left:none; padding:20px;">
                              <?php 
                                  include("connection.php");
                    $companyid=$_SESSION['companyid'];

                      // if(isset($_GET['showid']));
                      // {  
                      //  $val=$_GET['showid'];
                                    $u="SELECT * FROM `vendors` WHERE `companyid`='$companyid'";
                                    $v=mysqli_query($conn,$u);   
                                    $w= mysqli_fetch_assoc($v);
                      // }        
                              ?>
                    

                        
                                <h4 style="font-size:11px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                                <h4 style="font-size:11px"> <?php echo $w['address'];?>, <?php echo $w['mobile'];?></h4>
                                <h4 style="font-size:11px"> <Strong>GSTIN/UIN :  </Strong><?php echo $w['gstnumber'];?></h4>
              

            
                 </td>
                
             
              </tr>
                             <tr style="border:none;">

                        <td colspan="2" style="border-top:none; border-left:none; border-right:1px solid grey;padding:20px;">
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
                                  <h4 style="font-size:11px"> <Strong>Company Name - </Strong><?php  echo $c['companyname'];?></h4>
                                  <h4 style="font-size:11px"> <Strong>GSTIN/UIN - </Strong><?php echo $c['gst'];?></h4>
                        </td >
                        <td style=" border-right:1px solid grey; border-left:none;border-top:none; padding:20px;">
                        <h4 style="font-size:11px"> <Strong>Customer Name - </Strong><?php echo $c['name'];?></h4>
                                <h4 style="font-size:11px"> <Strong>Mobile No. - </Strong><?php echo $c['phone'];?></h4>

                        </td>
                            <td width="230px" style="border:none; padding :20px;">                    
                                <h4 style="font-size:11px"> <Strong>Email - </Strong><?php echo $c['email'];?></h4>
                                <h4 style="font-size:11px"> <Strong>Addrees - </Strong><?php echo $c['address'];?></h4>
                            </td>
                         </tr>
              
                            <tr style=" border-top:none;border-left:none;background:#eff5f5">
 
                            <td style="border-left:none;  padding:20px; border-right:1px solid grey;"><h4 style="font-size:11px;text-align:left"> <Strong> Sr No. </Strong></h4></td>
                            <td style="border-left:none; padding:20px;"> <h4 style="font-size:11px;text-align:left"> <Strong> Description of Services and Product - </Strong></h4> </td>
                            <td style="border-left:none; padding:20px;"> <h4 style="font-size:11px;text-align:left"> <Strong>Order Date</Strong></h4></td>
                            <td style="border-left:none; border-right:none; padding:20px"> <h4 style="font-size:11px;text-align:left"> <Strong>Price / Unit  </Strong></h4></td>
              </tr>
                                        
              <?php 
        include('connection.php');
        
        if(isset($_GET['showid']))
        {
            $userid=$_GET['showid'];
            $i=1;
            $amt=0;
            $gst=0;
            $x = "SELECT * FROM `bill` WHERE `userid` = '$userid' ";
            // $x="SELECT * FROM `bill` WHERE `userid`='$val'AND MAX(`orderdate`)";
            $y=mysqli_query($conn,$x);   
              // $z= mysqli_fetch_assoc($y);
              foreach($y as $res){
           
        
        ?>
        
                             <tr style="border:none; ">
 
                        <td width="100px" style="border:none; border-right:1px solid grey; padding-left:20px;padding-top:10px;">
                              <h4 style="font-size:11px"><strong><?php echo $i ;?></strong></h4>
                        </td> 
                        <td style="border:none; border-right:1px solid grey;padding-left:20px">
                            <h4 style="font-size:11px"> 
                              <strong> 
                                  <?Php
                                    echo ucfirst( $res['services']);
                                  ?>
                               </strong> 
                            </h4>
                        </td>
                        <td style="border:none;border-right:1px solid grey;padding-left:20px"> <?php echo $res['orderdate']?></td>
                        <td style="border:none;padding-left:20px">
                              <h4 style="font-size:11px"> <strong><?Php
                                 echo $res['price'];
                                    $amt=$amt+$res['price'];
                                    ?>
                                    </h4></strong></div>
                                        <?php
                                        $i++;
                                        }
                               }
                                        ?>
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
    header("Location:index.php");
}

?>
