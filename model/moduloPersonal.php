<?php
include_once "DB.php";
Personal{
   public function listadoPersonal(){
        $db = DB::conectar();
	try{
		$result = $db->query("Select * from personal");
		while($row = $result->fetch_array()){
			$row[] = $row;

		}
		result->close();

	}
	catch(PDOException $e){
		return $e->getMessage();
		
	}
 	DB::desconectar($db);

	return $rows;	


}
   




}

?>
