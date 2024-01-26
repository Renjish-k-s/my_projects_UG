<?php include_once("../../include/config.php"); ?>
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
    background-color:   #13C5DD;padding: 2px;
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
    
    background-color: none;
    height: 388px;
    margin-top: 51px;
   
}
.mainbar{width: 100%;height: 39px;background-color: black;}
.newo{width: 33.33%;float: left;text-align: center;padding: 10px;height: 100%;}
.buttn{color: white;padding: 12px;}
.newo:hover{background-color: white; color: black;}
.neo{background-color: white;color: black}

  </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
                        <a href="../index.php" class="btn btn-info" style="background-color: black;margin-left: 25px;">BACK</a>

        </div>
        <div class="mainbar">
            
            <a href="blog_request.php"  ><div class="newo"><label>BLOG REQUESTS</label></div></a>
                            <a href="blog_request_1.php"  ><div class="newo neo"><label>ACTIVE BLOGS</label></div></a>
            <a href="blog_compliants.php"  ><div class="newo"><label>BLOG COMPLAINTS</label></div></a>

          
            

            
        </div>
        <form>
          <table id="tbl-patient" class="table table-responsive table bordered" border="1px"  cellpadding="0" width="100" style="background-color:white;">
                                     <thead>
                                         <tr>
                                             <th>BLOG ID</th>
                                             <th>CREATOR NAME</th>
                                              <th>DATE</th>
                                               <th>TYPE</th>
                                         

                                         </tr>
                                         <?php
                                            $sql    =   "SELECT * FROM  blog_table WHERE status='1' ";
                                            $res    =   mysqli_query($con, $sql) or die(mysqli_query($con));
                                            while($row =mysqli_fetch_array($res)){
                                         ?>
                                            
                                         <tr>
                                             
                                              <td> <?php echo 'BLOG NO-'.$row['id']; ?>   </td>
                                                
                                             
                                          <td><?php echo $row['creator_name']; ?>  </td>
           <td><?php echo $row['date']; ?>  </td>
           
           <?php if($row['type']=='0'){ ?>
              <td><?php echo 'NEWS'; ?>  </td>
                                            <?php }?>
               <?php if($row['type']=='1'){ ?>
              <td><?php echo 'RECRUITMENT'; ?>  </td>
                                            <?php }
                                            
                                            ?>
              
              
                                          <td> <a href="suspend.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="background-color:red;width: 75%;height: 100%;">SUSPEND</a></td>
                                          <td> <a href="create_blog.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="width: 75%;height: 100%;">VIEW DETAILS</a></td>


                                         </tr>

                                     
                                            <?php } ?>
                                     </thead>
                                       </table>
                
        
            </form>
      
                                     
                                     
                     
    </body>
</html>