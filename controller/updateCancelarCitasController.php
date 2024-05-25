<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $citaID = $_POST['idcita'];

        require_once("../model/conexion.php");
        $obj = new Conection();
        $resultado = $obj->updateCancelarCitas($citaID);

        echo json_encode ($resultado);
    }
?>