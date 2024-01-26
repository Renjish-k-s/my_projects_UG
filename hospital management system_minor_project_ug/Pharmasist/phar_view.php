<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
</div>
        <form method="POST">
             <div style=margin-right:63px; >
      <ul class="nav navbar-nav navbar-right">
          <a href="stocktable.php" class="btn btn-info" >STOCKTABLE</a>
           <a href="cpass.php" class="btn btn-info" >CHANGE PASSWORD</a>
           <button type="submit" name="logout" class="btn btn-warning" >LOGOUT</button></ul>
             </div>
          <div class="container">
                                 <table id="tbl-patient" class="table table-responsive table bordered" cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                            <th>SLNO</th>
                                             <th>PAT ID</th>
                                              <th>Date</th>
                                            <th>action</th>
                                         </tr> 
                                         <?php
                                             
                                            $sql    =   "SELECT * FROM medicine WHERE slno!='' AND delstatus='0' GROUP BY pid ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                             $i=1;
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                              <td> <?php echo $i; ?></td>
                                             <td> <?php echo $row['pid']; ?></td>
                                             <td> <?php echo $row['date']; ?></td>
                                             <td><a href="show_med.php?id=<?php echo $row['pid'] ?>&date=<?php echo $row['date'] ?>">VIEW LIST</a></td>
                                         </tr>
                                           <?php $i++; } ?>
                                     </thead>
                                 </table>
              <?php
              
              if(isset($_POST['logout'])){
               $userid= $_SESSION['slno'];
               $message="LOGGED OUT";
               $date       =   date("Y-m-d");
               $time       =   date("H:i:s");
               $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
               $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                 echo "<script>window.location='../login/login.php'</script>";
              }
              ?>
              
              
</div>
        </form>
    </body>
</html>
