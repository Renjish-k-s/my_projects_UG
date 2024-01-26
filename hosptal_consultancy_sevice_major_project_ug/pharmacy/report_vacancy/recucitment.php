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
.container{ width: 93%;background-color: none;margin-top: 51px; }
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.33%;float: left;text-align: center;padding: 10px;}
.buttn{color: white;}
.newo:hover{background-color: blue;}
.lablex{color: white;font-weight: bold;}
.newox{width: 50%;float: left;text-align: center;padding: 10px;}
.newox:hover{background-color: yellowgreen;}
.mainbarx{width: 100%;height: 39px;background-color: cyan;}
.form-control{border-radius: 50px;width: 100%;height: 55px;text-align: center;}
.tab_a td{ padding: 5px 15px;}
.tab_a th{     padding: 25px 18px;}
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
      <a href="recucitment.php" >   <div class="newo" style="background-color:white"><lable class="lablex" style="color:black;">NEW RECRUITMENT</lable></div>    </a>
      <a href="active_recucitment.php" >   <div class="newo" ><lable class="lablex">ACTIVE RECRUITMENT</lable></div>    </a>
      <a href="job_request.php" >   <div class="newo" ><lable class="lablex">JOB REQUESTS</lable></div>    </a>
        </div>
        <div class="mainbarx">
      <a href="recucitment.php" >   <div class="newox" style="background-color:yellowgreen"><lable class="lablex" style="color:black;">PERMANENT RECRUITMENT</lable></div>    </a>
      <a href="recucitment_1.php" >   <div class="newox" ><lable class="lablex" >TEMPORARY RECRUITMENT</lable></div>    </a>
      
        </div>
                                                 <form method="post">

                                 <?php
                        $query = "select MAX(cast(id  as decimal)) id from recriutment_create_table";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
                          
                  <table class="container tab_a" style="background-color: #ccc;border-radius: 50px;" id="table1">
                        <input type="hidden" name="rec_id" class="form-control" value="<?php echo "RECRUITMENT ID-".$count; ?>"  >
                        
                        <thead>
                            <tr>
                                <th colspan="7" style="    text-align: center;">
                                    <h1 >
                     CREATE NOTIFICATION  <a href="javasceript:void(0)" class="add_more" id="addRow" >ADD NEW ROW</a>
                                    </h1>
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">POST NAME</th>
                                <th style="text-align: center;">EDUCATIONAL QUALIFICATION</th>
                                <th colspan="2" style="    text-align: center;">AGE LIMIT</th>
                                <th colspan="2" style="    text-align: center;">PAY SCALE</th>
                                <th style="text-align: center;">NO OF VACANCY</th>

                            </tr>
                        </thead>
                        
                        
                        <script>
                            function view_dept(id, val){
                                //alert(val);
                                $.ajax({
                                    url  :   "ajax.php",
                                    type :   "POST",
                                    data :{ 'dept' : id },
                                    success:function(data){
                                        //alert(data);
                                        $('#search_re'+val).html(data);
                                        $('.selectpicker1').selectpicker();
                                        $("#search_re2").selectpicker();
                                        $("#search_re3").selectpicker();
                                        $("#search_re4").selectpicker();
                                        $("#search_re5").selectpicker();
                                        $("#search_re6").selectpicker();
                                        $("#search_re7").selectpicker();
                                        $("#search_re8").selectpicker();
                                        $("#search_re9").selectpicker();
                                        $("#search_re10").selectpicker();
                                        $("#search_re11").selectpicker();
                                        $("#search_re12").selectpicker();
                                    }


                                });
                            }
                        </script>

                        
                        <tbody class="te_row">
                        <input type="hidden" name="num" id="num" value="1">
                                <tr>
                                    <td>
                                        
                                        
                                        <select class="form-control pr1 selectpicker" name="pname[]" data-live-search="true" onchange="view_dept(this.value, '1')" >
                                            <option value="">-Select-</option>
                                             <?php

     $sql    =   "SELECT  * FROM  job_name ";
     $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
     while($row =mysqli_fetch_array($res)){
              ?>
                                            <option value="<?php echo $row['type'] ?>"><?php echo $row['job_name'] ?></option>
     <?php }?>
                                        </select>                                        </td>

                                    <td id="search_re1"><select class="form-control pr1 selectpicker1" data-live-search="true"  name="equal[]"   >
                                             <option value="">-Select-</option>
                                    </td>
                                       <td><input type="text" class="form-control" name="age_from[]" placeholder="FROM" required="on"></td>
                                        <td><input type="text" class="form-control pr1" name="age_to[]"  placeholder="TO" required="on"></td>
                                      <td><input type="text" class="form-control" name="pay_from[]" placeholder="FROM" required="on"></td>
                                      <td><input type="text" class="form-control" name="pay_to[]" placeholder="TO" required="on"></td>
                             <td><input type="text" class="form-control" name="no_vacancy[]" placeholder="NO OF VACANCY" required="on"></td>
 

                                </tr>
                        
                                 
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><lable>LAST DAY FOR APPLY</lable></th>
                             <th><input type="date" class="form-control" name="due_date" required></th>
                               <th><lable>DESCRIPTION ABOUT RECRUITMENT</lable></th>
                  <th><textarea cols="20" rows="8" name="description">Applications are invited to
give you all the opportunity to be the member of our team</textarea></th>
                               
 <th style="    text-align: center;" colspan="2"><input type="submit" name="send" value="SUBMIT" class="btn btn-info" style="width: 61%;height: 54px;margin-left: 84px;"></th>
                        </tr>
                    </tfoot>
                                     

                    </table>
                    
                     
                 </form>
        <?php
         if(isset($_POST['send']))
        {   
            $rec_id    =   $_POST['rec_id'];
            $creatorid     = $_SESSION['custid'];
            $categoty='prec';
            $pname      =   $_POST['pname'];
            $equal     =   $_POST['equal'];
            $age_from       =   $_POST['age_from'];
             $age_to     =   $_POST['age_to'];
            $pay_from     =   $_POST['pay_from'];
            $pay_to       =   $_POST['pay_to'];
           $no_vacancy      =   $_POST['no_vacancy'];
            $count      =   count($pname);
            $due_date       =    $_POST['due_date'];
            $description     =  $_POST['description'];
            for($i="0"; $i<=$count; $i++){
              $pname1     =   $pname[$i];
               $equal1        =   $equal[$i];
               $age_from1        =   $age_from[$i];
                $age_to1     =   $age_to[$i];
               $pay_from1        =   $pay_from[$i];
               $pay_to1        =   $pay_to[$i];
               $no_vacancy1        =   $no_vacancy[$i];
                if($pname1!=""){
 $sql = "INSERT INTO recriutment_create_table (creator_id,recruitment_id,category,post_name,educational_qualification,age_from,age_to,pay_from,pay_to,description,apply_end_date,no_vacancy) VALUES ('$creatorid','$rec_id','$categoty','$pname1','$equal1','$age_from1','$age_to1','$pay_from1','$pay_to1','$description','$due_date','$no_vacancy1')";
                    $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
                }
            }
            echo "<script>alert('NOTIFICATION CREATED SUCCESSFULLY')</script>";
            echo "<script>window.location='recucitment.php'</script>";

        }
        ?>
               </body>
      <script>
        function addRowToTable(table, row) {
               table.append(row);
        }

        $(document).ready(function() {
           
            $('#addRow').click(function() {
                
                    var num     =   $('#num').val();
                    num++;
                      
				   
				   
	$(".te_row").append('<tr><td><select class="form-control pr1 selectpicker" name="pname[]" data-live-search="true" onchange="view_dept(this.value, '+num+')" ><option value="">-Select-</option><?php $sql = "SELECT * FROM job_name"; $res = mysqli_query($con,$sql) or die(mysqli_query($con)); while($row =mysqli_fetch_array($res)){?><option value="<?php echo $row["type"] ?>"><?php echo $row["job_name"] ?></option><?php }?></select></td><td id="search_re1'+num+'"><select class="form-control pr1" name="equal[]" id="search_re'+num+'"  data-live-search="true"><option value="">-Select-</option></select></td><td><input type="text" class="form-control" name="age_from[]" placeholder="FROM" required="on"></td><td><input type="text" class="form-control pr1" name="age_to[]"  placeholder="TO" required="on"></td><td><input type="text" class="form-control" name="pay_from[]" placeholder="FROM" required="on"></td><td><input type="text" class="form-control" name="pay_to[]" placeholder="TO" required="on"></td><td><input type="text" class="form-control" name="no_vacancy[]" placeholder="NO OF VACANCY" required="on"></td></tr>');
				   
                    
                    $('.selectpicker').selectpicker();
                   
                   
                   
                   $('#num').val(num);
                   
            });

        });		
        
        
        
        
        $('#table1 tbody').on('keydown', 'input', function (e) {

		var keyCode = e.keyCode;						

                $lastTr = $('tr:last', $('#table1 tbody')),

		$lastTd = $('td:last', $lastTr);

		if (keyCode !== 9) return;

                   if (($(e.target).closest('td')).is($lastTd)) {
                    var row = "<tr><td><input type='text' class='form-control pr1' name='pname[]'  placeholder='POST NAME' required='on'></td><td><input type='text' class='form-control' name='equal[]' placeholder='EDUCATIONAL QUALIFICATION' required='on'></td><td><input type='text' class='form-control' name='age_from[]' placeholder='FROM' required='on'></td><td><input type='text' class='form-control pr1' name='age_to[]'  placeholder='TO' required='on'></td><td><input type='text' class='form-control' name='pay_from[]' placeholder='FROM' required='on'></td><td><input type='text' class='form-control' name='pay_to[]' placeholder='TO' required='on'></td><td><input type='text' class='form-control' name='no_vacancy[]' placeholder='NO OF VACANCY' required='on'></td></tr>";	
                    
                    addRowToTable($('.te_row'), row);
        }
        
        
       

        });            
        
        
        
        $(function() {
            $('.selectpicker').selectpicker();
            $('.selectpicker1').selectpicker();
            
            
          });
        
        
        </script>

        
</html>