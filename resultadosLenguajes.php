<?php

include_once 'conexion.php';

$c = new Conexion();

$conexion = $c->getConnection();

$myQuery = $conexion->prepare("SELECT * FROM lenguajes");
if ($myQuery->execute()) {
    $resultado=$myQuery->fetchAll(PDO::FETCH_ASSOC);
    $lenguajes = json_encode($resultado);
    //echo $lenguajes;
}

$myQuery = $conexion->prepare("SELECT * FROM encuestado");
if ($myQuery->execute()) {
    $resultado=$myQuery->fetchAll(PDO::FETCH_ASSOC);
    $encuestados = json_encode($resultado);
    //echo $encuestados;
}

require 'resultados.php';
