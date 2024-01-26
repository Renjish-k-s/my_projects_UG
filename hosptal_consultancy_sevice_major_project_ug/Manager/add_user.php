<?php include_once("../include/config.php"); 


         $id=$_GET['id'];
       $sql    =   "UPDATE company_user SET  active_status='1' WHERE custid='$id'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('CUSTOMER SUSPENDED')</script>";
                 echo "<script>window.location='activeuser.php'</script>";
   ?>
    