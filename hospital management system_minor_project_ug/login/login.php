<?php include_once("../include/config.php"); ?>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <div class="jumbotron text-center">
  <h1>KANJIRAMKULAM MEDICAL COLLEGE</h1>
  <p>COME FAST GO FAST</p>
</div>
      <ul class="nav navbar-nav navbar-right">
          <a href="../Home/index.html" class="btn btn-info" >HOME</a>
       </ul>
        <style type="text/css">
            body,td,th{
                color:#000000;
            }
            body{
                background-color: #f0f0f0;
            }
            .style1
            {
                font-family : arial,belvetica, sans-serif;
                font-size : 14px;
                padding : 12px;
                line-height :25px;
                border-radius :4px;
                text-decoration : none;
            .style2
            {
                font-family : arial,belvetica, sans-serif;
                font-size : 17px;
                padding : 12px;
                line-height :25px;
                border-radius :4px;
                text-decoration : none;
            }
       </style>     
    </head>
    <body>
        <div class="container">
            <table width="100%" hieght="100%" border="0" cellspacing="0" align="center" >
                <tr>
                    <td align="center" valign="middle">
                        <table class="table-bordered" width="350" border="0" cellpadding="3" bgcolor="#FFFFFF">
                            <form name="frm_login" method="post" action="" id="frm_login">
                                <tr>
                                    <td height="25" colspan="2" align="left" valign="middle" bgcolor="#FF9900" class="style2">
                                        <div align="center">
                                            <strong>LOGIN</strong>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <div id="err" style="color : red">
                                </div>
                                </tr>
                                <tr>                                    
                                    <td width="188" align="left" valign="middle" class="style1">USER TYPE</td>
                                    <td width="188" align="left" valign="middle" class="style1">
                                        <select class="form-control" id="usertype" name="usertype" placeholder="Usertype">
                                            <option value="">Please Select</option>
                                            <?php
                                               $sql    =   "SELECT * FROM usertype WHERE deletestatus='0'";
                                               $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                               while($row=mysqli_fetch_array($res)){
                                            ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['usertype'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>  
                                </tr>   
                                <tr>
                                    <td width="188" align="left" valign="middle" class="style1">USERNAME</td>
                                    <td width="188" align="left" valign="middle" class="style1">
                                        <input type="text" class="form-control" size="10px" id="username" placeholder="username" name="username" autocomplete="off" >
                                    </td>  
                                        </tr>
                                         <tr>
                                    <td width="188" align="left" valign="middle" class="style1">PASSWORD</td>
                                    <td width="188" align="left" valign="middle" class="style1">
                                    <input type="password" class="form-control" size="10px" id="password" placeholder="password" name="password" >
                                    </td>  
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="right" valign="middle" class="style1">
                                                <button type="submit" name="signin" class="btn btn-primary" >SIGN IN</button>
                                                <button type="button" class="btn btn-warning">RESET</button>
                                            </td>
                                        </tr>
                            </form>
                            <?php
                                if(isset($_POST['signin'])){
                                    $username   =   $_POST['username'];
                                    $password   =   md5($_POST['password']);
                                    $usertype      =   $_POST['usertype'];
                                    $sql        =   "SELECT * FROM usertable WHERE username='".$username."' AND password='".$password."' AND usertype='".$usertype."' ";
                                    $res        =   mysqli_query($con, $sql) or die(mysqli_error($con));
                                    $num        =   mysqli_num_rows($res);
                                    $row        =   mysqli_fetch_array($res);
                                    if($num=="1"){
                                        $utype   =   $row['usertype'];
                                        $_SESSION['slno']   =   $row['slno'];
                                         if($utype=="1"){  #pharmasist
                                             $userid= $_SESSION['slno'];
                                             $message="LOGGED IN";
                                             $date       =   date("Y-m-d");
                                             $time       =   date("H:i:s");
                                           $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
                                           $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                                            echo "<script>window.location='../pharmasist/phar_view.php'</script>";
                                        }
                                         if($utype=="2"){    #doctor
                                             $userid= $_SESSION['slno'];
                                             $message="LOGGED IN";
                                             $date       =   date("Y-m-d");
                                             $time       =   date("H:i:s");
                                           $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
                                           $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                                            echo "<script>window.location='../doctor/doctor_view.php'</script>";
                                        }
                                        if($utype=="3"){  #receptionist
                                              $userid= $_SESSION['slno'];
                                             $message="LOGGED IN";
                                             $date       =   date("Y-m-d");
                                             $time       =   date("H:i:s");
                                           $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
                                           $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                                            echo "<script>window.location='../receptionist/index.php'</script>";
                                        }
                                        if($utype=="4"){  #DBA
                                              $userid= $_SESSION['slno'];
                                             $message="LOGGED IN";
                                             $date       =   date("Y-m-d");
                                             $time       =   date("H:i:s");
                                           $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
                                           $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                                            echo "<script>window.location='../owner/ownerpage.php'</script>";
                                        }
                                        if($utype=="5"){  #laborotary
                                              $userid= $_SESSION['slno'];
                                             $message="LOGGED IN";
                                             $date       =   date("Y-m-d");
                                             $time       =   date("H:i:s");
                                           $sq ="INSERT INTO log (userid,activity,date,time) VALUES ('$userid','$message','$date','$time')";
                                           $re = mysqli_query($con, $sq) or die(mysqli_error($con));
                                            echo "<script>window.location='../laboratary/labpage.php'</script>";
                                        }
                                    }
                                }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>        
    </body>
</html>
