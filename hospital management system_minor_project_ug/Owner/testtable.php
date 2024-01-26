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
       
      <ul class="nav navbar-nav navbar-right">
           <a href="newtest.php" class="btn btn-info" >ADD NEW TEST</a>
           <a href="ownerpage.php" class="btn btn-info" >BACK</a>
       </ul>
         <div class="container">
         
                                 <table id="tbl-patient" class="table table-responsive table bordered" border="3px"  cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>SL NO</th>
                                             <th>TEST NAME</th>
                                             <th>RATE</th>
                                         </tr>
                                         <?php
                                            $sql    =   "SELECT * FROM testlist";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <form name="form1" method="post" action="">
                                             <input type="hidden" name="ssl_no" value="<?php echo $row['id'] ?>">
                                         <tr>
                                             <td><input type="number" class="form-control" placeholder="slno" id="id" name="id" value="<?php echo $row['id']; ?>" readonly size="30ppx" >
                                                </td>
                                             
                                          <td><input type="text" class="form-control" placeholder="testname" id="testname" name="testname" value="<?php echo $row['testname']; ?>"  size="30ppx" ></td>
        
                                           <td> <input type="text" class="form-control" placeholder="rate" id="rate" name="rate" value="<?php echo $row['rate']; ?>" size="30ppx" >
                                                                            </td> 
                                             <td>  <button type="submit" id="save" class="btn btn-info" value="update" name="update" >UPDATE</button></td>
                                         </tr>
                                          </form>
                                            <?php } ?>
                                     </thead>
                                 </table>
            </div>
            <?php
             if(isset($_POST['update'])){
                  $slno   =   $_POST['ssl_no'];
                 $rate   =   $_POST['testname'];
                $quat= $_POST['rate'];
                   $sql    =   "UPDATE testlist SET testname='$rate',rate='$quat' WHERE id='$slno'";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Updated')</script>";
                 echo "<script>window.location='testtable.php'</script>";
             }
            ?>
            
       
    </body>
</html>
