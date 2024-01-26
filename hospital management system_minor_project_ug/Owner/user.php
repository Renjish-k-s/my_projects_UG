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
          <a href="usertable.php" class="btn btn-info" >USER LIST</a>
          <a href="ownerpage.php" class="btn btn-info" >BACK</a>
       </ul>
  </div>
</nav>
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
           <form id="fromuser" class="card" method="post" action="">
                    <?php
                        $query = "select MAX(cast(slno as decimal)) id from usertable";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
                    <div align="left">
                        <h3>USER CREATION</h3>
                    </div>
                  
                       <div align="left">
                         <label class="form-label">USER ID</label>
                         <input type="text" class="form-control" placeholder="uid" id="uid" readonly value="<?php echo "USER",$count; ?>" name="uid" size="30ppx" required>  
                           </div>
                 <div align="left">
                        <label class="form-label">FULL NAME</label>
                         <input type="text" class="form-control" placeholder="fullname" id="fullname"  name="fullname" size="30ppx" required>
                    </div>
               <div align="left">
                         <label class="form-label">ADDRESS</label>
                         <input type="text" class="form-control" placeholder="address" id="adr"  name="adr" size="30ppx" required>  
                           </div>
                         <div align="left">
                         <label class="form-label">PASSWORD</label>
                         <input type="password" class="form-control" placeholder="password" id= "password" name="password" size="30ppx" required>  
                          </div>
                        <div align="left">
                         <label class="form-label">USER TYPE</label>
                         <select class="form-control" id="usertype" name="usertype" placeholder="USER TYPE" required>
                             <option value="">Please Select</option>
                             
                                <option value="1">pharmacist</option>
                                <option value="2">Doctor</option>
                                <option value="3">Receptionist</option>
                                   <option value="4">DBA</option>                             
                                <option value="5">Laboratary</option>
                         </select>
                         </div>
                       <br>
                             <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="add_user" name="add_user" >ADD</button>
                  <button type="button" id="clear" class="btn btn-warning">RESET</button>
                             </div>
                        
               </div> 
        </div> 
    </div>
           </form>
                <?php
            if(isset($_POST['add_user'])){
                $slno    =   $_POST['slno'];
                $fullname = $_POST['fullname'];
                $uid = $_POST['uid'];
                $password=md5($_POST['password']);
                $usertype= $_POST['usertype'];
               echo  $sql    =   "insert into usertable(slno, fullname,username,password,usertype) VALUES ('$slno','$fullname','$uid','$password','$usertype')";
                $re    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Added')</script>";
                echo "<script>window.location='user.php'</script>";
            }
            ?>
           
           
         
    </body>
</html>
                