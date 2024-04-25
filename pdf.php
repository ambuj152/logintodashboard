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
          </center>

      </div>
       <div class="container"  id="content" style=" width:80%;">
     
        <table class="table" border="1px">
          <tr>
                     <div class="col-md-12" style="background:#eff5f5;">
            <center><h2 style="color:black"> Tax Invoice<h2></center>


            
        </div>
          </tr>
              <tr>
                  <td colspan="2" width="50%">
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
                    

                        
                                <h4 style="font-size:12px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                                <h4 style="font-size:12px"> <?php echo $w['address'];?>, <?php echo $w['mobile'];?></h4>
                                <h4 style="font-size:12px"> <Strong>GSTIN/UIN :  </Strong><?php echo $w['gstnumber'];?></h4>
              

            
                 </td>
                 <td width="25%">
               
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
                              <h4 style="font-size:12px"> <Strong>Invoice No.- </Strong>GW/<?php echo $z['userid'];?></h4>
                 <h4 style="font-size:12px"> <Strong>Mode of Payment - </Strong><?php echo $z['modeofpayment'];?></h4>


            
                 </td>
                 <td width="25%">
                              <h4 style="font-size:12px"> <Strong>Order Date - </Strong><?php echo $z['orderdate'];?></h4>
                              <h4 style="font-size:12px"> <Strong>Serial NO. - </Strong><?php echo $z['id'];?></h4>


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
                                  <h4 style="font-size:12px"> <Strong>Company Name - </Strong><?php echo $c['companyname'];?></h4>
                                  <h4 style="font-size:12px"> <Strong>GST NO. - </Strong><?php echo $c['gst'];?></h4>
                        </td >
                        <td>
                        <h4 style="font-size:12px"> <Strong>Customer Name - </Strong><?php echo $c['name'];?></h4>
                                <h4 style="font-size:12px"> <Strong>Mobile No. - </Strong><?php echo $c['phone'];?></h4>

                        </td>
                            <td width="230px">                    
                                <h4 style="font-size:12px"> <Strong>Email - </Strong><?php echo $c['email'];?></h4>
                                <h4 style="font-size:12px"> <Strong>Addrees - </Strong><?php echo $c['address'];?></h4>
                            </td>
              </tr>
              
              <tr style="background:#eff5f5">
                            <td><h4 style="font-size:12px;text-align:left"> <Strong> Sr No. </Strong></h4></td>
                            <td> <h4 style="font-size:12px;text-align:left"> <Strong> Description of Services and Product - </Strong></h4> </td>
                            <td> <h4 style="font-size:12px;text-align:left"> <Strong>HSN/SAC</Strong></h4></td>
                            <td> <h4 style="font-size:12px;text-align:left"> <Strong>Price / Unit  </Strong></h4></td>
              </tr>
                                        
              <?php 
        include('connection.php');
        if(isset($_GET['showid']))
        {
            $val=$_GET['showid'];
            $i=1;
            $amt=0;
            $gst=0;
            $x="SELECT * FROM `bill` WHERE `userid`='$val'";
            $y=mysqli_query($conn,$x);   
              // $z= mysqli_fetch_assoc($y);
              foreach($y as $res){
           
        
        ?>
        
              <tr >
                        <td width="100px">
                              <h4 style="font-size:12px"><strong><?php echo $i ;?></strong></h4>
                        </td> 
                        <td>
                            <h4 style="font-size:12px"> 
                              <strong> 
                                  <?Php
                                    echo ucfirst( $res['services']);
                                  ?>
                               </strong> 
                            </h4>
                        </td>
                        <td></td>
                        <td>
                              <h4 style="font-size:12px"> <strong><?Php
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
              <!-- <tr height="100px">

              </tr> -->
              <tr style="background:#eff5f5;">
              <td colspan="4">
              <h4 style="font-size:12px"><strong> Taxation</strong><small> &nbsp;( AND OTHER TAXES*)</small><h4>
              <center>

              </td>
                    
        
          </tr>
              <tr>
          <td colspan="3"><h4 style="font-size:12px"> 9% CGST  </h4></td>
          <td><h4  style="font-size:12px">  <?php
           echo $gst=(9/100)*$amt;
            ?></h4>
            
          </td>
        </tr>
              <tr>
          <td colspan="3"><h4 style="font-size:12px"> 9% SGST  </h4></td>
          <td><h4  style="font-size:12px">  <?php
           echo $gst=(9/100)*$amt;
            ?></h4>
            
          </td>
        </tr>

              <tr>
          <td colspan="3"><h4 style="font-size:12px"> 18% GST = (9% sgst + 9% CGST)</h4></td>
          <td><h4  style="font-size:12px">  <?php
           echo $gst=(18/100)*$amt;
            ?></h4>
            
          </td>
        </tr>
                          
              <tr style="background:#eff5f5">
                <td colspan="3">
                      <h4 style="font-size:12px"><strong> TOTAL COST INCLUSIVE 18% GST</strong><small> &nbsp;( AND OTHER TAXES*)</small><h4>
                </td>
                <td>
                      <h4 style="font-size:12px"><strong>Total Amount: <?php echo $total= round($gst+$amt); ?></strong><h4>

                </td>
              </tr>
              <tr>
                <td colspan="3" width="50%">

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






                <h4 style="font-size:12px"> <Strong>Tax Amount (In Words) - </Strong><span id="total_amt"><script>inWordsTotal(<?php //echo $a;?>);</script></span></h4>
                <h4 style="font-size:12px"> <Strong>Company Pan - </Strong><?php echo $c['companypan'];?></h4>


                </td>
                <td width="40%">
                <h4 style="font-size:12px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                   <h4 style="font-size:12px"> <Strong>A/C No. : - </Strong><?php echo $w['account'];?></h4>
                   <h4 style="font-size:12px"> <Strong>IFSC Code : - </Strong><?php echo $w['ifsc'];?></h4>
                   <h4 style="font-size:12px"> <Strong><?php echo $w['bank'];?> </Strong></h4>

                </td>
              </tr>
              <tr>
                <td colspan="3">  <h4 style="font-size:12px"> <Strong>Declaration :  </Strong> We Declare that this Invoice shows the actual
            Price of the services/goods described and that all perticular are true and correct.    </h4></td>
                <td>
                <h4 style="font-size:12px"> <Strong><?php echo $w['companyname'];?> </Strong></h4>
                 <br>
                   <h4 style="font-size:12px"> <Strong>Authorized Signature </Strong></h4>
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


