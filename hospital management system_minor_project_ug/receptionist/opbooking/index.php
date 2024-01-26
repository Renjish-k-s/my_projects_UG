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
         <div style=margin-right:63px; >
      <ul class="nav navbar-nav navbar-right">
          <a href="../index.php" class="btn btn-info" >BACK</a>
       </ul>
         </div>
        <style>
            .hx1{
                  
 width: 100%;
    height: 335px;
    border: 1px solid;
    padding-left: 40px;
    padding-right: 40px;
                
            }
            
            
        </style><!-- comment -->
  
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
        
           <form id="frompatient" class="card" name='form1' method="post">
               <div class="hx1">
                    
                 <div align="left">
                        <h3>OP BOOKING</h3>
                    </div>
                     <div align="left">
                        
                         <input type="text" class="form-control" placeholder="PATIENT ID" id="pid"  name="pid" size="30ppx" >  
                        </div> <br>
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
                             //alert('aaa');
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
                         
                          </div> <br>
                         <div align="left">
                       
                         <select class="form-control" name="dname" id="dname"  onchange="view_date(this.value)">
                             <option value="">-DOCTOR NAME-</option>
                             
                         </select>
                          </div> <br>
        <div align="left">
                    
                         <select class="form-control" name="date" id="ddate">
                             <option value="">-DATE-</option>
                             
                         </select>
                          </div> <br>
                         
                        
                         <div align="right">
                           
                             <button type="submit" id="save" class="btn btn-info" value="add_op" name="add_op" >ADD OP</button>
                  <button type="button" id="clear" class="btn btn-warning">RESET</button>
                 
                  
                         </div> 
                         </div>
           </form><!-- comment -->
           
                         </div> 
    </div> 
</div>
               
           <?php
            if(isset($_POST['add_op'])){
                $ono    =   $_POST['ono'];
                $pid    =   $_POST['pid'];
                $spec= $_POST['spec'];
                $dname= $_POST['dname'];
                $rno= $_POST['date'];
                $sql    =   "insert into op(ono,pid,spec,dname,rno) VALUES ('$ono','$pid','$spec','$dname','$rno')";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Added')</script>";
                
                echo "<script>window.location='index.php'</script>";
            }
           ?>
           <?php
            if(isset($_POST['get'])){
                
                 echo "<script>window.location='../Home/profileh.php'</script>";
                
            }
            ?>
            <?php
            if(isset($_POST['get1'])){
                
                 echo "<script>window.location='../receptionist/index.php'</script>";
                
            }
            ?>
           <br>
                   <br>
          <div class="col-sm-6">
        <div class="panal-body">
                                <table id="tbl-patient" class="table table-responsive table bordered" cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>OP NO</th>
                                             <th>PAT ID</th>
                                             <th>SPECIALIZATION</th>
                                             <th>DOCTOR NAME</th>
                                             <th>OP DATE</th>
                                             <th>ACTION</th>
                                         </tr> 
                                         <?php
                                            $sql    =   "SELECT o.*, u.fullname
                                                        FROM op o 
                                                        LEFT JOIN usertable u ON u.slno=o.dname
                                                        WHERE o.ono!='' AND o.send='0'
                                                        ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                             <td><?php echo $row['ono']; ?></td>
                                             <td><?php echo $row['pid']; ?></td>
                                             <td><?php echo $row['spec']; ?></td>
                                             <td><?php echo $row['fullname']; ?></td>
                                             <td><?php echo $row['rno']; ?></td>
                                             <td>
                                                <a href="send.php?id=<?php echo $row['ono']?>">SEND</a>
</a>
                                             </td>
                                             <td>
                                                  <a href="op_sheet.php?id=<?php echo $row['ono']?>&pid=<?php echo $row['pid']?>&dname=<?php echo $row['fullname'] ?>" >Get invoice</a>
                                             </td>
                                         </tr>
                                           <?php } ?>
                                     </thead>
                                       
                                 </table>

                                             </div> 
          </div>

    </body>
</html>
