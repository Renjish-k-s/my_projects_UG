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
         <style>
          
           .hx
           {
                  margin-right: 63px; 
           }
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
        <div class="hx">
      <ul class="nav navbar-nav navbar-right">
           <a href="index.php?id=<?php echo $id=$_GET['id'];?>" class="btn btn-info" >BACK</a></ul>
       </div>

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
               
                </div>
           </form>
      
             
        <?php
        if(isset($_POST['add']))
        {
            $nid=$_POST['password'];
            $id    =   $_GET['id'];
            
       $sql    = "UPDATE patient SET  pass='$nid' WHERE pid='$id'";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('Updated')</script>";
        echo "<script>window.location='profileh.php?id=$id'</script>";
        }
        ?>
</body><!-- comment -->

</html><!-- comment -->