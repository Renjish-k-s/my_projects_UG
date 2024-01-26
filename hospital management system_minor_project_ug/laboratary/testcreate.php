<?php include_once("../include/config.php"); ?>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        
    </head>
    <style>
        .jumbotron .h1, .jumbotron h1 { font-size: 40px; }
        .new_st{ width: 500px; margin: auto; border: 1px solid #ccc; padding: 22px; }
    </style>
    
    <body bgcolor="blue">
         <div class="jumbotron text-center">
            <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
            <p>COME FAST GO FAST</p>
          </div>
            <ul class="nav navbar-nav navbar-right">
         
           <a href="../Doctor/test_res.php?id=<?php           
 echo $pid =$_GET['id'];
            ?>" class="btn btn-info" >RESULT HISTORY</a>
         <a href="../Doctor/doctor_view.php" class="btn btn-info" >BACK</a>
          </ul>
       
        <form name='form1' method="post" action="" class="new_st">
            <label>TEST NAME</label><br>
         <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select><br>
            <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select><br>
            <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select><br>
            <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select><br>
              
        <button type="submit" id="save" class="btn btn-info" value="add_p" name="add_p" >ADD</button>
        </form>
        <div>
     <?php
            if(isset($_POST['add_p'])){
                   $pid=$_GET['id'];
            $dname      =   $_POST['medtest'];
            $count      =   count($dname);
            $date       =   date("Y-m-d");
            $time       =   date("H:i:s");
            for($i="0"; $i<=$count; $i++){
                $dname1     =   $dname[$i];
                if($dname1!=""){
                  echo $sql    =   "insert into labtest(pid,medtest,date,time) VALUES ('$pid','$dname1','$date','$time')";
                $re=mysqli_query($con, $sql) or die(mysqli_query($con));
            }}
                echo "<script>alert('Added')</script>";
                echo "<script>window.location='testcreate.php?id=$pid'</script>";
            }
                ?>
    </body>
   </html>