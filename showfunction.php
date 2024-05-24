<?php

include('connection.php');
if(isset($_POST['EnqId']))
{
$EnqId=$_POST['EnqId'];


$previewbill= "SELECT * FROM `temppreview` WHERE `userid`='$EnqId' ORDER BY `timestamp` DESC";
$query= mysqli_query($conn,$previewbill);
// $fetch= mysqli_fetch_assoc($query);
// $display=$fetch['userid'];
 

   
    ?>
    


     <div>
     <table class="table table-bordered">


                                <?php
    

                                include("connection.php");                          
                                  $a="SELECT * FROM `profile` WHERE `userid`='$EnqId' ";
                                  $b=mysqli_query($conn,$a);   
                                      $c= mysqli_fetch_assoc($b);

                                      ?>

                                      <table class="table table-bordered">
                                      <tr>
                                        <td style="">
                                        <p  style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><strong>Customer Name: </strong><span><?php echo $c['name'];?></span></p>
                                        </td>
                                        <td>
                                        <p  style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><strong>Email:</strong> <span><?php echo $c['email'];?></span> </p>
                                        </td>
                                        <td>
                                        <p  style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><strong>Mobile: </strong>  <span><?php echo $c['phone'];?></span></p>

                                        </td>
                                      </tr>
                                      </table>
                                        
<table class="table table-bordered">
     <tr>
        <td colspan="3">
             <strong>SERVICES </strong>
        </td>
        <td>
             <strong> HSN/SAC </strong>
        </td>
        <td>
             <strong> Quantity </strong>
        </td>
        <td>
        <strong> Price/unit </strong> 
        </td>
        <td>
        <strong> Total </strong> 
        </td>
     </tr>
    <tr>
<?php
$sum=0;
 foreach($query as $work)
 {
?>
  <td colspan="3"> <span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><?php echo $work['services']; ?></span>
    </td>
    <td><span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> <?php echo $work['hsn'] ?></span>
    </td>
    <td><span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"> <?php echo $work['quantity'] ?></span>
    </td>
    <td> <span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><?php echo $work['price'] ?></span>
    </td>
    <td> <span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><?php echo 
$tot=$work['price']*$work['quantity'];
?></span>
    </td>

    </tr>
    
<?php
    
    $sum=$sum+$tot
  ;}
?>

<tr>
  <td colspan="6"> <span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><Strong>Total Cost</Strong></span>
</td>
  <td> 
    <span style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"><Strong><?php echo $sum; ?></Strong></span>
 </td>
  
</tr>
     </table>

     <?php
}
elseif(isset($_POST['userid']))
{

    $userid=$_POST['userid'];
    $deleterow= "DELETE FROM `temppreview` WHERE `userid`= '$userid'";
    $exec= mysqli_query($conn,$deleterow);

    
}
    
   elseif(isset($_POST['action_code'])) 
   {
     echo 'hi';
   }
    ?>