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
.container{ background-color: white;    margin-top: 72px;  width: 95%; border-radius: 50px; }
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
.search{width: 50%;height: 69px;       margin-top: 80px; margin-left: 502px;}
.control{width: 72%;height: 89%;border-radius: 20px 0px 0px 20px;text-align: left;float: left;border: 0px;font-size: 19px;padding: 0px 23px;}
.controlx{padding: 22px;height: 61px;border-radius: 0px 20px 20px 0px;line-height: 13px;margin-right: -9px;float: left;border: 0px; background: #f00; color: #fff; }
.full{    width: 100%;
    height: 500px;
    background-color: blue;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
.profilepic{  width: 100%;
    height: 50%;
    background-color: none;float: left;}
.pic{      width: 16%;
    height: 100%;
    background-color: green;
    border-radius: 133px;float: left;}
.picz{width: 100%;
height: 100%;
    border-radius: 133px;}
.picz1{width: 100%;
height: 100%;}
.name{      margin-top: 211px;
}
.bar{width: 100%;
    float: left;
    height: 60px;
    background-color: white;
    
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
margin-top: 17px;}
.bar1:hover{ border-bottom:10px solid blue;}
.bar2{background-color: #ccc;}
        </style>     
        <body>
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                        <a href="blog_request.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
           <?php
           $id=$_GET['id'];
                                            $sql    =   "SELECT * FROM   blog_table WHERE id='$id'  ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                         $row =mysqli_fetch_array($res);
                                         ?>
        
      <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div><h2 class="h1x" style="color: black">VALIDATE POST</h2></div>
            <div class="head">
            <div class="title"><label>Title:</label></div>
            <div class="subject"><input type="text" class="form-control" style="font-size:20px" name="title" value="<?php echo $row['title']; ?>" autocomplete="off"></div>
</div>
            <div class="head">
            <div class="title"><label>Short description:</label></div>
            <div class="subject"><input type="text" class="form-control" style="font-size:20px" name="stitle" value="<?php echo $row['stitle']; ?>" autocomplete="off"></div>
</div>
             <div class="head">
            <div class="title"><label>Detailed Description:</label></div>
            <div class="subject"><textarea rows="" cols="" class="form-control" name="description" style="font-size:30px"><?php echo $row['content']; ?></textarea></div>
</div>
             <div class="head" >
            <div class="title" ><label >Bibliography:</label></div>
            <div class="subject" ><textarea rows="" cols="" class="form-control" name="evidence" style="height: 120px;"><?php echo ''; ?></textarea></div>
</div>
            
            <div class="head" style="width:50%  ;  margin-bottom: 15px;">
            <div class="title" style="width:50%;padding: 0px;"><label style="width: 100%;padding: 10px;">Subject picture:</label></div>
            <div class="subject" style="width:50%"><a href="../../documents/<?php echo $row['picture']; ?>" class="form-control">CLICK TO SHOW PICTURE</a></div>
</div>
   
                <div class="head" style="width:50%;text-align: center;">
<?php if($row['status']=='0') { ?>
            <div>
                <input type="submit" name="sendforvalidation" value="PERMISSION GRANDED" class="btn btn-info" style=" margin-bottom: 10px; padding: 26px;    margin-left: 0px;   font-weight: 600;    font-size: 18px;">
            </div>
                    <?php } ?>
                </div>

</div>
            </form>
<?php
if(isset($_POST['sendforvalidation']))
{
 $id1=$_GET['id'];
    $sql    = " UPDATE blog_table SET status='1' WHERE id='$id1' ";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('PERMISSION GRANDED')</script>";
        echo "<script>window.location='blog_request.php'</script>";   
}

?>
    </body>
</html>
