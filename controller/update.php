<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $newnombre = $_POST['nombre'];
    $newapellidos = $_POST['apellidos'];
    $newsexo = $_POST['sexo'];
    $newpeso = $_POST['peso'];
    $newestatura = $_POST['estatura'];
    $newdireccion = $_POST['direccion'];
    $newemail = $_POST['email'];
    $newtelefonoCasa = $_POST['telefonoCasa'];
    $newtelefonoMovil = $_POST['telefonoMovil'];

    require_once("../model/conexion.php");
    $Obj = new Conection();
    $resultado = $obj->update($newnombre,
    $newapellidos,
    $newsexo,
    $newpeso,
    $newestatura,
    $newdireccion,
    $newemail,
    $newtelefonoCasa,
    $newtelefonoMovil);
    
    echo json_encode($resultado);
}
