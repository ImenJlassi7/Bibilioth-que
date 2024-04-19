<?php
include_once("etudiant.php");
if (isset($_POST['valeur']) &&!empty($_POST['valeur'])&& isset($_POST['champ'])&& !empty($_POST['champ']) ) 
	
 {

 	$valeur=$_POST['valeur'];
 	$champ=$_POST['champ'];
 	$p=new etudiant($champ);
 	 $resultat = $p->recherche($champ, $valeur);
 	if ($resultat ) {
 	header("Location: rechercheHtmlEtud.php?success=L'étudiant  est trouvé, Voici les données associées à ce étudiant : CodeEtudiant={$resultat['CodeEtudiant']} , nom={$resultat['nom']} , prénom={$resultat['prenom']} , adresse={$resultat['adresse']} et classe={$resultat['classe']}");
 	}
 	else  header("Location: rechercheHtmlEtud.php?error=l'étudiant n'est pas trouvé");
 	
}
else header("Location:rechercheHtmlEtud.php?error1=remplissez le champs");

?>