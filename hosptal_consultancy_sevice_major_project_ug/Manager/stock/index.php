<?php include_once("../../include/config_1_1.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
     <style>
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: none;height: 388px;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 20%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.bar{width: 100%;
    float: left;
    height: 60px;
    background-color: white;
    border-top: 10px solid blue;
    
}
.bar1{
         height: 100%;
    float: left;
    width:50%;
    border-width: 10px;
    
}
.head{
        text-align: center;
        font-size: 24px;
        font-weight: 700;
            color: black;
margin-top: 10px;}
.bar1:hover{ border-bottom:10px solid blue; background-color: #ccc;}
.bar2{background-color: #ccc;}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    color: red;
}
</style>

    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="../index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
       <div class="bar">
               <a href="index.php?id=<?php echo $_GET['id']; ?>" > <div class="bar1 bar2">
                <h4 class="head">MEDICINE DETAILS</h4>
            </div></a>
                <a href="lab_equipments.php?id=<?php echo $_GET['id']; ?>" > <div class="bar1">
                <h4 class="head">LAB MACHINES & EQUIPMENTS</h4>
            </div></a>
               
            
            </div>
          
        
        
        
        
        
        <form method="POST">
       
         <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>SL NO</th>
                                             <th>MEDICINE NAME</th>
                                             <th>RATE</th>
                                             <th>TOTAL QUANTITY</th>
                                              <th>SOLD QUANTITY</th>
                                              
                                              <th>BALANCE</th>
                                             
                                             <th>Action</th>
                                         </tr>
                                         <?php
                                            $sql    =   "SELECT m.*, p.*,SUM(qty) as sum 
                                                        FROM medicine m 
                                                        LEFT JOIN stockadd p ON p.slno=m.med
                                                       GROUP BY med";
                                            $res    =   mysqli_query($con1, $sql) or die(mysqli_query($con1));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                             <td><input type="number" class="form-control" placeholder="slno" id="slno" name="slno" value="<?php echo $row['slno']; ?>" readonly size="30ppx" >
                                                </td>
                                             
                                          <td><input type="text" class="form-control" placeholder="name" id="name" name="name" value="<?php echo $row['name']; ?>" readonly size="30ppx" ></td>
        
                                           <td> <input type="text" class="form-control" placeholder="rate" id="rate" name="rate" value="<?php echo $row['rate']; ?>" readonly size="30ppx" >
                                                                            </td> 
                                           
                                              <td> <input type="text" class="form-control" placeholder="quat" id="quat" name="quat" value="<?php echo $row['quat']; ?>" size="30ppx" >
                                                                              </td>
                            <td> <input type="text" class="form-control" placeholder="quat" id="quat" name="quat" value="<?php echo $row['sum']; ?>" size="30ppx" >
                                                                              </td>
                          <td> <input type="text" class="form-control" placeholder="quat" id="quat" name="quat" value="<?php echo ($x=$row['quat']-$row['sum']); ?>" size="30ppx" >
                                                                              </td>
                                                                        
                                                                             <?php if($x<1000) {?>
                                              
                                                                            <td>  <a href=""  class="btn btn-info"  style="background-color: red;" >DANGEROUSLY STOCK LOW</a></td>
                                                                             </tr><?php }?>
                                                                             <?php if($x>1000&&$x<10000) {?>
                                              
                                                                            <td>  <a href=""  class="btn btn-info"  style="width: 100%;background-color: yellow;color:black;" >LOW STOCK</a></td>
                                                                             </tr><?php }?>
                                                        <?php if($x>10000) {?>
                                              
                                                                            <td>  <a href=""  class="btn btn-info"  style="width: 100%;background-color: white;color:black;" >SAFE POSITION</a></td>
                                                                             </tr><?php }?>
                                            <?php } ?>
                                     </thead>
                                       </table>
             
</form>
        
    </body>
</html>