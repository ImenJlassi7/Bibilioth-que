<?php
class Livre {
	private $CodeLivre;
	private $titre;
	private $auteur;
	private $DateEdition;
	public function __construct($CodeLivre,$titre="",$auteur="",$DateEdition=""){
		$this->CodeLivre=$CodeLivre;
		$this->titre=$titre;
		$this->auteur=$auteur;
		$this->DateEdition=$DateEdition;
	}
	function getCodeLivre(){
		return $this->CodeLivre;
	}
	function getTitre(){
		return $this->titre;
	}
	function getAuteur(){
		return $this->auteur;
	}
	function getDateEdition(){
		return $this->DateEdition;
	}

	function ajoutLivre() {
		require("connect.php");
		$req=$con->query("insert into livre values ('".$this->CodeLivre."','".$this->titre."','".$this->auteur."','".$this->DateEdition."')");
		if($req)
			return true;
		else return false;
	}
	
	function supprimer(){
		
require("connect.php");

   $req = $con->query("delete from livre where CodeLivre = '".$this->CodeLivre."'");

    $rowsAffected = $con->affected_rows;

    return $rowsAffected > 0;
	}
	function modifier(){
		require ("connect.php");
		$req = $con->query("update livre set CodeLivre='".$this->CodeLivre."', titre='".$this->titre."', auteur='".$this->auteur."',DateEdition='".$this->DateEdition."' WHERE CodeLivre='".$this->CodeLivre."'");

		if($req)
			return true;
		else{ return false;
			}
	}
function recherche($champ, $valeur) {
    require("connect.php");

    $query = "SELECT CodeLivre, titre, auteur, DateEdition FROM livre WHERE $champ = '" . $valeur . "'";
    $req = $con->query($query);

    if ($req->num_rows > 0) {
  
        $result = $req->fetch_assoc();
        return $result;
    } else {
    
        return false;
    }
}


		function present() {
        require("connect.php");
        $req=$con->query("SELECT COUNT(*) FROM livre WHERE CodeLivre = '".$this->CodeLivre."'");
        

        if ($req) {
            $count = $req->fetch_assoc()['COUNT(*)'];

          
            return $count > 0;
        } else {
            
            return false;
        }
    }

    	function control(){
		require("connect.php");
		 $cont = "SELECT * FROM livre WHERE CodeLivre = '".$this->CodeLivre."' OR titre = '".$this->titre."'";
    $req = $con->query($cont);
     if ($req-> num_rows > 0){
     	return true;
     }
     else return false;
	}
}