<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gestion des emprunts</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc@dSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

  </head>
  <body style="
 
  background-image: url('background.jpg');
  background-size:cover;
    background-attachment: fixed;

    background-position: center center;
">
<?php require "nav.php" ?>
  <div class="login-dark">
        <form >
          

                  
                 
            
            <div class="illustration"><h2 style="color: black" >Gestion des Emprunts</h2><<i style="color: black" class="fa-solid fa-book-open fa-beat-fade"></i></div>
            <div class="form-group"><label class="container" style="font-size: 25px"><i style="color: black" class="fa-solid fa-arrow-right fa-beat-fade"></i></i><a href="nouveauEtudiant.php" ><a href="emprunterHtml.php"> emprunter un livre</a></label>
              <label class="container" style="font-size: 25px "><i style="color: black" class="fa-solid fa-arrow-left fa-beat-fade"></i><a href="listeEtudiant.php"><a href="retourHtml.php">retour d'un livre</a></label>
              <label class="container" style="font-size: 25px"><i  style="color: black" class="fa-solid fa-list fa-beat-fade"></i><a href="listeEtudiant.php" style="font-size: 25px"><a href="listeEmprunts.php"> liste des emprunts</a></label>
              
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