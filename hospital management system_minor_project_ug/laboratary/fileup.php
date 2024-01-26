
<html>
    <?php include_once("../include/config.php"); ?>
     <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body bgcolor="pink">
           <ul class="nav navbar-nav navbar-right">
          <a href="labview.php?id=<?php echo $_GET['pid']?>&date=<?php  echo $_GET['date'];?>" class="btn btn-info" >BACK</a></ul>
        <center>
            <h3> File uploading</h3>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
               
                <input type="file" name="image" id="file">
                </br>
                <input type="submit" name="submit" value="Submit">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $id     =   $_GET['id'];
                      $pid     =   $_GET['pid'];
                      $date   =   $_GET['date'];
                    $image	=	$_FILES['image']['name'];		
                    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$image);		
                    
                    $sql    =   "UPDATE labtest SET result='$image' WHERE slno='$id'";
             $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
            echo "<script>alert('Updated')</script>";
                echo "<script>window.location='labview.php?id=$pid&date=$date'</script>";
        ?>
                <?php } ?>
        </center>
</body>
</html>