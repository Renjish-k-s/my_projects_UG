<?php include_once("../include/config.php"); ?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        label{
                margin-left: 31px;
        }
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
        background-color:#ccc;
  border-radius: 15px;

}


.form-control{
   width: 95%;
    height: 55px;
    margin-top: 10px;

}
.tablex{
 height: 1293px;
border-radius: 50px;
background-color: #ccc;
}
    



  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
          <form  method="post">
    
        <table class="container" >
             <tr >
                 <th colspan="2" style="text-align:center"><h1 style="text-align:center">REGISTRATION FORM</h1></th>
            </tr>
            <?php
                            $id     =   $_GET['id'];
                            $sql    =   "SELECT * FROM  company_user WHERE custid='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
               <tr>
                <th>    <label class="form-label">YOUR CUSTOMER ID</label></th>
                <th><input type="text" class="form-control" name="id" value="<?php echo $_GET['id']; ?>"  readonly></th>
                               

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
              <th><a href="../documents/<?php echo $row['rdc']; ?>" class="form-control">CLICK TO SHOW</a></th>
        </tr>
       
          
                 <tr>
                    <th> <label class="form-label">LICENSE NO</label></th>
                     
                    <th><input type="text" class="form-control" style="margin-bottom: 10px;" name="lno" value="<?php echo $row['lno']; ?>" required></th>
        </tr>
       
        <tr >
            <?php if(($row['active_status'])=='0') { ?>
            <th colspan="2" style="text-align:center;"> <button type="submit" id="save" class="btn btn-info" style=" width: 40%;
    height: 55px;
    margin-left: 191px;
    margin-bottom: 10px;
    margin-top: 10px;"  name="update" >CUSTOMER VERIFIED</button></th>
              <?php } ?>
                     
               
        </tr>
          
        </table>
          </form>
        <?php
        
         if(isset($_POST['update']))
        {
              $custid=$_POST['id'];
             
 $sql    =   "UPDATE company_user SET  active_status='1' WHERE custid='$custid'";
                
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('CUSTOMER VERIFIRED')</script>";
                 echo "<script>window.location='usercontrol.php'</script>";
             
        }
        ?>
        
    </body>
    
</html>