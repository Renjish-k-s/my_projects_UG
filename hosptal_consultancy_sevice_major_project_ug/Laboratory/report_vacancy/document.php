<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php include_once("../../include/config.php"); ?>

<html>
    <head>
        <meta charset="UTF-8">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <title></title>
    </head>
    <style>
        .border{width: 100%;
    }
        .consultancy_name{}
        .head{    font-size: 45px;
    text-align: center;}
        .mainborder{width: 60%;
    background-color: none;
    margin: auto;
    border: 1px solid;}
        .content{
            float: left;
            border:1px solid black;
            width: 100%
        }
        .from{ margin-left: 10px;}
        .type{ float: left;width: 100%; border: 1px solid;}
        .from1{ width: 50%;}
        .para{    font-size: 17px;}
        .details{    margin-left: 10px;
    width: 50%;
            
        }
        label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 16px;
}
        .date{}
        </style>
    <body>
          <?php
                                         
                                            $recid = $_GET['id'];
                                             $sql    =   "SELECT * FROM e_letter_box WHERE id='$recid' ";
                                             $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                           $row =mysqli_fetch_array($res);
                                            ?>
         <?php
                                                 $c=$row['from_1'];
                                                 $sql1    =   "SELECT * FROM company_user WHERE custid='$c' ";
                                             $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                             $row1 =mysqli_fetch_array($res1);
                                           
                                           ?>
   
         <?php
                                                 $c1=$row['to_1'];
                                                 $sql1    =   "SELECT * FROM common_login WHERE pid='$c1' ";
                                             $res1    =   mysqli_query($con, $sql1) or die(mysqli_query($con));
                                             $row12 =mysqli_fetch_array($res1);
                                           
                                           ?>
        <a href="show_letter.php?id=<?php echo $c1;?>&cid=<?php echo $row['recr_id']; ?>&c=<?php echo $_GET['rid']; ?>" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

       
        <div class="mainborder">
        <div class="border">
            <div class="consultancy_name">
                <h2 class="head"><?php echo $row1['fname']; ?> </h2>
                <p style="text-align:center;">WE ARE AT YOUR SERVICE</p>
            </div>
          
      </div>
            <div class="type">
                <h3 style="text-align:center;font-size: 24px;"><?php echo $row['type']; ?></h3>
                <p style="margin-left: 10px;">ISSUED DATE:<?php echo $row['date']; ?></p>
            </div>
            
            <div class="content">
                
                <div class="from">
                   <div class="from1">
                    <h3>FROM,</h3>
                    <h4><?php echo $row1['fname']; ?></h4>
                    <p class="para"><?php echo $row1['address'].',<br>'.$row1['district'].',<br>'.$row1['state'].',<br>'.$row1['pincode'];  ?></p>
                      </div>
                </div>
                 <div class="from">
                   <div class="from1">
                    <h3>TO,</h3>
                  <h4><?php echo $row12['name']; ?></h4>
                    <p class="para"><?php echo $row12['address'].',<br>'.$row12['district'].',<br>'.$row12['state'].',<br>'.$row12['pincode'];  ?></p>
                      </div>
                </div>
                 <div class="type1">
                <h3 style="text-align:left;font-size: 20px; margin-left: 10px">SUBJECT:<?php echo $row['type']; ?></h3>
            </div>
                  <div class="type1">
                <h3 style="text-align:left;font-size: 16px;margin-left: 10px;">Respected <?php echo $row12['name']; ?>,</h3>
            </div>
                
                <?php if($row['typeid']=='0'){ ?>
                <div class="con">
                    <h3 style="margin-left:10px ;font-size: 16px;"> This is with reference to your application , representing an interest in looking for employment with our company.
                    we are conducting an interview to find the finest employ from our applicants.With glad we invite you also.</h3>
                </div>
                <?php } ?>
                 <?php if($row['typeid']=='1'){ ?>
                <div class="con">
                    <h3 style="margin-left:10px ;font-size: 16px;"> This is with reference to your application a,representing an interest in looking for employment with our company.
                    we are conducting an exam to find the finest employ from our applicants.With glad we invite you also.</h3>
                </div>
                <?php } ?>
                 <?php if($row['typeid']=='3'){ ?>
                <div class="con">
                    <h3 style="margin-left:10px ;font-size: 16px;"> This is with reference to your application a,representing an interest in looking for employment with our company.
                    we are conducting an exam to find the finest employ from our applicants.With glad we invite you also.</h3>
                </div>
                <?php } ?>
                 <?php if($row['typeid']=='0'){ ?>
                <div class="details">
                    <div class="date"><label><u>INTERVIEW DETAILS:</u></label></div>
                            <div class="date"><label>VENUE:</label><label><?php echo $row['raddress']; ?></label></div>

                    <div class="date"><label>DATE:</label><label><?php echo $row['rdate']; ?></label></div>
                 <div class="date"><label>TIME:</label><label><?php echo $row['rtime']; ?>Am</label></div>


            </div>
                
                 <?php  }?>
                 <?php if($row['typeid']=='1'){ ?>
                <div class="details">
                    <div class="date"><label><u>EXAM DETAILS:</u></label></div>
                            <div class="date"><label>VENUE:</label><label><?php echo $row['raddress']; ?></label></div>

                    <div class="date"><label>DATE:</label><label><?php echo $row['rdate']; ?></label></div>
                 <div class="date"><label>TIME:</label><label><?php echo $row['rtime']; ?>Am</label></div>
                 <div class="date"><label>DURATION:</label><label><?php echo $row['duration']; ?></label></div>
                 <div class="date"><label>SYLLABUS:</label><label><a href="../../documents/<?php echo $row['syllabus'] ?>"  class="form-control">Download</a></label></div>


            </div>
                
                 <?php  }?>
                  <?php if($row['typeid']=='3'){ ?>
                <div class="details">
                    <div class="date"><label><u>JOINING DETAILS:</u></label></div>
                            <div class="date"><label>OFFICE ADDRESS :</label><label><?php echo $row['raddress']; ?></label></div>

                    <div class="date"><label>DATE:</label><label><?php echo $row['rdate']; ?></label></div>
                 <div class="date"><label>TIME:</label><label><?php echo $row['rtime']; ?>Am</label></div>
               


            </div>
                
                 <?php  }?>
                  <div class="type1">
                <h3 style="text-align:left;font-size: 15px; margin-left: 10px">WITH REGARDS <br> s/d<br> manager</h3>
            </div>
            </div>
        </div>
    </body>
</html>
