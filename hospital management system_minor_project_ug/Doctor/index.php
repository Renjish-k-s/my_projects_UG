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
                        <h3>UPDATE PROFILE</h3>
                    </div>
               <?php
                            $id     =   $_SESSION['slno'];
                            $sql    =   "SELECT * FROM usertable WHERE slno='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
                     <div align="left">
                         <label class="form-label">USER ID</label>
                         <input type="text" class="form-control" placeholder="user id" id="uid" value="<?php echo $row['username'] ?>" name="uid"  size="30ppx" required>
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
                                <option value="<?php echo $row1['type'] ?>"><?php echo $row1['type']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                         
                          </div>
                         <div align="left">
                         <label class="form-label">QUALIFICATION</label>
                         <input type="text" class="form-control" placeholder="qualification" id= "qual" name="qual" size="30ppx" required>  
                         </div>
                        <div align="left">
                         <label class="form-label">FEE</label>
                         <input type="text" class="form-control" placeholder="fee " id="fee" name="fee" size="30ppx" required>  
                          </div>
                          <div align="left">
                         <label class="form-label">PHONE</label>
                         <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" size="30ppx" required>  
                          </div><!-- comment -->
                           <div align="left">
                         <label class="form-label">ROOM NO</label>
                         <input type="text" class="form-control" placeholder="room no" id="rno" name="rno" size="30ppx" required>  
                          </div>
                         <br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="add_doctor" name="add_doctor" >ADD</button>
                  <button type="button" id="clear" class="btn btn-warning">Reset</button>
                  <br>
                   <br>
  
                         </div> 
       </div><!-- comment -->
    </div><!-- comment -->
</div><!-- comment -->

            </form>
           <?php
            if(isset($_POST['add_doctor'])){
                $uid   =   $_POST['uid'];
                 $dname   =   $_POST['dname'];
                 $spec    =   $_POST['spec'];
                    $qual= $_POST['qual'];
                $fee = $_POST['fee'];
                $phone= $_POST['phone'];
                $rno= $_POST['rno'];
                
                $sql    =   "UPDATE usertable SET  fullname='$dname', spec='$spec',qual='$qual',fee='$fee',phone='$phone',rno='$rno' WHERE username='$uid'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Updated')</script>";
                 echo "<script>window.location='index.php'</script>";
                
            }
           ?>

    </body>
</html>
