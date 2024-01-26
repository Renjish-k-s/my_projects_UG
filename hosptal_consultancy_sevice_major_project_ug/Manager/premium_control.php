<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
             <link rel="stylesheet" href="user_admin_control_page.css">

    </head>
 
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>
        </div>
        <div class="mainbar" style="background-color:blue;">
            
            <div class="newo"><a href="usercontrol.php" class="buttn" > COMPANY USER</a></div>
            <div class="newo"><a href="staff_control.php" class="buttn" >STAFF</a></div>
            <div class="newo"><a href="publiv_control.php" class="buttn"   >PUBLIC USERS</a></div>
                        <div class="newo"><a href="premium_control.php" class="buttn" style="background-color:white;color: black;" >PREMIUM USERS</a></div>


            
        </div>
        <div class="mainbar">
            
            <div class="newo"><a href="usercontrol.php" class="buttn" style="background-color:#13C5DD;" > USER REQUEST</a></div>
            <div class="newo"><a href="activeuser.php" class="buttn" >ACTIVE USERS</a></div>
            <div class="newo"><a href="suspenduser.php" class="buttn" >SUSPENDED USERS</a></div>
                        <div class="newo"><a href="usercomplaint.php" class="buttn" >USER COMPLAINTS</a></div>


            
        </div>
        <form>
          <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>CUSTOMER ID</th>
                                             <th>CUSTOMER NAME</th>
                                              <th>CUSTOMER TYPE</th>
                                              
                                         

                                         </tr>
                                         <?php
                                            $sql    =   "SELECT * FROM  company_user WHERE active_status='0' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                             
                                              <td> <?php echo $row['custid']; ?>   </td>
                                                
                                             
                                          <td><?php echo $row['name']; ?>  </td>
                                     <td><?php echo $row['ctype']; ?>  </td>
                                     <td><a href="customerdetails.php?id=<?php echo $row['custid']; ?>" class="btn btn-info">VIEW DETAILS</a></td>
                                   
                                          
                                         </tr>

                                     
                                            <?php } ?>
                                     </thead>
                                       </table>
                
        
            </form>
      
      
                                     
                                     
                     
    </body>
</html>