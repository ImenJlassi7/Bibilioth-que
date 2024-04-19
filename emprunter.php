<?php
class Emprunter {
	private $CodeEtudiant;
	private $DateEmprunt;
	private $CodeLivre;
	
	public function __construct($CodeLivre,$CodeEtudiant,$DateEmprunt=""){
		$this->CodeLivre=$CodeLivre;
		$this->CodeEtudiant=$CodeEtudiant;
		$this->DateEmprunt=$DateEmprunt;
		
	}
	function getCodeLivre(){
		return $this->CodeLivre; 
	}
	function getCodeEtudiant(){
		return $this->CodeEtudiant;
	}
	function getDateEmprunt(){
		return $this->DateEmprunt;
	}
	function emprunter(){
		require("connect.php");
		

$req=$con->query("insert into emprunter values('".$this->CodeEtudiant."','".$this->DateEmprunt."','".$this->CodeLivre."')");
	if($req)
			return true;
		else return false;
	
}



function retour() {
    require("connect.php");

   $req = $con->query("DELETE FROM emprunter WHERE CodeEtudiant = '".$this->CodeEtudiant."' AND CodeLivre ='".$this->CodeLivre."'");

    $rowsAffected = $con->affected_rows;

    return $rowsAffected > 0;
}

function present1() {
        require("connect.php");

        
       
        $req=$con->query("SELECT COUNT(*) FROM emprunter WHERE CodeEtudiant = '".$this->CodeEtudiant."'");
        
        if ($req) {
           
            $count = $req->fetch_assoc()['COUNT(*)'];

         
           
            return $count > 0;
        } else {
           
            return false;
        }
    }
function present2() {
        require("connect.php"); 

        
       
        $req=$con->query("SELECT COUNT(*) FROM emprunter WHERE CodeLivre = '".$this->CodeLivre."'");
        
        if ($req) {
           
            $count = $req->fetch_assoc()['COUNT(*)'];

         
           
            return $count > 0;
        } else {
           
            return false;
        }
    }
    	function control(){
		require("connect.php");
		 $cont = "SELECT * FROM emprunter WHERE CodeEtudiant = '".$this->CodeEtudiant."' and CodeLivre = '".$this->CodeLivre."'";
    $req = $con->query($cont);
     if ($req-> num_rows > 0){
     	return true;
     }
     else return false;
	}

}