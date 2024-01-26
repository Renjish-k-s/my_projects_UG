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
         <style>
          
           .hx
           {
                  margin-right: 63px; 
           }
           
           
            
           
            </style>
        <div  class="hx">
          <ul class="nav navbar-nav navbar-right">
           <a href="index.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >BACK</a></ul>
        </div>
        <div class="container">
                                <table id="tbl-patient" class="table table-responsive table bordered" cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>SL NO</th>
                                             <th>SPECIALIZATION</th>
                                             <th>DATE</th>
                                             
                                         </tr> 
                                         <?php
                                         $id=$_GET['id'];
                                         
                                            $sql    =   "SELECT * FROM op  WHERE pid='$id'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            $i=1;
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                       
                                         <tr>
                                             <td><?php echo $i; ?></td>
                                             <td><?php echo $row['spec']; ?></td>
                                             <td><?php echo $row['rno']; ?></td>
                                             <td>
                                                  <a href="op_sheet.php?id=<?php echo $row['ono']?>&pid=<?php echo $row['pid']?>&dname=<?php echo $row['dname'] ?>">Get invoice</a>
                                             </td>
                                             <td><?php
                                             if($row['send']==0){
                                             ?>
                                                 <a href="send.php?id=<?php echo $row['ono']?>&pid=<?php echo $_GET['id']; ?>">CONFIRM OP</a>
                                             <?php }?>
                                                <?php  if($row['send']==1){
                                             ?>
                                                 <a href="">OP CONFIRMED</a>
                                             <?php }?>
                                                 </td>
                                             <td><?php
                                             if($row['delstatus']==1){
                                             ?>
                                                 <a href="doctor_invoice.php?id=<?php echo $row['pid'] ?>&date=<?php echo $row['rno'] ?>">GET PRESCRIPTION</a>
                                             <?php }?>
                                                 </td>
                                                 <td><?php
                                             if($row['delstatus']==1){
                                             ?>
                                                 <a href="view.php?id=<?php echo $row['pid'] ?>&date=<?php echo $row['rno'] ?>">PHARMACY BILL</a>
                                             <?php }?>
                                                 </td>
                                                 <td><?php
                                             if($row['delstatus']==1){
                                             ?>
                                                 <a href="bill.php?id=<?php echo $row['pid'] ?>&date=<?php echo $row['rno'] ?>">LABORATORY BILL</a>
                                             <?php }?>
                                                 </td>
                                         </tr>
                                            <?php $i++; } ?>
                                     </thead>
                                       
                                 </table>

                                          
          </div>

    </body>
</html>
