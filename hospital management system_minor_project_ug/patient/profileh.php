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
        <div class="btn">
      <ul class="nav navbar-nav navbar-right">
           <a href="../Home/index.html" class="btn btn-info" >HOME</a>
       </ul></div>
        <style>
            
            .h12
            {
                       width: 37%;
   height: 242px;
  margin-left: 526px;
     margin-top: 68px;
    border: 1px solid;
    border-color: black;
    padding-left: 150;
    padding-right: 150;
}
           .btn
           {
               
           }
           
           
            
           
            </style>
        
           <form id="frompatient" class="card" name='form1' method="post">
                   
               <div class="h12" align="center">
                   <h3>PATIENT LOGIN</h3><br>
                  
                         <input style=width: 22px; type="text" class="form-control" placeholder="PATIENT ID" id="pid" name="pid"  size="30ppx" >
                    
                <br>
               
                        
                         <input type="password" class="form-control" placeholder="phone number as default" id="uid"  name="uid"  size="30ppx" >
             
               <br>
                <button type="submit" id="save" class="btn btn-info" value="add" name="add" >SUBMIT</button>
                   <button type="submit" id="save" class="btn btn-info" value="get1" name="get1" >PATIENT CREATION</button>
               
             </div>
           </form>
       
           <?php
            if(isset($_POST['get1'])){
                
                 echo "<script>window.location='patient_creation.php'</script>";
                
            }
            ?>
             
        <?php
        if(isset($_POST['add']))
        {
            $id=$_POST['pid'];
            $num=$_POST['uid'];
            
       $sql    = "SELECT * FROM patient WHERE pid='$id' ";
        $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
         while($row1 =mysqli_fetch_array($res)){
             if($num==$row1['pass']){
                 
                    echo "<script>window.location='index.php?id=$id'</script>";
                 
             }
             else
             {
                 echo "INVALID PASSWORD" ;
             }
             
             
         }                                    
                                         
                                                  
           
        }
        ?>
</body><!-- comment -->

</html><!-- comment -->