<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <style>
          
           .hx
           {
                  margin-right: 63px; 
                      margin-top: 21px;
           }
           .hx1{
               
                   margin-top: 108px;
           }
           
            
           
            </style>
         <div  class="hx">
          <ul class="nav navbar-nav navbar-right">
         <a href="orderdetails.php" class="btn btn-info" >BACK</a>
          </ul>
             </div>
              <?php
                            
              $oid=$_GET['id'];
       $sql    =   "SELECT * FROM   medicine_order WHERE id='$oid'";
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 $row =mysqli_fetch_array($res)
         ?>
                  <?php
                            
              $c=$row['custid'];
       $sql2    =   "SELECT * FROM company_user WHERE custid='$c'";
                      $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
                 $row2 =mysqli_fetch_array($res2)
         ?>
                <?php
                            
              $pid=$row['proid'];
       $sql1    =   "SELECT * FROM  product WHERE pid='$pid'";
                      $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                 $row1 =mysqli_fetch_array($res1)
         ?>
              <?php
                            
              $sale=$row['salerid'];
       $sql4    =   "SELECT * FROM   company_user WHERE custid='$sale'";
                      $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));
                 $row4 =mysqli_fetch_array($res4)
         ?>
    <div class="col-sm-12">
        <div class="panal-body">
            <div class="hx1">
            <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto; width:1000px;border:1px solid #ccc;">
                 <thead>
                     <tr>
                         <th style="text-align:center"><h3>HOSPITAL CONSULTANCY SERVICE</h3>
                             <p>WE ARE AT YOUR SERVICE</p>
                             
                         </th>
                       </tr>  
                          <tr>
                         <th style="text-align:center"><h3><?php echo $row4['fname'] ?></h3>
                             <p>Helpline no: +91 98464 62723</p>
                             <h4 align="center">DELIVERY SHEET</h4>
                         </th>
                       </tr>  
                       <tr>
                           <td style="text-align:left">
                               <table style="height: 300px;width: 100%;">
                                    <tr> 
                               
                               <th>Order id:</th>
                               <th><?php echo $row['Bid']; ?></th>
                           
                               
                               <th>Manufacturer name: </th>
                               <th><?php echo $row4['fname'] ?> </th>
                               </tr>
                                <tr> 
                               <th>   Customer name:
                               </th>
                               <th>  <?php echo $row2['fname'] ?>     </th>
                               <th> Manufacturer address:  
                               </th>
                               <th><?php echo $row4['address'] ?> </th>
                             
                               
                               
                               </tr>
                                <tr> 
                               
                               <th>   Customer address:
                               </th>
                               <th><?php echo $row2['address'] ?> </th>
                              
                               
                               <th>   District:
                               </th>
                               <th><?php echo $row2['district'] ?> </th>
                               </tr>
                                  <tr> 
                               
                               <th>  State:
                               </th>
                               <th><?php echo $row2['state'] ?> </th>
                            
                               
                               <th>   Phone number:
                               </th>
                               <th><?php echo $row2['pnumber'] ?> </th>
                               </tr>
                                 <tr> 
                               
                               <th>    Booked date:
                               </th>
                               <th>    <?php echo $row['date_book']; ?>     </th>
                               
                               
                               <th>   Delivery date:
                               </th>
                               <th>  <?php echo $row['delivery_date']; ?>      </th>
                               </tr>
                                 <tr> 
                               
                               <th>  Payment status: 
                               </th>
                               <th> <?php  if($row['paymode']=='ONLINE'){
      echo 'PAID';
                                
                            } 
 else {
      echo 'CASH ON DELIVERY';
 }?></th>
                                <th>   Security code:
                               </th>
                               <th>  <?php echo $row['security_code']; ?>      </th>
                               </tr>
                             </table>
                           </td>
                       </tr>
                       <tr>
                           <td>
                                <table class="table">
                                    <tr>
                                        <th> <h4 align="center">BILL</h4></th>

                                    </tr>
                                   <tr>
                                        <th>Sl No</th>
                                         <th>Product name</th>
                                          <th>Quantity </th>
                                           <th>Price </th>
                                   </tr>
                                   <tr>
                                       <td>1</td>
                                        <td><?php echo $row1['name']; ?></td>
                                        <td><?php echo $row['qty']; ?></td>
                                         <td><?php echo $row['price']; ?></td>
                                          
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align: right"> Grand total</td>
                                         <td>Rs.<?php echo $row['price']; ?>/-</td>
                                   </tr>
                               </table>
                           </td>
                       </tr>
                 </thead>
             </table>
                </div>
        </div>
    </div>
    </body>
</html>
