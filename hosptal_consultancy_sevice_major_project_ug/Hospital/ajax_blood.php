
<?php include_once("../include/config.php"); ?>
 <?php
                @$pincode=$_GET['pincode'];
                   @$place=$_GET['place'];
                $sql    =   "SELECT * FROM common_login WHERE status='2'";

                  if($pincode!='' && $place!=''){
                      
                      $sql  .=  " AND (pincode ='$pincode' AND bloodgroup='$place') ";
                          
                  }
                  
                  //print_r($sql);
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                      $num      =   mysqli_num_rows($res);
                      if($pincode!=""){
                          ?>
 <table class="container tab_a" style="background-color: #ccc;border-radius: 50px;" id="table1">
                        <thead>
                            
                            <tr>
                                <th style="text-align: left;">NAME</th>
                                <th style="text-align: left;">AGE</th>
                                <th colspan="2" style="    text-align: left;">PLACE</th>
                                <th colspan="2" style="    text-align: left;">PHONE NUMBER</th>

                            </tr>
                        </thead>
                        <tbody>
                                <?php
                 while($row =mysqli_fetch_array($res)){
                                             ?>
                 
                            <tr>
                                   

                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['village']; ?></td>
                        <td><?php echo $row['mnumber']; ?></td>
                            </tr>
                       
                 <?php }?>
                         </tbody>
<?php if($num=="0"){ ?>
                        <td><h2 style="text-align: center;color: white;">No Results Found!!!</h2></td>
<?php } ?>

                                     </table>
                      <?php } ?>
