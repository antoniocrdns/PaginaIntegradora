<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

    $id_Medico = $_POST['idmedico']; // Lo que va entre comillas es lo que ira en el view
    $fecha_Cita = $_POST['fechaCita'];
    $hora_Cita = $_POST['horaCita'];
    //$IdPaciente = $_POST['id_Paciente'];  

    require_once("../model/conexion.php");
    $obj = new Conection();
    $resultado = $obj->insertCita($id_Medico, $fecha_Cita, $hora_Cita);
    echo json_encode(["estado"=>$resultado]);
}
?> 