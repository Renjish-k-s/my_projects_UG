<?php include_once("../include/config.php"); ?>

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
    <body>
        <body>
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
             <table class="container tab_a" style="background-color: #ccc;border-radius: 50px;" id="table1">
                        
                        <thead>
                            <tr>
                                <th colspan="4" style="    text-align: center;">
                                    <h1 >
                                       BLOOD FINDER
                                    </h1>
                                </th>
                            </tr>
                        </thead>
                           <script>
                           function search(){
                             
                var pincode    =   $('#pincode').val();
                var place     =   $('#place').val();
               $.ajax({
                   url  :   "ajax_blood.php",
                   type :   "GET",
                   data :{ 'pincode' : pincode, 'place' : place },
                   success:function(data){
                         //alert(data);
                       $('#search_result').html(data);
                   }
                   
                   
               });
            }
                        </script>
                        <tbody>
                            <tr>
                                <td><label>PINCODE</label></td>
                                <td><select name="bg" class="form-control selectpicker" data-live-search="true"  id="pincode" >
                                        
                                        <option>-SELECT YOUR PINCODE-</option>
                               <?php
                 $sql    =   "SELECT * FROM pincode_place ";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while($row =mysqli_fetch_array($res)){
              ?>
                                                    
                                                    <option value="<?php echo $row['pincode']; ?>"><?php echo $row['pincode']; ?></option>
                 <?php } ?>                                      </select>
                                    
                                                                    <td><label>BLOOD GROUP</label></td>

                                <td><select name="bg" class="form-control selectpicker" data-live-search="true" id="place">
                                                                                <option>-SELECT YOUR BLOOD GROUP-</option>

                               <?php
                 $sql    =   "SELECT * FROM blood_group ";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while($row =mysqli_fetch_array($res)){
              ?>
                                                    
                                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                 <?php } ?>                                      </select>
                                </td>
                                
                            </tr>
                            <tr >
                                <th colspan="4" style="    text-align: center;">
                                    <input type="submit" name="search" class="btn btn-info" value="SEARCH" onclick="search()">
                                </td>
                            </tr>
                        </tbody>
            
                        
                        
             </table>
            
            <div id="search_result">
                <?php include_once("ajax_blood.php"); ?>
            </div>
           
            
            
            
    </body>
    
    <script>
     $(function() {
            $('.selectpicker').selectpicker();
            
          });
        
        
        </script>
</html>
