<?php include_once("../include/config.php"); error_reporting(0); ?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   
    </head>
  <style>
         body{
               background-image: url(../home/img/c6.jpg);
    background-size: cover;
        }
        
        .div1{             background-image: url(../home/consultancy-2.jpg);    background-size: cover;      background-color: #ccc;
    width: 54%;
    height: 470px;
    margin: auto;
    border-radius: 66px;
    margin-top: 86px;
    margin-right: 270px;}
        .div2{            width: 100%;    height: 105px;    background-color:   #13C5DD;       }
        .h1x{          text-align: center;    font-size: xxx-large;    color: white;   margin-top: 69px;       }
    .form-control{          width: 62%;
    height: 55px;
    margin-left: 117px;
    float: left;
    margin-top: 32px; }
   .p1{        text-align: center;          color: white;}
          .mainbox{ width: 100%;        height: 225px;}
  .subbox1{width: 100%; height: 80% ;    background-color: midnightblue;}
  .subbox2{ }
  .mainheading{    text-align: left;
    padding-left: 0px;
    font-size: 60px;
    color: #13C5DD;    margin-top: 45px;}
        .sub1{}
         .sub2{ width: 25%;
    height: 100%;float: left;}
        .sub3{    width: 75%;
    height: 100%;float: left;}
        
        
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
  width: 100%;height: 20% ;float: left;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}



.image{ width: 100%;
background-color: white;
    background-size: cover;
height: 600px;float: left;
margin: 0px;}
.subimage{       padding: 115px;}
.footer{float: left; width: 100%; height: 100px;background-color: midnightblue;}
.content{       width: 40%;
    height: 90%;
    background-color: black;
    margin-top: 27px;
    margin-left: 27px;
float: left;}
.head{    float: left;
    width: 54%;
    height: 90%;
    margin-top: 28px;
    margin-left: 70px;}
    </style>
    <body >
                    <form  method="post">

           <div class="mainbox">
            <div class="subbox1">
                <div class="sub1">
                    <div class="sub2">
                        <i class="fa fa-heartbeat" style="font-size: 64px;margin-left: 386px;margin-top: 43px; color: red;"></i></div>
                    <div class="sub3">

                <h1 class="mainheading">HOSPITAL CONSULTANCY SERVICE</h1></div>
                </div>
                </div>
            
           <div class="navbar">
             
               <a href="../home/index.php" >HOME</a>
              <a href="../home/about.php">ABOUT</a>
               <a href="../home/services.php">SERVICES</a>
              <a href="../home/news.php">NEWS</a>


              


  <div class="dropdown" style="background-color:red;">
    <button class="dropbtn">LOGIN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Company_login.php">COMPANY LOGIN</a>
      <a href="Staff_login.php">STAFF LOGIN</a>
      <a href="Person_login.php">PERSON LOGIN</a>
    </div>
  </div>
                            <a href="">CONTACT</a>
                                                                                    <a href="../home/future.php">FUTURE ENHANCEMENT</a>

</div>
                                   

            </div>
                                               <div class="container">

       <div class="div1">
           <h3 class="h1x" style="float:left;width: 100%;height: 21px;">LOGIN</h3>
           <br><!-- comment --><br>
           <input type="text" name="id" class="form-control" placeholder="ENTER YOUR EMPLOYEE ID" autocomplete="off" required><br><br>
           <input type="password" name="pass" class="form-control" placeholder="ENTER YOUR PASSWORD" autocomplete="off" required><br><br>
             <select class="form-control" name="ctype"   required>
                                 <option >SELECT USER TYPE</option>
                                  <option value="1">ADMIN</option>
                                   <option value="2" >DATA ANALYST</option>
                                    <option value="3">ALERT MANAGER</option>
             </select><br>
               <button type="submit" id="save" class="btn btn-info" style="     width: 62%;
    height: 55px;
    margin-left: 117px;
    float: left;
    margin-top: 27px;" value="check" name="check" >SUBMIT</button><br>
    <br>
                  </div>

       </div>
          <?php
        if(isset($_POST['check']))
        {
            $id=$_POST['id'];
             $pass=$_POST['pass'];
              $ctype=$_POST['ctype'];
              $sql    = "SELECT * FROM staff WHERE username='$id' ";
        $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        $row1 =mysqli_fetch_array($res);
        
             $_SESSION['custid']=$row1['username'];
             if(md5($pass)==$row1['password']){
                 
                if( $ctype==1){

                       echo "<script>window.location='../Manager/index.php?id=$id'</script>";
                }
                 if( $ctype==2){

                       echo "<script>window.location='../Laboratory/index.php?id=$id'</script>";
                }
                 if( $ctype==3){

                       echo "<script>window.location='../Hospital/index.php?id=$id'</script>";
                }
                 
             }
             else
             {
             
                 ?>
    <?php
        echo "<script>alert('INVALID PASSWORD CUSTOMER ID OR PASSWORD')</script>";
         
             }
            
       
        }
        ?>
    
                    </form>
        
    </body>
    
    
</html>