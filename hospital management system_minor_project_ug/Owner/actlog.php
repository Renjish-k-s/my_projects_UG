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
          <a href="ownerpage.php" class="btn btn-info" >BACK</a></ul></div>
         <?php
         
          $sql    = "SELECT l.*, u.*
                    FROM log l 
                    LEFT JOIN usertable u ON l.userid=u.slno";
        $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
        ?>
        
             <table border="1px" id="tbl-patient" class="table  " cellpadding="0" width="100" style="margin: auto; width:1000px;border:1px solid #ccc;">
            <tr>
                <td>SLNO</td>
                <td>USER NAME</td>
                <td>NAME</td>
                <td>ACTIVITY</td>
                <td>DATE</td>
                <td>TIME</td>
                </tr>
                <?php  
                $i=1;
                while( $row     =   mysqli_fetch_array($res)){
                ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['fullname']?></td>
                <td><?php echo $row['activity']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['time']?></td>
            </tr>
                <?php $i++; } ?>
        </table>
    </body>
</html>
