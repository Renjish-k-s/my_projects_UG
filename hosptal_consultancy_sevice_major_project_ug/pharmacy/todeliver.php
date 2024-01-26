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
.newo{width: 33.33%;float: left;text-align: center;padding: 10px;height: 100%;}
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
            
            <a href="order.php" style="color:black">  <div class="newo " ><label>NEW ORDERS</label></div></a>
     <a href="todeliver.php"  >  <div class="newo xl" ><label>TO DELIVER</label></div></a>
                  <a href="deliveredorder.php"  >    <div class="newo" ><label>DELIVERED ORDERS</label></div></a>
           

          

            
        </div>
         
         <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>ORDER ID</th>
                                            
                                              <th>CUSTOMER NAME</th>
                                                 <th>PAYMENT MODE</th>
                                                    <th>DATE BOOKED</th>
                                                        <th>DELIVERY ESTIMATED DATE</th>
                                                         <th>CONFIRMATION CODE</th>
                                         </tr>
                                         <?php
                                         $custid=$_SESSION['custid'];
                                            $sql    =   "SELECT * FROM medicine_order WHERE salerid='$custid' AND status='1'  GROUP BY Bid";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <form name="form1" method="post" action="">
                                            
                                         <tr>
                                              <td> <?php echo $row['Bid']; ?>   </td>
                                             
        
                                      
                                           <?php
                                         $custid=$row['custid'];
                                            $sql12   =   "SELECT * FROM  company_user WHERE custid='$custid'";
                                            $res12    =   mysqli_query($con, $sql12) or die(mysqli_query($con));
                                            $row12 =mysqli_fetch_array($res12)
                                         ?>                             
                                           
                                          <td><?php echo $row12['fname']; ?>  </td>
                                          <td><?php echo $row['paymode']; ?>  </td>
                                            <td><?php echo $row['date_book']; ?>  </td>
                                                                            <td><?php echo $row['delivery_date']; ?>  </td>
                                       <input type="hidden" class="form control" name="oid" value="<?php echo $row['Bid']; ?>">
                                         <td><input type="text" class="form control" name="secret_code"></td>
                                         <td>  <input type="submit"  class="btn btn-info" name="validate" value="VALIDATE CODE" style="width: 95%;padding: 13px;"  ></td>
                                         <td>  <a href="delivery_sheet.php?id=<?php echo base64_encode($row['Bid']);?>"  class="btn btn-info" style="width: 95%;padding: 13px;"  >ORDER DETAILS</a></td>
                                         </tr>

                                         </form>
                                            <?php } ?>
                                     </thead>
                                       </table>
        <?php  
        if(isset($_POST['validate'])){
            
            $scode=$_POST['secret_code'];
                  $oid=$_POST['oid'];
        
            echo "<script>window.location='validate.php?scode=$scode&oid=$oid'</script>";   

        }
        
        ?>
                
        
        
        
    </body>
</html>