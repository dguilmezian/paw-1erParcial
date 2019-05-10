<?php 
include_once 'conexion.php';

/**
* Autor: Daniel Guilmezian
*/
class Lenguaje{
	
	private $nombre;
	
	function __construct($nombre){
		$this->nombre = $nombre;
	}

	function persistir(){
		$c = new Conexion();
		$conexion = $c->getConnection();

		if ($conexion != null) {

			$nombreLenguaje = $this->nombre;
			

			$myQuery = $conexion->prepare("INSERT INTO lenguajes (nombre) VALUES (:nombre)");

			$myQuery->bindParam(':nombre', $nombreLenguaje);

			$resultado = $myQuery->execute();

			$conexion = null;

			return $resultado;
		}

	}
	}

?>