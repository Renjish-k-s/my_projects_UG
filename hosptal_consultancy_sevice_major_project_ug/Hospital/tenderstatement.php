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
           
           .form-control{
                   width: 50%;
           }
           
            </style>
         <div  class="hx">
          <ul class="nav navbar-nav navbar-right">
         <a href="yourtenders.php" style="background-color: black;margin-left: 25px;" class="btn btn-info" >BACK</a>
          </ul>
             </div>
        <?php
        $tenderid= base64_decode($_GET['id']);
        $sql    =   "SELECT * FROM tenderdetails WHERE  tender_id='$tenderid' ";
        $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
        $row =mysqli_fetch_array($res)
        ?>
       <?php
       $createrid=$row['tender_creator_id'];
       $sql1    =   "SELECT * FROM  company_user WHERE custid='$createrid' ";
       $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
       $row1 =mysqli_fetch_array($res1);
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
                         <th style="text-align:center"><h3><?php echo $row1['fname']; ?></h3>
                             <p>Helpline no: +91 98464 62723</p>
                             <h4 align="center">TENDER STATEMENT</h4>
                         </th>
                       </tr>  
                       <tr>
                           <td style="text-align:left">
                               <table style="height: 300px;width: 100%;">
                                    <tr> 
                               
                               <th>Tender id:</th>
                               <th><?php echo $row['tender_id']; ?></th>
                           
                               
                             
                               </tr>
                                <tr> 
                               <th>   Customer name:
                               </th>
                               <th>  <?php  echo $row1['fname'];  ?>     </th>
                              
                             
                               
                               
                               </tr>
                                <tr> 
                               
                                <th> Customer address:  
                               </th>
                               <th><?php echo $row1['address'];  ?> </th>
                               </tr>
                               <tr> 
                               <th>   District:
                               </th>
                               <th><?php echo $row1['district'];  ?></th>
                               </tr>
                                  <tr> 
                               
                               <th>  State:
                               </th>
                               <th><?php echo $row1['state'];  ?> </th>
                            
                             
                               </tr>
                                 <tr> 
                               
                               <th> Tender due date:
                               </th>
                               <th> <?php echo $row['due_date'];  ?></th>
                               
                               
                              
                               </tr>
                             
                             </table>
                           </td>
                       </tr>
                       <tr>
                           <td>
                                <table class="table">
                                    <tr>
                                        <th> <h4 align="center">PRODUCT DETAILS</h4></th>

                                    </tr>
                                   <tr>
                                        <th>Sl No</th>
                                         <th>Product name</th>
                                          <th>Quantity </th>
                                           <th>Price </th>
                                   </tr>
                                    <?php
        $total=0;
        $t=1;
        $tenderid1=base64_decode($_GET['id']);
        $sql2    =   "SELECT * FROM tenderdetails WHERE  tender_id='$tenderid1' ";
        $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
        while($row2 =mysqli_fetch_array($res2)){
        ?>
                                   <tr>
                                       <td><?php echo $t++; ?></td>
                                        <td><?php echo $row2['product_name'];  ?></td>
                                        <td><?php echo $row2['product_quantity']; ?></td>
                                         <td><?php echo $row2['product_price'];  ?></td>
                                          <?php $total+=$row2['product_price'];  ?>
                                   </tr>
                                   <?php  }?>
                                   <tr>
                                       <td colspan="4" style="text-align: right"> Grand total</td>
                                       <td>Rs.<?php echo $total;  ?>/-</td>
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
