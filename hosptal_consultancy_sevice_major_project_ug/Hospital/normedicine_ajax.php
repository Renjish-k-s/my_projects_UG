<?php include_once("../include/config.php"); ?>
 <?php
                @$products=$_GET['products'];
                  $sql    =   "SELECT product.*,ad_table.*,product.name as f,product.sname as u 
                              FROM product 
                              LEFT JOIN ad_table ON product.pid=ad_table.name 
                              WHERE type='pharmacy' AND ad_table.status='1' ";
                  if($products!=""){
                      $sql  .=  " AND product.name='$products'";
                  }
                  
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                      $num      =   mysqli_num_rows($res);
                 while($row =mysqli_fetch_array($res)){
                                             ?>
<a href="showproduct.php?aid=<?php echo base64_encode($row['ADid']); ?>"  class="linkx" >
                <div class="pr_box">
                    <div class="pr_img">
                        <img src="../product_image/<?php echo $row['image'] ?>" >
                    </div>
                    <div class="pr_details">
                        <div class="pr_title"><?php echo $row['f']; ?></div>
                        <div class="pr_desc"><?php echo $row['u']; ?></div>
                        
                        <?php if($row['adtype']=='0') { ?>
                        <div class="pr_other">
                            <div class="pr_price">Rs. <?php echo $row['price'].'/-'; ?></div>
                            <div class="pr_qty">Qty: <?php echo $row['quantity']; ?> nos</div>
                        </div>
                        <?php } ?>
                         <?php if($row['adtype']=='1') { ?>
                        <div class="pr_other">
                            <div class="pr_price">Rs. <?php echo $row['saleprice'].'/-'; ?></div>
                            <div class="pr_qty">Qty: <?php echo $row['quantity']; ?> nos</div>
                        </div>
                        <div class="pr_other">
                            <div class="pr_price" style="background-color: red;" ><?php echo 'ON OFFER!!'; ?></div>
                        </div>
                        
                        <?php } ?>
                    </div>
                </div>
      </a>
                 <?php }?>
<?php if($num=="0"){ ?>
<h2 style="text-align: center;color: white;">No Results Found!!!</h2>
<?php } ?>

