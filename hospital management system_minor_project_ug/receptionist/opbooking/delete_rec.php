<?php include_once("../include/config.php"); ?>
<?php 
    $id     =   $_GET['id'];
    $sql    =    "UPDATE op SET  delstatus=1 WHERE ono='$id'";
    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
     echo "<script>window.location='index.php'</script>";
?>