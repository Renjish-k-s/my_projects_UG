<?php include_once("../../include/config.php"); ?>

<html>
<head>
<title>Bootstrap Icons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <style>
        * {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
      float: left;
    width: 90%;
    margin-left: 5%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
    }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.3333%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.lablex{color: white;font-weight: bold;}
.button{    background-color: red;
    color: black;
    border-radius: 50px;
    margin-left: 1500px;
    padding: 10px;
    border: 1px solid black;}
img {
    width: 100%;
height: 715px;   }

a{text-decoration: none;}
p{font-size: large;
    padding: 7px;}
.cardX {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
   }
   .imagex{
         width: 100%;
height: 715px;   }
   .para{font-size: 28px;
    padding: 7px;}
    .mainbox{
    float: left;
    height: 15%;
    width: 100%;}
.imagebox{ width: 100px;
    height: 89px;
    border-radius: 252px;
    background-color: black;
        float: left;

}
.namebox{     width: 91%;
    height: 89px;
    float: left;
    padding: 10px;
margin-left: 10px;
}
.search{width: 50%;height: 69px;    margin-top: 81px; margin-left: 502px;}
.control{width: 72%;height: 89%;border-radius: 20px 0px 0px 20px;text-align: left;float: left;border: 0px;font-size: 19px;padding: 0px 23px;}
.controlx{padding: 22px;height: 61px;border-radius: 0px 20px 20px 0px;line-height: 13px;margin-right: -9px;float: left;border: 0px; background: #f00; color: #fff; }
.footerx1{ width: 100%;    height: 20%; background-color: none;}   
.like{ float: left;width: 30%;height: 50%; background-color: none;    margin-left: 65px;
    border-radius: 50px;}
.dislike{ float: left;width: 30%;height: 50%; background-color: none;margin-left: 10px;  border-radius: 50px;}
.comment{}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
   margin-left: 182px;
    margin-top: 10px;
        color: black;
        font-size: xxx-large;
}
.glyphicon:hover{color: black}
.dislike:hover{background-color: cyan;}
.like:hover{background-color: cyan;}


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
margin-top: 17px;}
.bar1:hover{ border-bottom:10px solid blue;}
.bar2{background-color: #ccc;}
.half{    width: 48%;
    height: 100%;
    background-color: none;
    float: left;
    border-radius: 50px 0px 0px 50px;}
.half2{width: 52%;
    height: 100%;
    background-color: black;float: left;
 border-radius: 0px 50px 50px 0px;}
        </style>    <body>
        
          <?php
    $custid=$_SESSION['pid'];
     $sql    =   "SELECT  * FROM common_login WHERE pid='$custid'";
     $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
   $row =mysqli_fetch_array($res);
        
              ?>
        <div class="full" style="background-image:url('../../documents/natue.jpg');">

            
            <div class="profilepic">
        </div>
             <div class="profilepic">
                 <div class="pic">
                     <img src="../../documents/<?php echo $row['photo'] ?>" class="picz">
                 </div>
                 <div class="name"><h3 style="color:white;    font-size: 35px;background-color: black;"><?php echo $row['name'] ?></h3></div>
        </div>
            </div>
        <div class="bar">
               <a href="index.php" > <div class="bar1 bar2">
                <h4 class="head">BLOGS & NEWS</h4>
            </div></a>
                <a href="your_blogs.php" > <div class="bar1">
                <h4 class="head">MY POSTS</h4>
            </div></a>
                <a href="create_blog.php" > <div class="bar1">
                <h4 class="head">CREATE BLOGS</h4>
            </div></a>
            
            </div>
           

<div class="row">
  <div class="leftcolumn">
        <?php
    $id=$_GET['id'];
     $sql1    =   "SELECT  * FROM blog_table WHERE id=$id";
     $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
    $row1 =mysqli_fetch_array($res1)
              ?>
      <div class="cardX">
            <div class="mainbox">
                <a href="../../documents/<?php echo $row1['company_picture'] ?>"><div class="imagebox"> <img  src="../../documents/<?php echo $row1['company_picture'] ?>" class="imagebox" > </div> </a>
                      <div class="namebox">
                          <h2 style="color:black;"><?php echo $row1['creator_name']; ?></h2>
                          </div>
                    <a href="report.php?id=<?php echo $row1['id'];  ?>" class="button" >REPORT</a>
                      </div>
      <h2><?php echo $row1['title']; ?> </h2>
      <h4><?php echo $row1['stitle'].','.$row1['date'].','.date("g:i a", strtotime($row1['time']));?> </h4>
      <div class="fakeimg" ><img src="../../documents/<?php echo $row1['picture']; ?>" class="imagex"  ></div>
      <p class="para"><?php echo $row1['content']; ?></p>
      <div class="footerx1">
           <?php 
          //$num=0;
          $id12=$row1['id'];
          $senserid2=$_SESSION['pid'];          
           $sql5    =   "SELECT  * FROM like_box WHERE blog_id=$id12 AND liker_id='$senserid2' AND type='0' ";
     $res5    =   mysqli_query($con, $sql5) or die(mysqli_query($con));
              $num1      =   mysqli_num_rows($res5);
               $sql56    =   "SELECT  * FROM like_box WHERE blog_id=$id12 AND liker_id='$senserid2' AND type='0' ";
     $res56    =   mysqli_query($con, $sql56) or die(mysqli_query($con));
              $num16      =   mysqli_num_rows($res56);
              if($num1==0){
                  
          ?>
          
          <a href="like.php?id=<?php echo $row1['id']; ?>"> <div class="like">
                    
    <div class="half"> <i class="glyphicon glyphicon-thumbs-up" style="    margin-left: 111px;margin-top: 15px;"> </i></div>
    <div class="half2"><label style="color:white ;color: white;margin-left: 84px;margin-top: 20px;font-size: 30px;"><?php echo $num16; ?>likes</label></div>
                </div></a>
            <?php } else {?>
           <a href="update_like.php?id=<?php echo $row1['id']; ?>"> <div class="like">
                    
    <div class="half" style="background-color:aqua;"> <i class="glyphicon glyphicon-thumbs-up" style="    margin-left: 111px;margin-top: 15px;"> </i></div>
    <div class="half2"><label style="color:white ;color: white;margin-left: 84px;margin-top: 20px;font-size: 30px;"><?php echo $num16; ?>  likes</label></div>
                </div></a>
               <?php } ?>
                
           <a href=""><div class="dislike">
                  <div class="half"><i class="glyphicon glyphicon-share" style=" margin-left: 111px;margin-top: 15px;" > </i></div>
    <div class="half2"><label style="color:white ;color: white;margin-left: 58px;margin-top: 20px;font-size: 30px;">4 shares</label></div></div></a>
       
          
          
          <?php 
          //$num=0;
          $id1=$row1['id'];
          $senserid=$_SESSION['pid'];          
           $sql4    =   "SELECT  * FROM comment_box WHERE blog_id=$id1 AND sender_id='$senserid' ";
     $res4    =   mysqli_query($con, $sql4) or die(mysqli_query($con));
              $num      =   mysqli_num_rows($res4);
               $sql42    =   "SELECT  * FROM comment_box WHERE blog_id=$id1";
     $res42    =   mysqli_query($con, $sql42) or die(mysqli_query($con));
              $num23      =   mysqli_num_rows($res42);
              if($num==0){
                  
                  
                  
          ?>
          
              <a href="comment_box.php?id=<?php echo $row1['id']; ?>"><div class="dislike">
                  <div class="half"><i class="glyphicon glyphicon-comment" style=" margin-left: 111px;margin-top: 15px;" > </i></div>
                  <div class="half2"><label style="color:white ;color: white;margin-left: 58px;margin-top: 20px;font-size: 30px;"><?php echo $num23; ?> comments</label></div></div></a>
              <?php } else {?>
             <a href="comment_box.php?id=<?php echo $row1['id']; ?>"><div class="dislike" >
                  <div class="half" style="background-color:aqua;"><i class="glyphicon glyphicon-comment" style=" margin-left: 111px;margin-top: 15px;" > </i></div>
    <div class="half2"><label style="color:white ;color: white;margin-left: 58px;margin-top: 20px;font-size: 30px;"><?php echo $num23; ?> comments</label></div></div></a>
     <?php } ?>
                
          
          
          
                </div>
      </div>
      <?php
    
     $sql    =   "SELECT  * FROM blog_table WHERE NOT id=$id AND type='0' AND status='1'";
     $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
     while($row =mysqli_fetch_array($res)){
              ?>
        <div class="card">
             
              <div class="mainbox">
                  <a href="../../documents/<?php echo $row['company_picture'] ?>"><div class="imagebox"> <img  src="../../documents/<?php echo $row['company_picture'] ?>" class="imagebox" > </div> </a>
                      <div class="namebox">
                          <h2 style="color:black;"><?php echo $row['creator_name']; ?></h2>
                          </div>
                  
                      </div>
               <a href="index_1.php?id=<?php echo $row['id']; ?>"><div>
      <h2><?php echo $row['title']; ?> </h2>
      <h4><?php echo $row['stitle'].','.$row['date'].','.date("g:i a", strtotime($row['time']));?> </h4>
      <div class="fakeimg" ><img src="../../documents/<?php echo $row['picture']; ?>"  ></div>
      <p><?php echo $row['stitle'].'...........click for read more'; ?></p>
              </div></a>
            
          </div>
   
     <?php }?>
      
      
      
  </div>
 
</div>

<div class="footer">
  <h2>Footer</h2>
</div>
    </body>
</html>
