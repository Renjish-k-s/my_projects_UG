
<?php include_once("../../include/config_1.php"); ?>

        <?php
$id=$_GET['id'];
 $sql    =   "UPDATE lab_equipments SET  status='9' WHERE id='$id' ";
                
                $res    =   mysqli_query($con1, $sql) or die(mysqli_query($con1));
                echo "<script>alert('DECOMMISSIONED')</script>";
                 echo "<script>window.location='lab_equipments.php'</script>";
             
        
        ?>

 