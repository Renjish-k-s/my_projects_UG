
<html>
    <?php include_once("../include/config.php"); ?>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
            .id1{
                width: 50%;
   background-color: #eee;
    height: 400px;
    margin-top: -18px;
            }
            .table{
              width: 577px;
    height: 348px;
    margin-top: 29px;
            }
           
               

.id3 {
   width: 50%;
    background-color: #eee;
    height: 400px;
    margin-top: -18px;
             }
             .id4{
               width: 50%;
    background-color: #eee;
    height: 400px;
    margin-top: -811px;
    margin-left: 853px;
             }
              .id5{
               width: 50%;
    background-color: #eee;
    height: 400px;
        margin-top: -17px;
    margin-left: 853px;
             }
            
            
            </style>
            
            
         <div class="jumbotron text-center">
 <i> <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p></i>
   <div style=margin-right:63px; >
   <ul class="nav navbar-nav navbar-right">
          <a href="doctor_view.php" class="btn btn-info" >BACK</a>
       </ul>
   </div>
</div>
         
            <div class="id1">
      
         <?php
            $id     =   $_GET['id'];
            $sql    =   "SELECT * FROM patient WHERE pid='$id'";
            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
           $row     =   mysqli_fetch_array($res);
        ?>
        
        <table class="table"  align="center" class="id2">
            <tr><td><h2 align="center">DETAILS</h2></td></tr>
            <tr>
                <td>PATIENT ID</td>
                <td><p><?php echo $row['pid']?></p></td>
            </tr>
            <tr>
                <td>PATIENT NAME</td>
                <td><p><?php echo $row['name']?></p></td>
            </tr>
            <tr>
                <td>AGE</td>
                <td><p><?php echo $row['age']?></p></td>
            </tr>
            <tr>
                <td>SEX</td>
                <td><p><?php echo $row['sex']?></p></td>
            </tr>
             <tr>
                <td>PHONE</td>
                <td><p><?php echo $row['phone']?></p></td>
            </tr> <tr>
                <td>ADDRESS</td>
                <td><p><?php echo $row['address']?></p></td>
            </tr> 
        </table>
           
       </div>
            <div class="id3" align="center">
              
          
                 <form name='form1' method="post" action="">
      
           <table id="tbl-patient" class="table table-responsive table bordered" border="0px" cellpadding="0" width="50%" style="width:81%">
            <thead>
                <tr>
                    <td>
                        <h3 align="center">PRESCRIPTION</h3>
                    </td>
                    
                </tr>
                <tr>
                    <th width="60%">MEDICINE NAME</th>
                    <th>QUANTITY</th>
                 </tr> 
                 <tr>
                   <tr> 
                       <td>
                            <select class="form-control" name="dname[]" id="dname"  >
                                 <option value="">-Select-</option>
                                 <?php
                                   $sql1   =   "SELECT * FROM stockadd ";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['slno'] ?>"><?php echo $row1['name']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="qty[]" value=""  class="form-control">
                        </td>
                    </tr>
                     <tr> 
                       <td>
                            <select class="form-control" name="dname[]" id="dname"  >
                                 <option value="">-Select-</option>
                                 <?php
                                   $sql1   =   "SELECT * FROM stockadd ";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['slno'] ?>"><?php echo $row1['name']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="qty[]" value=""  class="form-control">
                        </td>
                    </tr>
                    <tr> 
                       <td>
                            <select class="form-control" name="dname[]" id="dname"  >
                                 <option value="">-Select-</option>
                                 <?php
                                   $sql1   =   "SELECT * FROM stockadd ";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['slno'] ?>"><?php echo $row1['name']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="qty[]" value=""  class="form-control">
                        </td>
                    </tr>
                     <tr> 
                       <td>
                            <select class="form-control" name="dname[]" id="dname"  >
                                 <option value="">-Select-</option>
                                 <?php
                                   $sql1   =   "SELECT * FROM stockadd ";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['slno'] ?>"><?php echo $row1['name']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="qty[]" value=""  class="form-control">
                        </td>
                    </tr>
                     
      
                    <tr><td> <button type="submit" id="save" class="btn btn-info" value="add_pre" name="add_pre" >ADD</button>
          
          
             </td></tr>
              </table>
        </form>
                
                 
                
            </div>
            <div class="id4">
                <br>
                 <div style=margin-right:63px; >
                 <ul class="nav navbar-nav navbar-right">
        
           <a href="dishis.php?id=<?php echo  $_GET['id'];?>" class="btn btn-info" >TREATMENT HISTORY</a>
                 </ul></div><br>
                
                <div align="center">
        <h3 align="center">DISEASE DIAGNOSED</h3><br>
        <form name='form1' method="post" action="">
        <textarea id="medtest" name="medtest" rows="10" cols="60" required></textarea>
      <button type="submit" id="save" class="btn btn-info" value="add_pre" name="add_pre" >ADD</button>
        </form>
        </div>
                
            </div>
             <div class="id5">
                  <form name='form1' method="post" action="" class="new_st">
                       <table id="tbl-patient" class="table table-responsive table bordered" border="0px" cellpadding="0" width="50%" style="width:50%" align="center">
            <thead>
                <tr>
                    <td><h3 align="center">TEST NAME</h3></td></tr>
                <tr>
            
                    <td> <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                        </select></td></tr>
                 <tr>
                    <td>
            <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select></td></tr>
            <tr>
                    <td> <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select></td></tr>
             <tr>
                    <td>
            <select class="form-control" name="medtest[]"  >
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM testlist WHERE status='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['id'] ?>"><?php echo $row1['testname']; ?></option>
                               <?php 
                                   }
                                ?>
                                
                            </select></td></tr>
            
              
     <tr><td>   <button type="submit" id="save" class="btn btn-info" value="add_p" name="add_p" >ADD</button>
           </td></tr>
         </table>
        </form>
                
                
            </div>
             <?php
            if(isset($_POST['add_pre'])){
                $pid    =   $_GET['id'];
                $medtest    =   $_POST['medtest'];
                $date   =   date('Y-m-d');
                $time   =   date('H:i:s');
                  echo $sql    =   "insert into disease(pid, disease, date, time) VALUES ('$pid', '$medtest', '$date', '$time')";
                $re    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Added')</script>";
                echo "<script>window.location='details.php?id=$pid'</script>";
            }
                ?>
         <?php
        if(isset($_POST['add_pre']))
        {
              $pid=$_GET['id'];
            $dname      =   $_POST['dname'];
            $qty        =   $_POST['qty'];
            $count      =   count($dname);
            $date       =   date("Y-m-d");
            $time       =   date("H:i:s");
            for($i="0"; $i<=$count; $i++){
                $dname1     =   $dname[$i];
                $qty1        =   $qty[$i];
                if($dname1!=""){
                    echo $sql        =   "INSERT INTO medicine (date,time,med,qty,pid) VALUES ('$date','$time','$dname1','$qty1','$pid')";
                    $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
                }
            }
            echo "<script>alert('ADDED')</script>";
             echo "<script>window.location='details.php?id=$pid'</script>";
        }
        ?>
                                   <?php
            if(isset($_POST['add_p'])){
                   $pid=$_GET['id'];
            $dname      =   $_POST['medtest'];
            $count      =   count($dname);
            $date       =   date("Y-m-d");
            $time       =   date("H:i:s");
            for($i="0"; $i<=$count; $i++){
                $dname1     =   $dname[$i];
                if($dname1!=""){
                  echo $sql    =   "insert into labtest(pid,medtest,date,time) VALUES ('$pid','$dname1','$date','$time')";
                $re=mysqli_query($con, $sql) or die(mysqli_query($con));
            }}
                echo "<script>alert('Added')</script>";
                echo "<script>window.location='details.php?id=$pid'</script>";
            }
                ?>
    </body>
</html>
