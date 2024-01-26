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
            <a href="opview.php" class="btn btn-info" >OP DATES</a>
           <a href="doctor_view.php" class="btn btn-info" >BACK</a>
          
       </ul>
 </div> 
 <style>
          
         
           .hx2{
                   width: 30%;
    height: 227px;
    border: 1px solid;
    border-color: black;
    margin-left: 563px;
    padding: 22px;
    margin-top: 129px
               
           }
           
            
           
            </style>
        <div class="hx2">
           <form id="frompatient" class="card" name='form1' method="post">
                    
                    <div align="left">
                        <h3>DUTY CREATION</h3>
                    </div>
                         <div align="left">
                         <label class="form-label">DATE</label>
                         <input type="date" class="form-control" placeholder="date" id= "date" name="date" size="30ppx" required>  
                         </div>
               <br>
               <br>
                             <button type="submit" id="save" class="btn btn-info" value="add_duty" name="add_duty" >ADD</button>
                  <button type="button" id="clear" class="btn btn-warning">Reset</button>
                  <br>
                   <br>
                         </div> 
      
           </form>
           <?php
            if(isset($_POST['add_duty'])){
                $id     =   $_SESSION['slno'];
                 $date   =   $_POST['date'];
                $sql    =  "INSERT INTO duty_rec(username,date) VALUES ('$id','$date')" ;
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('DUTY CREATED')</script>";
                 echo "<script>window.location='duty_rec.php'</script>";
            }
           ?>
    </body>
</html>
