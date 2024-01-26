<?php include_once("../include/config.php"); 


         $id=$_GET['id'];
      $sql4    = " UPDATE staff SET status='0' WHERE id='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('SUSPENSION CANCELLED')</script>";
     echo "<script>window.location='activestaff.php'</script>";   
   ?>
    