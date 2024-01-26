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
.selectpicker{
    display: block;
   width: 100%;   height: 55px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}  
.bootstrap-select.btn-group .dropdown-toggle .filter-option {
   display: block;
   width: 100%;   height: 55px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}
  </style>
  
  
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
        <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
          <table class="tablex" border="0px" style="width: 100%;">
             <tr>
                 <th colspan="4"><h1 align="center">REGISTRATION FORM</h1></th>
            </tr>
             <?php
                 $pid=  $_SESSION['pid']; 
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
       
           
                  <th>    <label class="form-label">HIGHEST QUALIFICATION</label></th>
                  <th>
                 <select class="form-control" name="spin" id=""  style="width:100%"  required>
                                 <option value="">HIGHEST QUALIFICATION</option>
                                    <?php
                 $sql    =   "SELECT * FROM qualification WHERE qualification='3'";
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
              <th><a href="../documents/<?php echo $row['cer_10'] ?>" class="form-control">View Certificate</a></th>
      
              <th> <label class="form-label"> 12TH CERTIFICATE</label></th>
              <th><a href="../documents/<?php echo $row['cer_12'] ?>"  class="form-control">View Certificate</a></th>
        </tr>
         <tr>
              <th> <label class="form-label"> MEDICAL CERTIFICATE</label></th>
              <th><a href="../documents/<?php echo $row['cer_med'] ?>"  class="form-control">View Certificate</a></th>
       
              <th> <label class="form-label">PHOTO</label></th>
              <th><a href="../documents/<?php echo $row['photo'] ?>"  class="form-control">View Photo</a></th>
        </tr>
          <?php  }?>
        <tr>
                                             <th></th>

            <th colspan=""> <button type="submit" id="save" class="btn btn-info" style=" width: 100%;
    height: 55px;"  name="add_user_update" >SUBMIT</button></th>
                      <?php if( $row['status']==('1'||'2')){?>

            <th colspan=""> <button type="submit" id="save" class="btn btn-info" style="width: 100%;
    height: 54px;
    background-color: cornflowerblue;"  name="reset_cer" >RESET CERTIFICATES</button></th>
                      <?php  }?>
            <th></th>

               
        </tr>
          
        </table>
            </form>
            
            <?php
            if(isset($_POST['add_user_update']))
            {    
                $pid= $_SESSION['pid']; 
                $address =$_POST['address'];
                $pincode =$_POST['pincode'];
                $state =$_POST['state'];
                $dist =$_POST['dist'];
                $dob =$_POST['dob'];
                $sex =$_POST['sex'];
                $specialized =$_POST['spin'];
                $cpercenrage =$_POST['cpercentage'];
                $regno =$_POST['regno'];
                $year =$_POST['year'];
                $usertype='DOCTOR';
                $ald =$_POST['ald'];
                $bgroup =$_POST['bloodgroup'];
                $vname =$_POST['vname'];
               $certi_10   =   $_FILES['certi_1']['name'];	
               move_uploaded_file($_FILES['certi_1']['tmp_name'], "../documents/".$certi_10);
                $certi_12   =   $_FILES['certi_2']['name'];	
               move_uploaded_file($_FILES['certi_2']['tmp_name'], "../documents/".$certi_12);
                $certi_medical   =   $_FILES['certi_3']['name'];	
               move_uploaded_file($_FILES['certi_3']['tmp_name'], "../documents/".$certi_medical);
                $photo   =   $_FILES['photo']['name'];	
               move_uploaded_file($_FILES['photo']['tmp_name'], "../documents/".$photo);
          $sql    =   "UPDATE common_login SET  graduation='$ald',bloodgroup='$bgroup',village='$vname',address='$address', pincode='$pincode',	state='$state',district='$dist',dob='$dob',sex='$sex',specialized='$specialized',graduation_per='$cpercenrage' ,cer_10='$certi_10',cer_12='$certi_12',cer_med='$certi_medical',photo='$photo',rejno='$regno',year='$year',utype='$usertype',status='1' WHERE pid='$pid' ";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                echo "<script>alert('DETAILS HAS BEEN SEND AND ADMIN WILL RESPOND WITH IN 24 HRS')</script>";
                 echo "<script>window.location='index.php'</script>";
             
        }
                    if(isset($_POST['reset_cer']))
                    {
                         $sql    =   "UPDATE common_login SET  status='0' WHERE pid='$pid' ";
                $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
              echo "<script>alert('ACCESS TO YOUR SPECIAL FEATURES WILL BE TEMPORILY LOSS,ACCESS WILL BE PERMITTED AFTER ADMIN VERFICATION')</script>";
                 echo "<script>window.location='update_recrutdoctor.php'</script>";
                        
                    }

        ?>
        </div>
              
    </body>
    <script>
     $(function() {
            $('.selectpicker').selectpicker();
            $('.selectpicker1').selectpicker();
          });
        
        
        </script>
    
</html>