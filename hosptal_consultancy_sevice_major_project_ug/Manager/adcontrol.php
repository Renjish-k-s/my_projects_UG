<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        body{
            background-color:  #13C5DD;
        }
       .div2{
            
            width: 100%;
    height: 210px;
    background-color:   #13C5DD;padding: 2px;
        }
           .h1x{
            
            text-align: center;
    font-size: xxx-large;
    color: white;
    margin-top: 69px;
        }
          .p1{
          text-align: center;
           color: white;
}
.container{
    
    background-color: none;
    height: 388px;
    margin-top: 51px;
   
}
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.33%;float: left;text-align: center;padding: 10px;height: 100%;}
.buttn{color: white;padding: 12px;}
.newo:hover{background-color: white; color: black;}
.neo{background-color: white;color: black}

  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                        <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            
            <a href="adcontrol.php"  ><div class="newo neo"><label>AD REQUESTS</label></div></a>
                            <a href="activead.php"  ><div class="newo"><label>AD ACTIVE</label></div></a>
            <a href="adhistory.php"  ><div class="newo"><label>AD HISTORY</label></div></a>

          
            

            
        </div>
        <form>
          <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>AD ID</th>
                                             <th>MEDICINE NAME</th>
                                              <th>QUANTITY</th>
                                               <th>PRICE</th>
                                             <th>OFFER DUE DATE</th>
                                         

                                         </tr>
                                         <?php
                                            $sql    =   "SELECT * FROM  ad_table WHERE status='0' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                             
                                              <td> <?php echo $row['ADid']; ?>   </td>
                                                 <?php
                                         $pid=$row['name'];
                                            $sql1    =   "SELECT * FROM  product WHERE pid='$pid' ";
                                            $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                            $row1 =mysqli_fetch_array($res1);
                                         ?>
                                             
                                          <td><?php echo $row1['name']; ?>  </td>
           <td><?php echo $row['quantity']; ?>  </td>
              <td><?php echo $row['price']; ?>  </td>
                                          <td><?php echo $row['duedate']; ?>  </td>
                                          <td> <a href="showad.php?id=<?php echo $row['id']; ?>" class="btn btn-info">VIEW DETAILS</a></td>
                    

                                         </tr>

                                     
                                            <?php } ?>
                                     </thead>
                                       </table>
                
        
            </form>
      
                                     
                                     
                     
    </body>
</html>