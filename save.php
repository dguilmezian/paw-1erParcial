<?php
include_once 'encuestado.php';
include_once 'lenguaje.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$errors = array();
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['emisorErr'] = "Formato invalido del mail";
}
if (empty($errors)) {
    //si el encuestado ingreso un lenguaje que no estaba en la lista
    if ($_POST['nombreLenguaje'] == 'otro') {
        $respuesta = $_POST['otroLenguaje'];
        $encuestado = new Encuestado($nombre, $apellido, $email, $respuesta);
        if ($encuestado->persistir()) {
            $lenguaje = new Lenguaje($respuesta);
            $lenguaje->persistir();
            echo '<script type="text/javascript">
            alert("Encuestado Guardado Con Éxito");
            window.location.href="index.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
    alert("Existió un error");
    window.location.href="index.php";
    </script>';
        }
        //si el usuario ingreso un lenguaje que estaba en la lista
    } else {
        $respuesta = $_POST['nombreLenguaje'];
        $encuestado = new Encuestado($nombre, $apellido, $email, $respuesta);
        if ($encuestado->persistir()) {
            echo '<script type="text/javascript">
            alert("Encuestado Guardado Con Éxito");
            window.location.href="index.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
    alert("Existió un error");
    window.location.href="index.php";
    </script>';
        }
    }
}else{
    require 'altaEncuestado.php';
}
