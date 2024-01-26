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
.mainsheet{width: 72%;
    margin-left: 345px;}
.mainsheet:hover{background-color: #ccc;}

.subsheet{    width: 100%;
    height: 100px;
    float: left;background-color: none;}
.image{width: 10%;
    height: 100%;
    border-radius: 111px;background-color: none;
float: left;}
.mainmessage{
    width: 90%;
    height: 100%;
    float: left;background-color: none;
}
.name{    width: 100%;
    height: 37%;
    float: left;background-color: none;}
.message{ width: 100%;
height: 63%;
float: left;padding: 10px; background-color: none;}


    </style>
    <body >
              <form  method="post" >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                      <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
                                
              <?php
                         $reciverid= $_SESSION['custid'];
                         $sql  =   " SELECT * FROM notification WHERE reciverid = '$reciverid' ORDER BY id desc " ;
                         $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));  ?>
                  
                  
                  
                  
                      <?php
                         while ($row =mysqli_fetch_array($res)){

        ?>
          <?php
                            
              $saleid=$row['fromx'] ;
       $sql2    =   "SELECT * FROM  company_user WHERE custid='$saleid'";
         $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
                 $row2 =mysqli_fetch_array($res2)
         ?>
                                    <div class="mainsheet">

                      <div class="subsheet">
                          <div class="image">
                              <img src="../documents/<?php echo $row2['company_picture']; ?>" style="border-radius: 111px;width:100%;height: 100%">
                              </div>
                          <div class="mainmessage">
                              <div class="name">
                                  <div style="float:left;width: 60%;height: 100%;"> <h1 style="font-size: 19px;font-weight: 700;"><?php echo $row2['fname']; ?></h1></div>

                                  <div style="float:left;width: 40%;height: 100%;"><p><?php echo $row['date'].$row['time']; ?></p></div>

                                  </div>
                              <div class="message">
                                  <p><?php echo $row['message']; ?></p>
                              </div>
                              
                          </div>
                                                    </div>

                          </div>
                         <?php }?>
             
                 </form>
            
         
    </body>
</html>
