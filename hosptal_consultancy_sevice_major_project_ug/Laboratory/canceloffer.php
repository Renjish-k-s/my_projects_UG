<?php include_once("../include/config.php"); ?>

        <?php
        
        
        $id= base64_decode($_GET['id']);
        
           $sql4    = " UPDATE ad_table SET status='2' WHERE 	ADid='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('CANCELLED')</script>";
      echo "<script>window.location='adtable.php'</script>";   
       
       
       ?>
   