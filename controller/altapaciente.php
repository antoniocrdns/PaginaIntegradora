<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['correo'];
        $password = $_POST['pass'];
        //$confirmpassword = $_POST['confirmpass'];

        require_once("../model/conexion.php");
        $obj = new Conection();
        $resultado = $obj->PacienteNuevo($nombre,$apellidos,$email,$password);
        echo json_encode(["estado"=>$resultado]);
}

?>
