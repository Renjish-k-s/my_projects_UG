<?php include_once("../include/config.php"); 


         $id=$_GET['id'];
      $sql4    = " UPDATE ad_table SET status='3' WHERE id='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('AD SUSPENDED')</script>";
     echo "<script>window.location='activead.php'</script>";   
   ?>
    