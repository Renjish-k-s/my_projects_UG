
<?php include_once("../include/config.php"); ?>


        <?php
              $jobid=$_GET['id'];
              $applicant_id=$_SESSION['pid'];
                                             $sql1    =   "SELECT * FROM recriutment_create_table WHERE  id='$jobid' ";
                                             $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                        $row =mysqli_fetch_array($res1);
                 $creator_id=$row['creator_id'];
                             //echo "<script>alert($row)</script>";

$sql = "insert into  application_box (job_id,creator_id,applicant_id) VALUES ('$jobid','$creator_id','$applicant_id')";
$res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
echo "<script>alert('APPLICATION SENDED SUCCESSFULLY')</script>";
echo "<script>window.location='active_recucitment.php'</script>";   
                          
                 
       
              
        ?>
  