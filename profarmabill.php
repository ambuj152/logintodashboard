<?php

session_start();
if(isset($_SESSION['tempid']) ) 
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
      p{
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
     
        <table class="table"  style="border-bottom:none;" border="1px" >
        <tr style="border:none;">

       <div class="col-md-12" style="background:#eff5f5;">
                                  <center><h2 style="
                          color: black;
                          padding: 15px 20px;
                          border-radius: 10px 10px 0 0;
                          margin-top: 0;
                          text-align: center;"> PROFARMA INVOICE<h2></center>
        </div>
          </tr>
          <tr>
            <tr style="">

                  <td colspan="2" width="43%" style="border-right:1px solid grey; border-top:none;border-left:none;">
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
                    

                        
                                <h3 style="font-family: system-ui;"> <Strong><?php echo ucfirst($w['companyname']);?> </Strong></h3>
                                <p style="font-size:11px;font-family: system-ui;"> <?php echo $w['address'];?>, <?php echo $w['mobile'];?></p>
                                <p style="font-size:11px;font-family: system-ui;"> <Strong>GSTIN/UIN :  </Strong><?php echo $w['gstnumber'];?></p>
              

            
                 </td>
                 <td width="30%" style="border-top:none;border-left:none; ">
               
                        <?php 
                            include('connection.php');
                    // $companyid=$_SESSION['companyid'];

                        
                                    
                                      $x="SELECT * FROM `profarmacustomer` WHERE `id` ORDER BY `id` DESC ";
                                      $y=mysqli_query($conn,$x);   
                                      $z= mysqli_fetch_assoc($y);
                                      $count=1;
                                      

                                
                    
                          ?>
                              <p style="font-size:11px;font-family: system-ui;"> <Strong>Invoice No.- </Strong>GW-00<?php echo $z['serial'];?></p>
                              
                 <p style="font-size:11px;font-family: system-ui;"> <Strong>Mobile number - </Strong><?php echo $z['mobile'];?></p>


            
                 </td>
                 <td width="27%" style=" border-top:none;border-left:none; padding:20px;">
                              <p style="font-size:11px;font-family: system-ui;"> <Strong>Order Date - </Strong><?php echo $z['date'] ;?></p>
                              
                              <p style="font-size:11px;font-family: system-ui;"> <Strong>Business - </Strong><?php echo  $z['businessname']?></p>
                                    

                 </td>
              </tr>

              <tr style="border:none;" border-bottom:none;>

<td colspan="2" style="border-top:none; border-left:none; border-right:1px solid grey;">
          <?php 
          include("connection.php");
        //   $val=$_GET['showid'];
          $a="SELECT * FROM `profarmacustomer` WHERE `id` ORDER BY `id` DESC";
          $b=mysqli_query($conn,$a);   
              $c= mysqli_fetch_assoc($b);
                
          ?>
<p style="font-size:11px;font-family: system-ui;"> <Strong>Customer Name - </Strong><?php echo $c['customername'];?></p>
<p style="font-size:11px;font-family: system-ui;"> <Strong>GSTIN / UIN - </Strong><?php ?></p>

          
       

</td >
<td style=" border-right:1px solid grey; border-left:none;border-top:none;">
<p style="font-size:11px;font-family: system-ui;"> <Strong>Customer ID - </Strong><?php echo $c['userid'];?></p>
       

</td>
    <td width="230px" style="border:none; padding :20px; border-bottom:none;">                    
        <p style="font-size:11px;font-family: system-ui;"> <Strong>Email - </Strong><?php echo $c['email']; ?></p>

        <?php
          
     
    ?>
    </td>
 </tr>
            
            </tr>
                           
                 </table>
                 <table style="border-top:none; border-bottom:none;" border="1px" >
              
                     <tr style="border-top:none;border-left:none;background:#eff5f5">
 
                            <td style=" width:10%;border-left:none;  padding:20px; border-right:1px solid grey;"><p style="font-size:11px;font-family: system-ui;;text-align:left"> <Strong> Sr No. </Strong></p></td>
                            <td style=" width:43%; border-left:none; padding:20px;"> <p style="font-size:11px;font-family: system-ui;;text-align:left"> <Strong> Description of Services and Product</Strong></p> </td>
                           
                            <td style=" width: 9% !important;border-left:none; padding:20px;"> <p style="font-size:11px;font-family: system-ui;;text-align:center"> <Strong>HSN/SAC</Strong></p></td>
                           
                            <td style=" width:10%; border-left:none; padding:20px;"> <p style="font-size:11px;font-family: system-ui;;text-align:left"> <Strong> QTY/PER</Strong></p> </td>
                            

                            
                           
                            <td style="width:18% !important;border-left:none; border-right:none; padding:20px"> <p style="font-size:11px;font-family: system-ui;;text-align:right"> <Strong>Price / Unit  </Strong></p></td>
                           
                            <td style=" width:10%; border-left:none; padding:20px;"> <p style="font-size:11px;font-family: system-ui;;text-align:left"> <Strong>Total</Strong></p> </td>
                           
                      </tr>
                                        
              <?php 
        include('connection.php');
        
        
            // $val=$_GET['showid'];
            $i=1;
            $amt=0;
            // $gst=0;
            $totalamt=0;
             $userid= $_SESSION['tempid'];
        
            $x = "SELECT * FROM `profarmacustomer` WHERE `userid` = '$userid'" ;
            $y=mysqli_query($conn,$x);   
              // $z= mysqli_fetch_assoc($y);
            // mysqli_error($conn);
              foreach($y as $res)
              {
           
        
        ?>
        
                             <tr style="border:none; ">
 
                        <td width="100px" style="border-top:none; border-left: none; border-right:1px solid grey; padding-left:20px;padding-top:10px;">
                              <p style="font-size:11px;font-family: system-ui;"><strong><?php echo $i ;?></strong></p>
                        </td> 
                        <td style="border-top:none; border-left: none; border-right:1px solid grey;padding-left:20px">
                            <p style="font-size:11px;font-family: system-ui;"> 
                              
                                  <?Php
                                    echo ucfirst( $res['services']);
                                  ?>
                               
                            </p>
                        </td>
                      

                        <td style="border-top:none; border-left: none;border-right:1px solid grey;padding-left:20px"></td>
                        <td style="border-top:none; border-left: none;border-right:1px solid grey;padding-left:20px">
                      <?php
                      echo $res['quantity'];
                      ?>
                      </td>
                      

                        <td style="border:none;padding-right:20px">
                              <p style="font-size:11px;font-family: system-ui;;text-align:right;">₹<?Php
                                 echo $res['price'];
                                 $amt=$amt+$res['price'];
                                    ?>
                                    </p></div>
                                        <?php
                                        $i++;
                                       
                               
                                        ?>
                        </td>
                        <td style="border-top:none; border-left: none;border-right:1px solid grey;padding-left:20px">
                        <strong>₹<?php
                        $test=0;
                      echo $test=$res['quantity'] * $res['price'];
                       
                           $totalamt=$totalamt+$test;
                          }
                      ?></strong>
                      </td>
              </tr>
                                </table>
              <table class="table" border="1px" style="border-top:none;">
                          
        
  

                           
                          
           <tr style="border:none; background:#eff5f5">

                <td colspan="1" style="border-left:none; border-right:1px solid grey;padding-left:20px;padding:5px;">
                      <p style="font-size:11px;font-family: system-ui;"><strong> TOTAL ESTIMATE </strong><small> &nbsp;( Without including taxes*)</small><p>
                </td>
                <td style="border-left:none; padding-left:20px">
                      <p style="font-size:11px;font-family: system-ui;;text-align:right;padding-right:20px"><strong> Amount:₹ <?php echo $total= round($totalamt); ?></strong><p>

                </td>
          </tr>
                             <tr style="border:none;">

                <td colspan="2" width="50%" style="border-left:none; border-right:1px solid grey;padding-left:20px;">

                                <!-- number to word-->
                                <script>
var a = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ',
'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '
];
var b = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];


function inWordsTotal(num) {
  //alert();
//100000000
var num = <?php echo $total;?>;
//alert(num);
if ((num = num.toString()).length > 9) return 'overflow';
n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
if (!n) return;
var str = '';
str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
// alert(str);
//return str;
document.getElementById("total_amt").innerHTML = str;
}
	
	  var num="<?php $total ?> ";
		inWordsTotal(num);
	
		
</script>





                                <!--number to word-->






                <p style="font-size:11px;font-family: system-ui;text-transform: uppercase;"> <Strong>Total Amount (In Words) - <span id="total_amt"><script>inWordsTotal(<?php //echo $a;?>);</script></span></Strong></p>
                <!-- <p style="font-size:11px;font-family: system-ui;text-transform: uppercase;"> <Strong>Company Pan - </Strong><?php echo $c['companypan'];?></p> -->


                </td>
                <!--  -->
              </tr>
                             <tr style="border:none;">

                <td colspan="2" style="padding-left:20px; padding-right:20px; border-left:none; border-right:1px solid grey;">  <p style="font-size:11px;font-family: system-ui;"> <Strong>Declaration :  </Strong>  We declare that this invoive shows the actual price of the service /Goods described and that all
particulars are true and correct.  </p>
<p><Strong>(*GST is not Included in this bill profarma )</Strong></p></td>
                
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


