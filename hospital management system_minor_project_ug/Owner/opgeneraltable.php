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
                    <div style=margin-right:63px; >

       <ul class="nav navbar-nav navbar-right">
           <a href="ownerpage.php" class="btn btn-info" >BACK</a>
       </ul></div>
                     
      <div class="col-sm-6">
        <div class="panal-body">
                                <table id="tbl-patient" class="table table-responsive table bordered" cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>OP NO</th>
                                             <th>PAT ID</th>
                                             <th>SPECIALIZATION</th>
                                             <th>DOCTOR NAME</th>
                                             <th>DATE</th>
                                             <th>ACTION</th>
                                         </tr> 
                                         <?php
                                            $sql    =   "SELECT o.*, u.fullname
                                                        FROM op o 
                                                        LEFT JOIN usertable u ON u.slno=o.dname
                                                        WHERE o.ono!=''
                                                        ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                             <td><?php echo $row['ono']; ?></td>
                                             <td><?php echo $row['pid']; ?></td>
                                             <td><?php echo $row['spec']; ?></td>
                                             <td><?php echo $row['fullname']; ?></td>
                                             <td><?php echo $row['rno']; ?></td>
                                             
                                             <td>
                                                  <a href="../opbooking/op_sheet.php?id=<?php echo $row['ono']?>&pid=<?php echo $row['pid']?>&dname=<?php echo $row['fullname'] ?>">Get invoice</a>
                                             </td>
                                         </tr>
                                           <?php } ?>
                                     </thead>
                                       
                                 </table>

                                             </div> 
          </div>

    </body>
</html>
