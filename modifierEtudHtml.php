<?php
require("connect.php"); 
include_once("etudiant.php");
$CodeEtudiant=$_GET["CodeEtudiant"];
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$adresse=$_GET["adresse"];
$classe=$_GET["classe"];
$p=new etudiant($CodeEtudiant,$nom,$prenom,$adresse,$classe);

?>



<html>

<head>
    <title>modification étudiant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="modifierEtud.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body style="
    background-image: url('etud.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
">

<section class="get-in-touch">
    <h1 class="title">Modifier un étudiant</h1>
    <form class="contact-form" action="modifierEtud.php" method="post">
         <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></div>
                  <?php } ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating">
                    	
			<input class="form-control" type="text" name="CodeEtudiant" value="<?php echo $p->getCodeEtudiant(); ?>">
			<label for="floatingInput">Code étudiant</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
			<input class="form-control" type="text" name="nom" value="<?php echo $p->getNom(); ?>">
<label for="floatingInput">nom</label>
                    
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating">

                	
			<input class="form-control" type="text" name="prenom" value="<?php echo $p->getPrenom(); ?>">
                    <label for="floatingInput">prénom</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">

                	<input  class="form-control" type="email" name="adresse" value="<?php echo $p->getAdresse(); ?>">
			<label for="floatingInput">adresse</label>
			
                </div>
            </div>
        </div>
        <div class="row mb-3">
        	<div class="col-md-6">
        	<div class="form-floating">
		


<input  class="form-control" type="text" name="classe" value="<?php echo $p->getClasse(); ?>">
			<label for="floatingInput">Classe</label>
        	</div>
        </div>
        </div>

        <div class="row">
            <div class="form-field col-lg-5 animate__animated animate__fadeIn">
                <input class="submit-btn" type="submit" value="Modifier">
            </div>
            <div class="form-field col-lg-1 text-end animate__animated animate__fadeIn">
                <a href="gestionDesEtudiant.php">
                    <input class="submit-btn" value="Annuler">
                </a>
            </div>
        </div>
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>








