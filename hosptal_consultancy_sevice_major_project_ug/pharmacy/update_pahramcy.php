<?php include_once("../include/config.php"); ?>

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
        .h2x{
            
            text-align: center;
    font-size: xxx-large;
    color: black;
    margin-top: 69px;
        }
          .p1{
          text-align: center;
           color: white;
}
.container{
        background-color: white;
  
}


.form-control{
   width: 195%;
    height: 55px;

}
.tablex{
 height: 1293px;

}
    



  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                    <a href="index.php?id=<?php echo $_SESSION['custid'];?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
          <form  method="post">
        <div class="container" style="background-color: #ccc;">
        <table class="tablex" >
             <tr>
                <th><h1 >REGISTRATION FORM</h1></th>
            </tr>
            <?php
                            $id     =  $_SESSION['custid'];
                            $sql    =   "SELECT * FROM  company_user WHERE custid='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
               <tr>
                <th>    <label class="form-label">YOUR CUSTOMER ID</label></th>
                <th><input type="text" class="form-control" name="id" value="<?php echo $_SESSION['custid']; ?>"  readonly></th>
                               

                </tr>
                <tr>
                <th>    <label class="form-label">USER NAME</label></th>
                <th><input type="text" class="form-control"  name="name" value="<?php echo $row['name']; ?>"  ></th>
                               

                </tr>
            <tr>
                <th>    <label class="form-label">ENTER  NAME OF YOUR FIRM</label></th>
                <th><input type="text" class="form-control" name="fname"  value="<?php echo $row['fname']; ?>"  required></th>
                               

                </tr>
                      <tr>
                            <th>    <label class="form-label">ENTER FIRM ADDRESS</label></th>
                          <th><input type="text" class="form-control" name="address"  value="<?php echo $row['address']; ?>" style="height: 131px;" required></th>
                      </tr>
                        <tr>
                              <th>    <label class="form-label">ENTER YOUR PHONE NO.</label></th>
                <th><input type="text" class="form-control" name="pno" value="<?php echo $row['pnumber']; ?>" required></th>
                </tr>
                <tr>
                      <th>    <label class="form-label">ENTER YOUR EMAIL</label></th>
                 <th><input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" required></th>
        </tr>
          <tr>
                <th>    <label class="form-label">ENTER YOUR PIN CODE</label></th>
                 <th><input type="text" class="form-control" name="pincode" value="<?php echo $row['pincode']; ?>" required></th>
        </tr>
        
         <tr>
                <th>    <label class="form-label">ENTER YOUR STATE</label></th>
                 <th><input type="text" class="form-control" name="state" value="<?php echo $row['state']; ?>" required></th>
        </tr>
        
         <tr>
                <th>    <label class="form-label">ENTER YOUR DISTRICT</label></th>
                 <th><input type="text" class="form-control" name="dis" value="<?php echo $row['district']; ?>" required></th>
        </tr>
          <tr>
                <th>    <label class="form-label">REGISTRATION DATE</label></th>
                 <th><input type="date" class="form-control" name="rd" value="<?php echo $row['rd']; ?>" required></th>
        </tr>
       
        
                
         <tr>
              <th> <label class="form-label">REGISTRATION CERTIFICATE</label></th>
                 <th><input type="file" class="form-control" name="rdc"  required></th>
        </tr>
       
          
                 <tr>
                    <th> <label class="form-label">LICENSE NO</label></th>
                     
                 <th><input type="text" class="form-control" name="lno" value="<?php echo $row['lno']; ?>" required></th>
        </tr>
       
        <tr>
                 <th> <button type="submit" id="save" class="btn btn-info" style=" width: 62%;
    height: 55px;
  margin-left: 191px;"  name="update" >SEND FOR VERIFICATION</button></th>
                <th> <button type="submit" id="save" class="btn btn-info" style="width: 88%;
    height: 54px;
    margin-left: 64px; background-color: cornflowerblue;" value="add" name="add" >RESET</button></th>
                     
               
        </tr>
          
        </table>
        </div>
          </form>
        <?php
        
         if(isset($_POST['update']))
        {
              $custid=$_POST['id'];
             $name=$_POST['name'];
               $fname=$_POST['fname'];
                 $address=$_POST['address'];
                  $pno=$_POST['pno'];
                   $email=$_POST['email'];
                    $pincode=$_POST['pincode'];
                     $state=$_POST['state'];
                      $dis=$_POST['dis'];
                           $rd=$_POST['rd'];
                                $lno=$_POST['lno'];
                 
 $sql    =   "UPDATE company_user SET  fname='$fname', address='$address',pincode='$pincode',rd='$rd',lno='$lno',district='$dis',state=' $state',pnumber='$pno' WHERE custid='$custid'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('DETAILS HAS BEEN SEND AND ADMIN WILL RESPOND WITH IN 24 HRS')</script>";
                 echo "<script>window.location='update_pahramcy.php?id=$custid'</script>";
             
        }
        ?>
        
    </body>
    
</html>