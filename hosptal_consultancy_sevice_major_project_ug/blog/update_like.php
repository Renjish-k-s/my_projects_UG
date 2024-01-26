<?php include_once("../include/config.php"); ?>

        <?php
        $likerid=$_SESSION['custid'];
        $bid=$_GET['id'];
        $sql    = " UPDATE like_box SET type='1' WHERE liker_id='$likerid' AND blog_id='$bid'";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('LIKE REMOVED')</script>";
        echo "<script>window.location='index_1.php?id=$bid'</script>";   
        ?>
   