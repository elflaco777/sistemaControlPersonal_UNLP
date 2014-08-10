<?php
if(!defined("IndexLoaded"))
{ die("Acceso incorrecto");
}

    function login($usuario, $password){
      $mysqli = DB::conectar();
      if($stmt = $mysqli->prepare("select apellido,idEmpleado,idTarjeta,nombre from empleado")){

		$stmt -> bind_param('s',$usuario);
           	$stmt -> execute();
           	$stmt -> store_result();
           	$stmt -> bind_result($apellido,$idEmpleado,$idTarjeta,$nombre);
           	$stmt -> fetch();
           	if($stmt->num_rows == 1){
 			if($idTarjeta == $password ) {
				$user_brownser = $_SERVER['HTTP_USER_AGENT'];
				
				$user_id = preg_replace("/[^0-9]+/","",$user_id);
 				$_SESSION['user_id'] = $user_id;
				
				$usuario = preg_replace("/[^a-zA-Z0-9_\-]+/",$usuario);
				$_SESSION['usuario'] = $usuario;
				$_SESSION['login_string'] = hash('sha512',$password . $user_brownser);
				return true;
		        } 
			else{
			return false;
	
			}
			


		}
              	else{
			//user no exists
			return false;

		}
     
                DB::desconectar($mysqli);        


      
		}
      
	
	}


    function login_roles($Empleado=null){
 	$mysqli = DB::conectar();
	if (isset($_SESSION['user_id'],$_SESSION['usuario'],$_SESSION['login_string'])){
		$user_id = $_SESSION['user_id'];
		$usuario = $_SESSION['usuario'];
		$login_string = $_SESSION['login_string'];

		//get the user agent of the brownser
		$user_brownser = $_SERVER['HTTP_USER_AGENT'];

		if($stmt->$mysqli->prepare("select idEmpleado,password from usuario where idEmpleado = ? LIMIT 1")){
			$stmt->bind_param('i',$user_id);
			$stmt->execute();
			$stmt->store_result();

            		if($stmt->num_rows==1){
				$stmt->bind_result($idEmpleado,$password);
				$stmt->fetch();	
				$login_check = hash('sha512', $password . $user_browser);
				if(!is_null($idEmpleado) and $Empleado < $idEmpleado){
					return false;

				}
				elseif{
					if($login_check==$login_string){
						return true;
					}
				}
				else{
					return false;
				}
				} else {
					// Not logged in 
					return false;
				}
			} else {
				// Not logged in 
				return false;
			}
			} else {
			// Not logged in 
			return false;
		}
	DB::desconectar($mysqli);
	}

      
?>
