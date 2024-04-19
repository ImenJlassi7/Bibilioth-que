<?php
if (!empty($_POST["CodeLivre"]) && !empty($_POST["titre"])&& !empty($_POST["auteur"])&&!empty($_POST["DateEdition"])) 
{
	$CodeLivre=$_POST["CodeLivre"];
	$titre=$_POST["titre"];
	$auteur=$_POST["auteur"];
	$DateEdition=$_POST["DateEdition"];
	
	include_once("livre.php");
	$p=new livre($CodeLivre,$titre,$auteur,$DateEdition);
	if ($p->control()) {
	header("location:nouveauLivre.php?error4=le livre déja trouvé");
	}
	else  if($p->ajoutLivre()) 
		header("location:listeLivre.php?success2=le livre est bien ajouté ");
	else header("location:nouveauLivre.php?error2=le livre n'est pas ajouté ");
}
else header("location:nouveauLivre.php?error3=remplissez tous les champs ");
?>