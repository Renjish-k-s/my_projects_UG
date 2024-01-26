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
           <a href="phar_view.php" class="btn btn-info" >BACK</a>
      </ul><!-- <><!-- comment --> -->
      </div>
         <div class="container">
         
                                 <table id="tbl-patient" class="table table-responsive table bordered" border="3px"  cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             <th>SL NO</th>
                                             <th>MEDICINE NAME</th>
                                             <th>RATE</th>
                                             <th>QUANTITY</th>
                                             <th>Action</th>
                                         </tr>
                                         <?php
                                            $sql    =   "SELECT med,SUM(qty) as sum FROM medicine GROUP BY med";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                               
                                                
                                         ?>
                                         <form name="form1" method="post" action="">
                                             
                                         <tr>
                                             <td><input type="text" class="form-control" placeholder="slno" id="slno" name="slno"  size="30ppx" >
                                                </td>
                                             
                                          <td><input type="text" class="form-control" placeholder="name" id="name" name="name" readonly size="30ppx" ></td>
        
                                           <td> 
                                                                            </td> 
                                           
                                              <td> <input type="text" class="form-control" placeholder="quat" id="quat" name="quat" value="<?php echo $row['sum']; ?>" size="30ppx" >
                                                                              </td>
                                              
                                             <td>  
                                         </tr>
                                          </form>
                                            <?php } ?>
                                     </thead>
                                 </table>
            </div>
            <?php
            
            ?>
            
       
    </body>
</html>
