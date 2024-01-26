<?php include_once("../include/config.php"); 


         $id=$_GET['id'];
      $sql4    = " UPDATE ad_table SET status='1' WHERE id='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('ADD PUBLISHED')</script>";
     echo "<script>window.location='adcontrol.php'</script>";   
   ?>
    