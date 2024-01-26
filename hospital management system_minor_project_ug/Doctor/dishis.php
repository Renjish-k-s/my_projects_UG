<?php include_once("../include/config.php"); ?>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        
    </head>
    <body>
        <style>
            .id1{
               width: 33.33%;
   background-color: #eee;
    height: 100%;
    margin-top: -17px;
            }
             .id2{
               width: 33.33%;
   background-color: #eee;
    height: 100%;
   margin-top: -747px;
    margin-left: 570PX;
            }
             .id3{
                  width: 33.33%;
  background-color: #eee;
    height: 100%;
    margin-top: -747px;
    margin-left: 1140px;
            }
            .idx{
                width: 100%;
    height: 100%;
            }
            </style>
         
        <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
   <ul class="nav navbar-nav navbar-right">
          <a href="details.php?id=<?php           
 echo $pid =$_GET['id'];
            ?>" class="btn btn-info" >BACK</a>
       </ul>
</div>
            <div class="idx">
        <div class="id1">
        <table id="tbl-patient" class="table table-responsive table bordered" border="0px" cellpadding="0" width="100">
            <thead>
                 <tr>
                                             
                                             <td>DISEASE HISTORY</td>
                                         </tr>
                <tr>
                   
                  
                    <th>DISEASE</th>
                    <th>DATE</th>
                    <th>TIME</th>

                 </tr> 
                 <tr>
                    <?php
                    $pid    =   $_GET['id'];
                                            $sql    =   "SELECT * FROM disease WHERE pid='$pid'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                            
                                            
                                             <td><?php echo $row['disease']; ?></td>
                                             <td><?php echo date("d-m-Y", strtotime($row['date'])); ?></td>
                     <td><?php echo $row['time']; ?></td>
                     
                 </tr>
                 <?php } ?>
        </table>
       
        </div>
            <div class="id2">
                 <table id="tbl-patient" class="table table-responsive table bordered" border="0px"  cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             
                                             <td>MEDICINE HISTORY</td>
                                         </tr>
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
            
            
             <div class="id3">
                 <table id="tbl-patient" class="table table-responsive table bordered" border="0px" cellpadding="0" width="100">
            <thead>
                 <tr>
                                             
                                             <td>TEST RESULTS</td>
                                         </tr>
                <tr>
                    <th>SL NO</th>
                  
                    <th>TEST NAME</th>
                    <th>DATE</th>
                    <th>TIME</th>

                 </tr> 
                 <tr>
                    <?php
                    $pid    =   $_GET['id'];
                                            $sql    =  "SELECT labtest.*,testlist.* FROM labtest LEFT JOIN testlist ON labtest.medtest=testlist.id WHERE pid='$pid'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            $i=1;
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                             <td><?php echo $i; ?></td>
                                            
                                             <td><?php echo $row['testname']; ?></td>
                                             <td><?php echo date("d-m-Y", strtotime($row['date'])); ?></td>
                                             <td><?php echo $row['time']; ?></td>
                       <td><?php if($row['labdelstatus']==1){ ?>
                          <a href="../uploads/<?php echo $row['result'] ?>" target="_blank">View Doc</a>
                      <?php } ?>
                                  <?php if($row['labdelstatus']==0){ ?>
                          <a href="">PENDING</a></td>
                      <?php } ?>
                 </tr>
                 <?php $i++; } ?>
        </table>
                 
            </div>
            
            
             </div>
    </body>
   </html>