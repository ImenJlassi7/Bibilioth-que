<?php

	include_once("livre.php");
	if(isset($_POST["CodeLivre"])&& isset($_POST["titre"])&& isset($_POST["auteur"])&& isset($_POST["DateEdition"]))
	{
		$CodeLivre=$_POST["CodeLivre"];
		$titre=$_POST["titre"];
		$auteur=$_POST["auteur"];
		$DateEdition=$_POST["DateEdition"];

		$p=new livre($CodeLivre,$titre,$auteur,$DateEdition);

	if($p->modifier())
			header("location:listeLivreModifier.php?success=le livre est modifié ");
	
	else header("location:modifierLivreHtml.php?error=le livre n'est pas modifié ");
;
}
	?>