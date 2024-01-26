<?php include_once("../include/config.php"); ?>
 <?php
                @$products=$_GET['products'];
                  $sql    =   "SELECT product.*,ad_table.*,product.name as f,product.sname as u FROM product LEFT JOIN ad_table ON product.pid=ad_table.name WHERE type='lab' AND ad_table.status='1'";

                  if($products!=""){
                      $sql  .=  " AND product.name='$products'";
                  }
                  
                      $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                      $num      =   mysqli_num_rows($res);
                 while($row =mysqli_fetch_array($res)){
                                             ?>
<a href="showequipment.php?aid=<?php echo base64_encode($row['ADid']); ?>"  class="linkx" >
                <div class="pr_box">
                    <div class="pr_img">
                        <img src="../product_image/<?php echo $row['image'] ?>" >
                    </div>
                    <div class="pr_details">
                        <div class="pr_title"><?php echo $row['f']; ?></div>
                        <div class="pr_desc"><?php echo $row['u']; ?></div>
                        <div class="pr_other">
                            <div class="pr_price">Rs. <?php echo $row['price']; ?></div>
                            <div class="pr_qty">Qty: <?php echo $row['quantity']; ?></div>
                        </div>
                        <?php if($row['adtype']=='2'){?>
                        <div class="pr_det">
                         <label>SPECIAL OFFER !!!!!</label>
                        </div>
                 <?php } ?>
                    </div>
                </div>
      </a>
                 <?php }?>
<?php if($num=="0"){ ?>
<h2 style="text-align: center;color: white;">No Results Found!!!</h2>
<?php } ?>

