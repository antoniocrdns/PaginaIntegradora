<?php
    /*if ($_SERVER['REQUEST_METHOD']=="POST"){
    
        $nameMedico = $_POST['nombreMedico'];
        $apellidosMedico = $_POST['apellidosMedico'];
        $dateCita = $_POST['fechaCita']; 
    
        require_once("../model/conexion.php");
        $obj = new Conection();
        $resultado = $obj->selectConsultarHoras($name, $lastname, $date);
        echo json_encode(["estado"=>$resultado]);
    }*/
    // Selecciona las horas de todas las citas
    if ($_SERVER['REQUEST_METHOD'] == "GET"){

        $nameMedico = $_POST['nombreMedico'];
        $apellidosMedico = $_POST['apellidosMedico'];
        $dateCita = $_POST['fechaCita']; 

        require_once("../model/conexion.php");
        $obj = new Conection();
        $resultado = $obj->selectConsultarHoras($nameMedico, $apellidosMedico, $dateCita);
        echo json_encode($resultado);
    }
?>