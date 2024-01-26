<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
</div>
         <style>
          
           .hx
           {
                  margin-right: 63px; 
           }
           .hx2{
                   width: 30%;
   width: 30%;
    height: 263px;
    border: 1px solid;
    border-color: black;
    margin-left: 563px;
    padding: 13px;
    margin-top: 129px;
               
           }
           
            
           
            </style>
            <div class="hx">
      <ul class="nav navbar-nav navbar-right">
           <a href="stocktable.php" class="btn btn-info" >BACK</a>
       </ul>
            </div>
<div class="hx2">
           <form id="frompatient" class="card" name='form1' method="post">
                    <div align="left">
                        <h3>STOCK ADDING</h3>
                    </div>
                        <div align="left">
                         <label class="form-label">NAME</label>
                         <input type="text" class="form-control" placeholder="NAME" id="name"  name="name" size="30ppx" >  
                        </div>
                       <div align="left">
                         <label class="form-label">RATE</label>
                         <input type="text" class="form-control" placeholder="RATE" id="rate" name="rate" size="30ppx" >  
                          </div>
                         <br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="add_med" name="add_med" >ADD</button>
                  <button type="button" id="clear" class="btn btn-warning">RESET</button>
                         </div> 
           </form>
</div>
              
        
            <?php
            if(isset($_POST['add_med'])){
                 $name  =   $_POST['name'];
                 $rate    =   $_POST['rate'];
              $sql    =   "insert into stockadd(name,rate) VALUES ('$name','$rate')";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('STOCK ADDED')</script>";
                echo "<script>window.location='stockadd.php'</script>";
            }
           ?>
           </body>
           </html>