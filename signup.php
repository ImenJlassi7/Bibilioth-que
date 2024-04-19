<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc@dSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="Login.css">
</head>
<body>



<form method="post" action="nouveauUser.php">

<?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></div>
                  <?php } ?>
                  <?php if (isset($_GET['error1'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error1']; ?></div>
                  <?php } ?>
                  <?php if (isset($_GET['error2'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error2']; ?></div>
                  <?php } ?>
                  
<div class="card">

           <div class="text-center intro">
            <img src="https://i.imgur.com/uNiv4bD.png" width="160">
            
            
           </div>

           <div class="mt-4 text-center">
               
               <h4 >SIGN UP</h4>
              

               <div class="mt-3 inputbox">

                <i class="fa fa-user"></i><input type="text" class="form-control" name="email" placeholder="Email">
               
                    
                    
                  <i class="fa fa-user"></i><input type="text" class="form-control" name="username" placeholder="username">
               
                    
                   
               </div>


               <div class="inputbox">

                <input type="Password" class="form-control" name="password" placeholder="Password">
                <i class="fa fa-lock"></i>
                
               </div>

           </div>


           <div class="d-flex justify-content-between">

            

            <div>
                <a href="index.php" class="forgot">Déja a un compte ?</a>
            </div>
               
           </div>

           <div class="mt-2">


            <button class="btn btn-primary btn-block"  type="submit">sign up</button>
               

           </div>


          
           


       </div>
       </form>
       </body>
</html>