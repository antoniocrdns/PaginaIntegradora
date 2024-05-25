<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {

    $Sexo = $_POST['Sex'];


    require_once("../model/conexion.php");
    $obj = new Conection();
    $resultado = $obj->List($Sexo); //Nombre de function en claseconexion
    echo json_encode($resultado);
    

}