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
                    <div style=margin-right:63px; >

      <ul class="nav navbar-nav navbar-right">
           <a href="testtable.php" class="btn btn-info" >BACK</a>
      </ul></div>
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
           <form id="frompatient" class="card" name='form1' method="post">
                    <div align="left">
                        <h3>TEST ADDING</h3>
                    </div>
                        <div align="left">
                         <label class="form-label">TEST NAME</label>
                         <input type="text" class="form-control" placeholder="NAME" id="name"  name="name" size="30ppx" >  
                        </div>
                       <div align="left">
                         <label class="form-label">RATE</label>
                         <input type="text" class="form-control" placeholder="RATE" id="rate" name="rate" size="30ppx" >  
                          </div>
                         </br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="add_test" name="add_test" >ADD</button>
                  <button type="button" id="clear" class="btn btn-warning">RESET</button>
                  </br>
                   </br>
                         </div> 
                </form>
           </div> 
               </div> 
        </div> 
    </div> 
            <?php
            if(isset($_POST['add_test'])){
                 $name  =   $_POST['name'];
                 $rate    =   $_POST['rate'];
              $sql    =   "insert into testlist(testname,rate) VALUES ('$name','$rate')";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('TEST ADDED')</script>";
                echo "<script>window.location='newtest.php'</script>";
            }
           ?>
           </body>
           </html>