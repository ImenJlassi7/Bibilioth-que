<?php


	class users {
	private $username;
	private $email;
	private $password;

	public function __construct($username,$email="",$password){
		$this->username=$username;
		$this->email=$email;
		$this->password=$password;
		
	}
	
	function ajout() {
		require("connect.php");

		$req=$con->query("insert into users(email,username,password) values ('".$this->email."','".$this->username."','".$this->password."')");
		if($req)
			return true;
		else return false;
	}
	function connect(){
		require("connect.php");
		$req=$con->query("select * from users where username= '".$this->username."'and password = '".$this->password."'");
		if($req -> num_rows >0)
			return true;
		else return false;
	}

	
	function control(){
		require("connect.php");
		 $cont = "SELECT * FROM users WHERE username = '".$this->username."' OR email = '".$this->email."'";
    $req = $con->query($cont);
     if ($req-> num_rows > 0){
     	return true;
     }
     else return false;
	}
}
?>