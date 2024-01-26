<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    
<style>
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 50%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.form-control{border-radius: 50px;}
.newo1{width: 33%;float: left;text-align: center;padding: 10px;}
.newo1:hover{background-color: greenyellow;}


</style>

    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            <div class="newo" ><a href="createtenderhospital.php" class="buttn" > CREATE TENDER</a></div>
            <div class="newo" style="background-color:white"><a href="todeliver.php" class="buttn" style="color:black">YOUR TENDERS</a></div>
        </div>
        <div class="mainbar " style="background-color:green">
            <div class="newo1" ><a href="yourtenders.php" class="buttn">ACTIVE TENDERS</a></div>
            <div class="newo1"  style="background-color:blue"><a href="tender_requests.php" class="buttn" style="color:white"> TENDER REQUESTS</a></div>
            <div class="newo1"><a href="accepted_tenders.php" class="buttn"  >ACCEPTED TENDERS</a></div>
        </div>
   
             
    </body>
</html>
