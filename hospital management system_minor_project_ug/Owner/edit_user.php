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
        <nav> 
            <div> 
      <ul class="nav navbar-nav navbar-right">
          <a href="user.php" class="btn btn-info" >BACK</a>
       </ul>
  </div>
</nav>
             
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
        
           <form id="frompatient" class="card" name='form1' method="post"  action="">
                    
                    <div align="left">
                        <h3>EDIT USER</h3>
                    </div>
                        <?php
                            $id     =   $_GET['id'];
                            $sql    =   "SELECT * FROM usertable WHERE slno='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
               
                     <div align="left">
                        <h3>USER CREATION</h3>
                    </div>
               <div align="left">
                   
                   
                       
                         <label class="form-label">FULL NAME</label>
                         <input type="text" class="form-control" placeholder="fullname" id="fullname"value="<?php echo $row['fullname'] ?>" name="fullname"  size="30ppx" required>
               </div>            

                       <div align="left">
                         <label class="form-label">USER NAME</label>
                         <input type="text" class="form-control" placeholder="username" id="username"  value="<?php echo $row['username'] ?>" name="username" size="30ppx" required>  
                         </div> 
                        <div align="left">
                         <label class="form-label">USER TYPE</label>
                         <select class="form-control" id="usertype" name="usertype" placeholder="usertype"   required>
                             <option value="">Please Select</option>
                             <option value="1" <?php if($row['usertype']=="1"){ ?> selected <?php } ?> >pharmacist</option>
                             <option value="2" <?php if($row['usertype']=="2"){ ?> selected <?php } ?>>Doctor</option>
                             <option value="3" <?php if($row['usertype']=="3"){ ?> selected <?php } ?>>Receptionist</option>
                         </select>
                         </div> 
                         <div align="left">
                         <label class="form-label">NEW PASSWORD</label>
                         <input type="text" class="form-control" placeholder="password" id= "password" value=""  name="password" size="30px" >  
                         </div> 
                         <br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="edit_user" name="edit_user" >UPDATE</button>
                  <button type="button" id="clear" class="btn btn-warning">Reset</button>
                         </div> 
                         </div> 
                         </div> 
                         </div> 
                         
                    
                </form>
           
           <?php
            if(isset($_POST['edit_user'])){
                $slno       =   $_GET['id'];
                $fullname    =   $_POST['fullname'];
                $username= $_POST['username'];
                $password = $_POST['password'];
                $usertype= $_POST['usertype'];
                
                
                if($password!=""){
                    $sql    =   "UPDATE usertable SET  fullname='$fullname', username='$username', usertype='$usertype' WHERE slno='$id'";
                }else{
                       $password    =   md5($password);
                     $sql    =   "UPDATE usertable SET  fullname='$fullname', username='$username', password='$password',usertype='$usertype' WHERE slno='$id'";
                   
                }
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                
                echo "<script>alert('Updated')</script>";
                 echo "<script>window.location='user.php'</script>";
                
            }
           ?>

                         
      


    </body>
</html>
