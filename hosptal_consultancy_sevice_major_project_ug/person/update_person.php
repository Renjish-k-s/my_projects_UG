<?php include_once("../include/config.php"); ?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    
    
    <style>
        body{ background-color:  #13C5DD;       }
       .div2{                      width: 100%;    height: 210px;    background-color:   #13C5DD;        }
       .h1x{                       text-align: center;    font-size: xxx-large;    color: white;    margin-top: 69px;        }
        .h2x{           text-align: center;    font-size: xxx-large;   color: black;   margin-top: 69px;       }
          .p1{         text-align: center;          color: white;}
.container{       background-color: white;}
.form-control{  width: 195%;   height: 55px;}
.tablex{ height: 468px;}
  </style>
  
  
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
        <div class="container">
            <form method="post">
        <table class="tablex" >
             <tr>
                <th><h1 >REGISTRATION FORM</h1></th>
            </tr>
             <?php
                 $pid=  $_SESSION['pid']; 
                 $sql    =   "SELECT * FROM common_login WHERE pid='$pid'";
                 $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                $row =mysqli_fetch_array($res)
                                         ?>
            <tr>
                <th>    <label class="form-label">ENTER YOUR NAME</label></th>
                <th><input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>" required></th>
                </tr>
                        <tr>
                              <th>    <label class="form-label">ENTER YOUR PHONE NO.</label></th>
                <th><input type="text" class="form-control" name="name" value="<?php echo $row['mnumber'];  ?>" required></th>
                </tr>
                <tr>
                      <th>    <label class="form-label">ENTER YOUR EMAIL</label></th>
                 <th><input type="text" class="form-control" name="EMAIL" placeholder="EMAIL ADDRESS" value="<?php echo $row['Vemail'];  ?>" required></th>
        </tr>
         <tr>
                  <th>    <label class="form-label">USER TYPE</label></th>
                  <th>
                 <select class="form-control" name="utype" id=""  required>
                                 <option value="">SELECT YOUR USER TYPE</option>
                                  <option value="1">DOCTOR</option>
                                   <option value="2">NURSE</option>
                                    <option value="3">ASPIRANT(other than health)</option>
                 </select></th>
        </tr>
        <tr>
                 <th> <button type="submit" id="save" class="btn btn-info" style=" width: 62%;
    height: 55px;
  margin-left: 191px;"  name="add_type" >SUBMIT</button></th>
                
        </tr>
        </table>
            </form>
        </div>
        <?php   
        if(isset($_POST['add_type']))
        {
            $utype=$_POST['utype'];
             if($utype==""){
                echo "<script>alert('SELECT A USER TYPE')</script>";

            }
            if($utype=='1'){
        echo "<script>window.location='update_recrutdoctor.php'</script>";

            }
             if($utype=='2'){
              echo "<script>window.location='update_recrutnurse.php'</script>";

            }
             if($utype=='3'){
            echo "<script>window.location='update_recrutother.php'</script>";

            }
        }
        
        ?>
        
    </body>
</html>