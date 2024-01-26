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
.mainbar{width: 100%;height: 39px;    border: 1px solid white;}
.newo{width: 50%;float: left;text-align: center;padding: 10px;height: 100%;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    color: white;
}
.xl{    background-color: saddlebrown;}
</style>


    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            
           
                  <a href="producttable.php"  >    <div class="newo xl" ><label>PRODUCT TABLE</label></div></a>
            <a href="stocktabl.php" >   <div class="newo"><label>STOCK TABLE</label></div></a>

          

            
        </div>
        <form method="POST">
         <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                       
                                         <tr>
                                             <th>PRODUCT ID</th>
                                             <th>MEDICINE NAME</th>
                                             <th>GENERIC NAME</th>
                                              <th>USE FOR</th>
                                               <th> <a href="stockadd.php"  class="btn btn-info" style="width: 95%;padding: 13px;"   >ADD NEW MEDICINE</a></th>

                                         </tr>
                                         <?php
                                         $custid=$_SESSION['custid'];
                                            $sql    =   "SELECT * FROM product WHERE companyid='$custid' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                              <td> <?php echo $row['pid']; ?>   </td>
                                               
                                             
                                          <td><?php echo $row['name']; ?>  </td>
        
                                          <td><?php echo $row['sname']; ?>  </td>
                                                                            
                                           
                                          <td><?php echo $row['usefor']; ?>  </td>
                                                                        
                                          <td> <a href="stockadd_1.php?id=<?php echo $row['pid']; ?> " class="btn btn-info" >UPDATE</a></td>
                                         </tr>

                                      
                                            <?php } ?>
                                     </thead>
                                       </table>
                  </form>
                
             
       
        
    </body>
</html>