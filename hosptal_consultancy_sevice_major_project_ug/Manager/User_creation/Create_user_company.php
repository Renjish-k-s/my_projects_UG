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
       <form  method="post">
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            <a href=" ../../Login/Company_login.php" class="btn btn-info" style="margin-left: 32px;
    height: 40px;
    width: 99px;
    background-color: black;">BACK</a>

        </div>
           <?php
                        $query = "select MAX(cast(id  as decimal)) id from company_user";
                        $row    =   mysqli_query($con, $query) or die(mysqi_error($con));
                        $row = mysqli_fetch_array($row);
                         $count=$row['id'];
                         $count=$count+1;
                    ?>
           <table class="container" style="border-radius: 60px;" >
            <tr>
                <th><h1 align="center">REGISTRATION FORM</h1></th>
            </tr>
            <tr>
                <th><input type="text" name="id" class="form-control"  value="<?php echo "CUST-".$count; ?>" readonly></th>
            </tr>
           
            <tr>
                <th><input type="text" name="name" class="form-control" placeholder="ENTER YOUR FULL NAME" autocomplete="off"></th>
            </tr>
             <tr>
                <th><input type="text" name="email" class="form-control" placeholder="ENTER YOUR VALID EMAIL" autocomplete="off"></th>
            </tr>
             <tr>
                <th><input type="text" name="pnumber" class="form-control" placeholder="ENTER YOUR VALID MOBILE NUMBER" autocomplete="off"></th>
            </tr>
             <tr>
                <th> <select class="form-control" name="ctype"  required>
                                 <option value="">SELECT USER TYPE</option>
                                  <option value="PHARMACEUTICAL">PHARMACEUTICAL</option>
                                   <option value="LABORATORY">LABORATORY</option>
                                    <option value="HOSPITAL">HOSPITAL</option>
                                  
             </select></th>
            </tr>
             <tr>
                <th><input type="password" name="pass1" class="form-control" placeholder="CREATE A PASSWORD" ></th>
            </tr>
             <tr>
                <th><input type="password" name="pass2" class="form-control" placeholder="CONFIRM PASSWORD"></th>
            </tr>
         
             <tr>
                <th>  <button type="submit" id="save" class="btn btn-info" style=" width: 62%;
    height: 55px;
   margin-left: 232px;" value="add" name="add_user" >SUBMIT</button><br></th>
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
                           $sql    = "insert into company_user(custid,name,email,ctype,pnumber,pass2) VALUES ('$id','$name','$email','$ctype','$pnumber','$pass2')";
                          
       $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));                                               
        echo "<script>alert('USER ADDED')</script>";
        echo "<script>window.location='../../Login/Company_login.php'</script>";   
                          
                    
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




