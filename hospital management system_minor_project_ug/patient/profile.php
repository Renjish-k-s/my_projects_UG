<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <nav>
            <div>
      <ul class="nav navbar-nav navbar-right">
           <a href="opgeneraltable.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >OP TICKET & PRESCRIPTION</a>
          <a href="cpass.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >CHANGE PASSWORD!!</a>
            <a href="index.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info" >BACK</a>
       </ul>
 </div>
</nav>
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
                               
                                $id=$_GET['id'];
                                            $sql    =   "SELECT m.*, p.*
                                                        FROM op m 
                                                        LEFT JOIN usertable p ON p.slno=m.dname
                                                        WHERE pid='$id'  ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row =mysqli_fetch_array($res)
                                         ?>
                            <?php
                                            $sql    = "SELECT * FROM patient
                                                        WHERE pid='$id' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row1 =mysqli_fetch_array($res)
                                         ?>
                               Patient Name:<?php echo $row1['name']  ?> <br>
                               Patient id:<?php echo $row['pid']  ?> <br>
                               Age:<?php echo $row1['age'];  ?> <br>
                               Specialization:<?php echo $row['spec']  ?> <br>
                               Doctor name:<?php echo $row['fullname']  ?><br>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <table class="table">
                                  <tr>
                           <th>DIOGNOSIS CONCLUSION</th>
                            <tr>
                                         <th>DISEASE NAME</th>
                                          <th>DATE</th>
                                   </tr>
                             <tr>
                                  <?php
                                $id=$_GET['id'];
                                            $sql    = "SELECT * FROM disease
                                                        WHERE pid='$id'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          while($rowt =mysqli_fetch_array($res)){
                                         ?>
                                  <tr>
                                    <td><?php echo $rowt['disease'] ?></td>
                                    <td><?php echo $rowt['date'] ?></td>
                                   </tr>
                                          <?php }?>
                                   <tr>
                                  <th>PRESCRIPTION</th>
                                   </tr>
                                   <tr>
                                         <th>Medicine</th>
                                         <th>Date</th>
                                          <th>Quantity</th>
                                   </tr>
                                   <?php
                                   $id=$_GET['id'];
                                            $sql    =    "SELECT m.*, p.*
                                                        FROM medicine m 
                                                        LEFT JOIN stockadd p ON p.slno=m.med
                                                        WHERE pid='$id'  ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                   ?>
                                   <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['qty'] ?></td>
                                   </tr>
                                            <?php }?>
                                   <br>
                                   <tr>
                                 <th>LAB TEST</th>
                                   </tr>
                                   <tr>
                                         <th>TEST NAME</th>
                                         <th>DATE</th>
                                         <th>RESULTS</th>
                                   </tr>
                                   <?php
                                   $id=$_GET['id'];
                                            $sql    =    "SELECT l.*, t.*
                                                        FROM labtest l 
                                                        LEFT JOIN testlist t ON l.medtest=t.id
                                                        WHERE pid='$id' AND l.labdelstatus='1' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                   ?>
                                   <tr>
                                    <td><?php echo $row['testname'] ?></td>
                                     <td><?php echo $row['date'] ?></td>
                                     <td><a href="../uploads/<?php echo $row['result'] ?>" target="_blank">View Doc<a></td>
                                   </tr>
                                            <?php }?>
                               </table>
                           </td>
                       </tr>
                 </thead>
             </table>
        </div>
    </div>
    </body>
</html>

