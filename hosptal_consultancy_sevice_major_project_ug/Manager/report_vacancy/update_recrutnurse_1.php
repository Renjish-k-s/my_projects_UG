<?php include_once("../../include/config.php"); ?>

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
.form-control{   width: 100%;   height: 55px;}
td, th {
    padding: 9px;
}
.x_1{}  
  </style>
  
  
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                        <a href="viewapplications.php?id=<?php echo $_GET['m']; ?>&rid=<?php echo $_GET['c'];  ?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
          <table class="tablex" border="0px" style="width: 100%;">
             <tr>
                 <th colspan="4"><h1 align="center">PROFILE</h1></th>
            </tr>
             <?php
                 $pid= base64_decode($_GET['id']); 
                 $sql    =   "SELECT * FROM common_login WHERE pid='$pid'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                $row =mysqli_fetch_array($res)
                                         ?>
            <tr class="x_1">
                <th>    <label class="form-label">ENTER YOUR NAME</label></th>
                <th><input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>" required></th>
                               

                
                            <th>    <label class="form-label">ENTER YOUR ADDRESS</label></th>
                            <th><textarea type="text" class="form-control" name="address"  style="height: 131px;" required> <?php echo $row['address'];  ?></textarea></th>
                      </tr>
                        <tr>
                              <th>    <label class="form-label">ENTER YOUR PHONE NO.</label></th>
                <th><input type="text" class="form-control" name="pnumber" value="<?php echo $row['mnumber'];  ?>" required></th>
               
                      <th>    <label class="form-label">ENTER YOUR EMAIL</label></th>
                 <th><input type="text" class="form-control" name="email" placeholder="EMAIL ADDRESS" value="<?php echo $row['Vemail'];  ?>" required></th>
        </tr>
          <tr>
                <th>    <label class="form-label">ENTER YOUR PIN CODE</label></th>
                 <th><input type="text" class="form-control" name="pincode" placeholder="PINCODE" value="<?php echo $row['pincode'];  ?>" required></th>
       
                <th>    <label class="form-label">ENTER YOUR STATE</label></th>
                 <th><input type="text" class="form-control" name="state" placeholder="ENTER YOUR STATE" value="<?php echo $row['state'];  ?>" required></th>
        </tr>
        
         <tr>
                <th>    <label class="form-label">ENTER YOUR DISTRICT</label></th>
                 <th><input type="text" class="form-control" name="dist" placeholder="ENTER YOUR DISTRICT" value="<?php echo $row['district'];  ?>"  required></th>
        <th><label class="form-label">ENTER YOUR VILLAGE</label></th>
                 <th><input type="text" class="form-control" name="vname" placeholder="ENTER YOUR VILLAGE" value="<?php echo $row['village'];  ?>"  required></th>
                
        </tr>
         <tr>
           
                  <th>    <label class="form-label">SEX</label></th>
                  <th>
                 <select class="form-control" name="sex" id=""   value="" required>
                                 <option value="">SELECT YOUR SEX</option>
                                  <option value="MALE" <?php if($row['sex']=='MALE'){  ?> selected <?php  }?>>MALE</option>
                                   <option value="FEMALE" <?php if($row['sex']=='FEMALE'){  ?> selected <?php  }?>>FEMALE</option>
                                    <option value="OTHER"  <?php if($row['sex']=='OTHER'){  ?> selected <?php  }?>>OTHER</option>
                                    
                                    
                 </select></th>
       
           
                  <th>    <label class="form-label">MAXIMUM QUALIFICATION</label></th>
                  <th>
                 <select class="form-control" name="spin" id=""    required>
                                 <option value="">MAXIMUM QUALIFICATION</option>
                                    <?php
                 $sql    =   "SELECT * FROM qualification WHERE qualification='2'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                 while ($row1 =mysqli_fetch_array($res)){
                                         ?>
                                 <option value="<?php echo $row1['id'];  ?>" <?php if($row['specialized']==$row1['id']){  ?> selected <?php  }?>><?php echo $row1['typw_id'];  ?></option>
                                
                                 <?php }?>
                 </select></th>
        </tr>
        
        <tr>
             <th>    <label class="form-label">ENTER YOUR ALL DEGREES</label></th>
                 <th><input type="text" class="form-control" name="ald" placeholder="ENTER YOUR ALL DEGREES" value="<?php echo $row['graduation'];  ?>"  required></th>
              <th>
                  <label class="form-label">SELECT BLOOD GROUP</label></th>
              
                 <th><select class="form-control" name="bloodgroup" id=""    required>
                                 <option value="">SELECT BLOOD GROUP</option>
                                  <option value="A-" <?php if($row['bloodgroup']=='A-'){  ?> selected <?php  }?>>A-</option>
                                   <option value="A+" <?php if($row['bloodgroup']=='A+'){  ?> selected <?php  }?>>A+</option>
                                      <option value="B-" <?php if($row['bloodgroup']=='B-'){  ?> selected <?php  }?>>B-</option>
                                   <option value="B+" <?php if($row['bloodgroup']=='B+'){  ?> selected <?php  }?>>B+</option>
                                      <option value="O-" <?php if($row['bloodgroup']=='O-'){  ?> selected <?php  }?>>O-</option>
                                   <option value="O+" <?php if($row['bloodgroup']=='O+'){  ?> selected <?php  }?>>O+</option>
                                    <option value="AB-" <?php if($row['bloodgroup']=='AB-'){  ?> selected <?php  }?>>AB-</option>
                                   <option value="AB+" <?php if($row['bloodgroup']=='AB+'){  ?> selected <?php  }?>>AB+</option>
                                 <option value="OTHER" <?php if($row['bloodgroup']=='OTHER'){  ?> selected <?php  }?>>OTHER</option>

                                    
                 </select></th>
            
        </tr>
                 <tr>
                    <th> <label class="form-label">COURSE PERCENTAGE</label></th>
                     
                 <th><input type="text" class="form-control" name="cpercentage" placeholder="COURSE PERCENTAGE"  value="<?php echo $row['graduation_per'];  ?>" required></th>
          <th> <label class="form-label">REGISTRATION NO.</label></th>
                     
                 <th><input type="text" class="form-control" name="regno" placeholder="LICENSE NO"  value="<?php echo $row['rejno'];  ?>" required></th>
            
        </tr>
                  <?php if( $row['status']=='0'){?>

         <tr>
              <th> <label class="form-label">UPLOAD 12TH CERTIFICATE</label></th>
                 <th><input type="file" class="form-control" name="certi_2" placeholder="UPLOAD 10TH CERTIFICATE" required></th>
       
              <th> <label class="form-label">UPLOAD MEDICAL CERTIFICATE</label></th>
                 <th><input type="file" class="form-control" name="certi_3" placeholder="UPLOAD 10TH CERTIFICATE" required></th>
        </tr>
          <tr>
              <th> <label class="form-label">UPLOAD YOUR PHOTO</label></th>
                 <th><input type="file" class="form-control" name="photo" required></th>
          <th> <label class="form-label">UPLOAD 10TH CERTIFICATE</label></th>
                 <th><input type="file" class="form-control" name="certi_1" placeholder="UPLOAD 10TH CERTIFICATE"   required>

                 </th>
                 
        </tr>
                  <?php }  ?>
          <tr>
                    <th> <label class="form-label">PASSED OUT ON</label></th>
                     
                 <th><input type="text" class="form-control" name="year" placeholder="PASSED OUT ON YEAR"  value="<?php echo $row['year'];  ?>" required></th>
        <th>    <label class="form-label">ENTER YOUR DATE OF BIRTH</label></th>
                 <th><input type="date" class="form-control" name="dob" placeholder="DATE OF BIRTH"  value="<?php echo $row['dob'];  ?>" required></th>
          </tr>
          <?php if( $row['status']==('1'||'2')){?>
              <tr>
              <th> <label class="form-label">10TH CERTIFICATE</label></th>
              <th><a href="../../documents/<?php echo $row['cer_10'] ?>" class="form-control">View Certificate</a></th>
      
              <th> <label class="form-label"> 12TH CERTIFICATE</label></th>
              <th><a href="../../documents/<?php echo $row['cer_12'] ?>"  class="form-control">View Certificate</a></th>
        </tr>
         <tr>
              <th> <label class="form-label"> MEDICAL CERTIFICATE</label></th>
              <th><a href="../../documents/<?php echo $row['cer_med'] ?>"  class="form-control">View Certificate</a></th>
       
              <th> <label class="form-label">PHOTO</label></th>
              <th><a href="../../documents/<?php echo $row['photo'] ?>"  class="form-control">View Photo</a></th>
        </tr>
          <?php  }?>
        
          
        </table>
            </form>
            
          
        </div>
              
    </body>
    
</html>