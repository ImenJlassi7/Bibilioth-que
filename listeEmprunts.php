

 <?php
require("connect.php");
include_once("emprunter.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>liste des emprunts</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.1/dist/aos.css' />
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <style>
        .custom-table {
            background: linear-gradient(125deg, #F5F5DC, #D2B48C);
            color: #333;
        }

        h2 {
            color: white;
        }

        h1 {
            text-align: center;
            color: #D2B48C;
        }
    </style>
</head>

<body>

    <section class='section section-height-1 border-4 m-0' style='background-image: url(books.jpg); background-size: cover; background-position: center;'>
        <div class='container py-3'>
            <div class='row align-items-center justify-content-center text-center text-lg-start'>
                <div class='col-md-8 col-lg-9 mb-4 mb-lg-0'>
                    <h2>“Soyez vous-même, les autres sont déjà pris.”</h2><br>
                    <h2>― Oscar Wilde</h2>
                </div>
            </div>
        </div>
    </section>
<br><br><br>
    <div cclass='container' style='min-height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: -50px;'>
        <div class='box' style='width: 1000px;'>
            <h1 data-aos="fade-right">La liste des emprunts</h1>
            

  <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></div>
                  <?php } ?>
                   <?php if (isset($_GET['success1'])) { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_GET['success1']; ?></div>
                  <?php } ?>
            <table class='table table-hover table-bordered custom-table'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col' scope='row'>Code Livre</th>
                        <th scope='row' scope='col'>Code Etudiant</th>
                        <th scope='row' scope='col'>Date emprunt</th>
                          <th scope='row' scope='col'>Image de livre emprunté</th>
                       
                    </tr>
                </thead>
                <?php
                $sql = "select * from emprunter";
                $res = $con->query($sql);
                foreach ($res as $row) {
                    $p = new emprunter($row["CodeLivre"], $row["CodeEtudiant"], $row["DateEmprunt"]);
                    echo "<tr><td>" . $p->getCodeLivre() . "</td><td>" . $p->getCodeEtudiant() . "</td><td>" . $p->getDateEmprunt() . "</td><td>
            <img src=".$p->getCodeLivre() . ".jpg ; style='width: 100px; height: auto;' >
        </td></tr>    ";
                }
                ?>
            </table>

        </div>
        <br>
        <a href='gestionDesEmprunts.php' class='btn btn-dark'> back </a>
    </div>

    <script>
        AOS.init();
    </script>
</body>

</html>
