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
       </ul>
             </div>
  <style>
          
         
           .hx2{
                   width: 30%;
    height: 208px;
    border: 1px solid;
    border-color: black;
    margin-left: 563px;
    padding: 22px;
    margin-top: 129px
               
           }
           
            
           
            </style>
        <div class="hx2">
           <form id="frompatient" class="card" name='form1' method="post">
                   
                    <div align="left">
                        <h3>CHANGE PASSWORD</h3>
                    </div>
                     <div align="left">
                         <label class="form-label">NEW PASSWORD</label>
                         <input type="password" class="form-control" placeholder="new password" id="password" name="password"  size="30ppx" >
                     </div>
                <br>
                <button type="submit" id="save" class="btn btn-info" value="add" name="add" >SUBMIT</button>
               
                
           </form>
        </div>        
             
        <?php
        if(isset($_POST['add']))
        {
            $nid=md5($_POST['password']);
            $id    =   $_SESSION['slno'];
            
       $sql    = "UPDATE usertable SET  password='$nid' WHERE slno='$id'";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('Updated')</script>";
        echo "<script>window.location='../login/login.php'</script>";
        }
        ?>
</body><!-- comment -->

</html><!-- comment -->