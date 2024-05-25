<?php
class Conection
{
    public $driver;
    public $host;
    public $user;
    public $password;
    public $database;
    public $conn;

    public function __construct()
    {

        $this->driver = 'mysql';
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'ClinicaDental';

        $this->getConection();
    }
    public function getConection()
    {
        $this->conn = new PDO($this->driver . ":" . "host=" . $this->host . ";" . "dbname=" . $this->database, $this->user, $this->password);

        if (!$this->conn) {
            echo "conexion fallida";
        } else {
            //echo "conexion establecida";
        }
    }

    public function insertCita($IdMedico, $fecha, $hora)
    {
        $idPaciente = 3;
        $sql = "call insertNuevaCita(?,?,?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $IdMedico); // Agrega un parametro
        $statement->bindParam(2, $fecha);
        $statement->bindParam(3, $hora);
        $statement->bindParam(4, $idPaciente);

        if ($statement->execute()) { // Ejecuta el procedimiento y arroja 1 o 0
            return "Cita creada";
        } else {
            return "Cita no disponible";
        }
    }

    public function selectMedicos()
    {
        $sql = "call selectMedico()";
        $statement = $this->conn->prepare($sql);

        if ($statement->execute()) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function selectConsultarHoras($name, $lastname, $date)
    {
        $sql = "call selectConsultarHoras(?,?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $name); // Agrega un parametro
        $statement->bindParam(2, $lastname);
        $statement->bindParam(3, $date);

        if ($statement->execute()) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function selectConsultarCitasPaciente()
    {
        //$Paciente_id = $_COOKIE['idpcaciente'];
        $Paciente_id = 3;
        $sql = "call selectCitasPaciente(?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $Paciente_id); // Agrega un parametro

        if ($statement->execute()) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function updateCancelarCitas($idCita)
    {

        $sql = "call updateCancelarCita(?)";
        $statement = $this->conn->prepare($sql);

        $statement->bindParam(1, $idCita);

        if ($statement->execute()) {
            $count = $statement->rowCount();
            if ($count) {
                return true;
            } else {
                return false;
            }
        } else {
            return "Error";
        }
    }

    public function PacienteNuevo($nombre, $apellidos, $email, $password) //, $confirmpassword)
    {
        $sql = "CALL insertPacienteNuevo(?,?,?,?)"; //cambiar por el procedure de la base de datos de clinica de altapacientes
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $nombre);
        $statement->bindParam(2, $apellidos);
        $statement->bindParam(3, $email);
        $statement->bindParam(4, $password);
        //$statement->bindparam(5, $confirmpassword);

        if ($statement->execute()) {
            return "Registro exitoso";
        } else {
            return "Error";
        }
    }

    public function listcitas()
    {
        $sql = "CALL citascancel()";
        $statement = $this->conn->prepare($sql);

        if ($statement->execute()) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function List($Sex)
    {
        $sql = "CALL filtro(?)"; //Nombre del stored procedure
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $Sex);/*AGREGA UN PARAMETRO*/

        if ($statement->execute()) { /*EJECUTA EL PROCEDIMEINTO Y ARROJA 1 O )*/
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function enfermedades($Enfermedades)
    {
        $sql = "CALL enfermedad(?)"; //Nombre del stored procedure
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $Enfermedades);/*AGREGA UN PARAMETRO*/

        if ($statement->execute()) { /*EJECUTA EL PROCEDIMEINTO Y ARROJA 1 O )*/
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function ListarConsultas()
    {
        $idMedico = 5;
        $sql = "CALL consultarcitas(?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $idMedico);
        /*EJECUTA EL PROCEDIMEINTO Y ARROJA 1 O 0 si se ejecuto correctamente*/
        if ($statement->execute()) {

            /*retorna los registros encontrados*/

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function listar()
    {
        $id_paciente = 3;
        $sql = "CALL listPacienteDatos(?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $id_paciente);
        /* Ejecuta el procedimiento y arroja 1 o 0 si se ejecuto correctamente */
        if ($statement->execute()) {

            /*Retorna los registros encontrados*/

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    function login($email, $password)
    {

        $sql = "CAll web_sp_login(?,?)";
        $statement = $this->conn->prepare($sql);

        $statement->bindParam(1, $email);
        $statement->bindParam(2, $password);

        if ($statement->execute()) {

            $count = $statement->rowCount();
                return true;
        }
        else {
            return false;
        }
    }


    public function update(
        $newnombre,
        $newapellidos,
        $newsexo,
        $newpeso,
        $newestatura,
        $newdireccion,
        $newemail,
        $newtelefonoCasa,
        $newtelefonoMovil
    ) {

        $sql = "CALL update_usuario(?,?,?,?,?,?,?,?,?)";
        $statement = $this->conn->prepare($sql);

        $statement->bindParam(1, $newnombre);
        $statement->bindParam(2, $newapellidos);
        $statement->bindparam(3, $newsexo);
        $statement->bindparam(4, $newpeso);
        $statement->bindparam(5, $newestatura);
        $statement->bindparam(6, $newdireccion);
        $statement->bindparam(7, $newemail);
        $statement->bindparam(8, $newtelefonoCasa);
        $statement->bindparam(9, $newtelefonoMovil);

        if ($statement->execute()) {

            $count = $statement->rowCount();
            if ($count) {
                return true;
            } else {
                return false;
            }
        } else {
            return "error";
        }
    }
}

$obj = new Conection();
