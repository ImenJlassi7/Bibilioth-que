<?php

	include_once("etudiant.php");
	if(isset($_POST["CodeEtudiant"])&& isset($_POST["nom"])&& isset($_POST["prenom"])&& isset($_POST["adresse"])&& isset($_POST["classe"]))
	{
		$CodeEtudiant=$_POST["CodeEtudiant"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$adresse=$_POST["adresse"];
		$classe=$_POST["classe"];

		$p=new etudiant($CodeEtudiant,$nom,$prenom,$adresse,$classe);

	if($p->modifier())

	header("location:listeEtudModifier.php?success1=l'étudiant est modifié");
	else header("location:modifierEtudHtml.php?error=l'étudiant n'est pas modifié");
}

	?>