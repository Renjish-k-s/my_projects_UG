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
              <form  method="post" >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
                    <?php
                        $query = "select MAX(cast(id  as decimal)) id from medicine_order";
                        $resc    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $rowc = mysqli_fetch_array($resc);
                         $count=$rowc['id'];
                         $count=$count+1;
                    ?>
                   <?php
                                    $prodi=$_GET['pid'];

$prodid=$_GET['id'];
 $cid=$_GET['cid'];
                  $sql2    =   "SELECT * FROM ad_table WHERE productid='$prodid'" ;
                      $res2   =   mysqli_query($con, $sql2) or die(mysqli_query($con));
                 $row2 =mysqli_fetch_array($res2)
                          ?>
                          <?php
                          $sql1    =   " SELECT * FROM company_user WHERE custid = '$cid' " ;
                      $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                 $row1 =mysqli_fetch_array($res1)
                 
                                             ?>
                   <?php
                          $sql3    =   " SELECT * FROM company_user WHERE custid = '$prodi' " ;
                      $res3    =   mysqli_query($con, $sql3) or die(mysqli_query($con));
                 $row3 =mysqli_fetch_array($res3)
                 
                                             ?>
                
                <div class="container" style="background-color: #ccc;">
                    
                          
                    <table class="container" style="background-color: #ccc;height: 415px;">
                          <tr>
                <th><h1 >APPLY FOR AD</h1></th>
            </tr><tr>
            
                           <th> <label class="form-label">BOOKING ID</label></th>
                           <th><input type="text" name="bid" class="form-control"  value="<?php echo "ORDER-".$count; ?>"  readonly></th>
                               <th> <label class="form-label">PRODUCT NAME</label></th>
                             <th><input type="text" class="form-control" name="pname" value="<?php echo $row2['name']; ?>" readonly></th>
                               
                       </tr>
                       <tr>
            
                           
                               <th> <label class="form-label">PRODUCT ID</label></th>
                             <th><input type="text" class="form-control" name="pid" value="<?php echo $row2['productid']; ?>" readonly></th>
                                <th> <label class="form-label">MODEL NO</label></th>
                             <th><input type="text" class="form-control" name="sname" value="<?php echo $row2['details']; ?>" readonly></th>
                       </tr>
                       <tr>
                            
                               <th> <label class="form-label">QUANTITY</label></th>
                             <th><input type="text" class="form-control" name="quat" value="<?php echo $row2['quantity']; ?>" readonly></th>
                               <th> <label class="form-label">TOTAL PRICE</label></th>
                           <th><input type="text" class="form-control" name="tprice"  value="<?php echo $row2['price']; ?>" readonly></th>
                       </tr>
                       
                        <tr>
                           <th> <label class="form-label">MANUFACTURER ID</label></th>
                           <th><input type="text" class="form-control" name="mid"  value="<?php echo $row2['custid']; ?>"readonly ></th>
                              <th> <label class="form-label">MANUFACTURER NAME</label></th>
                           <th><input type="text" class="form-control" name="mno"  value="<?php echo $row1['fname']; ?>" readonly></th>  
                               
                       </tr>
                          <tr>
                           <th> <label class="form-label">CUSTOMER ID</label></th>
                           <th><input type="text" class="form-control" name="cid"  value="<?php echo $row3['custid']; ?>" readonly></th>
                              <th> <label class="form-label">CUSTOMER NAME</label></th>
                           <th><input type="text" class="form-control" name="tprice"  value="<?php echo $row3['fname']; ?>" readonly></th>  
                               
                       </tr>
                         <tr>
                           
                             <th> <label class="form-label">PAYMENT MODE</label></th>
                           <th><select class="form-control"  name="mode" required>
                                    
                                     <option value="ONLINE">ONLINE</option>
                                     <option value="CASH ON DELIVERY">CASH ON DELIVERY</option>
                           
                               </select></th>
                               <th></th>
                               <th><input type="submit" name="send" value="CONFIRM BOOKING" class="btn btn-info"></th>
                                          </tr>
                       
                       

                    </table>
                    
                     
                </div>
                 </form>
                <?php  
                 if(isset($_POST['send'])){
                     
                    
                        $orderid   =   $_POST['bid'];
                       $productid     =   $_POST['pid'];
                       $paymode=  $_POST['mode'];
                       $midx= $_POST['mno'];
                     
                       $mid= $_POST['mid'];
                          $cid= $_POST['cid'];
                             $datebooked=  date("Y-m-d");
                                     
$sqlx    = " INSERT INTO  medicine_order(Bid,proid,salerid,custid,date_book,paymode) VALUES ('$orderid','$productid','$mid','$cid','$datebooked','$paymode')";
                          
       $resx    =   mysqli_query($con, $sqlx) or die(mysqli_query($con));    
        
       $message="YOUR ORDER HAS BEEN REGISTERED IN ORDER ID ". $orderid.".DELIVERY DATE WILL BE SEND SOON BY". $midx;
     
      $date       =   date("Y-m-d");
  
       
       
       $sqlx1    = " INSERT INTO  notification(reciverid,message,fromx,date) VALUES ('$cid','$message','$mid','$date')";
       
                          
       $resx1    =   mysqli_query($con, $sqlx1) or die(mysqli_query($con));    
       
        echo "<script>alert('$message')</script>";
        echo "<script>window.location='purchase_equipment.php?id=$cid'</script>";   
                          
                 
       
                 }
                
                
                ?>
         
    </body>
</html>
