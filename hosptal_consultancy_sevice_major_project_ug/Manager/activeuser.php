<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
   <style>
        body{ background-color:  #13C5DD;       }
.div2{                  width: 100%;   height: 210px;  background-color:   #13C5DD;padding: 2px  }
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{background-color: none;height: 388px;margin-top: 51px;}
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.33%;float: left;text-align: center;color: white;}
.buttn{color: white;padding: 12px;}
.newo:hover{background-color: black; color: white;}
.newo1{width: 25%;float: left;text-align: center;}
.newo1:hover{background-color:skyblue;}

.head1{color: white;}
        
        </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>
        </div>
           <div class="mainbar" style="background-color:blue;">
            
            <a href="usercontrol.php"  ><div class="newo" style="background-color:white;color: black;"><h4>COMPANY USER</h4></div></a>
                        <a href="staff_control.php" ><div class="newo"><h4>STAFF USER</h4></div></a>
                        <a href="publiv_control.php" ><div class="newo"><h4>PERSON USER</h4></div></a>
        </div>
        
              
       <div class="mainbar">
           <a href="usercontrol.php" ><div class="newo1" ><h4 class="head1">USER REQUEST</h4></div></a>
            <a href="activeuser.php" ><div class="newo1" style="background-color:skyblue;color: black;"><h4 class="head1">ACTIVE USERS</h4></div></a>
            <a href="suspenduser.php" ><div class="newo1"><h4 class="head1">SUSPENDED USERS</h4></div></a>
            <a href="usercomplaint.php" ><div class="newo1"><h4 class="head1">USER COMPLAINTS</h4></div></a>
        </div>
        
        <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>CUSTOMER ID</th>
                                             <th>CUSTOMER NAME</th>
                                              <th>CUSTOMER TYPE</th>
                                              
                                         

                                         </tr>
                                         <?php
                                            $sql    =   "SELECT * FROM  company_user WHERE active_status='1' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                             
                                              <td> <?php echo $row['custid']; ?>   </td>
                                                
                                             
                                          <td><?php echo $row['name']; ?>  </td>
                                     <td><?php echo $row['ctype']; ?>  </td>
                                     <td><a href="suspenduserx.php?id=<?php echo $row['custid']; ?>" class="btn btn-info" style="background-color:red;">SUSPEND</a></td>
                    <td><a href="customerdetails.php?id=<?php echo $row['custid']; ?>" class="btn btn-info">VIEW DETAILS</a></td>
                                   
                                          
                                         </tr>

                                     
                                            <?php } ?>
                                     </thead>
                                       </table>
                
                                     
                                     
                     
    </body>
</html>