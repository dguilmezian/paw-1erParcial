<?php 
/**
* Autor:Daniel Guilmezian
*/
include_once 'conexion.php';
class Encuestado{
	
	private $nombre;
	private $apellido;
	private $email;
	private $respuesta;
	function __construct($nombre, $apellido, $email,$respuesta){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->email = $email;
		$this->respuesta=$respuesta;
	}

	function persistir(){
		$c = new Conexion();
		$conexion = $c->getConnection();

		if ($conexion != null){
			$nombreEncuestado = $this->nombre;
			$apellidoEncuestado = $this->apellido;
			$emailEncuestado = $this->email;
			$respuestaEncuestado= $this->respuesta;
			
			$myQuery = $conexion->prepare("INSERT INTO encuestado (nombre, apellido, email, respuesta) VALUES (:nombre, :apellido, :email, :respuesta)");

			$myQuery->bindParam(':nombre', $nombreEncuestado);
			$myQuery->bindParam(':apellido', $apellidoEncuestado);
			$myQuery->bindParam(':email', $emailEncuestado);
			$myQuery->bindParam(':respuesta', $respuestaEncuestado);

			$resultadoQuery = $myQuery->execute(); #ejecuto la query

			$conexion = null; #cierro la conexion a la BD

			return $resultadoQuery; #para saber si se dio de alta o no.
		}
	}
}

?>