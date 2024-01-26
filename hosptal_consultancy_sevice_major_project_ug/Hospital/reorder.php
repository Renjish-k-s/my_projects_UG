<?php include_once("../include/config.php"); ?>
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
.title{width: 25%;text-align: center;    float: left;    padding: 20px;}
.subject{float: left;width: 74%}
.head{  width: 100%; float:left;  margin-top: 46px;}
.form-control{height: 58px;}
textarea.form-control { height: 500px;}
        </style>
    <body>
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>

        </div>
        
      <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div><h2 class="h1x" style="color: black">REPORT CAUSE</h2></div>
            <div class="head">
            <div class="title"><label>Type of defect:</label></div>
            <div class="subject"><select class="form-control" name="title" >
                    <option value="">-SELECT-</option>
                    <option value="DEFECT IN PACKING">-DEFECT IN PACKING-</option>
                    <option value="EXPIRY DATE ISSUE">-EXPIRY DATE ISSUE-</option>
                    <option value="NOT WORKING">-NOT WORKING-</option>
                    <option value="OFFER IS NOT CREDITED">-OFFER IS NOT CREDITED-</option>

            </select>
            </div>
</div>
           
             <div class="head">
            <div class="title"><label>Detailed Description:</label></div>
            <div class="subject"><textarea rows="" cols="" class="form-control" name="description" style="font-size:30px"></textarea></div>
</div>
            
            
    <div class="head" style="width:50%">
            <div class="title" style="width:50%;padding: 0px"><label style="    width: 100%;padding: 10px;">Upload supporting evidence:</label></div>
            <div class="subject" style="width:50%"><input type="file" class="form-control" name="evidence"></div>
</div>
                <div class="head" style="width:50%;text-align: center;">

            <div>
                <input type="submit" name="sendforvalidation" value="SEND " class="btn btn-info" style=" margin-bottom: 10px; padding: 26px;     width: 35%;    font-weight: 600;    font-size: 18px;">
            </div>
                </div>

</div>
            </form>
<?php
if(isset($_POST['sendforvalidation']))
{
 $creator_id= $_SESSION['custid'];
         $title=$_POST['title'];
         $content=$_POST['description'];
         
         $Oid=$_GET['id'];
      $sql1    =   "SELECT  * FROM medicine_order WHERE Bid='$Oid'";
     $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
    $row1 =mysqli_fetch_array($res1);
         $to=$row1['salerid'];
          $evidence=$_FILES['evidence']['name'];	
   move_uploaded_file($_FILES['evidence']['tmp_name'], "../documents/".$evidence);
          $date=  date("Y-m-d");
            $time= date("H:i:s");
            
            $sql12   =   "UPDATE medicine_order SET  status='9' WHERE Bid='$Oid' ";
                
                $res12    =   mysqli_query($con, $sql12) or die(mysqli_query($con));
             
                 
                 
    $sql    = " insert into order_compliant(from_1,to_1,type,desctiption,evidence,date,time) VALUES ('$creator_id','$to','$title','$content','$evidence','$date','$time')";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('RE-ORDER REQUEST SENDED')</script>";
        echo "<script>window.location='reorder.php'</script>";   
}

?>
    </body>
</html>
