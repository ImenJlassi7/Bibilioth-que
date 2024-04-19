
<?php
require("connect.php"); ?>
<html>

<head>
    <title>supprimer étudiant</title>
    <meta charset="utf-8">
 
    <link rel="stylesheet" href="nouveauEtud.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body  style="
    background-image: url('etud.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
     min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;">

	<section class="get-in-touch">
   <h1 class="title">supprimer un etudiant</h1>
   <form class="contact-form row"  action="supprimerEtud.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></div>
                  <?php } ?>
                      <?php if (isset($_GET['error1'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error1']; ?></div>
                  <?php } ?>
    <?php if (isset($_GET['error2'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error2']; ?></div>
                  <?php } ?>
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text"  name="CodeEtudiant" >
         <label class="label" for="name">Code Etudiant</label>
      </div>
     <div class="form-field col-lg-5 animate__animated animate__fadeIn">
                <input class="submit-btn" type="submit" value="supprimer">
            </div>
            <div class="form-field col-lg-1 text-end animate__animated animate__fadeIn">
                <a href="gestionDesEtudiant.php">
                    <input class="submit-btn" value="Annuler">
                </a>
            </div>
     
       
      
      
   </form>
</section>

			
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>










        
