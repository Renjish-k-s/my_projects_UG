<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <a href="opgeneraltable.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info" >BACK</a>
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
                             $date=$_GET['date'];
                              
                                            $sql    = "SELECT * FROM OP
                                                        WHERE pid='$id' AND rno='$date'  ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row =mysqli_fetch_array($res)
                                         ?>
                            <?php
                               
                                $id=$_GET['id'];
                             
                              
                                            $sql    = "SELECT * FROM patient
                                                        WHERE pid='$id' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          $row1 =mysqli_fetch_array($res)
                                         ?>
                              
                               Patient Name:<?php echo $row1['name']  ?> <br>
                               Patient id:<?php echo $row['pid']  ?> <br>
                               SPECIALIZATION:<?php echo $row['spec']  ?> <br>
                               Doctor name:<?php   ?> <br>
                               Date: <?php echo $row['rno']  ?> <br>
                              
                           </td>
                       </tr>
                     <tr>
                                       <th>DIAGNOSIS RESULT</th>
                                   </tr>
                                   <?Php
                                     $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql="SELECT disease FROM disease WHERE pid='$id' AND date='$date' ";
                                    $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                    $row =mysqli_fetch_array($res)
                                   ?>
                                   <tr>
                                       <td><?php echo $row['disease']; ?></td>
                                       
                                   </tr>
                       <tr>
                           <td>
                               <table class="table">
                                   <label>PRESCRIPTION</label>
                                   <tr>
                                       
                                         <th>Medicine</th>
                                          <th>Quantity</th>
                                          
                                   </tr>
                                   <?php
                                   $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql    =    "SELECT m.*, p.*
                                                        FROM medicine m 
                                                        LEFT JOIN stockadd p ON p.slno=m.med
                                                        WHERE pid='$id' AND date='$date' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          
                                            while($row =mysqli_fetch_array($res)){
                                         
                                   
                                   ?>
                                   <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['qty'] ?></td>
                                   </tr>
                                            <?php }?>
                                  
                                   <tr>
                                        <th>LAB TEST</th>
                                   </tr><!-- comment -->
                                   <tr>
                                         <th>Test name</th>
                                         
                                          
                                   </tr>
                                   <?php
                                   $id=$_GET['id'];
                                            $date   =   $_GET['date'];
                                            $sql    =     "SELECT l.*, t.*
                                                        FROM labtest l 
                                                        LEFT JOIN testlist t ON l.medtest=t.id
                                                        WHERE pid='$id' AND date='$date' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                          
                                            while($row =mysqli_fetch_array($res)){
                                         
                                   
                                   ?>
                                   <tr>
                                    <td><?php echo $row['testname'] ?></td>
                                    
                                   </tr>
                                            <?php }?>
                                   
                                   
                               </table>
                               
                           </td>
                       </tr>
                 </thead>
             </table>
        </div>
    </body>
</html>
