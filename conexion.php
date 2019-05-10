<?php

class Conexion{
    protected $dbh;

function getConnection(){
    try {
        $user='root';
        $password='';
      $this->dbh = new PDO('mysql:host=localhost;port=3306;dbname=encuesta',$user,$password);
     
      return $this->dbh;

    } catch (Exception $e) {
      echo $e;
      return null;
    }
  }
}
?>