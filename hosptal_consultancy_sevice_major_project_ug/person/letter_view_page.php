<?php include_once("../include/config.php"); ?>
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
.newo{width: 50%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.lablex{color: white;font-weight: bold;}
td{ padding: 5px 15px;}
th{     padding: 25px 18px;}
label{    margin-left: 14px;font-size: larger;}
</style>

    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
      <a href="active_recucitment.php" >   <div class="newo" ><lable class="lablex" >ACTIVE RECRUITMENT</lable></div>    </a>
      <a href="job_request.php" >   <div class="newo" style="background-color:white" ><lable class="lablex" style="color:black;">APPLICATION STATUS</lable></div>    </a>
        </div>
         
                                                 <form method="post">

          <table id="tbl-patient" class="table table-responsive table bordered tab_a" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th style='text-align: center;'>RECRUITMENT ID</th>
                                             <th style='text-align: center;'>SEND DATE</th>
                                             <th style='text-align: center;'>TYPE</th>

                                         </tr>
                                         <?php
                                         $id=$_SESSION['pid'];
                                         $jid=$_GET['jid'];
                                            $sql    =   "SELECT * FROM  e_letter_box WHERE to_1='$id' AND recr_id='$jid'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row1 =mysqli_fetch_array($res)){
                                         ?>
                                         <form name="form1" method="post" action="">
                                            <?php
                                            $job_id=$row1['recr_id'];
                                             $sql    =   "SELECT * FROM recriutment_create_table WHERE  id='$job_id' ";
                                             $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                              $row =mysqli_fetch_array($res)
                                            ?>
                                             <tr style="    height: 76px;">
                                                 <td style="padding: 26px;"> <label><?php echo $row['recruitment_id']; ?> </label> </td>
                                    <td style="padding: 26px;"> <label><?php echo $row1['date']; ?> </label> </td>
                                    <td style="padding: 26px;"> <label><?php echo $row1['type']; ?> </label> </td>
<td style="text-align:center;padding: 26px;"><a href="e_letter_doc.php?id=<?php echo $job_id ;?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">E-LETTER</a></td>
                                             </tr>

                                            <?php } ?>
                                     </thead>
                                       </table>
                                                 </form>

        
    </body>
</html>