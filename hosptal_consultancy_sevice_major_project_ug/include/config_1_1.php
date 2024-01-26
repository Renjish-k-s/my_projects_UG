<?php

session_start();
        
   define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB', 'consultancy');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     
        
        date_default_timezone_set("Asia/Calcutta"); 
        
?>
<?php
  $custid=$_GET['id'];
               
                 $master    =   "SELECT * FROM company_user WHERE custid='$custid'";
                 $masterx    =   mysqli_query($con, $master) or die(mysqli_query($con));
                $check =mysqli_fetch_array($masterx);
                
                $database_name=$check['database_name']; 
        
 $localhost='Localhost';
 $root='root';
 $password='';
 $databasename= trim($database_name);

$con1=mysqli_connect("$localhost","$root","$password","$databasename");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     
        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                         ?>
        