<?php include_once("../include/config.php"); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
img {
    width: 100%;
    height: 715px;}
a{text-decoration: none;}
p{font-size: large;
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
       
        <?php
    $custid= base64_decode($_GET['id']);
     $sql    =   "SELECT  * FROM company_user WHERE custid='$custid'";
     $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
   $row =mysqli_fetch_array($res);
        
              ?>
        <div class="full" style="background-image:url('../documents/<?php echo $row['base_picture'] ?>');">

            
            <div class="profilepic">
        </div>
             <div class="profilepic">
                 <div class="pic">
                     <img src="../documents/<?php echo $row['company_picture'] ?>" class="picz">
                 </div>
                 <div class="name"><h3 style="color:white;    font-size: 35px;background-color: black;"><?php echo $row['fname'] ?></h3></div>
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
           <div class="search">
              <input type="text" placeholder="SEARCH YOUR FAVORITE" name="name" id="products" class=" control" autocomplete="off">
              <input type="submit" value="search" name="search" class="controlx" onclick="search()">
        </div>

<div class="row">
  <div class="leftcolumn">
      <?php
    $id= base64_decode($_GET['id']);
     $sql    =   "SELECT  * FROM blog_table WHERE creator_id='$id'";
     $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
     while($row =mysqli_fetch_array($res)){
        
              ?>
      
     <div class="card">
             
              <div class="mainbox">
                  <a href="../documents/<?php echo $row['company_picture'] ?>"><div class="imagebox"> <img  src="../documents/<?php echo $row['company_picture'] ?>" class="imagebox" > </div> </a>
                      <div class="namebox">
                          <a href="profile.php?id<?php echo $row['creator_id']; ?>" ><h2 style="color:black;"><?php echo $row['creator_name']; ?></h2></a>
                          </div>
                  
                      </div>
               <a href="index_1.php?id=<?php echo $row['id']; ?>"><div>
      <h2><?php echo $row['title']; ?> </h2>
      <h4><?php echo $row['stitle'].','.$row['date'].','.date("g:i a", strtotime($row['time']));?> </h4>
      <div class="fakeimg" ><img src="../documents/<?php echo $row['picture']; ?>"  ></div>
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
