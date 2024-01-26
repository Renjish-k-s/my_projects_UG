<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        body{
            background-color:  #13C5DD;
        }
        .div1{
           background-color: #ccc;
    width: 39%;
   height: 470px;
    margin-top: -99px;
    margin-left: 514px;
        }
        .div2{
            
            width: 100%;
    height: 210px;
    background-color:   #13C5DD;
        }
        .h1x{
            
            text-align: center;
    font-size: xxx-large;
    color: white;
    margin-top: 69px;
        }
    .form-control{
        width: 62%;
    height: 55px;
    margin-left: 117px;
        
    }
   .p1{
          text-align: center;
           color: white;
}
.calx{
    
  background-color: #ccc;
    height: 495px;
    width: 50%;
    margin-left: 428px;
}
    </style>
    <body >
              <form action="" method="post" enctype="multipart/form-data">
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
                 
                
                <div class="container" style="background-color: #ccc;">
                    
                          
                    <table class="container" style="background-color: #ccc;height: 630px;">
                          <tr>
                            
                              <th><h1 style="text-align: center;" ><ul>ORDER DETAILS</ul></h1></th>
            </tr><tr>
               
                 <?php
                            
              $oid=$_GET['id'];
       $sql    =   "SELECT * FROM   medicine_order WHERE id='$oid'";
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 $row =mysqli_fetch_array($res)
         ?>
                  <?php
                            
              $c=$row['custid'];
       $sql2    =   "SELECT * FROM   company_user WHERE custid='$c'";
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
           $oid1=$_GET['id'];
             $sqlx    =   "SELECT *,SUM(qty) as s FROM product LEFT JOIN medicine_order ON product.pid=medicine_order.proid WHERE  medicine_order.id='$oid'    GROUP BY proid; ";
             $resx    =   mysqli_query($con, $sqlx) or die(mysqli_query($con));
            $rowx =mysqli_fetch_array($resx)
                                         ?>
                
                
                           <th> <label class="form-label">ORDER ID</label></th>
                             <th><input type="text"  class="form-control" name="oid" value="<?php echo $row['Bid']; ?>"  ></th>
                               <th> <label class="form-label">PRODUCT ID</label></th>
                             <th><input type="text" class="form-control" value="<?php echo $row1['pid']; ?>"></th>

                       </tr>
                       <tr>
                           <th> <label class="form-label">PRODUCT NAME</label></th>
                           <th><input type="text" class="form-control" value="<?php echo $row1['name']; ?>" ></th>
                               <th> <label class="form-label">QUANTITY</label></th>
                             <th><input type="text" class="form-control" value="<?php echo $row['qty']; ?>" required></th>
                               
                       </tr>
                         <tr>
                           <th> <label class="form-label"> PRICE</label></th>
                           <th><input type="text" class="form-control" value="<?php echo $row['price']; ?>" ></th>
                           <th> <label class="form-label">PAYMENT STATUS</label></th>
                             <th><input type="text" class="form-control" value="<?php  if($row['paymode']=='ONLINE'){
      echo 'PAID';
                                
                            } 
 else {
      echo 'CASH ON DELIVERY';
 }?>" required></th>
                           
                               
                       </tr>
                         <tr>
                               <th> <label class="form-label">CUSTOMER NAME</label></th>
                        <th><textarea class="form-control" rows="5" cols="10"    value="" ><?php echo $row2['fname'] ?></textarea></th>
                           <th> <label class="form-label"> CUSTOMER ADDRESS</label></th>
                           <th><textarea class="form-control" rows="5" cols="10"    value="" ><?php echo $row2['address'].$row2['pincode']; ?></textarea></th>
                            
                               
                       </tr>
                         <tr>
                              <th> <label class="form-label">DISTRICT</label></th>
                             <th><input type="text" class="form-control" value="<?php echo $row2['district']; ?>"required></th>
                           <th> <label class="form-label"> STATE</label></th>
                           <th><input type="text" class="form-control" value="<?php echo $row2['state']; ?>" ></th>
                             
                               
                       </tr>
                        <tr>
                            <?php if(($rowx['totalqty']-$rowx['s'])>=$row['qty']) { ?>
                           <th> <label class="form-label"> DELIVERY DATE</label></th>
                           <th><input type="date" class="form-control" name="ddate"  ></th>
                            <?php  } else {
  
?>  <th> <label class="form-label"> OUT OF STOCK</label></th>
                            <?php  }?>
                               
                     
                              <th> <label class="form-label"> STOCK FEASIBILITY</label></th>
                            <?php if(($rowx['totalqty']-$rowx['s'])>=$row['qty']) { ?>
                           <th><input type="text" class="form-control" value="SUCCESS"  ></th>
                            <?php  } else {
  
?>  <th> <label class="form-label">   <th><input type="text" class="form-control" value="OUT OF STOCK"  ></th></label></th>
                            <?php  }?>
                               
                       </tr>
                       <tr>
                       <th><input type="submit" name="send" value="SEND DELIVERY DATE" class="btn btn-info"></th>
                                          </tr>

                    </table>
                    
                     
                </div>
                 </form>
                <?php  
                 if(isset($_POST['send'])){
                     $ddate=$_POST['ddate'];
                     $oid=$_POST['oid'];
                     $id=$row['salerid'];
                      
$sql4    = " UPDATE medicine_order SET delivery_date='$ddate',status='1' WHERE Bid='$oid' ; ";
                          
       $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));                                               
        echo "<script>alert('DATE WILL BE SEND TO CUSTOMER')</script>";
        echo "<script>window.location='order.php?id=$id'</script>";   
                          
                 
       
                 }
                
                
                ?>
            </form>
        
    </body>
</html>
