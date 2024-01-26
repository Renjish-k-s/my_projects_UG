<?php include_once("../include/config.php"); ?>
<?php

            $id=$_GET['id'];
            $date   =   $_GET['date'];
            $sql    =   "UPDATE labtest SET  pay=1 WHERE pid='$id' AND date='$date'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
    
     echo "<script>window.location='labpage.php'</script>";
            
            
    ?>
                                            