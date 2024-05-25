<?php
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
    require_once("../model/conexion.php");
    $obj = new Conection();
    $resultado = $obj->selectConsultarCitasPaciente();
    echo json_encode($resultado);
    }
?>