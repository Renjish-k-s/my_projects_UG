<?php include_once("../include/config.php"); ?>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        
    </head>
    <body bgcolor="blue">
        <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
</div>
         <ul class="nav navbar-nav navbar-right">
          <a href="doctor_view.php" class="btn btn-info" >BACK</a>
           <a href="dishis.php?id=<?php echo  $_GET['id'];?>" class="btn btn-info" >DISEASE HISTORY</a>
       </ul>
        <div align="center">
        <label>DISEASE DIAGNOSED</label><br>
        <form name='form1' method="post" action="">
        <textarea id="medtest" name="medtest" rows="13" cols="50" required></textarea>
              
        <button type="submit" id="save" class="btn btn-info" value="add_pre" name="add_pre" >ADD</button>
        </form>
        </div>
   
     <?php
            if(isset($_POST['add_pre'])){
                $pid    =   $_GET['id'];
                $medtest    =   $_POST['medtest'];
                $date   =   date('Y-m-d');
                $time   =   date('H:i:s');
                  echo $sql    =   "insert into disease(pid, disease, date, time) VALUES ('$pid', '$medtest', '$date', '$time')";
                $re    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Added')</script>";
                echo "<script>window.location='disease.php?id=$pid'</script>";
            }
                ?>
        
        
    </body>
   </html>