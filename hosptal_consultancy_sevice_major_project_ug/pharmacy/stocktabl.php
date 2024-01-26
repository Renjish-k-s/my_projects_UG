<?php include_once("../include/config.php"); ?>
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
            
            
                  <a href="producttable.php"  >    <div class="newo" ><label>PRODUCT TABLE</label></div></a>
            <a href="stocktabl.php" >   <div class="newo xl"><label>STOCK TABLE</label></div></a>

          

            
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
                                         $custid=$_SESSION['custid'];
                                            $sql    =   "SELECT * FROM product WHERE companyid='$custid' ORDER BY pid";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <form name="form1" method="post" action="">
                                            
                                             <?php
                                             $proid1=$row['pid'];
                                             $find="SELECT *,SUM(qty) as sum FROM medicine_order WHERE proid='$proid1' AND salerid='$custid' AND (status='1' OR status='3') GROUP BY proid";
                                              $check    =   mysqli_query($con, $find) or die(mysqli_query($con));
                                              $have =mysqli_fetch_array($check);
                                             @$sums = $have['sum'];
                                             ?>
                                         <tr>
                                              <td> <input type="text" class="form-control" name="slno" value="<?php echo $row['pid']; ?>" readonly size="30ppx" >  </td>
                                               
                                             
                                          <td><input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly size="30ppx" ></td>
        
                                           <td> <input type="text" class="form-control"  name="totalqty" value="<?php echo $row['totalqty']; ?>" readonly size="30ppx" >
                                                                            </td> 
                                           
                                              <td> <input type="text" class="form-control"  value="<?php echo $sums ; ?>" size="30ppx" >
                                                                              </td>
                            <td> <input type="text" class="form-control" value="<?php echo ($row['totalqty']-$sums ); ?>" size="30ppx" >
                                                                              </td>
                          <td> <input type="text" class="form-control" placeholder="NEW STOCK"  name="newstock" size="30ppx" >
                                                                              </td>
                                                                        
                                                                             
                                              
                                         <td>  <input type="submit"  class="btn btn-info" name="update" value="ADD" style="width: 110%;padding: 28px;"  ></td>
                                         </tr>

                                         </form>
                                            <?php } ?>
                                     </thead>
                                       </table>
  <?php
  if(isset($_POST['update']))
  {
      $id=$_POST['slno'];
      $total=($_POST['totalqty']+$_POST['newstock']);
      
      
       $sql4    = " UPDATE  product SET totalqty='$total' WHERE pid='$id' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));   
         echo "<script>alert('STOCK ADDED SUCESSFULLY')</script>";
                 echo "<script>window.location='stocktabl.php?id=$custid'</script>";   
  }  
  
  
  ?>
        
        
    </body>
</html>