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
                    <div style=margin-right:63px; >

     <ul class="nav navbar-nav navbar-right">
           <a href="ownerpage.php" class="btn btn-info" >BACK</a>
     </ul></div>
        <form name="form1" method="get" action="">
        <table>
            <tr>
                <td><input type="text" name="s" value="" placeholder="Patient Name"></td>
                <td><input type="submit" value="search" name="search"></td>
            </tr>
        </table>
        </form>
<div class="row">
       <div class="container-fluid">
      <div class="col-sm-12">
        <div class="panal-body">
                                 <table id="tbl-patient" class="table table-responsive table bordered" border="3px"  cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>PATIENT ID</th>
                                             <th>NAME</th>
                                             <th>PHONE</th>
                                             <th>ADDRESS</th>
                                            
                                         </tr> 
                                         <?php
                                            $sql    =   "SELECT * FROM patient WHERE patientno!='' AND delstatus=0";
                                            
                                            @$s     =   $_GET['s'];  
                                            
                                            if($s!="")
                                            {
                                                $sql    .=    " AND name LIKE '%$s%' ";
                                            }
                                            
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                         <tr <?php if($row['name']==$s){ ?> style="background: #ccc;" <?php } ?> >
                                             <td><?php echo $row['pid']; ?></td>
                                             <td><?php echo $row['name']; ?></td>
                                             <td><?php echo $row['phone']; ?></td>
                                             <td><?php echo $row['address']; ?></td>
                                            
                                         </tr>
                                           <?php } ?>
                                     </thead>
                                 </table>
</div>
  </div>
</div>
</div>
    </body>
</html>
