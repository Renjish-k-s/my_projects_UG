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
         <a href="opgeneraltable.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >BACK</a></ul>
<div class="col-sm-12">
        <div class="panal-body">

            <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto; width:1000px;border:1px solid #ccc;">
                 <thead>
                     <tr>
                         <th style="text-align:center"><h3>KANJIRAMKULAM MEDICAL COLLEGE</h3>
                             <p>Phone: +91 98464 62723</p>
                         </th>
                       </tr>  
                       <tr>
                           <td style="text-align:left">
                              
                               <?php
                                            $sql    =   "SELECT m.*, p.*
                                                        FROM medicine m 
                                                        LEFT JOIN patient p ON p.pid=m.pid
                                                        WHERE m.pid!='' 
                                                        ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row =mysqli_fetch_array($res)
                                         ?>
                               
                              
                               Patient Name:<?php echo $row['name']  ?> <br>
                               Patient id:<?php echo $row['pid']  ?> <br>
                               Date: <?php echo $row['date']  ?> <br>
                               Time: <?php echo $row['time']  ?> 
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <table class="table">
                                   <tr>
                                        <th>Sl No</th>
                                         <th>Medicine</th>
                                          <th>Total </th>
                                           <th>Qty</th>
                                            <th>Amount</th>
                                   </tr>
                                   <?php
                                            $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql    =   "SELECT m.*, u.fullname, s.name, s.rate
                                                        FROM medicine m
                                                        LEFT JOIN usertable u ON u.slno=m.pid
                                                        LEFT JOIN  stockadd s ON s.slno=m.med
                                                        WHERE pid='$id' AND date='$date' AND m.delstatus='2' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            $i      =   "1";
                                            $f_tot  =   "0";
                                            while($row =mysqli_fetch_array($res)){
                                         
                                   
                                   ?>
                                   <tr>
                                       <td><?php echo $i; ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['rate'] ?></td>
                                         <td><?php echo $row['qty'] ?></td>
                                         <?php $tot = $row['rate'] * $row['qty']; ?>
                                         <td><?php echo $tot ?></td>
                                   </tr>
                                   <?php echo $f_tot    =   $f_tot + $tot; ?>
                                            <?php $i++; } ?>  
                                   <tr>
                                       <td colspan="4" style="text-align: right"> Total</td>
                                       <td><?php echo $f_tot;  ?></td>
                                   </tr>
                               </table>
                               
                           </td>
                       </tr>
                 </thead>
             </table>
            </div>
        </div>
    </body>
</html>
