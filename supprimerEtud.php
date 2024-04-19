<?php

	
	if(isset($_POST["CodeEtudiant"])&& !empty($_POST["CodeEtudiant"]) )
	{
		$CodeEtudiant=$_POST["CodeEtudiant"];
		include_once("emprunter.php");
		$p=new emprunter($CodeEtudiant,$CodeEtudiant);
		if ($p->present1()===False) {
			include_once("etudiant.php");
			$e=new etudiant($CodeEtudiant);

			if($e->supprimer()) 
			header("location:listeEtudiant.php?success=l'étudiant est supprimé ");
			else header("location:supprimerEtudHtml.php?error=l'étudiant n'est pas trouvé ");
		}
		else header("location:supprimerEtudHtml.php?error1=l'étudiant a un livre , vous ne pouvez pas le supprimer");
	}
else header("location:supprimerEtudHtml.php?error2=remplissez le champs demandé ");
	?>