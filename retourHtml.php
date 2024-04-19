


<?php require("connect.php"); ?>
<html>

<head>
    <title>retour d'un livre</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ajoutLivre.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body style="
    background-image: url('education.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
">

<section class="get-in-touch">
    <h1 class="title">retour d'un livre</h1>
    <form class="contact-form" action="retourPhp.php" method="post">
    	 <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></div>
                  <?php } ?>
                   <?php if (isset($_GET['error1'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error1']; ?></div>
                  <?php } ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" type="text" name="CodeEtudiant" placeholder="name@example.com" >
                    <label for="floatingInput">Code Etudiant</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" type="text" name="CodeLivre" placeholder="Titre" >
                    <label for="floatingInput">Code livre</label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-field col-lg-7 animate__animated animate__fadeIn">
                <input class="submit-btn" type="submit" value="retour">
            </div>
            <div class="form-field col-lg-1 text-end animate__animated animate__fadeIn">
                <a href="gestionDesEmprunts.php">
                    <input class="submit-btn" value="Annuler">
                </a>
            </div>
        </div>
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
