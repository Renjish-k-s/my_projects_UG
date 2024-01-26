<?php include_once("../../include/config.php"); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <style>
      
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: white;margin-top: 51px;    width: 95%; border-radius: 50px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.3333%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.lablex{color: white;font-weight: bold;}
label{    width: 75%;font-size: x-large;text-align: center;}
.title{    width: 33%;text-align: center;    float: left;    padding: 20px;}
.subject{    float: left;
    width:50%;}
.head{     margin-bottom: 10px; width: 50%; float:left;  margin-top: 46px;}
.form-control{height: 58px;}
textarea.form-control { height: 170px;}
.subject1{    float: left;
    width: 50%;}
        </style>
    <body>
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>

        </div>
        
      <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div><h2 class="h1x" style="color: black">APPOINTMENT E-LETTER</h2></div>
       
         <input type="hidden" class="form-control" name="title" value="APPOINTMENT LETTER" >
                    
         
            <div class="head">
            <div class="title"><label>Report Date:</label></div>
            <div class="subject"><input type="date" class="form-control" name="date"  >
                    
            </div>
</div>
            <div class="head">
            <div class="title"><label>Report Time:</label></div>
            <div class="subject"><input type="time" class="form-control" name="time"  >
                    
            </div>
</div><?php
$custid=$_SESSION['custid'];
 $sql    =   "SELECT * FROM  company_user WHERE  custid='$custid' ";
$res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
 $row =mysqli_fetch_array($res)

?> 
             <div class="head">
            <div class="title"><label>Report Address:</label></div>
            <div class="subject"><textarea rows="" cols="" class="form-control" name="address" style="font-size:20px"><?php echo $row['address'].','.$row['district'].','.$row['state'].','.$row['pincode'];  ?></textarea>
                    
            </div>
</div>
           
             <div class="head">
            <div class="title"><label>Description:</label></div>
            <div class="subject1"><textarea rows="" cols="" class="form-control" name="description" style="font-size:20px">Best of luck for your interview</textarea></div>
</div>
            
            
   
                <div class="head" style="width:50%;text-align: center;">

            <div>
                <input type="submit" name="sendforvalidation" value="SEND " class="btn btn-info" style="       margin-left: 783px; margin-bottom: 10px; padding: 26px;     width: 35%;    font-weight: 600;    font-size: 18px;">
            </div>
                </div>

</div>
            </form>
<?php
if(isset($_POST['sendforvalidation']))
{
 $creator_id= $_SESSION['custid'];
 
         $title=$_POST['title'];
         $rdate=$_POST['date'];
         $rtime=$_POST['time'];
         $raddress=$_POST['address'];
         
         
         $content=$_POST['description'];
         
             
         $to= base64_decode($_GET['id']);
               $recid= base64_decode($_GET['cid']);

         
          $date=  date("Y-m-d");
            $time= date("H:i:s");
        
                 $r= base64_encode($recid);
                                  $rid=$_GET['rid'];
                                   $send="SELECT * FROM application_box WHERE job_id='$recid' AND status='0'";
                 $query_e= mysqli_query($con,$send);
                 while ($result= mysqli_fetch_array($query_e)){
                     
                     $found[]=$result['applicant_id'];
                 }
                 $count1= count($found);
                             for($i="0"; $i<=$count1; $i++){
                 $toaddress= $found[$i];
                 
          if($toaddress!=""){

    $sql    = " insert into e_letter_box (from_1,to_1,recr_id,type,message,date,time,rdate,rtime,raddress,typeid) VALUES ('$creator_id','$toaddress','$recid','$title','$content','$date','$time','$rdate','$rtime','$raddress','3')";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));   
          }
                             }
        echo "<script>alert('LETTER SENDED')</script>";
        echo "<script>window.location='viewapplications.php?id=$r&rid=$rid'</script>";   
}

?>
    </body>
</html>
