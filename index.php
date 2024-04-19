
<!DOCTYPE html>
<html>
<head>
  <title>log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc@dSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="Login.css">
</head>
<body>


<form method="post" action="loginPhp.php"> 
<?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></div>
                  <?php } ?>
                   <?php if (isset($_GET['error3'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error3']; ?></div>
                  <?php } ?>
                   <?php if (isset($_GET['error4'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error4']; ?></div>
                  <?php } ?>
<div class="card">

           <div class="text-center intro">
            <img src="https://i.imgur.com/uNiv4bD.png" width="160">
            
            
           </div>

           <div class="mt-4 text-center">
               
               <h4 >Log In.</h4>
    

               <div class="mt-3 inputbox">

                <input type="text" class="form-control" name="username" placeholder="username">
               
                    
                    <i class="fa fa-user"></i>
                  
               </div>


               <div class="inputbox">

                <input type="password" class="form-control" name="password" placeholder="Password">
                <i class="fa fa-lock"></i>
                   
               </div>

           </div>


           <div class="d-flex justify-content-between">

            

            <div>
                <a href="signup.php" class="forgot">N'est pas inscrits ?</a>
            </div>
               
           </div>

           <div class="mt-2">


            <button class="btn btn-primary btn-block">Log In</button>
               

           </div>


          
           


       </div>
       </form>
       </body>
</html>