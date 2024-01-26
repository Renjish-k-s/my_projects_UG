<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php include_once("../include/config.php"); ?>

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
.form-control{ width: 50%;}
           
            </style>
              <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="tenderstatement.php?id=<?php echo base64_encode($_SESSION['tenderid']); ?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
            </table>
            <form method="post">

                    <table class="container" style="background-color: #ccc;border-radius: 50px;">
                         
                          <tr>
                           <th style="text-align: center;height: 63px;">PRODUCT ID</th>
                              <th style="text-align: center;height: 63px;">PRODUCT NAME</th>
                           <th>PRODUCT QUANTITY</th>
                            <th>ESTIMATE PRICE</th>
                             <th>QUOTE YOUR PRICE</th>
                          </tr>
                           <?php
                           $tenderid1=$_SESSION['tenderid'];
                        $sql    =   "SELECT * FROM tenderdetails WHERE tender_id='$tenderid1'";
                         $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                          while($row =mysqli_fetch_array($res)){
                                         ?>
                       <tr style="text-align: center;    height: 55px;">
                          <th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;margin-left: 101px;" name="id[]" value="<?php echo $row['id']; ?> " required="on"></th>
                           <th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;margin-left: 101px;"  value="<?php echo $row['product_name']; ?> " required="on"></th>
                             <th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;"  value="<?php echo $row['product_quantity']; ?> " required="on"></th>
                             <th style="text-align: center;"><input type="text" class="form-control" style="    text-align: center;"  value="<?php echo $row['product_price']; ?>/- " required="on"></th>
                       <th style="text-align: center;"><input type="text" class="form-control" style="text-align: center;" name="price[]"  required="on"></th>

                       </tr>
                       
                        
                          <?php  }?>
                        <tr style="text-align: center;    height: 118px;">         
<th><input type="submit" name="send" value="SUBMIT" class="btn btn-info" style="width: 61%;height: 54px;margin-left: 84px;"><th>
</tr>
                            
                     
                    </table>
                                                                      </form>
              <?php
        if(isset($_POST['send']))
        {   
       $tenderid1=$_SESSION['tenderid'];
       $tender_new= base64_encode($tenderid1);
        $id       =    $_POST['id'];
       $custid=$_SESSION['custid']; 
        $newprice       =    $_POST['price'];
        $subdate=date("Y-m-d");
            $count      =   count($id);
         
            for($i="0"; $i<=$count; $i++){
              $id1     =   $id[$i];
               $newprice1        =   $newprice[$i];
                if($id1!=""){
 $sql = "INSERT INTO  tenderquotes (pid,teid,custid,quoteamm,subdate) VALUES ('$id1','$tenderid1','$custid','$newprice1','$subdate')";
     $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
                }
            }
            echo "<script>alert('TENDER SENDED SUCESSFULLY')</script>";
            echo "<script>window.location='tenderstatement.php?id=$tender_new'</script>";

        }
        ?>
    </body>
</html>
