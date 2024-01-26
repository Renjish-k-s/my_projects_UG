<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <style>
          
           .hx
           {
                  margin-right: 63px; 
           }
           
           
            
           
            </style>
        
         <div class="jumbotron text-center">
            <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
            <p>COME FAST GO FAST</p>
          </div>
             <div class="hx">
         <ul class="nav navbar-nav navbar-right">
           <a href="index.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >BACK</a></ul>
             </div>
<div class="container">
        <div class="panal-body">
        <table id="tbl-patient" class="table table-responsive table bordered" border="0px" cellpadding="0" width="100" >
            <thead>
                <tr>
                    <th>SL NO</th>
                    <th>TEST NAME</th>
                    <th>DATE</th>
                    <th>TIME</th>

                 </tr> 
                 <tr>
                    <?php
                    $pid    =   $_GET['id'];
                                            $sql    =   "SELECT labtest.*,testlist.* FROM labtest LEFT JOIN testlist ON labtest.medtest=testlist.id WHERE pid='$pid'";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            $i=1;
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr>
                                             <td><?php echo $i; ?></td>
                                            
                                             <td><?php echo $row['testname']; ?></td>
                                             <td><?php echo date("d-m-Y", strtotime($row['date'])); ?></td>
                                             <td><?php echo $row['time']; ?></td>
                      <td><?php if($row['labdelstatus']==1){ ?>
                          <a href="../uploads/<?php echo $row['result'] ?>" target="_blank">View Doc</a>
                      <?php } ?>
                                  <?php if($row['labdelstatus']==0){ ?>
                          <a href="">PENDING</a></td>
                      <?php } ?>
                 </tr>
                 
                     <?php $i++; } ?>
        </table>
        </div>
         </div>
</body>


</html>