<?php include_once("../../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        body{background-color:  #13C5DD;}
       .div2{ width: 100%;height: 210px;background-color:   #13C5DD;}
       .h1x{text-align: center;font-size: xxx-large;color: white;margin-top: 69px;}
        .p1{text-align: center; color: white;}
.container{background-color: #ccc;color: white;height: 830px;}
 .form-control{width: 62%;height: 55px;margin-left: 233px;}
   .mainx{width: 72%;
    height: 300%;
   
    margin: auto;}
   .search{width: 50%;height: 69px;    margin-top: 30px; margin-left: 502px;}
.control{width: 72%;height: 89%;border-radius: 20px 0px 0px 20px;text-align: left;float: left;border: 0px;font-size: 19px;padding: 0px 23px;}
.controlx{padding: 22px;height: 61px;border-radius: 0px 20px 20px 0px;line-height: 13px;margin-right: -9px;float: left;border: 0px; background: #f00; color: #fff; }
         
    
    :root {
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --border: 2px solid #ddd;
  --left-msg-bg: #ececec;
  --right-msg-bg: #579ffb;
}

html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

    .msger {
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
  width: 100%;
  max-width: 100%;
  margin: 25px 10px;
  height: calc(100% - 50px);
  border: var(--border);
  border-radius: 5px;
  background: var(--msger-bg);
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
}

.msger-header {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  border-bottom: var(--border);
  background: #eee;
  color: #666;
}

.msger-chat {
  flex: 1;
  overflow-y: auto;
  padding: 10px;
}
.msger-chat::-webkit-scrollbar {
  width: 6px;
}
.msger-chat::-webkit-scrollbar-track {
  background: #ddd;
}
.msger-chat::-webkit-scrollbar-thumb {
  background: #bdbdbd;
}
.msg {
  display: flex;
  align-items: flex-end;
  margin-bottom: 10px;
}
.msg:last-of-type {
  margin: 0;
}
.msg-img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
  background: #ddd;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 50%;
}
.msg-bubble {
  max-width: 450px;
  min-width: 450px;
  padding: 15px;
  border-radius: 15px;
  background: var(--left-msg-bg);
}
.msg-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}
.msg-info-name {
  margin-right: 10px;
  font-weight: bold;
}
.msg-info-time {
  font-size: 0.85em;
}

.left-msg .msg-bubble {
  border-bottom-left-radius: 0;
}

.right-msg {
  flex-direction: row-reverse;
}
.right-msg .msg-bubble {
  background: var(--right-msg-bg);
  color: #fff;
  border-bottom-right-radius: 0;
}
.right-msg .msg-img {
  margin: 0 0 0 10px;
}

.msger-inputarea {
  display: flex;
  padding: 10px;
  border-top: var(--border);
  background: #eee;
}
.msger-inputarea  {
  padding: 10px;
  border: none;
  border-radius: 3px;
  font-size: 1em;
}
.msger-input {
  
    flex: 1;
    background: #ddd;
    border: 1px solid #a1a1a1;
    padding: 10px;
    border-radius: 10px;

}
.msger-send-btn {
  margin-left: 10px;
    background: rgb(0, 196, 65);
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.23s;
    width: 70px;
    border: 1px solid #009c34;
}
.msger-send-btn:hover {
  background: rgb(0, 180, 50);
}

.msger-chat {
  background-color: #fcfcfe;}
    
    
    
    </style>
    <body >
       
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href="index.php" class="btn btn-info" style="margin-left: 1563px;
    height: 40px;
    width: 99px; background-color: black;">BACK</a>
    
        <div class="mainx">
        
            <section class="msger">
                <header class="msger-header">
                  <div class="msger-header-title">
                    <i class="fas fa-comment-alt"></i> Chat
                  </div>
                  <div class="msger-header-options">
                    <span><i class="fas fa-cog"></i></span>
                  </div>
                </header>

                    
                    
                        <main class="msger-chat">
                             <?php
                   $sourse_id     = $_SESSION['custid'];
                   $destination_id=$_GET['id'];
                 $sql    =   "SELECT  * FROM chat_table WHERE (sourse_id='$sourse_id' AND destination_id='$destination_id') OR (sourse_id='$destination_id' AND destination_id='$sourse_id') ";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while($row =mysqli_fetch_array($res)){
                     
                     
                     
              ?>
                             <?php
                            
              $saleid=$sourse_id;
       $sql2    =   "SELECT * FROM  company_user WHERE custid='$saleid'";
         $res2    =   mysqli_query($con, $sql2) or die(mysqli_query($con));
                 $source =mysqli_fetch_array($res2)
         ?>
                             <?php
                            
              $saleid1=$destination_id ;
       $sql21    =   "SELECT * FROM  company_user WHERE custid='$saleid1'";
         $res21    =   mysqli_query($con, $sql21) or die(mysqli_query($con));
                 $destination =mysqli_fetch_array($res21)
         ?>
                            <?php
                            $update="UPDATE chat_table SET view_status='1' WHERE sourse_id='$destination_id' AND destination_id='$sourse_id' ";
                           $c    =   mysqli_query($con, $update) or die(mysqli_query($con));

                            ?>
                            
                            <?php if($row['status']=='2') {?>
                        <div class="msg left-msg">
                          <div
                           class="msg-img"
                           style="background-image: url(../../documents/<?php echo $destination['company_picture']; ?>)"
                          ></div>

                          <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name"><?php echo $destination['fname']; ?></div>
                              <div class="msg-info-time"><?php echo date("g:i a", strtotime($row['time'])); ?></div>
                            </div>

                            <div class="msg-text">
                          <?php echo $row['message']; ?>
                            </div>
                          </div>
                        </div>
                 <?php } ?>
                    
                                                <?php if($row['status']=='1') {?>

                        <div class="msg right-msg">
                          <div
                           class="msg-img"
                           style="background-image: url(../../documents/<?php echo $source['company_picture']; ?>)"
                          ></div>

                          <div class="msg-bubble">
                            <div class="msg-info">
                              <div class="msg-info-name"><?php echo $source['fname']; ?></div>
                              <div class="msg-info-time"><?php echo date("g:i a", strtotime($row['time'])); ?></div>
                            </div>

                            <div class="msg-text">
                                   <?php echo $row['message']; ?>                          
                            </div>
                          </div>
                        </div>
                                     <?php } ?>

                     <?php } ?>
                </main>
                

                <form class="msger-inputarea" method="POST" action="">
                    <textarea type="text" class="msger-input" placeholder="Enter your message..." name="message"></textarea>
                  <button type="submit" class="msger-send-btn" name="send">Send</button>
                </form>
              </section>
 <?php
        if(isset($_POST['send']))
        {   
            $message    =   $_POST['message'];
            $sourse_id     = $_SESSION['custid'];
            $destination_id=$_GET['id'];
            $date=  date("Y-m-d");
            $time= date("H:i:s");
 $sql = "INSERT INTO chat_table (sourse_id,destination_id,message,date,	time,status) VALUES ('$sourse_id','$destination_id','$message','$date','$time','1')";
 $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
 echo "<script>alert('sended')</script>";
  echo "<script>window.location='startchat.php?id=$destination_id'</script>";
        }
        ?>
        </div>
        </body>
        </html>