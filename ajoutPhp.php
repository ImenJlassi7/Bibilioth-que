<?php
if (!empty($_POST["CodeEtudiant"]) && !empty($_POST["nom"])&& !empty($_POST["prenom"])&&!empty($_POST["adresse"])&& !empty($_POST["classe"])) 
{
	$CodeEtudiant=$_POST["CodeEtudiant"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$adresse=$_POST["adresse"];
	$classe=$_POST["classe"];
	include_once("etudiant.php");
	$p=new etudiant($CodeEtudiant,$nom,$prenom,$adresse,$classe);
	if ($p->control()) {
		header("location:nouveauEtudiant.php?error=l'étudiant déja insrit");
			}
	else if($p->ajoutEtudiant()) 
	header("location:listeEtudiant.php?success=l'étudiant inscrit avec succés");
	else header("location:nouveauEtudiant.php?error1=probléme au cours de l'ajout");
}
else header("location:nouveauEtudiant.php?error2=remplissez tous les champs ");
?>