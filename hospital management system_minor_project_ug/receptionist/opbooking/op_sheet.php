<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <div  class="hx">
          <ul class="nav navbar-nav navbar-right">
         <a href="index.php" class="btn btn-info" >BACK</a>
          </ul>
             </div>
         <style>
          
           .hx
           {
                  margin-right: 63px; 
                      margin-top: 21px;
           }
           .hx1{
               
                   margin-top: 108px;
           }
           </style>
   
        <div class="hx">
            <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto; width:1000px;border:1px solid #ccc;">
                 <thead>
                     <tr>
                         <th style="text-align:center"><h3>KANJIRAMKULAM MEDICAL COLLEGE</h3>
                             <p>come fast go fast</p>
                             <p>Phone: +91 98464 62723</p>
                             <h4 align="center">OP TICKET</h4>
                         </th>
                       </tr>  
                       <tr>
                           <td style="text-align:left">
                               <?php 
                              
                            $id     =   $_GET['id'];
                            $sql    =   "SELECT * FROM op WHERE ono='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
                               <?php 
                              
                            $id     =   $_GET['pid'];
                            $sql    =   "SELECT * FROM patient WHERE pid='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row1     =   mysqli_fetch_array($res);
                        ?>
                               <?php 
                              
                            $id     =   $_GET['dname'];
                            $sql    =   "SELECT * FROM usertable WHERE fullname='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row2     =   mysqli_fetch_array($res);
                        ?>
                                
                               
                               Patient Name:<?php echo $row1['name'] ?>   <br>
                               Patient id:<?php echo $row['pid'] ?>       <br>
                               Doctor type:<?php echo $row['spec'] ?>      <br>
                               Doctor name:<?php echo $row2['fullname']  ?>      <br>
                               Op date:<?php echo $row['rno'] ?>        <br>
                               Room no:<?php echo $row2['rno'] ?>        <br>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <table class="table">
                                   <tr>
                                            <th>Consultation fee</th>
                                   </tr>
                                   <tr>
                                        <td></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align: right"> Total</td>
                                       <td><?php echo $row2['fee']."/-"  ?></td>
                                   </tr>
                               </table>
                           </td>
                       </tr>
                 </thead>
             </table>
        </div>
    </body>
</html>
