<?php include_once("../../include/config.php"); 


         $id=$_GET['id'];
      $sql4    = " UPDATE blog_table SET status='2' WHERE id='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('BLOG SUSPENDED')</script>";
     echo "<script>window.location='blog_request_1.php'</script>";   
   ?>
    