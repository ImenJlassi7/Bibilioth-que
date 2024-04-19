<?php
require("connect.php"); ?>
<html>

<head>
    <title>ajout étudiant</title>
    <meta charset="utf-8">
 
    <link rel="stylesheet" href="nouveauEtud.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body  style="
    background-image: url('read.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;">

	<section class="get-in-touch">
   <h1 class="title">Ajouter un etudiant</h1>
   <form class="contact-form row"  action=" ajoutPhp.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></div>
                  <?php } ?>
                  <?php if (isset($_GET['error2'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error2']; ?></div>
                  <?php } ?>
                  <?php if (isset($_GET['error1'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error1']; ?></div>
                  <?php } ?>
                  <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></div>
                  <?php } ?>
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text"  name="CodeEtudiant" >
         <label class="label" for="name">Code Etudiant</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="text" name="nom" >
         <label class="label" for="email">nom</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" name="prenom" >
         <label class="label" for="company">prénom</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" name="classe" >
         <label class="label" for="phone">classe</label>
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="email" name="adresse" >
         <label class="label" for="message">adresse</label>
      </div>
      <div class="row">
            <div class="form-field col-lg-10 animate__animated animate__fadeIn">
                <input class="submit-btn" type="submit" value="Ajouter">
            </div>
            <div class="form-field col-lg-1 text-end animate__animated animate__fadeIn">
                <a href="gestionDesEtudiant.php">
                    <input class="submit-btn" value="Annuler">
                </a>
            </div>
        </div>
   </form>
</section>

			
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>










        