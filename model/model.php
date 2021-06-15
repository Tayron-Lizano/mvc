<?php

	require("model/conexion.php");

	class  Sentencias extends Conexion{
		public function Sentencias (){
			parent::__construct();
		}


		public function getEmpleados(){
			$sql = "SELECT * FROM empleados";
			$result = $this->link->prepare($sql);
			$result->execute(array());
			$rows = $result->fetchAll(PDO::FETCH_BOTH);

			return $rows;

		}	

}


?>
