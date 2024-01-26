<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
         <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    </head>
   <style>
body{background-color:  #13C5DD;}
.div2{width: 100%;height: 210px;background-color:   #13C5DD;padding: 2px;}
.h1x{text-align: center;font-size: xxx-large; color: white; margin-top: 69px; }
.p1{text-align: center;color: white;}
.container{background-color: none;height: 388px;margin-top: 51px;}
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 20%;height: 100%;float: left;text-align: center;padding: 2px;}
.buttn{color: white;font-size: 15px;}
.newo:hover{background-color: blue; color: white;}
.pr_box{    background: #fff; width: 48%; padding: 30px;border-radius: 10px; float: left;min-height: 265px;margin-right: 1%;margin-bottom: 1%;}
.pr_img{ width: 48%; float: left; }
.pr_img img{ width: 100%;height: 200px; }
.pr_details{float: right;width: 48%; }
.pr_title{ font-size: 20px;font-weight:700px; color: #ff0303; margin-top: 10px; float: left; width: 100%; }
.pr_desc{    float: left;  width: 100%;font-size: 15px; margin-top: 10px; margin-bottom: 10px;}
.pr_other{ float: left; width: 100%;margin-top: 20px; margin-bottom: 20px;} 
.pr_price{ float: left; font-size: 20px;font-weight:700; color: #106cb0;}
.pr_qty{ float: right; }
.pr_det{ float: left; width: 100%; }
.search{width: 50%;height: 69px;    margin-top: 30px; margin-left: 502px;}
.control{width: 72%;height: 89%;border-radius: 20px 0px 0px 20px;text-align: left;float: left;border: 0px;font-size: 19px;padding: 0px 23px;}
.controlx{padding: 22px;height: 61px;border-radius: 0px 20px 20px 0px;line-height: 13px;margin-right: -9px;float: left;border: 0px; background: #f00; color: #fff; }
.pr_box:hover{background-color: #ccc;}

   </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> <i>HOSPITAL CONSULTANCY SERVICE </i></h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
              <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>
      
        </div>
        <div class="mainbar">
            
            <a href="normedicine.php" class="buttn" > <div class="newo"><h4><i>PURCHASE MEDICINE</i></h4></div></a>
            <a href="medoffer.php" class="buttn"><div class="newo" style="background-color: white;"><h4  style="color:black;"><i>MEDICINE OFFERS</i></h4></div></a>
        <a href="norequipments.php" class="buttn" > <div class="newo"><h4><i>PURCHASE EQUIPMENTS</i></h4></div></a>
        <a href="offerequip.php" class="buttn" > <div class="newo"><h4><i>EQUIPMENT OFFERS</i></h4></div></a>
        <a href="orderdetails.php" class="buttn" > <div class="newo"><h4><i>ORDER DETAILS</i></h4></div></a>

        </div>
        <script>
            
            function search(){
                var products    =   $('#products').val();
                var cust_id     =   $('#cust_id').val();
               $.ajax({
                   url  :   "medoffer_ajax.php",
                   type :   "GET",
                   data :{ 'products' : products, 'id' : cust_id },
                   success:function(data){
                       $('#search_result').html(data);
                   }
                   
                   
               });
            }
        </script>
            <div class="search">
              <input type="hidden" name="cust_id" id="cust_id" value="<?php echo $_SESSION['custid']; ?>">
              <input type="text" placeholder="SEARCH YOUR MEDICINE HERE" name="name" id="products" class=" control" autocomplete="off">
              <input type="submit" value="search" name="search" class="controlx" onclick="search()">
        </div>
        <div class="container">
              <div class="products" id="search_result">
                <?php include_once("medoffer_ajax.php"); ?>
            </div>
        </div>
    </body>
       <script>
        $( function() {
          var availableTags = [
              <?php
                 $sql    =   "SELECT product.*,ad_table.*,product.name as f,product.usefor as u FROM product LEFT JOIN ad_table ON product.pid=ad_table.name WHERE type='pharmacy' AND adtype='2' AND ad_table.status='1'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while($row =mysqli_fetch_array($res)){
              ?>
              
            "<?php echo $row['f']; ?>",
                    
                 <?php } ?>       
            
          ];
          $( "#products" ).autocomplete({
            source: availableTags
          });
        } );
        </script>
</html>