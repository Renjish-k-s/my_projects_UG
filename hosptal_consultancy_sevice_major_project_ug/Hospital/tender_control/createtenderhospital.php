<?php include_once("../../include/config.php"); ?>
<html>
      <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    </head>
    
<style>
body{ background-color:  #13C5DD;}
.div2{ width: 100%;height: 210px;background-color:#13C5DD;padding: 2px;}
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;color: white;}
.container{ background-color: none;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 50%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.form-control{border-radius: 50px;    height: 55px;}
.tab_a td{ padding: 5px 15px;}
.tab_a th{ padding: 5px 15px;}
.add_more{ float: right; font-size: 14px;  background: #f00;  padding: 10px 20px;  color: #fff; border-radius: 4px;}
.bootstrap-select>.dropdown-toggle { padding: 19px 16px; border-radius: 31px; }
select.bs-select-hidden, select.selectpicker {
    display: block!important;
}
</style>

    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="../index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            
           <a href="createtenderhospital.php" style="color:black"> <div class="newo" style="background-color:white"> CREATE TENDER</div></a>
           <a href="yourtenders.php" ><div class="newo" style="color:white;">YOUR TENDERS</div></a>
            

            
        </div>
   
              <form action="" method="post" >
      
                   <?php
                        $query = "select MAX(cast(id  as decimal)) id from tenderdetails";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
                
                    
                          
                  <table class="container tab_a" style="background-color: #ccc;border-radius: 50px;" id="table1">
                        <input type="hidden" name="tenderid" class="form-control" value="<?php echo "TENDER-".$count; ?>"  >
                        
                        <thead>
                            <tr>
                                <th colspan="3" style="    text-align: center;">
                                    <h1 >
                                        APPLY FOR TENDER
                                    </h1>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="te_row">
                        
                             <input type="hidden" name="num" id="num" value="1">
                               
                                          
                                <tr>
                                            <td><select name="product[]" id="products" class="form-control selectpicker"  data-live-search="true" >
                                                    <option>-SELET PRODUCT-</option>                                                   
  <?php
                 $sql    =   "SELECT * FROM product ";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while($row =mysqli_fetch_array($res)){
              ?>
                                                    
                                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                 <?php } ?>      
                                                    
                                        </select></td>
                                    <td><input type="text" class="form-control" name="quat[]" placeholder="PRODUCT QUANTITY" required="on" autocomplete="off"></td>
                                      <td><input type="text" class="form-control" name="price[]" placeholder="ESTIMATED PRICE" required="on" autocomplete="off"></td>
                                </tr>
                                 
                                
                            </tbody>
                            <tfoot>
                                <tr>
                             <th><input type="date" class="form-control" name="due_date" required></th>
                             
                                 <th><select class="form-control"  name="product_type" required>
                                     <option>SELECT PRODUCT TYPE</option>
                                     <option value="1">MEDICINE</option>
                                     <option value="2">EQUIPMENT</option>
                           
                               </select></th>
                               
 <th style="    text-align: center;"><input type="submit" name="send" value="SUBMIT" class="btn btn-info" style="width: 61%;height: 54px;margin-left: 84px;"></th>
                        </tr>
                    </tfoot>
                                     

                    </table>
                    
                     
                 </form>
               <?php
        if(isset($_POST['send']))
        {   
            $tenderid     =   $_POST['tenderid'];
            $creatorid     = $_SESSION['custid'];
            $product      =   $_POST['product'];
            $quat       =   $_POST['quat'];
            $price       =   $_POST['price'];
            $count      =   count($product);
            $due_date       =    $_POST['due_date'];
            $product_type      =  $_POST['product_type'];
            for($i="0"; $i<=$count; $i++){
              $product1     =   $product[$i];
               $quat1        =   $quat[$i];
               $price1        =   $price[$i];
                if($product1!=""){
 $sql = "INSERT INTO tenderdetails (tender_id,tender_creator_id,product_name,product_quantity,product_price,due_date,product_type) VALUES ('$tenderid','$creatorid','$product1','$quat1','$price1','$due_date','$product_type')";
                    $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
                }
            }
            echo "<script>alert('TENDER CREATED SUCCESSFULLY')</script>";
            echo "<script>window.location='createtenderhospital.php?id=$creatorid'</script>";

        }
        ?>
        
    </body>
      <script>
        $( function() {
          var availableTags = [
              <?php
                 $sql    =   "SELECT * FROM product ";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while($row =mysqli_fetch_array($res)){
              ?>
              
            "<?php echo $row['name']; ?>",
                    
                 <?php } ?>       
            
          ];
          $( ".pr1" ).autocomplete({
            source: availableTags
          });
        } );
        
        
        
        
        function addRowToTable(table, row) {
               table.append(row);
        }

        $(document).ready(function() {
           
            $('#addRow').click(function() {
                    
                    var row = "<tr><td><input type='text' class='form-control pr1' name='product[]' id='products' placeholder='PRODUCT NAME' required='on' autocomplete='off'></td><td><input type='text' class='form-control' name='quat[]' placeholder='PRODUCT QUANTITY' required='on' autocomplete='off'></td><td><input type='text' class='form-control' name='price[]' placeholder='ESTIMATED PRICE' required='on' autocomplete='off'></td></tr>";	
                    
                    addRowToTable($('.te_row'), row);
                   
            });

        });		
        
        
        
        
        $('#table1 tbody').on('keydown', 'input', function (e) {

		var keyCode = e.keyCode;						

                $lastTr = $('tr:last', $('#table1 tbody')),

		$lastTd = $('td:last', $lastTr);
                
                 var num     =   $('#num').val();
                    num++;

		if (keyCode !== 9) return;

                   if (($(e.target).closest('td')).is($lastTd)) {
                       
                       
                    //var row = "<tr><td><input type='text' class='form-control pr1' name='product[]' id='products' placeholder='PRODUCT NAME' required='on' autocomplete='off'></td><td><input type='text' class='form-control' name='quat[]' placeholder='PRODUCT QUANTITY' required='on' autocomplete='off'></td><td><input type='text' class='form-control' name='price[]' placeholder='ESTIMATED PRICE' required='on' autocomplete='off'></td></tr>";	
                    
                    //addRowToTable($('.te_row'), row);
                    
                    $(".te_row").append('<tr><td><select name="product[]" id="products'+num+'" class="form-control selectpicker"  data-live-search="true" ><?php $sql  = "SELECT * FROM product "; $res  = mysqli_query($con, $sql) or die(mysqli_query($con));  while($row=mysqli_fetch_array($res)){ ?> <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option> <?php } ?> </select></td><td><input type="text" class="form-control" name="quat[]" placeholder="PRODUCT QUANTITY" required="on" autocomplete="off"></td><td><input type="text" class="form-control" name="price[]" placeholder="ESTIMATED PRICE" required="on" autocomplete="off"></td></tr>');
		
                     $('#num').val(num);
                     
                      $('#products2').selectpicker(); 
                      $('#products3').selectpicker(); 
                      $('#products4').selectpicker(); 
                      $('#products5').selectpicker(); 
                      $('#products6').selectpicker(); 
                      $('#products7').selectpicker(); 
                      $('#products8').selectpicker(); 
                      $('#products9').selectpicker(); 
                      $('#products10').selectpicker(); 
                    
        }
        
        
         
        

        });            
        
           
        $(function() {
            $('.selectpicker').selectpicker();
            $('.selectpicker1').selectpicker();
            
            $('#products2').selectpicker();
          });
        
        
        </script>

</html>
