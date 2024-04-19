<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gestion des livres</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc@dSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

  </head>
  <body style="
 
  background-image: url('gestionDesLivres.jpg');
  background-size:cover;
    background-attachment: fixed;

    background-position: center center;
">
  <?php require "nav.php" ?>

  <div class="login-dark">
        <form >
          

                  
                 
            
            <div class="illustration"><h2 >Gestion des Livres</h2><i  class="fa-solid fa-book fa-bounce"></i></div>
            <div class="form-group"><label class="container" style="font-size: 25px"><i class="fa-solid fa-plus fa-beat-fade"></i><a href="nouveauLivre.php" > nouveau livre</a></label>
              <label class="container" style="font-size: 25px"><i class="fa-solid fa-x fa-beat-fade"></i><a href="supprimerLivreHtml.php"> suppression d'un livre</a></label>
              <label class="container" style="font-size: 25px"><i class="fa-solid fa-pen-to-square fa-beat-fade"></i><a href="listeLivreModifier.php" style="font-size: 25px">  modification d'un livre</a></label>
              <label class="container" style="font-size: 25px"><i class="fa-solid fa-magnifying-glass fa-beat-fade"></i> <a href="rechercheHtmlLivre.php">recherche d'un livre</a> </label>
              <label class="container" style="font-size: 25px"><i class="fa-solid fa-list fa-beat-fade"></i><a href="listeLivre.php">  liste des livres</a></label>
            </div>
           <div class="fixed-bottom text-center">
                <button class="btn btn-outline-primary btn-lg mb-10" type="submit"><a href="home.php" style="color: black">
Back</a></button>
        </div>
            
        </form>

      
    </div>


   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
  </body>
</html>