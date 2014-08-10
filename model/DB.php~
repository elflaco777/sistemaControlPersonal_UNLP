<?php
if(!defined("IndexLoaded")){
	die("Acceso incorrecto");

}
Class DB{

// this function we used to connect DB::conectar()

static function conectar(){
	$db_host ='localhost';
	$db_database ='personal';
	$db_username ='root';
	$db_password ='root';			
	
        mysqli = mysqli_connect($db_host,$db_username,$db_password,$db_database);
	if(mysqli_connect_errno()){
		die('Connect error ...(' . mysqli_connect_errno() . ')' . mysli_connect_errno());

	}
 	
        return $mysqli;

}

static function desconectar(){

	$mysli->close();

}



}

?>
