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
    background-color:   #13C5DD;padding: 2px;
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
    margin-top: 51px;
   
}
.mainbar{width: 100%;height: 39px;background-color: black;float: left;}
.newo{width: 33.33%;float: left;text-align: center;height: 100%;padding: 10px;}
.buttn{color: white;padding: 12px;}
.newo:hover{background-color:white; color: black;}
.form-control{width: 75%;margin-left: 137px;height: 60px;}
.button{ color: #fff;background-color: #31b0d5;border-radius: 50px;padding: 70px;font-size: 14px;}

.main{width: 60%;
margin: auto;}
.sybmain{
      width: 49%;
    height: 227px;
    background-color: black;
    margin-top: 35px;
    border-radius: 70px;
    float: left;
        margin-left: 10px;
}
.half{
    float: left;
    width: 40%;
    height: 100%;
        background-color: aqua;
            border-radius:100px;
}
.half2{
    float: left;
    width: 60%;
    height: 100%;
}
.sybmain:hover{background-color: #ccc;}
  </style>
    
      <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>
        </div>
        <div class="mainbar">
            
            <a href="company_index.php"> <div class="newo" ><label >HOSPITALS</label></div></a>
           <a href="company_index_1.php"> <div class="newo" style="background-color:white"><label style="color:black;">PHARMACEUTICAL</label></div></a>
           <a href="company_index_2.php"> <div class="newo"><label>EQUIPMENT MANUFACTURERS</label></div></a>
           </div>
          
          <div class="main">
               <?php
               $sql    =   "SELECT * FROM  company_user WHERE ctype='PHARMACEUTICAL'";
               $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
               while($row =mysqli_fetch_array($res)){
                                         ?>
              <a href="stock/pharmacy_stocktable.php?id=<?php echo $row['custid']; ?>"><div class="sybmain">
               
                      <div class="half">
                          <img src="../documents/<?php echo $row['company_picture']; ?>" style="width:100%;height: 100%;border-radius: 100px;">
                      </div>
                      <div class="half2">
                          <label style="margin-top: 106px;margin-left: 13px;font-size: 23px;font-weight: 400;color: white;"><?php echo $row['fname']; ?></label>
                      </div>
                      
           </div></a>
              
               <?php } ?>
              </div>
              
              
              
          </div>
            
    </body>
</html>
