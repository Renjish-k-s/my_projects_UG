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
  <nav> 
            <div> 
      <ul class="nav navbar-nav navbar-right">
          <a href="user.php" class="btn btn-info" >BACK</a>
       </ul>
  </div>
</nav>
           <form>
             <div align="left">
                                <table id="tbl-patient" class="table table-responsive table bordered" border="3px"  cellpadding="0" width="100">
                                     <thead>
                                         <tr>
                                             
                                             <th>FULL NAME</th>
                                             <th>USERNAME</th>
                                             <th>USER TYPE</th>
                                             <th>Action</th>
                                         </tr> 
                                          </thead>
                                         <?php
                                            $sql    =   "SELECT u.*, t.usertype as aaa                                                    
                                                        FROM usertable u
                                                        LEFT JOIN usertype t ON u.usertype=t.id WHERE delstatus=0";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                          <tbody>
                                         <tr>
                                             
                                             <td><?php echo $row['fullname']; ?></td>
                                             <td><?php echo $row['username']; ?></td>
                                             <td><?php echo $row['aaa']; ?></td>
                                             <td>
                                                 <a href="edit_user.php?id=<?php echo $row['slno'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
                                                 <a href="delete_rec.php?id=<?php echo $row['slno'] ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i>
</a>
                                             </td>
                                         </tr>
                                           <?php } ?>
                                        </tbody>
                                 </table>
                                             </div>
           </form>
    </body>
</html>
                