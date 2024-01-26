<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color: #eee;">
        <style>
            .id1{
           width: 63%;
    height: 100%;
    background-color: #eee;
    margin-left: 288px;
  margin-top: -19px;
  border: 7px solid;
    border-color: white;
    
    background-color: #eee;
                
            }
            .idx{
               
            width: 1362px;
    margin-left: 19px;
    margin-top: 10px;
            }
            
            </style>
      <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>

         <form method="POST">
      <div style=margin-right:63px; >
      <ul class="nav navbar-nav navbar-right">
           <a href="cpass.php" class="btn btn-info" >CHANGE PASSWORD</a>
           <a href="duty_rec.php" class="btn btn-info" >CREATE DUTY</a>
            <button type="submit" name="logout" class="btn btn-warning" >LOGOUT</button></ul>
  </div>
             </div>
            
           
<div class="id1">
    <br>
                                 <table class="idx" cellpadding="4px"  >
                                     <thead style="height: 198px;">
                                         <tr>
                                             <th>OP NO</th>
                                             <th>PAT ID</th>
                                             <th>TAKE DETAILS</th>
                                             
                                         </tr> 
                                         <?php
                                         $i=1;
                                             @$doc_id    =   $_SESSION['slno'];
                                             $date   =   date('Y-m-d');
                                            $sql    =   "SELECT * FROM op WHERE dname='$doc_id' AND delstatus='0' AND send='1' AND rno='$date'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                             <td><?php echo $i; ?></td>
                                             <td><?php echo $row['pid']; ?></td>
                                             <td><a href="details.php?id=<?php echo $row['pid'] ?>" class="btn btn-info">PROCEED</a></td>
                                             
                                             <td><a href="send.php?id=<?php echo $row['ono']; ?>">SEND</a></td>
                                             <td><a href="doctor_invoice.php?id=<?php echo $row['pid'] ?>&date=<?php echo $row['rno'] ?>">GET PRESCRIPTION</a></td>
                                         </tr>
                                           <?php $i++; } ?>
                                     </thead>
                                 </table>
             <?php
       
               $date   =   date('Y-m-d');
                $sql1   =   "UPDATE duty_rec SET  status=1 WHERE date<'$date'";
                
                $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
               
        
           ?>
                
     </div>
   
             
                                  
                                   
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
    </form>
    </body>
</html>
