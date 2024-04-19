<?php
if (!empty($_POST["username"]) && !empty($_POST["email"])&& !empty($_POST["password"])) 
{
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	include_once("users.php");
	$p=new users($username,$email,$password);
	if($p->control()){
	  header("Location: signup.php?error=already exicted");}
	else if ($p->ajout())
		 header("Location: logIn.php?success=c'est bon");
		 else 	 header("Location: signup.php?error1=probléme d'insertion");
	
}
else {
	 header("Location: signup.php?error2=remplissez tous les champs");
}
?>