<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recherche</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ajoutLivre.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body style="
    background-image: url('livre.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
">

<section class="get-in-touch">
    <h1 class="title">Rechercher un livre</h1>
    <form class="contact-form" action="recherchePhpLivre.php" method="post">
        <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></div>
                  <?php } ?>
                   <?php if (isset($_GET['error7'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error7']; ?></div>
                  <?php } ?>
                   <?php if (isset($_GET['error8'])) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_GET['error8']; ?></div>
                  <?php } ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <select name="champ"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                    
                    <option value="CodeLivre">Code Livre</option>
                    <option value="titre">titre</option>
                    <option value="auteur">auteur</option>
                    <option value="DateEdition">date Edition</option>
                </select>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="valeur" id="floatingInput" placeholder="Code Livre">
                    <label for="floatingInput">valeur</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-field col-lg-5 animate__animated animate__fadeIn">
                <input class="submit-btn" type="submit" value="rechercher">
            </div>
            <div class="form-field col-lg-1 text-end animate__animated animate__fadeIn">
                <a href="gestionDesLivres.php">
                    <input class="submit-btn" value="Annuler">
                </a>
            </div>
        </div>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
