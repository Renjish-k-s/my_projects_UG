<?php include_once("../../include/config.php"); ?>

<?php
    if(!empty($_POST['dept'])){
        
        $dept   =   $_POST['dept'];               
        $sql1    =   "SELECT  * FROM   qualification WHERE qualification='$dept' ";
        $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
        ?> <option value="">-Select-</option><?php
        while($row1 =mysqli_fetch_array($res1)){
        ?>
        <option value="<?php echo $row1['id'] ?>"><?php echo $row1['typw_id'] ?></option>
        <?php         
        }
    }
?>