<?php include_once("../../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        body{
            background-color:  #13C5DD;
        }
       .div2{
            
            width: 100%;
    height: 210px;
    background-color:   #13C5DD;
        }
           .h1x{
            
            text-align: center;
    font-size: xxx-large;
    color: white;
    margin-top: 69px;
        }
          .p1{
          text-align: center;
           color: white;
}
.container{
      background-color: #ccc;
    color: white;
    height: 830px;
}
 .form-control{
      width: 62%;
    height: 55px;
    margin-left: 233px;
   
        
    }
   
         </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
             <?php
                        $query = "select MAX(cast(id  as decimal)) id from  staff";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
                    <form method="post">

        <table class="container" >
            <tr>
                <th><h1 align="center">REGISTRATION FORM</h1></th>
            </tr>
            <tr>
                <th><input type="text" name="id" class="form-control" value="<?php echo "STAFF-".$count; ?>" readonly></th>
            </tr>
           
            <tr>
                <th><input type="text" name="name" class="form-control" placeholder="ENTER YOUR FULL NAME" autocomplete="off" required></th>
            </tr>
             <tr>
                <th><input type="text" name="email" class="form-control" placeholder="ENTER YOUR VALID EMAIL" autocomplete="off" required></th>
            </tr>
             <tr>
                <th><input type="text" name="pnumber" class="form-control" placeholder="ENTER YOUR VALID MOBILE NUMBER" autocomplete="off" required></th>
            </tr>
             <tr>
                <th> <select class="form-control" name="ctype"   required>
                                 <option value="">SELECT USER TYPE</option>
                                  <option value="ADMIN">ADMIN</option>
                                   <option value="DATA ANALYST">DATA ANALYST</option>
                                    <option value="ALERT MANAGER">ALERT MANAGER</option>
             </select></th>
            </tr>
             <tr>
                <th><input type="password" name="pass1" class="form-control" placeholder="CREATE A PASSWORD" required></th>
            </tr>
             <tr>
                 <th><input type="password" name="pass2" class="form-control" placeholder="CONFIRM PASSWORD" required></th>
            </tr>
             <tr>
                <th>  <button type="submit" id="save" class="btn btn-info" style=" width: 62%;
    height: 55px;
   margin-left: 232px;" value="add_user" name="add_user" >SUBMIT</button><br></th>
            </tr>
               <tr>
                   <?php
         
             
            if(isset($_POST['add_user'])){
                if($_POST['pass1']==$_POST['pass2']){
                     $id=$_POST['id'];
                    $name=$_POST['name'];
                      $email=$_POST['email'];
                        $ctype=$_POST['ctype'];
                         $pnumber=$_POST['pnumber'];
                          $pass2=md5($_POST['pass2']);
                           $sql    = " insert into  staff(username,name,password,STYPE,MOBNO,EMAIL) VALUES ('$id','$name','$pass2','$ctype','$pnumber','$email')";
                          
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('USER ADDED')</script>";
        echo "<script>window.location='Create_user_staff.php'</script>";   
                          
                    
                }
 else {
                  ?>
                <th><p style=" margin-left: 467px;
    color: red;"><?php  echo 'password not matching';
 }
                
            }
            
            
             ?></p></th>
            </tr>
        </table>
                    </form>

    </body>
    
</html>