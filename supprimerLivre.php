<?php

	if(isset($_POST["CodeLivre"])&& !empty($_POST["CodeLivre"]))
	{
		$CodeLivre=$_POST["CodeLivre"];
		include_once("emprunter.php");
		$p=new emprunter($CodeLivre,$CodeLivre);


			if ($p->present2()===False) {
			include_once("livre.php");
			$l=new livre($CodeLivre);

			if($l->supprimer()) 
		header("location:listeLivre.php?success3=le livre est supprimé ");
			else  header("location:supprimerLivreHtml.php?error3=le livre n'est pas trouvé");
		}
		else header("location:supprimerLivreHtml.php?error4=le livre est emprunté par un étudiant , vous ne pouvez pas le supprimer");
	}
else header("location:supprimerLivreHtml.php?error5=remplissez le champs demandé ");
	?>