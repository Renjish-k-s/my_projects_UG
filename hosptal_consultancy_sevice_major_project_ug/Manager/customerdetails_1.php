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
          .p1{
          text-align: center;
           color: white;
}
.container{
      background-color: #ccc;
    color: white;
    height: 539px;
    border-radius: 20px;
}
 .form-control{
      width: 62%;
    height: 55px;
    margin-left: 233px;
   
        
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
                            $sql    =   "SELECT * FROM  staff WHERE username='$id'";
                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                           $row     =   mysqli_fetch_array($res);
                        ?>
              <tr>
                <th><input type="text" name="id" class="form-control" value="<?php echo $row['username']; ?>" readonly></th>
            </tr>
           
            <tr>
                <th><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" autocomplete="off" required></th>
            </tr>
             <tr>
                <th><input type="text" name="email" class="form-control" value="<?php echo $row['STYPE']; ?>" autocomplete="off" required></th>
            </tr>
             <tr>
                <th><input type="text" name="pnumber" class="form-control" value="<?php echo $row['MOBNO']; ?>" autocomplete="off" required></th>
            </tr>
             <tr>
                              <th><input type="text" name="pnumber" class="form-control" value="<?php echo $row['EMAIL']; ?>" autocomplete="off" required></th>

            </tr>
            
            
               <tr>
          
        </table>
          </form>
       
    </body>
    
</html>