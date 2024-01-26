<html>
    <?php include_once("../include/config.php"); ?>
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
          <a href="labpage.php" class="btn btn-info" >BACK</a></ul>
         <?php
          $id=$_GET['id'];
          $date   =   $_GET['date'];
          $sql    = "SELECT l.*, t.*
                    FROM labtest l 
                    LEFT JOIN testlist t ON l.medtest=t.id
                  WHERE pid='$id' AND date='$date' AND labdelstatus='0'";
        $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
          
        ?>
        
             <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto; width:1000px;border:1px solid #ccc;">
            <tr>
                <td>SLNO</td>
                <td>PID</td>
                <td>TESTS</td>
                <td>date</td>
                <td>time</td>
                <td>Result</td>
                <td>Action</td>
                </tr>
                <?php  while( $row     =   mysqli_fetch_array($res)){
                ?>
                <tr>
                <td><p><?php echo $row['slno']?></p></td>
                <td><p><?php echo $row['pid']?></p></td>
                <td><p><?php echo $row['testname']?></p></td>
                <td><p><?php echo $row['date']?></p></td>
                <td><p><?php echo $row['time']?></p></td>
                <td><a href="../uploads/<?php echo $row['result'] ?>" target="_blank">View Doc<a></td>
                <td><a href='fileup.php?id=<?php echo $row['slno']?>&date=<?php echo $_GET['date'];?>&pid=<?php echo $_GET['id'];?>'>Add</a></td>
                <td><a href='labupload.php?id=<?php echo $row['slno']?>&date=<?php echo $_GET['date'];?>&pid=<?php echo $_GET['id'];?>'>SEND</a></td>
            </tr>
                <?php } ?>
        </table>
    </body>
</html>
