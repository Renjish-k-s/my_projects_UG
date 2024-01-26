<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    </head>
    <style>
        body{ background-color:  #13C5DD;}
        .div1{
           background-color: #ccc;
    width: 39%;
   height: 470px;
    margin-top: -99px;
    margin-left: 514px;
        }
        .bootstrap-select>.dropdown-toggle { padding: 19px 16px; border-radius: 31px; }
select.bs-select-hidden, select.selectpicker {
    display: block!important;}
        .div2{
            
            width: 100%;
    height: 135px;
        }
        .h1x{
            
            text-align: center;
    font-size: xxx-large;
    color: white;
    margin-top: 69px;
        }
    .form-control{
        width: 62%;
    height: 55px;
    margin-left: 117px;
        
    }
   .p1{
          text-align: center;
           color: white;
}
.calx{
    
  background-color: #ccc;
    height: 495px;
    width: 50%;
    margin-left: 428px;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    margin-left: 25px;
        color: black;
}
.mainbar{width: 100%;height: 39px;    border: 1px solid white;float: left;}
.newo{width: 50%;float: left;text-align: center;padding: 10px;height: 100%;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.xl{    background-color: saddlebrown;}

    </style>
    <body >
              <form action="" method="post" enctype="multipart/form-data">
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
                   <div class="mainbar">
            
           
            <a href="prepare_add.php" >   <div class="newo xl"><label>PREPARE AD</label></div></a>
            <a href="adtable.php"  >    <div class="newo "><label>AD TABLE</label></div></a>

          

            
        </div>
                   <?php
                         $id= base64_decode($_GET['id']);
                          $find="SELECT * FROM ad_table WHERE ADid='$id'";
                       $findx= mysqli_query($con, $find);
                       $findx1= mysqli_fetch_array($findx);
                    ?>
                
                    
                          
                    <table class="container" style="background-color: #ccc;height: 475px; margin-top: 100px;      
    border-radius: 50px;">
                          <tr>
                              <th colspan="4"><h1 style="text-align:center;    color: white;">APPLY FOR AD</h1></th>
            </tr><tr>
            
                           <th> <label class="form-label">AD ID</label></th>
                             <th><input type="text" name="proid" class="form-control" value="<?php echo $findx1['ADid']; ?>" readonly ></th>
                               <th> <label class="form-label">PRODUCT NAME</label></th>
 <th><select class="form-control " data-live-search="true" name="product" readonly>
                                       <option>SELECT MEDICINE</option>
                                      <?php
                                         $custid=$_SESSION['custid']; 
                                            $sql    =   "SELECT * FROM product  WHERE companyid='$custid' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res))
                                            {
                                         ?>
                                   
                                     <option <?php if($row['pid']==$findx1['name']) { ?> selected <?php } ?> > <?php echo $row['name']; ?></option>
                             <?php }?>
                               </select></th>
                                          
                       </tr>
                       <tr>
                            <th> <label class="form-label"> PRICE</label></th>
                            <th><input type="text" class="form-control" name="tprice"  value="<?php echo $findx1['price']; ?>" readonly="on"></th>
                               <th> <label class="form-label">QUANTITY</label></th>
                               <th><input type="text" class="form-control" name="quat" value="<?php echo $findx1['quantity']; ?>" readonly="on"></th>
                               
                       </tr>
                         <tr>
                              <th> <label class="form-label">YOUR PRICE</label></th>
                           <th><input type="text" class="form-control" name="yourprice" ></th>
                         
                             <th> <label class="form-label">AD DUE DATE</label></th>
                             <th><input type="date" class="form-control" name="odd" required></th>
                               
                       </tr>
                        <tr>
                           <th> <label class="form-label">IS RATE NEGOTIABLE??</label></th>
                           <th><select class="form-control"  name="negs">
                                     <option>IS RATE NEGOTIABLE??</option>
                                     <option value="YES">YES</option>
                                     <option value="NO">NO</option>
                           
                               </select></th>
                                 <th> <label class="form-label">PRODUCT IMAGE</label></th>
                           <th><input type="file" class="form-control" name="image" ></th>
                               
                       </tr>
                       <tr>
                           <th colspan="4" style="text-align:center;"><input type="submit" style="    padding: 15px;
    margin-top: 10px;" name="send" value="SEND FOR VALIDATION" class="btn btn-info"></th>
                                          </tr>

                    </table>
                    
                     
                 </form>
                <?php  
                 if(isset($_POST['send'])){
                     
                        $proid    =   $_POST['proid'];
                        $tprice= $_POST['tprice'];
                      $your=$_POST['yourprice'];
                      
                      $p= base64_encode($proid);
                      $negs= $_POST['negs'];
                      $odd= $_POST['odd'];
                      $type="pharmacy";
                      $image   =   $_FILES['image']['name'];	
                       move_uploaded_file($_FILES['image']['tmp_name'], "../product_image/".$image);
                       
                       
                       
                      if($tprice==$your){
                          
     $sql    = " UPDATE ad_table SET saleprice='$your',type='$type',negstatus='$negs',adtype='0',duedate='$odd',image='$image' WHERE ADid='$proid' ";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>window.location='showad_1.php?id=$p'</script>";   
                          
                          
                      }
                       if($tprice<$your){
                                   echo "<script>alert('NOT APPLICABLE ')</script>";
                            echo "<script>alert('YOUR PRICE MUST BE LESS THAN OR EQUAL TO PRICE')</script>";
        echo "<script>window.location='prepare_add_1.php?id=$p</script>";   

                           
                       }
                         if($tprice>$your){
                             
                             $persentage= intval(($your/$tprice)*100);
                          
     $sql    = " UPDATE ad_table SET saleprice='$your',type='$type',negstatus='$negs',adtype='1',duedate='$odd',image='$image',percentage='$persentage' WHERE ADid='$proid' ";
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>window.location='showad_1.php?id=$p'</script>";   
                          
                          
                      }
                   
       
                 }
                
                
                ?>
            </form>
        <script>
             $(function() {
            $('.selectpicker').selectpicker();
            $('.selectpicker1').selectpicker();
            
            
          });
        
        
        </script>

    </body>
</html>
