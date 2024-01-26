<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php include_once("../../include/config.php"); ?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
          <style>
body{background-color:  #13C5DD;}
.div1{background-color: #ccc;width: 39%;height: 470px;margin-top: -99px;margin-left: 514px;}
.div2{ width: 100%;height: 210px;background-color:   #13C5DD;}
.h1x{ text-align: center;font-size: xxx-large;color: white;margin-top: 69px;}
.p1{text-align: center;color: white;}
.calx{background-color: #ccc;height: 495px;width: 50%; margin-left: 428px;}
.form-control{ width: 70%;
    height: 42px;
    border-radius: 14px;}
           
            </style>
               <?php
                        $query = "select MAX(cast(id  as decimal)) id from medicine_order";
                        $resc    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $rowc = mysqli_fetch_array($resc);
                         $count=$rowc['id'];
                         $count=$count+1;
                    ?>
            
            
              <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
              <a href="view_tender_submissions.php?id=<?php echo base64_decode($_GET['id']); ?>" style="background-color: black;margin-left: 25px;" class="btn btn-info" >BACK</a>

        </div>
            </table>
            <form method="post">

                    <table class="container" style="background-color: #ccc;border-radius: 50px;">
               <input type="hidden" name="code" class="form-control"  value="<?php echo "11".$count."0"; ?>"  >
<input type="hidden" name="bid" class="form-control"  value="<?php echo "ORDER-".$count; ?>"  >
                          <tr>
                           <th style="text-align: center;height: 63px;">PRODUCT ID</th>
                              <th style="text-align: center;height: 63px;">PRODUCT NAME</th>
                           <th>PRODUCT QUANTITY</th>
                            <th>ESTIMATE PRICE</th>
                          </tr>
                           <?php
        $tenderid1= base64_decode($_GET['id']);
        $cid= base64_decode($_GET['cid']);
        $sql = "SELECT tenderdetails.*,tenderquotes.* FROM tenderdetails LEFT JOIN tenderquotes ON tenderdetails.id= tenderquotes.pid WHERE tender_id='$tenderid1' AND custid='$cid'  ";
                         $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                          while($row =mysqli_fetch_array($res)){
                                         ?>
<tr style="text-align: center;    height: 55px;">
    <?php
       $name=$row['product_name'];
        $sql1    =   "SELECT * FROM   product WHERE name='$name' ";
      $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
      $row1 =mysqli_fetch_array($res1);
                                         ?>
<th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;margin-left: 60px;" name="product[]" value="<?php echo $row1['pid']; ?> " required="on"></th>



<th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;"  value="<?php echo $row['product_name']; ?> " required="on"></th>
<th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;" name="quat[]" value="<?php echo $row['product_quantity']; ?> " required="on"></th>
<th style="text-align: center;"><input type="text" class="form-control" style="    text-align: center;" name="price[]"  value="<?php echo $row['quoteamm']; ?>" required="on"></th>

                       </tr>
                       
                        
                          <?php  }?>
                        <tr style="text-align: center;    height: 118px;">
                            <th style="text-align: center;"><select class="form-control"  name="mode" style="text-align: center;    margin-left: 95px;"required>
                                     <option value="ONLINE">ONLINE</option>
                                     <option value="CASH ON DELIVERY">CASH ON DELIVERY</option>
                           
                               </select></th>
<th style="text-align: center;"><input type="submit" name="send" value="SUBMIT" class="btn btn-info" style="width: 61%;height: 54px;margin-left: 84px;"><th>
</tr>
                            
                     
                    </table>
                                                                      </form>
             <?php
        if(isset($_POST['send']))
        {   
           $orderid   =   $_POST['bid'];
             $code=$_POST['code'];
             $mid= base64_decode($_GET['cid']);
             $cid= $_SESSION['custid'];
             $paymode=  $_POST['mode'];
               $noset='1';
            $product      =   $_POST['product'];
            $quat       =   $_POST['quat'];
            $price       =   $_POST['price'];
            $count      =   count($product);
            $datebooked=  date("Y-m-d");
            $product_type      =  $_POST['product_type'];
            for($i="0"; $i<=$count; $i++){
              $product1     =   $product[$i];
               $quat1        =   $quat[$i];
               $price1        =   $price[$i];
                if($product1!=""){
$sql    = " INSERT INTO  medicine_order(Bid,proid,salerid,custid,date_book,paymode,qty,price,security_code,noofset) VALUES ('$orderid','$product1','$mid','$cid','$datebooked','$paymode','$quat1','$price1','$code','$noset')";
                    $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
                }
            }
            echo "<script>alert('BOOKING SUCCESSFUL ')</script>";
        echo "<script>window.location='yourtenders.php'</script>";

        $update="UPDATE tenderdetails SET  status='10' WHERE tender_id='$tenderid1' ";
        $updatex= mysqli_query($con,$update);
        
        $weak    =   "UPDATE tenderquotes SET  status='10' WHERE custid='$mid' AND teid='$tenderid1' ";
                
                $result    =   mysqli_query($con,$weak) or die(mysqli_query($con));
        
        }
        ?>
    </body>
</html>
