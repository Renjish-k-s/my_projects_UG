<?php include_once("../include/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
body{background-color:  #13C5DD;}
.div1{background-color: #ccc;width: 39%;height: 470px;margin-top: -99px;margin-left: 514px;}
.div2{width: 100%;height: 210px;background-color:   #13C5DD;}
.h1x{ text-align: center;font-size: xxx-large;color: white;margin-top: 69px;}
.form-control{ width: 62%;height: 55px;margin-left: 117px;}
.p1{text-align: center;color: white;}
.calx{background-color: #ccc;height: 495px;width: 50%;margin-left: 428px;}
    </style>
    <body >
              <form method="post" >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
       <a href="producttable.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>
        </div>
                
                <div class="container" style="background-color: #ccc;border-radius: 50px;">
                     <?php
                $pid= $_GET['id'];
             $sql    =   "SELECT * FROM product WHERE pid='$pid'";
             $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
              $row =mysqli_fetch_array($res)
                                         ?>
                          
                    <table class="container" style="background-color: #ccc;height: 415px;border-radius: 50px;">
                          <tr>
                              <th colspan="4"><h1 align="center">UPDATE DETAILS</h1></th>
            </tr><tr>
                           <th> <label class="form-label">PRODUCT ID</label></th>
                             <th><input type="text" name="proid" class="form-control" value=" <?php echo $row['pid']; ?>"  ></th>
                               <th> <label class="form-label">PRODUCT NAME</label></th>
                             <th><input type="text" class="form-control" name="pname" value=" <?php echo $row['name']; ?>"  required></th>
                               
                       </tr>
                       <tr>
                           
                              
                             <th> <label class="form-label">QUANTITY</label></th>
                             <th><input type="text" class="form-control" name="quat"  value=" <?php echo $row['totalqty']; ?>"></th>
                                
                       
                           <th> <label class="form-label">UNIT PRICE</label></th>
                           <th><input type="text" class="form-control" name="uprice" value="<?php echo $row['uprice']; ?>" > </th>
                             
                               
                       </tr> 
                       <tr>
                           
                              
                             <th> <label class="form-label">GENERIC NAME</label></th>
                             <th><input type="text" class="form-control" name="gname"  value=" <?php echo $row['sname']; ?>"></th>
                                
                       
                           <th> <label class="form-label">USED FOR</label></th>
                           <th><textarea type="text" class="form-control" name="use" rows="5" cols="20" required><?php echo $row['usefor']; ?></textarea></th>
                             
                               
                       </tr>
                    
                       <tr>
                         <th colspan="4"><input type="submit" name="send" value="UPDATE" class="btn btn-info" style="margin-left: 471px;
    padding: 20px;
    font-weight: bold;
    font-size: medium;"></th>
                         </tr>
                    </table>
                    
                     
                </div>
                 </form>
                <?php  
                 if(isset($_POST['send'])){
                       
                     
                     $unitprice=$_POST['uprice'];
                             $id=$_GET['id'];
                            $sql1    = "UPDATE product SET uprice='$unitprice' WHERE pid='$id'";
                          
       $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));       

        echo "<script>alert('UPDATED SUCESSFULLY')</script>";
                         echo "<script>window.location='stockadd_1.php?id=$id'</script>";   

                          
                 
       
                 }
                 
                
                
                ?>
            </form>
        
    </body>
</html>
