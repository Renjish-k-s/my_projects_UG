<?php include_once("../include/config.php"); 


         $id=$_GET['id'];
       $sql    =   "UPDATE common_login SET status='2' WHERE pid='$id'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('CUSTOMER ADDED')</script>";
                 echo "<script>window.location='publiv_control_active.php'</script>";
   ?>
    