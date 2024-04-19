<?php

	include_once("emprunter.php");
	if(isset($_POST["CodeLivre"])&&isset($_POST["CodeEtudiant"]) && !empty($_POST["CodeLivre"])&& !empty($_POST["CodeEtudiant"]))
	{
		$CodeLivre=$_POST["CodeLivre"];
		$CodeEtudiant=$_POST["CodeEtudiant"];
		$p=new emprunter($CodeLivre,$CodeEtudiant);
	
		if($p->retour()) {
		header("location:listeEmprunts.php?success1=l'étudiant a retourné le livre");
}

		else header("location:retourHtml.php?error=le code livre ou code étudiant n'est pas valide");

}
else header("location:retourHtml.php?error1=remplissez tous les champs");
?>
