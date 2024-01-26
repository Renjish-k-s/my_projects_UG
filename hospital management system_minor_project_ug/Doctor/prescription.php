<?php include_once("../include/config.php");error_reporting(0) ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
    </head>
    <body bgcolor="blue">
         <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
</div>
      <ul class="nav navbar-nav navbar-right">
           <a href="doctor_view.php" class="btn btn-info" >BACK</a>
           <a href="../Doctor/med_his.php?id=<?php           
 echo $pid =$_GET['id'];
            ?>" class="btn btn-info" >PRESCRIPTION HISTORY</a>
          
          </ul>
        <h3>PRESCRIPTION</h3><br>
        <form name='form1' method="post" action="">
       <div align="left">
           <table id="tbl-patient" class="table table-responsive table bordered" border="0px" cellpadding="0" width="50%" style="width:50%">
            <thead>
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
        </table>
            <button type="submit" id="save" class="btn btn-info" value="add_pre" name="add_pre" >ADD</button>
        </form>
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
             echo "<script>window.location='prescription.php?id=$pid'</script>";
        }
        ?>
   
    </body>
   </html>