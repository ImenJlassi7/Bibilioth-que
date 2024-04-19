<?php
session_start();
if (!empty($_POST["username"]) &&  !empty($_POST["password"])) 
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	include_once("users.php");
	$p=new users($username,"",$password);
	if($p->connect()){
	$_SESSION['username'] = $username;
	 header("Location: home.php");}
	else   header("Location: index.php?error3=les donnés ne sont pas correctes");
}
else  header("Location: index.php?error4=remplissez tous les champs");
session_close();
?>


