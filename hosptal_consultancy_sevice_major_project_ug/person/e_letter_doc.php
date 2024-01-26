<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <style>
          
.hx{margin-right: 63px; margin-top: 21px;}
.hx1{margin-top: 108px;}
.form-control{ width: 50%;}
           
            </style>
         <div  class="hx">
          <ul class="nav navbar-nav navbar-right">
         <a href="active_recucitment.php" style="background-color: black;margin-left: 25px;" class="btn btn-info" >BACK</a>
          </ul>
             </div>
        <?php
        $rec_id= base64_decode($_GET['id']);
        $sql    =   "SELECT * FROM recriutment_create_table WHERE  recruitment_id='$rec_id' ";
        $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
        $row =mysqli_fetch_array($res);
        ?>
            
            
       <?php
       $createrid=$row['creator_id'];
       $sql1    =   "SELECT * FROM  company_user WHERE custid='$createrid' ";
       $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
       $row1 =mysqli_fetch_array($res1);
        ?>  
               <?php
                 $pid=  $_SESSION['pid']; 
                 $sql    =   "SELECT * FROM common_login WHERE pid='$pid'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                $special =mysqli_fetch_array($res);
                                         ?>
    <div class="col-sm-12">
        <div class="panal-body">
            <div class="hx1">
            <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto;width: 1128px;;border:1px solid #ccc;">
                 <thead>
                     <tr>
                         <th style="text-align:center"><h3>HOSPITAL CONSULTANCY SERVICE</h3>
                             <p>WE ARE AT YOUR SERVICE</p>
                             
                         </th>
                       </tr>  
                          <tr>
                         <th style="text-align:center"><h3><?php echo $row1['fname']; ?></h3>
                             <p>Helpline no: +91 <?php echo  $row1['pnumber']; ?></p>
                             <h4 align="center">JOB NOTIFICATION</h4>
                         </th>
                       </tr>  
                       <tr>
                           <td style="text-align:left">
                               <table style="height: 300px;width: 100%;">
                                    <tr> 
                               <th>RECRUITMENT ID:</th>
                               <th><?php echo $row['recruitment_id']; ?></th>
                               </tr>
                                  <tr> 
                               <th>VACANCY REPORTED BY:</th>
                               <th><?php echo  $row1['fname']; ?></th>
                               </tr>
                                <tr> 
                               <th>COMPANY ADDRESS:</th>
                               <th><?php echo  $row1['address'].','.$row1['district'],','.$row1['state']; ?></th>
                               </tr>
                                <tr> 
                               <th>RECRUITMENT TYPE:</th>
                             <td ><?php if($row['category']=='prec'){ echo "PERMANENT";} else {    echo "TEMPORARY";}?></td> 
                               </tr>
                               <tr> 
                               <th>EMAIL ADDRESS:</th>
                               <th><?php echo  $row1['email']; ?></th>
                               </tr>
                                <tr> 
                               <th>FOR ENQUIRY:</th>
                               <th><?php echo  $row1['pnumber']; ?></th>
                               </tr>
                               <tr> 
                               <th>LAST DATE FOR APPLY:</th>
                               <th><?php echo $row['apply_end_date']; ?></th>
                               </tr>
                             </table>
                           </td>
                       </tr>
                       <tr>
                           <td>
                                <table class="table">
                                    <tr>
                                        <th> <h4 align="center">PRODUCT DETAILS</h4></th>

                                    </tr>
                                   <tr>
                                        <th>Sl No</th>
                                         <th>Post name</th>
                                          <th>Educational Qualification </th>
                                           <th>Age Limit </th>
                                      <th>Pay Scale</th>
                                      <th>No. of Vacancy</th>

                                   </tr>
                                    <?php
        $total=0;
        $t=1;
        $sql2    =   "SELECT * FROM recriutment_create_table WHERE  recruitment_id='$rec_id' ";
        $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
        while($row2 =mysqli_fetch_array($res2)){
        ?>
                                   
                                   <tr>
                                       <td><?php echo $t++; ?></td>
                                       <?php
                                       $mid=$row2['post_name'];
                                       $sql="SELECT * FROM  job_name WHERE  id='$mid'";
                                       $res=mysqli_query($con, $sql) or die(mysqli_query($con));
                                       $row5 =mysqli_fetch_array($res);
                                       ?>
                                        <td><?php echo $row5['job_name'];  ?></td>
                                        <?php
                                       $mid1=$row2['educational_qualification'];
                                       $sql="SELECT * FROM  qualification WHERE  id='$mid1'";
                                       $res=mysqli_query($con, $sql) or die(mysqli_query($con));
                                       $row6 =mysqli_fetch_array($res);
                                       ?>
                                        <td><?php echo $row6['typw_id']; ?></td>
                                         <td><?php echo $row2['age_from']."-".$row2['age_to'] ;  ?></td>
                                       <td><?php echo $row2['pay_from']."-".$row2['pay_to'] ;  ?></td>
                                        <td><?php echo $row2['no_vacancy'];  ?></td>

                                         
                                          <?php $total+=$row2['no_vacancy'];  ?>
                            <td><?php if($special['specialized']==$row2['educational_qualification']){?>
                                
                                <?php
                                $jid=$row2['id'];
                                $send_id=$_SESSION['pid'];
                                $sql="SELECT * FROM  application_box WHERE  job_id='$jid' AND applicant_id='$send_id' ";
                                $res=mysqli_query($con, $sql) or die(mysqli_query($con));
                               $num      =   mysqli_num_rows($res);

                                      if($num==0){
                                       ?>
                                <a href="apply.php?id=<?php echo $row2['id'];  ?>" class="btn btn-info" >CLICK TO APPLY</a>
                                      <?php } else {
     echo 'YOU HAVE ALREADY APPLIED';    
                                   }?>
                                
                            <?php }
                            else
                            {     echo 'NOT APPLICABLE FOR YOU';}?>
                                
                          </td>

                                   </tr>
                                   <?php  }?>
                                   <tr>
                                       <td colspan="6" style="text-align: right"> TOTAL VACANCY</td>
                                       <td><?php echo $total;  ?></td>
                                   </tr>
                               </table>
                                    
                                   <tr> 
                               <th  style="text-align: center">DESCRIPTION</th>
                               </tr>
                                <tr> 
                                    <th  style="text-align: center"><p><?php echo $row['description']; ?></p></th>
                               </tr>
                        
                           </td>
                       </tr>
                 </thead>
             </table>
                
                </div>
        </div>
    </div>
    </body>
</html>
