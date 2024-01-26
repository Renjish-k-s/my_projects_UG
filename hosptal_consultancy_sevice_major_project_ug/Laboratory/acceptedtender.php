<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
         <style>
        body{background-color:  #13C5DD;}
       .div2{width: 100%;height: 210px;background-color:   #13C5DD;padding: 2px;}
       .h1x{text-align: center;font-size: xxx-large;color: white;margin-top: 69px;}
       .p1{text-align: center;color: white;}
.container{background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{    width: 33.33%;float: left;text-align: center; height: 100%}
.buttn{color: white;padding: 12px;}
.newo:hover{ color: black; background-color: white;}
label{    margin-top: 10px;}

  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            
            <a href="tenderview.php" > <div class="newo" ><label >LATEST TENDERS</label></div></a>
            <a href="participatedtender.php"  > <div class="newo" ><label >TENDER PARTICIPATED</label></div></a>
            <a href="acceptedtender.php" ><div class="newo"  style="background-color:white;"><label style="color:black;">TENDER ORDERS</label></div></a>
        </div>
        <form>
         
            </form>
    </body>
</html>