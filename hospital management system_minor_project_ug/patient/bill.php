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
<form name="form1" method="get" action="">
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
                                           $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql    =    "SELECT * FROM  patient WHERE pid='$id'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row1 =mysqli_fetch_array($res)
                                         ?>
                                  <?php
                                           $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql    =    "SELECT * FROM  labtest WHERE pid='$id'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row2 =mysqli_fetch_array($res)
                                         ?>
                              
                               Patient Name:<?php echo $row1['name']  ?> <br>
                               Patient id:<?php echo $row1['pid']  ?> <br>
                               Date: <?php echo $row2['date']  ?> <br>
                               
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <table class="table">
                                   <tr>
                                        <th>SL No</th>
                                         <th>Test name</th>
                                          <th>rate </th>
                                   </tr>
                                   <?php
                                            $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql    =    "SELECT l.*, t.*
                                                        FROM labtest l 
                                                        LEFT JOIN testlist t ON l.medtest=t.id
                                                        WHERE pid='$id' AND date='$date'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            $i      =   "1";
                                            $f_tot  =   "0";
                                            while($row =mysqli_fetch_array($res)){
                                         
                                   
                                   ?>
                                   <tr>
                                       <td><?php echo $i; ?></td>
                                        <td><?php echo $row['testname'] ?></td>
                                        <td><?php  echo $row['rate'] ?></td>
                                         <?php $tot = $row['rate']?>
                                         <td><?php  ?></td>
                                         <td><?php ?></td>
                                           <?php $f_tot    =   $f_tot + $tot; ?>
                                            <?php $i++; } ?>  
                                   <tr>
                                       <td colspan="4" style="text-align: right"> Total</td>
                                         <td><?php echo $f_tot."/-";?></td>
                                   </tr>
                               </table>
                             </form>>
                           </td>
                       </tr>
                 </thead>
             </table>
        </div>
    </body>
</html>
