
<?php include_once("../include/config.php"); ?>

        <?php
$id= base64_decode($_GET['id']);
 $sql    =   "UPDATE medicine_order SET  status='10' WHERE Bid='$id' ";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('ORDER CANCELLED,REFUND AS PER POLICY')</script>";
                 echo "<script>window.location='abouttodeliver.php'</script>";
             
        
        ?>

 