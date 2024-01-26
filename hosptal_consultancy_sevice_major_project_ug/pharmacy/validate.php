<?php include_once("../include/config.php"); ?>

        <?php
       $id=$_GET['oid'];
        $passcode=$_GET['scode'];
        $query = "select * FROM medicine_order WHERE Bid='$id'";
        $ros    =   mysqli_query($con, $query) or die(mysqi_error($con));
         $row = mysqli_fetch_array($ros);
         
         if($row['security_code']== $passcode){
             
             $sql4    = " UPDATE medicine_order SET status='3' WHERE Bid='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('DELIVERY SUCCESSFULLY ACCOMPLISHED')</script>";
                 echo "<script>window.location='todeliver.php'</script>";   


         }
 else {
        echo "<script>alert('CHECK AND REENTER ')</script>";
                 echo "<script>window.location='todeliver.php'</script>";   
 }
        
        
        ?>
   
