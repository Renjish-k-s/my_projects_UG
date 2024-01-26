<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div class="jumbotron text-center" >
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
      </div><!-- comment -->
      
      <style>
           .h12
            {
           width: 80%;
    height: 444px;
    margin-left: 470px;
    margin-top: 100px;
    border: 1px solid;
    border-color: black;
    padding-left: 85px;
    padding-right: 85px;
}
          
           
            
          
          
          
          
          </style>
        <form method="POST">
        <nav>
            <div style=margin-right:63px; >
      <ul class="nav navbar-nav navbar-right">
          <a href="pat_table.php" class="btn btn-info" >PATIENT TABLE</a>
  <a href="opbooking/index.php" class="btn btn-info" >OP BOOKING</a>
          <a href="cpass.php" class="btn btn-info" >CHANGE PASSWORD</a>
           <button type="submit" name="logout" class="btn btn-warning" >LOGOUT</button>
       </ul>
 </div>
</nav>
        </form>
        
              
<div class="row">
    <div class="col-sm-6">
       <div class="container-fluid">
           <div class="h12">
           <form id="frompatient" class="card"  name='form1' method="post">     
                    <?php
                        $query = "select MAX(cast(patientno as decimal)) id from patient";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
             
                    <div align="left">
                        <h3>Patient Creation</h3>
                    </div>
                         <div align="left">
                        
                         <input type="text" class="form-control" placeholder="Patient id" id="pid" readonly value="<?php echo "PAT".$count; ?>"  name="pid" size="30ppx" >  
                         </div><br>
                       <div align="left">
                        
                         <input type="text" class="form-control" placeholder="Patient Name" id="pname" name="pname" size="30ppx" >  
                          </div><br>
                         <div align="left">
                        
                         <input type="text" class="form-control" placeholder="age" id="age" name="age" size="30ppx" >  
                          </div><br>
                         <div align="left">
                         
                         <select class="form-control" id="sex" name="sex" placeholder="sex">
                             <option value="">sex</option>
                             <option value="MALE">MALE</option>
                             <option value="FEMALE">FEMALE</option>
                             <option value="TRANSGENDER">TRANSGENDER</option>
                                        </select>
                         </div><br><!-- comment -->
                         
                         <div align="left">
                       
                         <input type="text" class="form-control" placeholder="phone" id= "phone" name="phone" size="30ppx" >  
                         </div><br>
                          
                        <div align="left">
                         <input type="text" class="form-control" placeholder="address " id="address" name="address" size="30ppx" >  
                          </div>
                         <br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="add_patient" name="add_patient" >ADD</button>
                  <button type="button" id="clear" class="btn btn-warning">Reset</button>
                  <br>
                   <br>
  
  
                         </div> 
                    </div> 
        </div> 
    </div> 
                </form>
           <?php
            if(isset($_POST['add_patient'])){
                $pno    =   $_POST['pno'];
                 $pid    =   $_POST['pid'];
                $name= $_POST['pname'];
                 $age= $_POST['age'];
                  $sex= $_POST['sex'];
                $phone = $_POST['phone'];
                 $password = $_POST['phone'];
                $address= $_POST['address'];
                $sql    =   "insert into patient(patientno,pid,name,age,sex,phone,pass,address) VALUES ('$pno','$pid','$name','$age','$sex','$phone','$password','$address')";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Added')</script>";
                echo "<script>window.location='index.php'</script>";
            }
           ?>
           <?php
              if(isset($_POST['logout'])){
               $userid= $_SESSION['slno'];
               $message="LOGGED OUT";
               $date       =   date("Y-m-d");
               $time       =   date("H:i:s");
               $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
               $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                 echo "<script>window.location='../login/login.php'</script>";
              }
              ?>
              
    </body>
</html>
