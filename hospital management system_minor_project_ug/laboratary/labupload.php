<?php include_once("../include/config.php"); ?>
<?php 
     $id     =   $_GET['id'];
      $pid     =   $_GET['pid'];
      $date   =   $_GET['date'];
    $sql    =   "UPDATE labtest SET  labdelstatus='1' WHERE slno='$id'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
    
     echo "<script>window.location='labview.php?id=$pid&date=$date'</script>";

     ?>
