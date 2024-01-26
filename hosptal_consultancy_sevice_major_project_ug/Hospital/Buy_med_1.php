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
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    margin-left: 20px;
}
    </style>
    <body >
              <form  method="post" >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="showequipment.php?aid=<?php echo $_GET['aid'];?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
                    <?php
                        $query = "select MAX(cast(id  as decimal)) id from medicine_order";
                        $resc    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $rowc = mysqli_fetch_array($resc);
                         $count=$rowc['id'];
                         $count=$count+1;
                    ?>
                    <?php
                            
              $adid= base64_decode($_GET['aid']);
       $sql    =   "SELECT * FROM ad_table WHERE ADid='$adid'";
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 $row =mysqli_fetch_array($res)
         ?>
                   <?php
                            
              $pid=$row['name'];
       $sql1    =   "SELECT * FROM  product WHERE pid='$pid'";
                      $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                 $row1 =mysqli_fetch_array($res1)
         ?>
                 <?php
                            
              $saleid=$row['company'] ;
       $sql2    =   "SELECT * FROM  company_user WHERE custid='$saleid'";
                      $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
                 $row2 =mysqli_fetch_array($res2)
         ?>
                    <input type="hidden" name="code" class="form-control"  value="<?php echo "11".$count."0"; ?>"  readonly>
                          
                    <table class="container" style="background-color: #ccc;height: 415px;    background-color: #ccc;
    height: 415px;
    border-radius: 50px;
    margin: auto;">
                          <tr>
                <th colspan="4"><h1 style="text-align:center;">ORDER DETAILS</h1></th>
            </tr><tr>
            
                           <th> <label class="form-label">BOOKING ID</label></th>
                           <th><input type="text" name="bid" class="form-control"  value="<?php echo "ORDER-".$count; ?>"  readonly></th>
                               <th> <label class="form-label">PRODUCT NAME</label></th>
                             <th><input type="text" class="form-control" name="pname" value="<?php echo $row1['name']; ?>" readonly></th>
                               
                       </tr>
                  <input type="hidden" class="form-control" name="pid" value="<?php echo $row['name']; ?>" readonly>
                             
                         <input type="hidden" class="form-control" name="sname" value="<?php echo $row1['sname']; ?>" readonly>
                     <tr>
                            
                               <th> <label class="form-label">QUANTITY</label></th>
                             <th><input type="text" class="form-control" name="quat" value="<?php echo $row['quantity']; ?>" readonly></th>
                               <th> <label class="form-label"> PRICE</label></th>
                           <th><input type="text" class="form-control" name="tprice"  value="<?php echo $row['saleprice']; ?>" readonly></th>
                       </tr>
                       
                       <tr>
                          <input type="hidden" class="form-control" name="mid"  value="<?php echo $row2['custid']; ?>"readonly >
                              <th> <label class="form-label">MANUFACTURER NAME</label></th>
                           <th><input type="text" class="form-control" name="mno"  value="<?php echo $row2['fname']; ?>" readonly></th>  
                               <th> <label class="form-label">PAYMENT MODE</label></th>
                           <th><select class="form-control"  name="mode" required>
                                    
                                     <option value="ONLINE">ONLINE</option>
                                     <option value="CASH ON DELIVERY">CASH ON DELIVERY</option>
                           
                               </select></th>
                       </tr>
                           <tr>
                              <th> <label class="form-label">No.of set</label></th>
                           <th><input type="text" class="form-control" name="noset"  required></th>  
                           <th></th>
                           <th  style="text-align:center;"><input type="submit" name="send" style="padding: 15px;   
    margin-left: 80px;
    padding-right: 85px;" value="CONFIRM BOOKING" class="btn btn-info"></th>

                       </tr>
                        
                              
                               
                     
                         <tr>
                           
                             
                                          </tr>
                       
                       

                    </table>
                    
                     
                 </form>
                <?php  
                 if(isset($_POST['send'])){
                     
                     $noset= $_POST['noset'];
                        $orderid   =   $_POST['bid'];
                       $productid     =   $_POST['pid'];
                       $paymode=  $_POST['mode'];
                       $quat= $_POST['quat']*$_POST['noset'];
                                              $tprice= $_POST['tprice']*$_POST['noset'];

                     
                       $mid= $_POST['mid'];
                          $cid= $_SESSION['custid']; 
                             $datebooked=  date("Y-m-d");
                             $code=$_POST['code'];
                                     
$sqlx    = " INSERT INTO  medicine_order(Bid,proid,salerid,custid,date_book,paymode,qty,price,security_code,noofset) VALUES ('$orderid','$productid','$mid','$cid','$datebooked','$paymode','$quat','$tprice','$code','$noset')";
                          
       $resx    =   mysqli_query($con, $sqlx) or die(mysqli_query($con));    
        
       $message="YOUR ORDER HAS BEEN REGISTERED IN ORDER ID ". $orderid.".DELIVERY DATE WILL BE SEND SOON";
     
      $date       =   date("Y-m-d");
  
       
       
       $sqlx1    = " INSERT INTO  notification(reciverid,message,fromx,date) VALUES ('$cid','$message','$mid','$date')";
       
                          
       $resx1    =   mysqli_query($con, $sqlx1) or die(mysqli_query($con));    
       
        echo "<script>alert('$message')</script>";
        echo "<script>window.location='normedicine.php?id=$cid'</script>";   
                          
                 
       
                 }
                
                
                ?>
         
    </body>
</html>
