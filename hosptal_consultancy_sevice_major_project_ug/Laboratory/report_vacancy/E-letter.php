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
            <a href="viewapplications.php?id=<?php echo $_GET['cid'];?>&rid=<?php echo $_GET['c']; ?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
         <div class="mainbar">
      <a href="recucitment.php" >   <div class="newo"><lable class="lablex" >NEW RECRUITMENT</lable></div>    </a>
      <a href="active_recucitment.php" >   <div class="newo" ><lable class="lablex">ACTIVE RECRUITMENT</lable></div>    </a>
      <a href="job_request.php" >   <div class="newo"  style="background-color:white"><lable class="lablex" style="color:black;">JOB REQUESTS</lable></div>    </a>
        </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div><h2 class="h1x" style="color: black">CREATE E-LETTER</h2></div>
            <div class="head">
            <div class="title"><label>Type letter:</label></div>
            <div class="subject"><select class="form-control" name="tid" >
                    <option value="">-SELECT-</option>
                    <option value="1">-INTERVIEW CALL-</option>
                    <option value="2">-EXAM CALL-</option>
                    <option value="3">-APPOINTMENT LETTER-</option>

            </select>
            </div>
</div>
           
            
   
                <div class="head" style="width:50%;text-align: center;">

            <div>
                <input type="submit" name="sendforvalidation" value="CREATE" class="btn btn-info" style="    margin-left: 764px; margin-bottom: 10px; padding: 26px;     width: 35%;    font-weight: 600;    font-size: 18px;">
            </div>
                </div>

</div>
            </form>
<?php
if(isset($_POST['sendforvalidation']))
{
 $id= $_GET['id'];
  $cid= $_GET['cid'];
  $rid= $_GET['c'];
  $tid=$_POST['tid'];
  
  if($tid==1){
        echo "<script>window.location='interview_letter_create.php?id=$id&cid=$cid&rid=$rid'</script>";  
  }
   if($tid==2){
        echo "<script>window.location='exam_call_letter_create.php?id=$id&cid=$cid&rid=$rid'</script>";  
  }
   if($tid==3){
        echo "<script>window.location='appointment_letter_create.php?id=$id&cid=$cid&rid=$rid'</script>";  
  }
}

?>
    </body>
</html>
