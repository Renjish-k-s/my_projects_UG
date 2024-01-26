<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
     <style>
 body{
               background-image: url(../home/home1.jpg);
    background-size: cover;
        }
.div2{width: 100%;    height: 262px;background-color:   none;}
.h1x{ text-align: center;font-size: 70px;color: white;margin-top: 69px;}
.p1{ text-align: center;color: white;}
.container{background-color: white;width: 62%;border-radius: 50px;}
.button{ color: #fff;background-color: #31b0d5;border-radius: 50px;padding: 70px;font-size: 14px;}
.main {
width: 58%;    height: 63%;
    margin-top: -64px;
    margin-left: 410px;
}.sub{width: 49%;
    height: 30%;
    float: left;
    padding: 77px;
    background-color: #31b0d5;
    border-radius: 50px;
    margin-top: 7px;
    margin-bottom: 10px;
    margin-left: 10px;}
.button:hover{background-color: #ccc;}
.sub:hover{background-color: #ccc;}
.lable1{    padding: 109px;color: white;font-weight: bold;}
.lable1:hover{    padding: 109px;color: black;}
.login{    width: 21%;
    height: 50%;
    margin-left: 10px;
    background-color: none;}
.image{    width: 30%;
    height: 100%;
    background-color: none; float: left;}
.name1{    float: left;
    width: 70%;
    height: 50%;
    background-color: none;}
.name2{ float: left;
    width: 70%;
    height: 50%;
    background-color: none;}
.h4, h4 {
    font-size: 20px;
    text-align: center;
    margin-top: 23px;
    font-weight: bold;
}
.name21{       width: 45%;
    height: 79%;
    background-color: black;
    float: left;
    margin-left: 10px;
    margin-top: 7px;}
img{
       height: 100%;
    width: 100%;
    border-radius: 72px;
}
.labx{        color: white;
    text-align: center;
    margin-top: 20px;}
.name22{       width: 45%;
    height: 79%;
    background-color: black;
    float: left;
    margin-left: 10px;
    margin-top: 7px;}
.name22:hover{background-color:blue;}
.name21:hover{background-color:red;}

  </style>
    <body >
         <?php
                 $custid=$_SESSION['custid']; 
                 $sql    =   "SELECT * FROM company_user WHERE custid='$custid'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                $row =mysqli_fetch_array($res)
                                         ?>
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <div class="login">
                <div class="image" style="background-image: url()">
                    <img src="../documents/<?php echo $row['company_picture']; ?>">
                </div>
                <div class="name1">
                    <h4 style="color:white"><?php echo $row['fname']; ?></h4>
                </div>
                <div class="name2">
                     <a href="../Login/Company_login.php"><div class="name21">
                       <h5 class="labx">LOGOUT</h5>
                </div></a>
                    <div class="name22" style="">
                                        <h5 class="labx">REPORT ERROR</h5>

                </div>
                </div>
            </div>
        </div>
       
            <div class="main">
                <?php if(($row['active_status'])=='0')   {?>
                <a href="update_pahramcy.php" >
              <div class="sub">
                       <lable class="lable1">UPDATE PROFILE</lable>   
                </div></a>
                <?php  }?>
                
                <?php if(($row['active_status'])=='1')   {?>
                 <a href="prepare_add.php" >
              <div class="sub">
                       <lable class="lable1">PREPARE AD</lable>   
                </div></a>
                 <a href="order.php" >
              <div class="sub">
                       <lable class="lable1">ORDER DETAILS</lable>   
                </div></a>
                <a href="producttable.php" >
              <div class="sub">
                       <lable class="lable1">STOCK STATUS</lable>   
                </div></a>
                   <a href="chat/index.php" >
              <div class="sub">
                       <lable class="lable1">MY CHATS</lable>   
                </div></a>
                <a href="notification.php" >
              <div class="sub">
                       <lable class="lable1">NOTIFICATION</lable>   
                </div></a>
              <a href="tenderview.php" >
              <div class="sub">
                       <lable class="lable1">VIEW TENDER</lable>   
                </div></a>
                 <a href="blog/index.php" >
              <div class="sub">
                       <lable class="lable1">BLOG WRITING</lable>   
                </div></a>
                <a href="report_vacancy/recucitment.php" >
              <div class="sub">
                       <lable class="lable1">REPORT VACANCY</lable>   
                </div></a>
 
              
                
               
                
                                  <?php  }?>

                
                 </div>
        
    </body>
    
</html>