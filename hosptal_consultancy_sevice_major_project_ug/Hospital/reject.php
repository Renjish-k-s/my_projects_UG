
<?php include_once("../../include/config.php"); ?>

        <?php
$id= base64_decode($_GET['id']);
$cid= base64_decode($_GET['cid']);
 $sql    =   "UPDATE tenderquotes SET  status='1' WHERE custid='$cid' AND teid='$id' ";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('TENDER REJECTED')</script>";
                 echo "<script>window.location='view_tender_submissions.php?id=$id'</script>";
             
        
        ?>

 