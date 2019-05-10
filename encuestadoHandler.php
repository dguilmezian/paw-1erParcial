<?php

include_once 'conexion.php';

$c = new Conexion();
	
		$conexion = $c->getConnection();

		$myQuery = $conexion->prepare("SELECT * FROM lenguajes");
		if ($myQuery->execute()) {
			$lenguajes = $myQuery->fetchAll(PDO::FETCH_ASSOC);
        }
    
require 'altaEncuestado.php';