<?php include_once("../../include/config.php"); ?>
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
.mainbar{
   width: 55%;
    height: 100px;
    margin: auto;
    background-color: white;
    margin-top: 15px;
    border-radius: 50px;
}
.image{
   width: 13%;
    height: 100%;
    background-color: none;
    float: left;
}
.name{ width: 70%;
height: 100%;    float: left;padding: 10px;
}
.alert1{width: 17%;
    height: 100%;
    float: left;}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    margin-top: 42px;
}
 </style>
    <body >
              <form  method="post" >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                      <a href="../index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
                  
                  
                  
                 
                            
       <?php
                   $sourse_id = $_SESSION['custid'];
                 $sql    =   "SELECT  * FROM chat_table WHERE destination_id='$sourse_id' OR sourse_id='$sourse_id' GROUP BY sourse_id ";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
         while ($row =mysqli_fetch_array($res)){
             
             $d=$row['sourse_id'];
              $sql2    =   "SELECT * FROM company_user WHERE active_status='1' AND custid='$d' ";
         $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
        $row2 =mysqli_fetch_array($res2);
        
        
        if($row2['custid']!=$sourse_id){
            
        $sourse_id3     = $row['sourse_id'];
       $destination_id3=$row['destination_id'];
         $sql3    =   "SELECT  * FROM chat_table WHERE (sourse_id='$sourse_id3' AND destination_id='$destination_id3') AND view_status='0'  ";
       $res3    =   mysqli_query($con, $sql3) or die(mysqli_query($con));
                                  $num      =   mysqli_num_rows($res3);

            
         ?>
                  
                  
                  
                <a href="startchat.php?id=<?php echo $row2['custid']; ?>">  <div class="mainbar">
                      <div class="image">
 <img src="../../documents/<?php echo $row2['company_picture']; ?>" style="border-radius: 111px;width:100%;height: 100%">
                      </div>
                      <div class="name">
                          <h2 style="color: black;font-size: 20px;"><?php echo $row2['fname']; ?></h2>
                      </div>
                        <div class="alert1">
                            <label><?php echo $num; ?> new messages</label>
                        </div>
                        
                  </div>   </a>        
                   <?php } ?>
         <?php } ?>
                 </form>
            
         
    </body>
</html>
