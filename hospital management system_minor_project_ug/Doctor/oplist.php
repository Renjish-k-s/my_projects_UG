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
          <a href="opview.php" class="btn btn-info" >BACK</a>
      </ul></div>
            
          <div class="container">
                                 <table id="tbl-patient" class="table table-responsive table bordered" cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                            <th>SLNO</th>
                                             <th>PATIENT ID</th>
                                              <th>NAME</th>
                                          
                                         </tr> 
                                         <?php
                                             @$doc_id    =   $_SESSION['slno'];
                                             $id=$_GET['date'];
                                            $sql    =   "SELECT op.*,patient.* FROM op LEFT JOIN patient ON op.pid=patient.pid WHERE op.dname= '$doc_id ' AND op.rno='$id' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                             $i=1;
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                              <td> <?php echo $i; ?></td>
                                             <td> <?php echo $row['pid']; ?></td>
                                            <td> <?php echo $row['name']; ?></td>
                                            
                                         </tr>
                                           <?php $i++; } ?>
                                     </thead>
                                 </table>
</div>
        </form>
    </body>
</html>
