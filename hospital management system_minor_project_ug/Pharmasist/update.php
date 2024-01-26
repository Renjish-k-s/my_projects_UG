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
   <div style=margin-right:63px; >
      <ul class="nav navbar-nav navbar-right">
          <a href="stocktable.php" class="btn btn-info" >BACK</a>
  
       </ul>
 </div>
</div>
        <style>
              .h12
            {
          width: 80%;
  height: 258px;
    margin-left: 535px;
    margin-top: 100px;
    border: 1px solid;
    border-color: black;
    padding-left: 85px;
    padding-right: 85px;
    padding-top: 48px;
}
            </style>
       <ul class="nav navbar-nav navbar-right">
         
       </ul>
<div class="row">
    <div class="col-sm-4">
       <div class="container-fluid">
           <form id="frompatient" class="card" name='form1' method="post">
               <div class="h12">
                      <div align="left">
                          <input type="text" class="form-control" value="<?php echo $_GET['id']; ?>" size="30ppx" required>
                        </div>
                   <br>
                         <div align="left">
                         <input type="text" class="form-control" value="<?php echo $_GET['ol']; ?>"  size="30ppx" required>  
                        </div>
                   <br>
                         <div align="left">
                             <input type="text" class="form-control" placeholder="new stock" name="nl"  size="30ppx" required>  
                         </div>
                   <br>
                         <div align="right">
                             <button type="submit" id="save" class="btn btn-info" value="update" name="update" >UPDATE</button>
                  <button type="button" id="clear" class="btn btn-warning">Reset</button>
                 </div>
               </div>
           </form>
</div>
    </div>                      
 </div>
        
           <?php
          if(isset($_POST['update'])){
                $id=$_GET['id'];
               $ol=$_GET['ol'];
               $nl=$_POST['nl'];
               $tl=$ol+$nl;
                $sql    =   "UPDATE stockadd SET  quat='$tl' WHERE slno='$id'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('Updated')</script>";
                 echo "<script>window.location='stocktable.php'</script>";
          }
           ?>
    </body>
</html>












