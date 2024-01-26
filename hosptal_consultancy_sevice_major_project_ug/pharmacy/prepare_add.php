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
                        $query = "select MAX(cast(id  as decimal)) id from ad_table";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
                
                    
                          
                    <table class="container" style="background-color: #ccc;height: 350px; margin-top: 100px;      
    border-radius: 50px;">
                        
                        
                        
                        
                          <tr>
                              <th colspan="4"><h1 style="text-align:center;    color: white;">APPLY FOR AD</h1></th>
            </tr><tr>
            
                           <th> <label class="form-label">AD ID</label></th>
                             <th><input type="text" name="proid" class="form-control" value="<?php echo "ADNO-".$count; ?>"  ></th>
                               <th> <label class="form-label">PRODUCT NAME</label></th>
                             <th><select class="form-control " data-live-search="true" name="product">
                                       <option>SELECT MEDICINE</option>
                                      <?php
                                         $custid=$_SESSION['custid']; 
                                            $sql    =   "SELECT * FROM product  WHERE companyid='$custid' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                   
                                     <option value="<?php echo $row['pid']; ?>"><?php echo $row['name']; ?></option>
                             <?php }?>
                               </select></th>
                                          
                       </tr>
                       <tr>
                            
                               <th> <label class="form-label">QUANTITY</label></th>
                             <th><input type="text" class="form-control" name="quat" placeholder="QUANTITY" required></th>
                             <th> <label class="form-label"> PRICE</label></th>
                             <th><input type="text" class="form-control" name="tprice"  placeholder="TOTAL PRICE"  readonly="on"></th>
                               
                       </tr>
                        
                       <tr>
                           <th colspan="4" style="text-align:center;"><input type="submit" style="    padding: 15px;
    margin-top: 10px;" name="send" value="CALCULATE AMMOUNT" class="btn btn-info"></th>
                                          </tr>

                    </table>
                    
                     
                 </form>
                <?php  
                 if(isset($_POST['send'])){
                     
                       $id     =  $_SESSION['custid'];
                        $proi    =   $_POST['proid'];
                       $pname     =   $_POST['product'];
                       $qty=$_POST['quat'];
                       
                       $find="SELECT * FROM product WHERE pid='$pname'";
                       $findx= mysqli_query($con, $find);
                       $findx1= mysqli_fetch_array($findx);
                       $price=$findx1['uprice'];
                     $totalprice=($qty*$price);
                     $type='pharmacy';
                     $proid= base64_encode($proi);
$sql    = " insert into  ad_table(ADid,company,name,quantity,price,type) VALUES ('$proi','$id','$pname','$qty','$totalprice','$type')";
                          
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>window.location='prepare_add_1.php?id=$proid'</script>";   
                          
                 
       
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
