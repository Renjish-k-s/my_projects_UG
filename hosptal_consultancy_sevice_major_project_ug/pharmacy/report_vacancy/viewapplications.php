<?php include_once("../../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    
    
<style>
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.33%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.lablex{color: white;}
</style>

    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="more_details.php?id=<?php echo $_GET['rid'];?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
      <a href="recucitment.php" >   <div class="newo"><lable class="lablex" >NEW RECRUITMENT</lable></div>    </a>
      <a href="active_recucitment.php" >   <div class="newo" ><lable class="lablex">ACTIVE RECRUITMENT</lable></div>    </a>
      <a href="job_request.php" >   <div class="newo"  style="background-color:white"><lable class="lablex" style="color:black;">JOB REQUESTS</lable></div>    </a>
        </div>
                                                 <form method="post">

          <table id="tbl-patient" class="table table-responsive table bordered tab_a" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th style='text-align: center;'>SL NO</th>
                                            <th style='text-align: center;'>APPLICANT NAME</th>
                                             <th style='text-align: center;'>APPLICATION SUBMITTED DATE</th>
                                             <th style='text-align: center;' >POST NAME</th>
                                             <th style="text-align:right;" colspan="4"><a href="E-letter_1.php?cid=<?php echo $_GET['id']; ?>&c=<?php echo $_GET['rid'] ; ?>" class="btn btn-info" style="width: 40%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">SEND E-LETTER(ALL)</a></th>


                                         </tr>
                                         <?php
                                         $i=1;
                                         $id= base64_decode($_GET['id']);
                                            $sql    =   "SELECT * FROM application_box WHERE job_id='$id' AND status='0' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row1 =mysqli_fetch_array($res)){
                                         ?>
                                            <?php
                                            $job_id=$row1['job_id'];
                                             $sql1    =   "SELECT * FROM recriutment_create_table WHERE  id='$job_id' ";
                                             $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                              $row =mysqli_fetch_array($res1);
                                              $recid1=$row['recruitment_id'];
                                            ?>
                                         <?php
                                            $job_id1=$row['post_name'];
                                             $sql2    =   "SELECT * FROM job_name WHERE  type='$job_id1' ";
                                             $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
                                              $row5 =mysqli_fetch_array($res2);
                                            ?>
                                          <?php
                                            $jid=$row1['applicant_id'];
                                             $sql3    =   "SELECT * FROM  common_login WHERE  pid='$jid' ";
                                             $res3    =   mysqli_query($con, $sql3) or die(mysqli_query($con));
                                              $row6 =mysqli_fetch_array($res3);
                                            ?>
                                             
                                             <tr style="    height: 76px;">
                                                 <td style="padding: 26px;"> <label><?php echo $i ; ?> </label> </td>
                                         <td style="padding: 26px;"> <label><?php echo $row6['name']; ?> </label> </td>
                                         <td style="padding: 26px;"> <label><?php echo $row1['date']; ?> </label> </td>
                                         <td style="padding: 26px;"> <label><?php echo $row5['job_name']; ?> </label> </td>
                                               <?php if ($row6['utype']=='DOCTOR') {?>
                                         <td style="text-align:center;padding: 26px;"><a href="update_recrutdoctor_1.php?id=<?php echo base64_encode($jid); ?>&c=<?php echo $_GET['rid'] ; ?>&m=<?php echo $_GET['id'] ; ?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">VIEW PROFILE</a></td>
                                               <?php } ?>
                                           
                                           <?php if($row6['utype']=='NURSE') {?>
                                           
                                           <td style="text-align:center;padding: 26px;"><a href="update_recrutnurse_1.php?id=<?php echo base64_encode($jid); ?>&c=<?php echo $_GET['rid'] ; ?>&m=<?php echo $_GET['id'] ; ?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">VIEW PROFILE</a></td>
                                               
                                               <?php } ?>
                                           <td style="text-align:center;padding: 26px;"><a href="E-letter.php?id=<?php echo base64_encode($jid); ?>&cid=<?php echo base64_encode($job_id); ?>&c=<?php echo $_GET['rid'] ; ?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">SEND E-LETTER</a></td>
 <td style="text-align:center;padding: 26px;"><a href="show_letter.php?id=<?php echo $jid; ?>&cid=<?php echo $job_id; ?>&c=<?php echo $_GET['rid'] ; ?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">SHOW SEND E-LETTER</a></td>
             <td style="text-align:center;padding: 26px;"><a href="person_reject.php?id=<?php echo $row1['id']; ?>&cid=<?php echo $job_id; ?>&c=<?php echo $_GET['rid'] ; ?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: red;">REJECT</a></td>

                                             </tr>

                                            <?php $i++; } ?>
                                     </thead>
                                       </table>
                                                 </form>

        
    </body>
</html>