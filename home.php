<?php session_start()?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblio</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="css.css">

  </head>
  <body>
    
<?php require "nav.php" ?>
<br>

<!-- Carousel -->
 <div class="container">
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="background.jpg" alt="Los Angeles" class="d-block w-100" style="width:100%;">
       <div class="carousel-caption">
              <h2 class="animated bounceInRight" style="animation-delay: 1s">Bienvenu <span><?php echo $_SESSION['username']; ?></h2>
              <h3 class="animated bounceInLeft" style="animation-delay: 2s"><span>"Le livre est l'opium de l'Occident."</span><br>
                <span>- Anatole France</span>
                
              </h3>
              <p class="animated bounceInRight" style="animation-delay: 3s"><a href="gestionDesEmprunts.php">gestion des emprunts</a></p>
            </div>
    </div>
    <div class="carousel-item">
      <img src="gestionDesLivres.jpg" alt="Chicago" class="d-block w-100" style="width:100%;">
<div class="carousel-caption">
 <h2 class="animated bounceInRight" style="animation-delay: 1s">Bienvenu <span><?php echo $_SESSION['username']; ?></span></h2>
              <h3 class="animated bounceInLeft" style="animation-delay: 2s"><span>"Les livres sont des amis froids et sûrs."</span><br>
                <span>-​ Victor Hugo</span>
                
              </h3>
              <p class="animated bounceInRight" style="animation-delay: 3s"><a href="gestionDesLivres.php">gestion des livres</a></p>

      </div>
    </div>
    <div class="carousel-item">
      <img src="hh.jpg" alt="New York" class="d-block w-100" style="width:100%;">
<div class="carousel-caption">
 <h2 class="animated bounceInRight" style="animation-delay: 1s">Bienvenu <span><?php echo $_SESSION['username']; ?></h2>
              <h3 class="animated bounceInLeft" style="animation-delay: 2s"><span>"Je pense, donc, je suis."
</span><br>
                <span>- René Descartes</span>
                
              </h3>
              <p class="animated bounceInRight" style="animation-delay: 3s"><a href="gestionDesEtudiant.php">gestion des étudiants</a></p>

      </div>

    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
 </div>
<br>

  <?php require "footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>