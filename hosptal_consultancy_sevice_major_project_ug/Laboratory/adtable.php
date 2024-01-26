<?php include_once("../include/config.php"); ?>
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
.mainbar{width: 100%;height: 39px;    border: 1px solid white; float: left;}
.newo{width:50%;float: left;text-align: center;padding: 10px;height: 100%;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    color: white;
}
.xl{    background-color: saddlebrown;}
</style>


    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
       <div class="mainbar">
            
           
            <a href="prepare_add.php" >   <div class="newo"><label>PREPARE AD</label></div></a>
            <a href="adtable.php"  >    <div class="newo xl"><label>AD TABLE</label></div></a>

          

            
        </div>
        <form method="POST">
          <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>AD ID</th>
                                             <th>MEDICINE NAME</th>
                                              <th>QUANTITY</th>
                                               <th>PRICE</th>
                                             <th>AD DUE DATE</th>
                                             <th>STATUS</th>


                                         </tr>
                                         <?php
                                         $custid=$_SESSION['custid'];
                                            $sql    =   "SELECT * FROM  ad_table WHERE 	company='$custid' AND (status='1' OR status='0') ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                        
                                         <tr>
                                             
                                              <td> <input type="text" name="aid" value="<?php echo $row['ADid']; ?> "></td>
                                                 <?php
                                         $pid=$row['name'];
                                            $sql1    =   "SELECT * FROM  product WHERE pid='$pid' ";
                                            $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                            $row1 =mysqli_fetch_array($res1);
                                         ?>
                                             
                                          <td><?php echo $row1['name']; ?>  </td>
           <td><?php echo $row['quantity']; ?>  </td>
              <td><?php echo $row['price']; ?>  </td>
                                          <td><?php echo $row['duedate']; ?>  </td>
                                            <td><?php if($row['status']=='0'){echo  'NOT ACTIVE'; }?> 
                                           <?php if($row['status']=='1'){echo  'ACTIVE'; }?>  </td>
                                   <td>  <a href="showad.php?id=<?php echo base64_encode($row['ADid']); ?> " class="btn btn-info" name="canceloffer" style="width: 100%;padding: 28px;"  >SHOW AD</a></td>
                                   <td>  <a href="canceloffer.php?id=<?php echo base64_encode($row['ADid']); ?> " class="btn btn-info" name="canceloffer" value="CANCEL OFFER" style="width: 100%;padding: 28px;background-color: #ff0000"  >CANCEL</a></td>
                    

                                         </tr>

                                     
                                            <?php } ?>
                                     </thead>
                                       </table>
                
        
            </form>
     
                                     
                                     
                     
    </body>
</html>