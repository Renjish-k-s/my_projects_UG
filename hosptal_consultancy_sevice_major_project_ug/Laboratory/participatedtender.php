<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
      <style>
        body{background-color:  #13C5DD;}
       .div2{width: 100%;height: 210px;background-color:   #13C5DD;padding: 2px;}
       .h1x{text-align: center;font-size: xxx-large;color: white;margin-top: 69px;}
       .p1{text-align: center;color: white;}
.container{background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{    width: 33.33%;float: left;text-align: center; height: 100%}
.buttn{color: white;padding: 12px;}
.newo:hover{ color: black; background-color: white;}
label{    margin-top: 10px;}

  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            
            <a href="tenderview.php" > <div class="newo" ><label >LATEST TENDERS</label></div></a>
            <a href="participatedtender.php"  > <div class="newo"  style="background-color:white;"><label style="color:black;">TENDER PARTICIPATED</label></div></a>
            <a href="acceptedtender.php" ><div class="newo"><label>TENDER ORDERS</label></div></a>
        </div>
        <form>
                 <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>TENDER ID</th>
                                             <th>COMPANY NAME</th>
                                             <th>TENDER SUBMITTED DATE</th>
                                              <th>TENDER DUE DATE</th>
                                         </tr>
                                         <?php
                                            $custid=$_SESSION['custid']; 
                         $sql    =   "SELECT tenderdetails.*,tenderquotes.* FROM tenderdetails LEFT JOIN tenderquotes ON tenderdetails.id= tenderquotes.pid WHERE custid='$custid' GROUP BY teid";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                              <td> <?php echo $row['teid']; ?>   </td>
                                                 <?php
                                         $createrid=$row['tender_creator_id'];
                                            $sql1    =   "SELECT * FROM  company_user WHERE custid='$createrid' ";
                                            $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                            $row1 =mysqli_fetch_array($res1);
                                         ?>
                                             
                                          <td><?php echo $row1['fname']; ?>  </td>
                                          <td><?php echo $row['subdate']; ?>  </td>
                                          <td><?php echo $row['due_date']; ?>  </td>
                                          <td><a href="tenderstatementrequest.php?id=<?php echo base64_encode($row['teid']); ?>"  class="btn btn-info" style="width: 110%;padding: 28px;">VIEW TENDER DETAILS</a></td>
                                         </tr>
                                            <?php } ?>
                                     </thead>
                                       </table>
         
            </form>
    </body>
</html>