<?php
class Etudiant {
	private $CodeEtudiant;
	private $nom;
	private $prenom;
	private $adresse;
	private $classe;
	public function __construct($CodeEtudiant,$nom="",$prenom="",$adresse="",$classe=""){
		$this->CodeEtudiant=$CodeEtudiant;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->classe=$classe;
	}
	function getCodeEtudiant(){
		return $this->CodeEtudiant;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getClasse(){
		return $this->classe;
	}


	function ajoutEtudiant() {
		require("connect.php");
		$req=$con->query("insert into etudiant values ('".$this->CodeEtudiant."','".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->classe."')");
		if($req)
			return true;
		else return false;
	}
	function supprimer(){
	require("connect.php");

   $req = $con->query("delete from etudiant where CodeEtudiant = '".$this->CodeEtudiant."'");

    $rowsAffected = $con->affected_rows;

    return $rowsAffected > 0;
	

	}
	
	function modifier(){
		require ("connect.php");
		$req = $con->query("update etudiant set CodeEtudiant='".$this->CodeEtudiant."', nom='".$this->nom."', prenom='".$this->prenom."',adresse='".$this->adresse."',classe='".$this->classe."' WHERE CodeEtudiant='".$this->CodeEtudiant."'");

		if($req)
			return true;
		else{ return false;
			}
	}

	function recherche($champ, $valeur) {
    require("connect.php");

    
    $query = "SELECT CodeEtudiant ,nom,prenom,adresse,classe FROM etudiant WHERE $champ = '" . $valeur . "'";
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

        
       
        $req=$con->query("SELECT COUNT(*) FROM etudiant WHERE CodeEtudiant = '".$this->CodeEtudiant."'");
        
        if ($req) {
           
            $count = $req->fetch_assoc()['COUNT(*)'];

         
           
            return $count > 0;
        } else {
           
            return false;
        }
    }

 	function control(){
		require("connect.php");
		 $cont = "SELECT * FROM etudiant WHERE CodeEtudiant = '".$this->CodeEtudiant."' OR adresse = '".$this->adresse."'";
    $req = $con->query($cont);
     if ($req-> num_rows > 0){
     	return true;
     }
     else return false;
	}

	}
