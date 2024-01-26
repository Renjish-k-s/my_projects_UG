<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
      <style>
body{background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:   #13C5DD;padding: 2px;}
.h1x{text-align: center;font-size: xxx-large;color: white;margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{background-color: none;height: 388px;margin-top: 51px;}
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 20%;float: left;text-align: center; height: 100%;padding: 2px}
.buttn{color: white;}
.pr_box{    background: #fff; width: 48%; padding: 30px;  border-radius: 10px; float: left;     min-height: 265px;    margin-right: 1%;
    margin-bottom: 1%;}
.pr_img{ width: 48%; float: left; }
.pr_img img{ width: 100%; height: 200px; }
.pr_details{float: right;    width: 48%; }
.pr_title{ font-size: 20px;  font-weight: 700; color: #ff0303; margin-top: 10px; float: left; width: 100%; }
.pr_desc{    float: left;  width: 100%;  font-size: 15px; margin-top: 10px; margin-bottom: 10px;}
.pr_other{ float: left; width: 100%;     margin-top: 20px; margin-bottom: 20px;} 
.pr_price{ float: left; font-size: 20px;  font-weight: 700; color: #106cb0;}
.pr_qty{ float: right; }
.pr_det{ float: left; width: 100%; }
.search{width: 50%;height: 69px;    margin-top: 30px; margin-left: 502px;}
.control{width: 72%;height: 88%;border-radius: 44px;font-size: 25px;text-align: center;}
.newo1{padding: 2px;width: 33.33%;float: left;text-align: center;height: 100%;}
.newo1:hover{background-color: greenyellow; color: white;}
.newo:hover{background-color: blue; color: white;}

.bar{width: 100%;
    float: left;
    height: 60px;
    background-color: white;
    border-top: 10px solid blue;
    
}
.bar1{
         height: 100%;
    float: left;
    width: 33.33%;
    border-width: 10px;
    
}
.head{
        text-align: center;
        font-size: 24px;
        font-weight: 700;
            color: black;
margin-top: 10px;}
.bar1:hover{ border-bottom:10px solid blue; background-color: #ccc;}
.bar2{background-color: #ccc;}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    color: red;
}

  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
         <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>
           
        </div>
       <div class="bar">
               <a href="normedicine.php" > <div class="bar1 ">
                <h4 class="head">MEDICINE</h4>
            </div></a>
                <a href="norequipments.php" > <div class="bar1">
                <h4 class="head">LAB MACHINES & EQUIPMENTS</h4>
            </div></a>
                <a href="orderdetails.php" > <div class="bar1 bar2">
                <h4 class="head">MY ORDERS</h4>
            </div></a>
            
            </div>
        <div class="mainbar" style="background-color: blueviolet;">
            
            <a href="orderdetails.php" class="buttn"  ><div class="newo1" > <h4><i>LATEST ORDERS</i></h4></div></a>
                        <a href="abouttodeliver.php" class="buttn"  ><div class="newo1" > <h4><i>ABOUT TO DELIVER</i></h4></div></a>
                        <a href="deliveredorder.php" class="buttn"  ><div class="newo1" style="background-color: blue;"> <h4 ><i>DELIVERED ORDERS</i></h4></div></a>

           
            
        </div>
                                                  <form name="form1" method="post" action="">

            <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                           <th>ORDER ID</th>
                                           <th>PRODUCT NAME</th>
                                           <th>DATE BOOKED</th>
                                           <th>DELIVERY ESTIMATED DATE</th>
                                         </tr>
                                         <?php
                                         $custid=$_SESSION['custid'];
                                            $sql    =   "SELECT * FROM medicine_order WHERE custid='$custid' AND status='3' ORDER BY delivery_date desc";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                              <td> <?php echo $row['Bid']; ?>   </td>
                                               <?php
                                         $proid=$row['proid'];
                                            $sql1   =   "SELECT * FROM  product WHERE pid='$proid'";
                                            $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                            $row1 =mysqli_fetch_array($res1)
                                         ?>
                                             
                                          <td><?php echo $row1['name']; ?>  </td>
                                            <td><?php echo $row['date_book']; ?>  </td>
                                           <td>DELIVERY SUCCESSFULLY ACCOMPLISHED 
                                                     
                                         </td>
                                             
                                             
                                         <td>  <a href="delivery_sheet.php?id=<?php echo $row['id'];?>"  class="btn btn-info" style="width: 95%;padding: 13px;"  >ORDER DETAILS</a></td>
                                         </tr>

                                            <?php } ?>
                                     </thead>
                                       </table>
                
                                                 </form>

        
    </body>
</html>