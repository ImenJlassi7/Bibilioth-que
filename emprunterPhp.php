<?php
if (!empty($_POST["CodeEtudiant"])&& !empty($_POST["CodeLivre"])&& !empty($_POST["DateEmprunt"])) {
    

    $CodeEtudiant = $_POST["CodeEtudiant"];
    $CodeLivre = $_POST["CodeLivre"];
    $DateEmprunt = $_POST["DateEmprunt"];

    require_once("etudiant.php");
    $etudiant = new etudiant($CodeEtudiant);

    if ($etudiant->present()) {
        require_once("livre.php");
        $livre = new livre($CodeLivre);

        if ($livre->present()) {
           
            require_once("emprunter.php");
            $emprunter = new emprunter($CodeLivre, $CodeEtudiant, $DateEmprunt);
if ( $emprunter->control()) {
 header("location:emprunterHtml.php?error4=cet étudiant a déja pris ce livre");
}
           else  if ($emprunter->emprunter()) {
                header("location:listeEmprunts.php?success=l'étudiant a emprunté un livre");
            } else {
                header("location:emprunterHtml.php?error=l'étudiant n'est pas emprunté un livre");
            }
        } else {
            header("location:emprunterHtml.php?error1=le code livre est invalide");

        }
    } else {
        header("location:emprunterHtml.php?error2=le code étudiant est invalide");

    }
}
else  header("location:emprunterHtml.php?error3=remplissez tous les champs");
?>
