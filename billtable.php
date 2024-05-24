<?php

session_start();
if(isset($_SESSION['id']))
{
if(isset($_GET['showtable'])) 
{
$userid=$_GET['showtable'];

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
     
        <table class="table" border="1px" >
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
                            <tr style="border-bottom:none;" width="1200px">

                  <td style=" border-right:1px solid grey; border-top:none;border-left:none; padding:20px;" width="800px">
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
                    

                        
                                <p style="font-size:11px;font-family: system-ui;"> <b><?php echo ucfirst($w['companyname']);?> </b></p>
                                <p style="font-size:11px;font-family: system-ui;"> <?php echo $w['address'];?>, <?php echo $w['mobile'];?></p>
                                <p style="font-size:11px;font-family: system-ui;"> <b>GSTIN/UIN :  </b><?php echo $w['gstnumber'];?></p>
              

            
                 </td>
                 <td style=" width:400px; border-top:none;border-left:none; padding:20px;margin-right:0px;  border-right:none;">
               
                        <?php 
                            include("connection.php");
                    $companyid=$_SESSION['companyid'];

                              if(isset($_GET['showtable']))
                                  {
                                      // $val=$_GET['showid'];
                                      $x="SELECT * FROM `bill` WHERE `serial`='$userid' ORDER BY `id` DESC ";
                                      $y=mysqli_query($conn,$x);   
                                      $z= mysqli_fetch_assoc($y);
                                      $count=1;
                                                   
                          ?>
                              <p style="font-size:11px;font-family: system-ui;"> <b>Invoice No.- </b><?php echo $w['in-prefix'];echo "-";echo $z['serial'];?></p>
                 <p style="font-size:11px;font-family: system-ui;"> <b>Payment mode- </b><?php echo $z['modeofpayment'];?></p>


            
                 <!-- </td>
                 <td style=" border:none; padding:19px;width:35%"> -->
                              <p style="font-size:11px;font-family: system-ui;"> <b>Order Date - </b><?php  $formatted_date = date("d M Y", strtotime($z['orderdate'] ));
                              echo $formatted_date;
                              ?></p>
                              <p style="font-size:11px;font-family: system-ui;"> <b>Serial NO. - </b><?php echo  $z['serial']?></p>
                                      <?php
                                  }
                                  else{

                                    echo "bill not generated yet";
                                  }
                                      ?>

                 </td>
              </tr>
                                <!-- </table>
                                
                                <table class="table" border="1px" style="border-top:none;"> -->
                             <tr style="border:none;border-bottom:none; border-right:1px solid grey;">

                        <td style="border-top:none; border-left:none; border-right:1px solid grey;padding:20px; ">
                                  <?php 
                                  include("connection.php");
                                  if(isset($_GET['showtable']));
                                  {  
                                  $showtable=$_GET['showtable'];
                                  $demo="SELECT * FROM `bill` WHERE `serial`='$showtable'";
                                  $executt=mysqli_query($conn,$demo );
                                  

                                  $fetcch=mysqli_fetch_assoc($executt);
                                 $val=$fetcch['userid'];
                                  $a="SELECT * FROM `profile` WHERE `userid`='$val'";
                                  $b=mysqli_query($conn,$a);   
                                      $c= mysqli_fetch_assoc($b);
                                        
                                  ?>
                                  <p style="font-size:11px;font-family: system-ui;"> <b>Name - </b><?php  echo ucfirst($c['companyname']);?><span>&nbsp;(<?php echo ucfirst($c['name'])?>)</span></p>
                                 
                                <p style="font-size:11px;font-family: system-ui;"> <b>Addrees - </b><?php echo $c['address'];?></p>
                                <p style="font-size:11px;font-family: system-ui;text-transform: uppercase;"> <b>GST NO. - </b><?php echo $c['gst'];?></p>

                        </td >
                        <td style="  border-left:none;border-top:none; padding:20px;;padding-right:29px;border-right:none; padding-right:40px;">
                        <p style="font-size:11px;font-family: system-ui;"> <b>Customer ID - </b><?php echo $c['userid'];?></p>
                                <p style="font-size:11px;font-family: system-ui;"> <b>Mobile No. - </b><?php echo $c['phone'];?></p>

                        <!-- </td>
                            <td style="border:none; padding :20px; border-bottom:none; width:35%; border-right:none;">                     -->
                                <p style="font-size:11px;font-family: system-ui;"> <b>Email - </b><?php echo $c['email']; ?></p>

                                <?php
                                  }
                             
                            ?>
                            </td>
                         </tr>
             </table>
                 <table class="table" style="border-top:none" border="1px" >
              
                     <tr style="border-top:none;border-left:none;background:#eff5f5">
 
                            <td style=" width:11%; border-top:none; padding:20px; border-right:none; border-left:none;"><p style="font-size:11px;font-family: system-ui;text-align:left"> <b> Sr No. </b></p></td>
                            <td style=" width:35.5%;border-top:none;  border-right:none; padding:20px;"> <p style="font-size:11px;font-family: system-ui;text-align:left"> <b> Description of Services</b></p> </td>
                            <td style=" width:13.5% !important;border-top:none;border-left:none; border-right:none; padding:20px;"> <p style="font-size:11px;font-family: system-ui;text-align:center"> <b>HSN/SAC</b></p></td>
                            <td style=" width:13%; border-left:none;border-top:none; padding:20px; border-right:none;"> <p style="font-size:11px;font-family: system-ui;text-align:left"> <b> QTY/PER</b></p> </td>
                            
                            <td style="width:16% !important;border-left:none;border-top:none;   border-right:none;"> <p style="font-size:11px;font-family: system-ui;text-align:right"> <b>Price / Unit  </b></p></td>
                            
                           
                            <td style=" width:13%; border-left:none; padding:20px;border-right:none; border-top:none;"> <p style="font-size:11px;font-family: system-ui;text-align:left"> <b>Total</b></p> </td>
                           
                           
                      </tr>
                                        
              <?php 
        include('connection.php');
        
        if(isset($_GET['showtable']))
        {
            $val=$_GET['showtable'];
            $i=1;
            $amt=0;
            $gst=0;
            $totalamt=0;

            // $x = "SELECT * FROM `bill` WHERE `userid` = '$val' AND (`orderdate`, `timestamp`) = (SELECT MAX(`orderdate`), `timestamp` FROM `bill` WHERE `userid` = '$val')";

            $x = "SELECT * FROM `bill` WHERE `serial` = '$val'";
            // $x="SELECT * FROM `bill` WHERE `userid`='$val'AND MAX(`orderdate`)";
            $y=mysqli_query($conn,$x);   
              // $z= mysqli_fetch_assoc($y);
              foreach($y as $res)
              {
           
        
        ?>
        
                             <tr style="border:none; ">
 
                        <td width="100px" style="border:none; padding-left:20px;padding-top:10px;">
                              <p style="font-size:11px;font-family: system-ui;"><?php echo $i ;?></p>
                        </td> 
                        <td style="border:none;padding-left:20px">
                            <p style="font-size:11px;font-family: system-ui;"> 
                              
                                  <?Php
                                    echo ucfirst( $res['services']);
                                  ?>
                               
                            </p>
                        </td>
                        <td style="border:none; ;padding-left:20px">
                        <p style="font-size:11px;font-family: system-ui;">
                        <?php
                      echo $res['hsn'];
                      ?></p>
                      </td>

                        <td style="border:none;padding-left:20px">
                        <p style="font-size:11px;font-family: system-ui;">
                      <?php
                      echo $res['quantity'];
                      ?></p>
                      </td>

                    

                        <td style="border:none;padding-right:20px;">
                              <p style="font-size:11px;font-family: system-ui;text-align:right;"> ₹<?Php
                                 echo $res['price'];
                                 $amt=$amt+$res['price'];
                                    ?>
                                    </p></div>
                                        <?php
                                        $i++;
                                    
                              
                                        ?>
                        </td>
                        <td style="border-top:none; border-left: none;border-right:none;padding-left:20px"><b> <p style="font-size:11px;font-family: system-ui;"> ₹
                        <?php
                        $test=0;
                      echo $test=$res['quantity'] * $res['price'];
                       
                           $totalamt=$totalamt+$test;
                           }
                          }

                      ?></p>
                      </b>
                      </td>
              </tr>
                                </table>
              <table class="table" style="border-top:none;border:1px solid grey;">
                            <tr style="border-bottom:1px solid grey;background:#eff5f5; ">
              <td colspan="4" style="border-top:none;border-left:none; border-right:none; padding-left:20px; padding-top:10px;">
              <p style="font-size:11px;font-family: system-ui;"><b> Taxation</b><small> &nbsp;( AND OTHER TAXES*)</small><p>
              <center>

              </td>
                    
        
          </tr>
         <tr style="border:none;">

        <?php
        include("connection.php");

        if(isset($_GET['showtable']))
        {
         $userid=$_GET['showtable']; 
        $companyid=$_SESSION['companyid'];
        $tax="SELECT * FROM `bill` WHERE `serial`= '$userid' ";
        $calc=mysqli_query($conn, $tax);
        $check=mysqli_fetch_assoc($calc);
        $sgst= $check['tax-p']/2;
        
        }
        ?>

                                <td colspan="3" style="border-top:none; border-left:none; padding:5px; padding-left:20px;"><p style="font-size:11px;font-family: system-ui;"><b> <?php echo $sgst;?>% CGST </b> </p></td>
                                <td  style="border-top:none; border-left:none;border-right:none; padding-left:20px; padding:5px;"><p  style="font-size:11px;font-family: system-ui; padding-right:20px; text-align:right;"> ₹  <?php
                                echo $agst=($sgst/100)*$totalamt;
                                  ?></p>
                                  
                                </td>
        </tr>
       <tr style=" border:none">

                      <td colspan="3" style="border-left:none;  padding-top:5px;padding-left:20px;"><p style="font-size:11px;font-family: system-ui;"><b><?php echo $sgst; ?>% SGST </b>  </p></td>
                      <td style="border-left:none !important; padding-left:20px; padding:5px;"><p  style="font-size:11px;font-family: system-ui;border:none; padding-right:20px; text-align:right">  ₹
                      <?php
                         echo $cgst=($sgst/100)*$totalamt;
                      ?></p>
                        
                      </td>
        </tr>

                            <tr style="border:none">

          <td colspan="3" style="border-left:none; margin-left:200px;"><p style="font-size:11px;font-family: system-ui;"><b><?php echo $check['tax-p']?>% GST = </b> (<?php echo $sgst;?> %SGST + <?php echo $sgst;?>% CGST)</p></td>
          <td style=" border-left:none;  padding:5px;"><p  style="font-size:11px;font-family: system-ui;text-align:right;padding-right:20px;"> ₹ <?php
           echo $gst=$cgst+$agst;
            ?></p>
            
          </td>
        </tr>
                          
           <tr style="border:none; background:#eff5f5">

                <td colspan="3" style="border-left:none;padding-left:20px;padding:5px;">
                      <p style="font-size:11px;font-family: system-ui;"><b> TOTAL AMOUNT <?php $check['tax-p']; ?></b><p>
                </td>
                <td style="border-left:none; padding-left:20px">
                      <p style="font-size:11px;font-family: system-ui;text-align:right;padding-right:20px"><b>₹ <?php echo $total= round($gst+$totalamt); ?></b><p>

                </td>
          </tr>
                             <tr style="border:none; border-top: 1px solid grey;">

                <td colspan="3" width="50%" style="border-left:none;border-top: 1px solid grey; border-right:1px solid grey;padding-left:20px;">

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






                <p style="font-size:11px;font-family: system-ui;text-transform: uppercase;"> <b>Total Amount (In Words) - <span id="total_amt"><script>inWordsTotal(<?php //echo $a;?>);</script></span></b></p>
                <p style="font-size:11px;font-family: system-ui;text-transform: uppercase;"> <b>Company Pan - </b><?php echo $w['companypan'];?></p>


                </td>
                <td width="40%" style="border-left:none; padding:20px; padding-top:10px;padding-bottom:10px; text-align:right;border-top: 1px solid grey;">
                <p style="font-size:11px;font-family: system-ui;"> <b><?php echo ucfirst($w['companyname']);?> </b></p>
                   <p style="font-size:11px;font-family: system-ui;"> <b>A/C No. : - </b><?php echo $w['account'];?></p>
                   <p style="font-size:11px;font-family: system-ui;"> <b>IFSC Code : - </b><?php echo $w['ifsc'];?></p>
                   <p style="font-size:11px;font-family: system-ui;"> <b><?php echo $w['bank'];?> </b></p>

                </td>
              </tr>
                             <tr style="border:none;">

                <td colspan="3" style="padding-left:20px; padding-right:20px; border-left:none; border-right:1px solid grey;"> <img src="images/QR.png" width="80px">  <p style="font-size:11px;font-family: system-ui;margin-top:20px; margin-bottom:0px;"> <b>Declaration :  </b> We Declare that this Invoice shows the actual
            Price of the services/goods described and that all perticular are true and correct.    </p></td>
                <td style="padding:20px; border-left:none; text-align:right;">
                <p style="font-size:11px;font-family: system-ui;"> <b><?php echo ucfirst($w['companyname']);?> </b></p>
                 <br>
                   <p style="font-size:11px;font-family: system-ui;"> <b>Authorized Signature </b></p>
                </td>
              </tr>


            </table>
         
            <p style="text-align: center;font-size:8px"> *This is computer generated Invoice* </p>





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

  
      } 

else{
    echo "please login to Continue";
    header("Location:index.php");
}

?>


