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
    
      
       <ul class="nav navbar-nav navbar-right">
          <a href="../login/login.php" class="btn btn-warning" >LOGOUT</a>
       </ul>
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
        
           <form id="frompatient" class="card" name='form1' method="post">
                    
                    <div align="left">
                        <h3>EDIT DOCTOR</h3>
                    </div>
                         <?php
                            $id     =   $_GET['id'];
                            $sql    =   "SELECT * FROM doctor WHERE dno='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
               
                      <div align="left">
                         <label class="form-label">DOCTOR NO</label>
                         <input type="text" class="form-control" placeholder="doctor No" id="dno" readonly value="<?php echo $row['dno'] ?>" name="dno" size="30ppx" required>
                        </div>
                         <div align="left">
                         <label class="form-label">DOCTOR NAME</label>
                         <input type="text" class="form-control" placeholder="doctor name" id="dname" value="<?php echo $row['dname'] ?>" name="dname"   size="30ppx" required>  
                        </div>
                       <div align="left">
                         <label class="form-label">SPECIALIZATION</label>
                         
                         <select class="form-control" name="spec" id="spec">
                                <option value="">-Select-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM doctor_type ";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['type'] ?>" <?php if($row1['type']==$row['spec']){ ?> selected  <?php } ?>><?php echo $row1['type']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                         
                         
                          </div>
                         <div align="left">
                         <label class="form-label">QUALIFICATION</label>
                         <input type="text" class="form-control" placeholder="qualification" id= "qual" value="<?php echo $row['qual'] ?>" name="qual"   size="30ppx" required>  
                         </div>
                        <div align="left">
                         <label class="form-label">FEE</label>
                         <input type="text" class="form-control" placeholder="fee " id="fee" value="<?php echo $row['fee'] ?>" name="fee" size="30ppx" required>  
                          </div>
                          <div align="left">
                         <label class="form-label">PHONE</label>
                         <input type="text" class="form-control" placeholder="phone" id="phone" value="<?php echo $row['phone'] ?>" name="phone" size="30ppx" required>  
                          </div><!-- comment -->
                           <div align="left">
                         <label class="form-label">ROOM NO</label>
                         <input type="text" class="form-control" placeholder="room no" id="rno" value="<?php echo $row['rno'] ?>" name="rno"  size="30ppx" required>  
                          </div>
                         </br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="edit_doctor" name="edit_doctor" >UPDATE</button>
                  <button type="button" id="clear" class="btn btn-warning">Reset</button>
                 </div>
                         
           </form>
           <?php
            if(isset($_POST['edit_doctor'])){
                $dno    =   $_POST['dno'];
                 $dname   =   $_POST['dname'];
                 $spec    =   $_POST['spec'];
                    $qual= $_POST['qual'];
                $fee = $_POST['fee'];
                $phone= $_POST['phone'];
                $rno= $_POST['rno'];
                
                $sql    =   "UPDATE doctor SET  dname='$dname', spec='$spec',qual='$qual',fee='$fee',phone='$phone',rno='$rno' WHERE dno='$id'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Updated')</script>";
                 echo "<script>window.location='doctor_creation.php'</script>";
                
            }
           ?>
</div>
    </div>                      
      
 </div>

    </body>
</html>
