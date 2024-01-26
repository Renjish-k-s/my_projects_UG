<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
        body{
            background-color:  #13C5DD;
        }
        .div1{
           background-color: #ccc;
    width: 39%;
   height: 470px;
    margin-top: -99px;
    margin-left: 514px;
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
    .form-control{
        width: 62%;
    height: 55px;
    margin-left: 117px;
        
    }
   .p1{
          text-align: center;
           color: white;
}
        
    </style>
    <body >
        <div class="div2">
            <h2 class="h1x"> HOSPITAL CONSULTANCY SERVICE</h2>
            <p class="p1">"WE ARE AT YOUR SERVICE"</p>
            
        </div>
       <div class="div1">
           <h3 class="h1x">LOGIN</h3>
           <br><!-- comment --><br>
           <input type="text" name="name" class="form-control" placeholder="ENTER YOUR ID" autocomplete="off" required><br><br>
           <input type="text" name="password" class="form-control" placeholder="ENTER YOUR PASSWORD" autocomplete="off" required><br><br>
             <select class="form-control" name="" id=""  required>
                                 <option value="">SELECT USER TYPE</option>
                                  <option value="">PHARMACY</option>
                                   <option value="">LABORATORY-</option>
                                    <option value="">HOSPITAL</option>
             </select><br>
               <button type="submit" id="save" class="btn btn-info" style=" width: 62%;
    height: 55px;
    margin-left: 117px;" value="add" name="add" >SUBMIT</button><br>
    <br>
    <a href=" ../Manager/User_creation/Create_user_public.php" align="center" style="    margin-left: 256px;">create an account!!!</a>
           
       </div>
        
        
    </body>
    
    
</html>