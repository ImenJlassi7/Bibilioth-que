<?php
include_once("livre.php");

if (isset($_POST['valeur']) && !empty($_POST['valeur']) && isset($_POST['champ']) && !empty($_POST['champ'])) {
    $valeur = $_POST['valeur'];
    $champ = $_POST['champ'];
    $p = new livre($champ);
    $resultat = $p->recherche($champ, $valeur);

    if ($resultat) {
header("Location: rechercheHtmlLivre.php?success=Le livre est trouvé, Voici les données associées à ce livre : CodeLivre={$resultat['CodeLivre']} , Titre={$resultat['titre']} , Auteur={$resultat['auteur']} et DateEdition={$resultat['DateEdition']}");
    } else {

       header("Location: rechercheHtmlLivre.php?error7=le livre n'est pas trouvé");
    }
} else {
 header("Location: rechercheHtmlLivre.php?error8=remplissez le champs");
}
?>
