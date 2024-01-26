<?php include_once("../include/config.php"); ?>
<?php 
   
     $id     =   $_GET['id'];
     $pid     =   $_GET['pid'];
     
    $sql    =   "UPDATE op SET  send=1 WHERE ono='$id'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
    
     echo "<script>window.location='opgeneraltable.php?id=$pid'</script>";

     ?>
