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
            <a href="viewapplications.php?id=<?php echo base64_encode($_GET['cid']);?>&rid=<?php echo $_GET['c']; ?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

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
                                             <th style='text-align: center;'>FROM</th>
                                             <th style='text-align: center;'>PURPOSE</th>
                                             <th style='text-align: center;'>SEND DATE</th>

                                         </tr>
                                        
                                         <form name="form1" method="post" action="">
                                            <?php
                                            $i=1;
                                            $recid=$_GET['id'];
                                            $jid=$_GET['cid'];
                                             $sql    =   "SELECT * FROM e_letter_box WHERE  to_1='$recid' AND recr_id='$jid' ";
                                             $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                             while ($row =mysqli_fetch_array($res)){
                                            ?>
                                             
                                             <tr style="    height: 76px;">
                                                 
                                                 <td style="padding: 26px;"> <label><?php echo $i ; ?> </label> </td>
                                                 <?php
                                                 $c=$row['from_1'];
                                                 $sql1    =   "SELECT * FROM company_user WHERE custid='$c' ";
                                             $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                             $row1 =mysqli_fetch_array($res1);
                                           
                                           ?>
                                                 
                                                 
                                            <td style="padding: 26px;"> <label><?php echo $row1['fname']; ?> </label> </td>
                                      <td style="padding: 26px;"> <label><?php echo $row['type']; ?> </label> </td>
                               <td style="padding: 26px;"> <label><?php echo $row['date']; ?> </label> </td>
                                         <td style="text-align:center;padding: 26px;"><a href="document.php?id=<?php echo $row['id']; ?>&rid=<?php echo $_GET['c']; ?>" class="btn btn-info" style="width: 75%;height: 100% ;padding: 19px;font-size: revert;background-color: blue;">VIEW E-LETTER</a></td>
                                             </tr>
                                             <?php $i++; ?>
<?php }?>
                                          
                                     </thead>
                                       </table>
                                                 </form>

        
    </body>
</html>