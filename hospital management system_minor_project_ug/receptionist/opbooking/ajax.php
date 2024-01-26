<?php include_once("../include/config.php"); ?>
<?php
    if(isset($_POST['type_id'])){
        $type_id     =   $_POST['type_id'];
       ?>
<option value="">-Select-</option>
        <?php
             $sql1   =   "SELECT * FROM usertable WHERE spec='$type_id'";
            $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
            while($row1=mysqli_fetch_array($res1)){
        ?>
         <option value="<?php echo $row1['slno'] ?>"><?php echo $row1['fullname']; ?></option>
        <?php 
    }}
         ?> 

    
             
             
             <?php  
    if(isset($_POST['date_id'])){
        $date_id     =   $_POST['date_id'];
       ?>
        <option value="">-Select-</option>
        <?php
             $sql1   =   "SELECT * FROM duty_rec WHERE username='$date_id'";
            $res1   =   mysqli_query($con, $sql1) or die(mysqli_error());
            while($row1=mysqli_fetch_array($res1)){
        ?>
         <option value="<?php echo $row1['date'] ?>"><?php echo $row1['date']; ?></option>
        <?php 
    }}
         ?> 

      