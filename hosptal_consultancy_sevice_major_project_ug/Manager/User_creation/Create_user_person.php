<?php include_once("../../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    
<style>
body{background-color:  #13C5DD;}
.div2{ width: 100%; height: 210px; background-color:   #13C5DD; }
.h1x{ text-align: center;font-size: xxx-large;color: white; margin-top: 69px;}
.p1{text-align: center;           color: white;}
.container{      background-color: #ccc;    color: white;    height: 830px; border-radius: 50px;}
.form-control{      width: 62%;    height: 55px;   margin-left: 233px;border-radius: 50px;}
</style>
         
    <body>
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
           <?php
                        $query = "select MAX(cast(id  as decimal)) id from  common_login";
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
                <th><input type="text" name="id" class="form-control" value="<?php echo "PID-".$count; ?>"  readonly required="on"></th>
            </tr>
           
            <tr>
                <th><input type="text" name="name" class="form-control" placeholder="ENTER YOUR FULL NAME" autocomplete="off" required="on"></th>
            </tr>
             <tr>
                <th><input type="email" name="email" class="form-control" placeholder="ENTER YOUR VALID EMAIL" autocomplete="off" required="on"></th>
            </tr>
             <tr>
                <th><input type="text" name="pnumber" class="form-control" placeholder="ENTER YOUR VALID MOBILE NUMBER" autocomplete="off" required="on"></th>
            </tr>
          
             <tr>
                <th><input type="password" name="pass1" class="form-control" placeholder="CREATE A PASSWORD" required="on"></th>
            </tr>
             <tr>
                 <th><input type="password" name="pass2" class="form-control" placeholder="CONFIRM PASSWORD" required="on"></th>
            </tr>
             <tr>
                <th>  <button type="submit" class="btn btn-info" style=" width: 62%;
    height: 55px;
   margin-left: 232px;"  name="add_user" >SUBMIT</button><br></th>
            </tr>
                         <?php
         
             
            if(isset($_POST['add_user'])){
                if($_POST['pass1']==$_POST['pass2']){
                  $id=$_POST['id'];
                    $name=$_POST['name'];
                      $email=$_POST['email'];
                         $pnumber=$_POST['pnumber'];
                          $pass2=md5($_POST['pass2']);
         $sql    = " insert into common_login(pid,name,mnumber,ppassword,Vemail) VALUES ('$id','$name','$pnumber','$pass2','$email')";
                          
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('USER ADDED')</script>";
        echo "<script>window.location='../../Login/Person_login.php'</script>";   
                          
                    
                }
 else {
                  ?>
                <th><p style=" margin-left: 467px;
    color: red;"><?php  echo 'password not matching';
 }
                
            }
            
            
             ?>
        </table>
                    </form>

    </body>
    
</html>