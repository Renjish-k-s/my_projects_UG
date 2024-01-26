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
.form-control{border-radius: 50px;}
.newo1{width: 33.33%;float: left;text-align: center;padding: 10px;}
.newo1:hover{background-color: greenyellow;}


</style>

    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            <div class="newo" ><a href="createtenderhospital.php" class="buttn" > CREATE TENDER</a></div>
            <div class="newo" style="background-color:white"><a href="todeliver.php" class="buttn" style="color:black">YOUR TENDERS</a></div>
        </div>
        
     <form>
          <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>SL NO.</th>
                                             <th>TENDER ID</th>
                                              <th>TENDER DUE DATE</th>
                                         </tr>
                                         <?php
                                         $i=1;
            $creatorid     = $_SESSION['custid'];
                                            $sql    =   "SELECT * FROM tenderdetails WHERE tender_creator_id='$creatorid' GROUP BY tender_id";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                                <td> <?php echo $i; ?>   </td>
                                              <td> <?php echo $row['tender_id']; ?>   </td>
                                                
                                          <td><?php echo $row['due_date']; ?>  </td>
                                          <td><a href="tenderstatement.php?id=<?php echo base64_encode($row['tender_id']); ?>"  class="btn btn-info" style="width: 48%;padding: 28px;">VIEW TENDER DETAILS</a></td>
                                          
                                          <td><a href="view_tender_submissions.php?id=<?php echo base64_encode($row['tender_id']); ?>"  class="btn btn-info" style="width: 48%;padding: 28px;background-color: blue">VIEW TENDER SUBMISSIONS</a></td>

                                         </tr>
                                            <?php $i++;
                                            
                                            } ?>
                                     </thead>
                                       </table>
            </form>
             
    </body>
</html>
