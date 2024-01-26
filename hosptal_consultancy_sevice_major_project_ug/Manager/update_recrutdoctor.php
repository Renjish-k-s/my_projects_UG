<?php include_once("../include/config.php"); ?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    
    
    <style>
        body{           background-color:  #13C5DD;        }
       .div2{                      width: 100%;    height: 210px;    background-color:   #13C5DD;       }
           .h1x{                     text-align: center;   font-size: xxx-large;   color: white;   margin-top: 69px;       }
        .h2x{           text-align: center;    font-size: xxx-large;    color: black;    margin-top: 69px;        }
          .p1{         text-align: center;          color: white;}
.container{       background-color: white;}
.form-control{   width: 195%;   height: 55px;}
.tablex{ height: 1293px;}
  
  </style>
  
  
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
        <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
        <table class="tablex" >
             <tr>
                <th><h1 >REGISTRATION FORM</h1></th>
            </tr>
             <?php
                 $pid= $_GET['id'];
                 $sql    =   "SELECT * FROM common_login WHERE pid='$pid'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                $row =mysqli_fetch_array($res)
                                         ?>
            <tr>
                <th>    <label class="form-label">NAME</label></th>
                <th><input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>" required></th>
                               

                </tr>
                      <tr>
                            <th>    <label class="form-label"> ADDRESS</label></th>
                          <th><input type="text" class="form-control" name="address" value="<?php echo $row['address'];  ?>" placeholder="ENTER YOUR FULL ADDRESS" style="height: 131px;" required></th>
                      </tr>
                        <tr>
                              <th>    <label class="form-label">PHONE NO.</label></th>
                <th><input type="text" class="form-control" name="pnumber" value="<?php echo $row['mnumber'];  ?>" required></th>
                </tr>
                <tr>
                      <th>    <label class="form-label">EMAIL ID</label></th>
                 <th><input type="text" class="form-control" name="email" placeholder="EMAIL ADDRESS" value="<?php echo $row['Vemail'];  ?>" required></th>
        </tr>
          <tr>
                <th>    <label class="form-label">PIN CODE</label></th>
                 <th><input type="text" class="form-control" name="pincode" placeholder="PINCODE" value="<?php echo $row['pincode'];  ?>" required></th>
        </tr>
        
         <tr>
                <th>    <label class="form-label">STATE</label></th>
                 <th><input type="text" class="form-control" name="state" placeholder="ENTER YOUR STATE" value="<?php echo $row['state'];  ?>" required></th>
        </tr>
        
         <tr>
                <th>    <label class="form-label">DISTRICT</label></th>
                 <th><input type="text" class="form-control" name="dist" placeholder="ENTER YOUR DISTRICT" value="<?php echo $row['district'];  ?>"  required></th>
        </tr>
          <tr>
                <th>    <label class="form-label">DATE OF BIRTH</label></th>
                 <th><input type="text" class="form-control" name="dob" placeholder="DATE OF BIRTH"  value="<?php echo $row['dob'];  ?>" required></th>
        </tr>
         <tr>
           
                  <th>    <label class="form-label">SEX</label></th>
                          <th><input type="text" class="form-control" name="cpercentage" placeholder="COURSE PERCENTAGE"  value="<?php echo $row['sex'];  ?>" required></th>

        </tr>
        <tr>
           
                  <th>    <label class="form-label">SPECIALIZED ON</label></th>
         <th><input type="text" class="form-control" name="cpercentage" placeholder="COURSE PERCENTAGE"  value="<?php echo $row['specialized'];  ?>" required></th>

        </tr>
                 <tr>
                    <th> <label class="form-label">COURSE PERCENTAGE</label></th>
                     
                 <th><input type="text" class="form-control" name="cpercentage" placeholder="COURSE PERCENTAGE"  value="<?php echo $row['graduation_per'];  ?>" required></th>
        </tr>
         <tr>
              <th> <label class="form-label">10TH CERTIFICATE</label></th>
              <th><a href="../documents/<?php echo $row['cer_10'] ?>" target="_blank" class="form-control">View Certificate</a></th>
        </tr>
         <tr>
              <th> <label class="form-label"> 12TH CERTIFICATE</label></th>
              <th><a href="../documents/<?php echo $row['cer_12'] ?>" target="_blank" class="form-control">View Certificate</a></th>
        </tr>
         <tr>
              <th> <label class="form-label"> MEDICAL CERTIFICATE</label></th>
              <th><a href="../documents/<?php echo $row['cer_med'] ?>" target="_blank" class="form-control">View Certificate</a></th>
        </tr>
          <tr>
              <th> <label class="form-label">PHOTO</label></th>
              <th><a href="../documents/<?php echo $row['photo'] ?>" target="_blank" class="form-control">View Photo</a></th>
        </tr>
                 <tr>
                    <th> <label class="form-label">REGISTRATION NO.</label></th>
                     
                 <th><input type="text" class="form-control" name="regno" placeholder="LICENSE NO"  value="<?php echo $row['rejno'];  ?>" required></th>
        </tr>
          <tr>
                    <th> <label class="form-label">PASSED OUT ON</label></th>
                     
                 <th><input type="text" class="form-control" name="year" placeholder="PASSED OUT ON YEAR"  value="<?php echo $row['year'];  ?>" required></th>
        </tr>
        <tr>
                 <th> <button type="submit" id="save" class="btn btn-info" style=" width: 62%;
    height: 55px;
  margin-left: 191px;"  name="add_user_update" >ALLOW ACCESS</button></th>
                <th> <button type="submit" id="save" class="btn btn-info" style="width: 88%;
    height: 54px;
    margin-left: 64px; background-color: cornflowerblue;" value="add" name="add" >DENY ACCESS</button></th>
                     
               
        </tr>
          
        </table>
            </form>
            
            <?php
            if(isset($_POST['add_user_update']))
            {    
             
          $sql    =   "UPDATE common_login SET  status='2' WHERE pid='$pid' ";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('ACCESS PERMITTED')</script>";
                 echo "<script>window.location='publiv_control.php'</script>";
             
        }
        ?>
        </div>
              
    </body>
    
</html>