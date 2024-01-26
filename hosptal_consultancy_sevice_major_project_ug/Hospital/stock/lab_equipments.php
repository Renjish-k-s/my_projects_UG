<?php include_once("../../include/config_1.php"); ?>
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
               <a href="index.php" > <div class="bar1 ">
                <h4 class="head">MEDICINE DETAILS</h4>
            </div></a>
                <a href="lab_equipments.php" > <div class="bar1 bar2">
                <h4 class="head">LAB MACHINES & EQUIPMENTS</h4>
            </div></a>
               
            
            </div>
          
        
        
        
        
        
        <form method="POST">
       
         <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>SL NO</th>
                                             <th>MACHINE ID</th>
                                             <th>NAME</th>
                                              <th>SERVICE NUMBER</th>
                                           <th>STATUS</th>

                                              
                                         </tr>
                                         <?php
                                           $i=1;
                                            $sql    =   "SELECT * FROM lab_equipments";
                                            $res    =   mysqli_query($con1, $sql) or die(mysqli_query($con1));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                             <td><input type="number" class="form-control" placeholder="slno" id="slno" name="slno" value="<?php echo $i; ?>" readonly size="30ppx" >
                                                </td>
                                             
                                          <td><input type="text" class="form-control" placeholder="name" id="name" name="name" value="<?php echo $row['mechine_id']; ?>" readonly size="30ppx" ></td>
        
                                           <td> <input type="text" class="form-control" placeholder="rate" id="rate" name="rate" value="<?php echo $row['name']; ?>" readonly size="30ppx" >
                                                                            </td> 
                                           
                                              <td> <input type="text" class="form-control" placeholder="quat" id="quat" name="quat" value="<?php echo $row['service_number']; ?>" size="30ppx" >
                                                                              </td>
                                                                              
                                                     <?php if($row['status']=='0') {?>                         
                                    <td> <input type="text" class="form-control" value="ACTIVE" size="30ppx" style="background-color:green; color: white;">
                                    </td>
                                            <?php } ?>
                                                                
                                                     <?php if($row['status']=='1') {?>                         
                                    <td> <input type="text" class="form-control" value="OUT OF SERVICE" size="30ppx"  style="background-color:yellow;">
                                    </td>
                                            <?php } ?>
                                     <?php if($row['status']=='9') {?>                         
                                    <td> <input type="text" class="form-control" value="DECOMMISIONED" size="30ppx"  style="background-color:red;">
                                    </td>
                                            <?php } ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <td>  <a href="service.php?id=<?php echo $row['id']; ?>"  class="btn btn-info"  style="    padding: 16px;" >NEED SERVICE</a></td>
                                    
                       <td>  <a href="decommission.php?id=<?php echo $row['id']; ?>"  class="btn btn-info" style="background-color: red;    padding: 16px;"   >DE-COMMISSION</a></td>
                                                                            <td>  <a href="../norequipments.php?products=<?php echo $row['name']; ?>" style="    padding: 16px;"  class="btn btn-info"   >EASY PURCHASE</a></td>

                                         </tr>

                                            <?php $i++; } ?>
                                     </thead>
                                       </table>
             
</form>
        
    </body>
</html>