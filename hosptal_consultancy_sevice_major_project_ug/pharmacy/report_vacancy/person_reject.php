<?php include_once("../../include/config.php"); ?>

        <?php
        
        
        $id= $_GET['id'];
        $cid=$_GET['cid'];
           $sql4    = " UPDATE application_box SET status='0' WHERE id='$id' ; ";
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
       
       $r=base64_encode($cid);
                  $rid=$_GET['c'];               

         echo "<script>alert('REJECTED')</script>";
      echo "<script>window.location='viewapplications.php?id=$r&rid=$rid'</script>";   
       
       
       ?>
   