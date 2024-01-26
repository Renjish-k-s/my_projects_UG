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

        </div>
        
      <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div><h2 class="h1x" style="color: black">REPORT BLOG</h2></div>
            <div class="head">
            <div class="title"><label>CAUSE FOR REPORT:</label></div>
            <div class="subject"><select class="form-control" name="tid" >
                    <option value="">-SELECT-</option>
                    <option value="ERROR IN TYPING">-ERROR IN TYPING-</option>
                    <option value="ERROR IN DATA">-ERROR IN DATA-</option>
                    <option value="ABUSIVE">-ABUSIVE-</option>
                    <option value="SUPPORT VIOLENCE">-SUPPORT VIOLENCE-</option>

            </select>
            </div>
</div>
           
            
   
                <div class="head" style="width:50%;text-align: center;">

            <div>
                <input type="submit" name="sendforvalidation" value="SEND" class="btn btn-info" style="    margin-left: 764px; margin-bottom: 10px; padding: 26px;     width: 35%;    font-weight: 600;    font-size: 18px;">
            </div>
                </div>

</div>
            </form>
<?php
if(isset($_POST['sendforvalidation']))
{
 $type=$_POST['tid'];
 $id=$_GET['id'];
 $by_id=$_SESSION['custid'];
 $sql="INSERT INTO report_blog (blogid,type,by_1) VALUES ('$id','$type','$by_id') ";
  $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
echo "<script>alert('REPORTED,ADMIN WILL TAKE FINAL DECISION')</script>";
  echo "<script>window.location='index_1.php?id=$id'</script>";
}
?>
    </body>
</html>
