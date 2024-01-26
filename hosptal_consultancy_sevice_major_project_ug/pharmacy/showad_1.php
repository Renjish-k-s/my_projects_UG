<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        body{
            background-color:  #13C5DD;
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
          .p1{
          text-align: center;
           color: white;
}
.container{
    
    background-color: none;
    height: 388px;
   
}

.pr_box{    background: #fff;  padding: 30px;  border-radius: 10px; float: left;     min-height: 265px;    margin-right: 1%;
    margin-bottom: 1%;width: 100%;
    height: 124%;}
.pr_img{ width: 48%; float: left; }
.pr_img img{ width: 100%; height: 100%; }
.pr_details{float: right;    width: 48%; }
.pr_title{ font-size: 42px;  font-weight: 700; color: #ff0303; margin-top: 10px; float: left; width: 100%; }
.pr_desc{    float: left;  width: 100%;  font-size: 25px; margin-top: 10px; margin-bottom: 10px;}
.pr_other{ float: left; width: 100%;     margin-top: 20px; margin-bottom: 20px;} 

.pr_price{ float: left; font-size: 20px;  font-weight: 700; color: #106cb0;}
.pr_qty{ float: left; font-size: 20px;font-weight: 700;}

.pr_det{ float: left; width: 100%; }

.pr_otherx{ float: left; width: 100%;     margin-top: -9px; margin-bottom: 20px;} 

  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
        <div class="container">
                   <form  method="post">

            <div class="products">
                <?php
                            
              $adid= base64_decode($_GET['id']);
       $sql    =   "SELECT * FROM ad_table WHERE ADid='$adid'";
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 $row =mysqli_fetch_array($res)
         ?>
                   <?php
                            
              $pid=$row['name'] ;
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
                
                <div class="pr_box">
                    <div class="pr_img">
                        <img src="../product_image/<?php echo $row['image'] ;?>" >
                    </div>
                    <div class="pr_details">
                        <div class="pr_title"><?php echo $row1['name']; ?></div>
                        <div class="pr_desc"><?php echo $row1['sname']; ?></div>
                         <div class="pr_otherx">
                             <div class="pr_price" style="color: black;"><label style="background-color:red;"><?php echo $row2['fname']; ?></label></div>;
                        </div>
                        <div class="pr_other">
                            <div class="pr_price">Qty: <?php echo $row['quantity'].' '.'nos'; ?></div>
                        </div>
                        <?php if( $row['adtype']=='0') { ?>
                        
                        <div class="pr_otherx">
                            <div class="pr_price" style="color: red;">RS: <?php echo $row['price']; ?>/-</div>
                        </div>
                        <?php } ?>
                         <?php if( $row['adtype']=='1') { ?>
                        
                        <div class="pr_otherx">
                            <div class="pr_price" style="color: red;"><label>ON RS: <?php echo $row['saleprice']; ?>/-</label></div>
                        </div>
                         <div class="pr_otherx">
                            <div class="pr_price" style="color: red;"><label>MRP: <S><?php echo $row['price']; ?></S><?php echo "(".(100-$row['percentage'])."%off)"; ?></label></div>
                        </div>
                        <?php } ?>
                        
                        
                       
                        <div class="pr_otherx">
                            <div class="pr_price" style="color: red;"><?php echo "off till(".$row['duedate'].")"; ?></div>
                        </div>
                         <div class="pr_otherx">
                            <div class="pr_price" style="color: black;"><?php  if($row['negstatus']=='YES'){
      echo 'PRICE NEGOTIABLE';
                                
                            } 
 else {
      echo 'PRICE NOT NEGOTIABLE';
 }?></div>
                        </div>

                   <div class="pr_otherx">
                       <input type="submit" name="send" value="SAVE AND SEND FOR VALIDATION" style="padding: 14px;" class="btn btn-info">
                       <input type="submit" name="delete" value="DELETE"  style="background-color:red;padding: 14px;"class="btn btn-info">
                        </div>
                        
                    </div>
                </div>
                    
          

            </div>
                   </form>
         
        
        </div>
        <?php
        if(isset($_POST['send'])){
            
            
            
             $sql    = "UPDATE ad_table SET send_status='1' WHERE ADid='$adid' ";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));      
                        echo "<script>alert('SAVED AND SEND FOR ADMIN VALIDATION')</script>";

                       echo "<script>window.location='prepare_add.php'</script>";   

        }
         if(isset($_POST['delete'])){
            
            $d="DELETE FROM `ad_table` WHERE ADid='$adid' ";
            $delete= mysqli_query($con,$d);
            echo "<script>alert('AD DELETED')</script>";
           echo "<script>window.location='prepare_add.php'</script>";   

        }
        
        ?>
       
    </body>
    
</html>