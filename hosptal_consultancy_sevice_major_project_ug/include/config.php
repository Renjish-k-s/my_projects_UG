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
