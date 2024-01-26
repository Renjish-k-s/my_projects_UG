<?php include_once("../include/config.php"); ?>

        <?php
        $likerid=$_SESSION['custid'];
        $bid=$_GET['id'];
        $sql    = " insert into like_box(liker_id,blog_id) VALUES ('$likerid','$bid')";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('LIKED A POST')</script>";
        echo "<script>window.location='index_1.php?id=$bid'</script>";   
        ?>
   