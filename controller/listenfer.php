<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {

    $Enfermedad = $_POST['enferme']; 


    require_once("../model/conexion.php");
    $obj = new Conection();
    $resultado = $obj->enfermedades($Enfermedad); //Nombre de function en claseconexion
    echo json_encode($resultado);

}