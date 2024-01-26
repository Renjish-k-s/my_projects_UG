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
          <a href="prescription.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info" >BACK</a>
       </ul>
<div class="row">
       <div class="container-fluid">
      <div class="col-sm-12">
        <div class="panal-body">
                                 <table id="tbl-patient" class="table table-responsive table bordered" border="3px"  cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>MEDICINE NAME</th>
                                             <th>QUANTITY</th>
                                             <th>DATE</th>
                                            
                                         </tr> 
                                         <?php
                                         $id=$_GET['id'];
                                            $sql    =   "SELECT m.*, p.*
                                                        FROM medicine m 
                                                        LEFT JOIN stockadd p ON p.slno=m.med
                                                        WHERE pid='$id'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                     
                                            
                                             <td><?php echo $row['name']; ?></td>
                                             <td><?php echo $row['qty']; ?></td>
                                             <td><?php echo $row['date']; ?></td>
                                                                                     </tr>
                                           <?php } ?>
                                     </thead>
                                 </table>
</div>
  </div>
</div>
</div>
    </body>
</html>
