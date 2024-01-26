<?php include_once("../include/config.php"); ?>
<?php 
    $slno     =   $_GET['slno'];
     $id     =   $_GET['id'];
      $date    =   $_GET['date'];
    $sql    =   "UPDATE `medicine` SET delstatus='2' WHERE slno='$slno'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
    
     echo "<script>window.location='show_med.php?id=$id&date=$date'</script>";
     ?>
