<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
      <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
</div>
        <div class="hx">
      <ul class="nav navbar-nav navbar-right">
           <a href="opgeneraltable.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >OP TICKET & PRESCRIPTION</a>
             <a href="testres.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >LAB RESULTS</a>
          <a href="cpass.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >CHANGE PASSWORD!!</a>
          <a href="profileh.php" class="btn btn-warning" >LOGOUT</a>
          </div>
       </ul>
         <style>
            
            .h12
            {
                width: 126%;
    height: 358px;
    margin-left: 526px;
    margin-top: 100px;
    border: 1px solid;
    border-color: black;
    padding-left: 150;
    padding-right: 150;
}
           .hx
           {
                  margin-right: 63px; 
           }
           
           
            
           
            </style>
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
           <form id="frompatient" class="card" name='form1' method="post">
                   <div class="h12">
                        <h3 align="center">OP BOOKING</h3>
                       
             
                    <div>
                        
                         <input type="text" class="form-control" placeholder="PATIENT ID" id="pid"  name="pid" value="<?php echo $_GET['id']; ?>" readonly  size="30ppx" >  
                        </div><br>
                       <div align="left">
                       
                         <script>
                             
                         function view_doc(id){
                            // alert(id);
                                $.ajax({
                                    url		:	'ajax.php',
                                    type	:	'POST',
                                    data	:	{'type_id' : id },
                                    success	:	function(data) {
                                        // alert(data);
                                            $('#dname').html(data);
                                    }
                            });
                         }
                         
                         function view_date(id){
                            // alert(id);
                                $.ajax({
                                    url		:	'ajax.php',
                                    type	:	'POST',
                                    data	:	{'date_id' : id },
                                    success	:	function(data) {
                                        // alert(data);
                                            $('#ddate').html(data);
                                    }
                            });
                             //alert('aaa');
                         }
                         </script>
                         <select class="form-control" name="spec" id="spec" onchange="view_doc(this.value)">
                                <option value="">-SPECIALIZATION-</option>
                                <?php
                                   $sql1   =   "SELECT * FROM doctor_type WHERE delStatus='0'";
                                   $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
                                   while($row1=mysqli_fetch_array($res1)){
                               ?>
                                <option value="<?php echo $row1['type'] ?>"><?php echo $row1['type']; ?></option>
                               <?php 
                                   }
                                ?>
                            </select>
                          </div><br>
                         <div align="left">
                        
                         <select class="form-control" name="dname" id="dname"  onchange="view_date(this.value)">
                             <option value="">-DOCTOR NAME-</option>
                         </select>
                          </div><br>
        <div align="left">
                        
                         <select class="form-control" name="date" id="ddate">
                             <option value="">-DATE-</option>
                         </select>
                          </div><br>
                         <br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="add_op" name="add_op" >ADD OP</button>
                  <button type="button" id="clear" class="btn btn-warning">RESET</button>
                         </div> 
                </div>    
       </div> 
    </div> 
                </form>
           <?php
            if(isset($_POST['add_op'])){
                   $pid=$_GET['id'];
                $ono    =   $_POST['ono'];
               $spec= $_POST['spec'];
                $dname= $_POST['dname'];
                $rno= $_POST['date'];
                $sql    =   "insert into op(ono,pid,spec,dname,rno) VALUES ('$ono','$pid','$spec','$dname','$rno')";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Added')</script>";
                
                echo "<script>window.location='index.php?id=$pid'</script>";
            }
           ?>
           <?php
            if(isset($_POST['get'])){
                 $id=$_GET['id'];
                
                   echo "<script>window.location='profile.php?id=$id'</script>";
            }
            ?>
          
    </body>
</html>
