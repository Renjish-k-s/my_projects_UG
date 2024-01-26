<?php include_once("../include/config.php"); ?>
<?php 
    $id     =   $_GET['id'];
    $sql    =   "UPDATE usertable SET  delstatus=1 WHERE slno='$id'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
     echo "<script>window.location='user.php'</script>";
?>