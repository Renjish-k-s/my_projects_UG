<?php include_once("../include/config.php"); ?>
<?php 
    $id     =   $_GET['id'];
    $sql    =   "DELETE FROM doctor WHERE dno='$id'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
     echo "<script>window.location='doctor_creation.php'</script>";
?>