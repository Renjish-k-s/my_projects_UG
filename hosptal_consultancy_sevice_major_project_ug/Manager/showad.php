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
                            
              $adid=$_GET['id'];
       $sql    =   "SELECT * FROM ad_table WHERE id='$adid'";
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
                        <img src="../documents/<?php echo $row['image'] ;?>" >
                    </div>
                    <div class="pr_details">
                        <div class="pr_title"><?php echo $row1['name']; ?></div>
                        <div class="pr_desc"><?php echo $row1['sname']; ?></div>
                        <div class="pr_other">
                            <div class="pr_price">Qty: <?php echo $row['quantity']; ?></div>
                        </div>
                        <div class="pr_otherx">
                            <div class="pr_price" style="color: red;">RS: <?php echo $row['price']; ?>/-</div>
                        </div>
                        <div class="pr_otherx">
                            <div class="pr_price" style="color: black;">FIRM NAME:<?php echo $row2['fname']; ?></div>;
                        </div>
                        <div class="pr_otherx">
                            <div class="pr_price" style="color: red;">OFFER DUE DATE: <?php echo $row['duedate']; ?></div>
                        </div>
                         <div class="pr_otherx">
                            <div class="pr_price" style="color: black;"><?php  if($row['negstatus']=='YES'){
      echo 'PRICE NEGOTIABLE';
                                
                            } 
 else {
      echo 'PRICE NOT NEGOTIABLE';
 }?></div>
                        </div>

                   
                        <div class="pr_det">
       <a href="allow.php?id=<?php echo $row['id'] ;?>" style="padding: 18px;font-size: 15px;width: 198px;" class="btn btn-info">ALLOW AD</a>
                                    
                             
                        </div>
                    </div>
                </div>
                    
          

            </div>
                   </form>
         
        
        </div>
        
       
    </body>
    
</html>