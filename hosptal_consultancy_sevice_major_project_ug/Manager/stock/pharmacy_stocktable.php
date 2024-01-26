<?php include_once("../../include/config.php"); ?>
<html>
    <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    </head>
       <style>
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;    border: 1px solid white;}
.newo{width: 20%;float: left;text-align: center;padding: 10px;height: 100%;}
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
                    <a href="../company_index_1.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
     
               <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>PRODUCT ID</th>
                                             <th>MEDICINE NAME</th>
                                             <th>TOTAL QUANTITY</th>
                                              <th>SOLD QUANTITY</th>
                                              <th>BALANCE</th>
                                           
                                         </tr>
                                         <?php
                                         $custid=$_GET['id'];
                                            $sql    =   "SELECT *,SUM(qty) as s FROM product LEFT JOIN medicine_order ON product.pid=medicine_order.proid WHERE companyid='$custid' AND (medicine_order.status='1' OR medicine_order.status='3') GROUP BY proid ORDER BY pid";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <form name="form1" method="post" action="">
                                            
                                         <tr>
                                              <td> <input type="text" class="form-control" name="slno" value="<?php echo $row['pid']; ?>" readonly size="30ppx" >  </td>
                                               
                                             
                                          <td><input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly size="30ppx" ></td>
        
                                           <td> <input type="text" class="form-control"  name="totalqty" value="<?php echo $row['totalqty']; ?>" readonly size="30ppx" >
                                                                            </td> 
                                           
                                              <td> <input type="text" class="form-control"  value="<?php echo $row['s']; ?>" size="30ppx" >
                                                                              </td>
                            <td> <input type="text" class="form-control" value="<?php echo ($x=$row['totalqty']-$row['s']); ?>" size="30ppx" >
                                                                              </td>
                          
                                                                             
                                               <?php if($x<1000) {?>
                                              
                                                                            <td>  <a href=""  class="btn btn-info"  style="background-color: red;" >DANGEROUSLY STOCK LOW</a></td>
                                                                             </tr><?php }?>
                                                                             <?php if($x>1000&&$x<10000) {?>
                                              
                                                                            <td>  <a href=""  class="btn btn-info"  style="width: 100%;background-color: yellow;color:black;" >LOW STOCK</a></td>
                                                                             </tr><?php }?>
                                                                              <?php if($x>10000) {?>
                                              
                                                                            <td>  <a href=""  class="btn btn-info"  style="width: 100%;background-color: white;color:black;" >SAFE</a></td>
                                                                             </tr><?php }?>


                                         </tr>

                                         </form>
                                            <?php } ?>
                                     </thead>
                                       </table>
 
        
    </body>
</html>