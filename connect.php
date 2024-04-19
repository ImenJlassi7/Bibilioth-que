<?php

$con=new mysqli("localhost","root","","isetb");
if ($con->connect_error==null){
//echo "connexion établie";
} 
else echo "connexion échoué";

?>