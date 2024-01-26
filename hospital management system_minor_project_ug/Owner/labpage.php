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
        <div style=margin-right:63px; >

      <ul class="nav navbar-nav navbar-right">
          <a href="../login/login.php" class="btn btn-warning" >LOGOUT</a></ul></div>
         <?php
            $sql    =   "SELECT * FROM labtest WHERE labdelstatus='0' GROUP BY date ";
            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
        ?>
              <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto; width:1000px;border:1px solid #ccc;">
            <tr>
                
                <td>PAT-ID</td>
                <td>DATE</td>
                <td>TIME</td>
                </tr>
                <?php  while( $row     =   mysqli_fetch_array($res)){
                ?>
                <tr>
                <td><p><?php echo $row['pid']?></p></td>
                 <td><p><?php echo $row['date']?></p></td>
               <td><p><?php echo $row['time']?></p></td>
               <td><a href='../laboratary/labview.php?id=<?php echo $row['pid']?>&date=<?php echo $row['date']?>'>LIST</a></td>
                 <td><a href='../laboratary/bill.php?id=<?php echo $row['pid']?>&date=<?php echo $row['date']?>' target="_blank">GET BILL</a></td>
                  
            </tr>
                <?php } ?>
        </table>
    </body>
</html>
