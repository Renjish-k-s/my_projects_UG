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
         <button type="submit" name="logout" class="btn btn-warning" >LOGOUT</button></ul>
                        </div>
        </form>
        <div class="container">
                                <table id="tbl-patient" class="table table-responsive table bordered" cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <td>  <a href="opgeneraltable.php" class="btn btn-info" >OP GENERAL TABLE</a>    </td>
                                              <td> <a href="pat_table.php" class="btn btn-info" >PATIENT TABLE</a>      </td>    
                                         </tr>
                                         
                                           <tr>
                                             <td> <a href="stocktable.php" class="btn btn-info" >STOCK TABLE</a>      </td>
                                              <td> <a href="user.php" class="btn btn-info" >USER CREATION</a>      </td>    
                                         </tr> 
                                          <tr>
                                             <td> <a href="actlog.php" class="btn btn-info" >ACCESS LOG</a> </td>
                                              <td> <a href="testtable.php" class="btn btn-info" >TEST INFO</a> </td>    
                                         </tr> 
                                     </thead>
                                </table>
        </div>
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
    </body>
</html>