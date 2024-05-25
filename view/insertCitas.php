<!doctype html>
<html lang="en">

<head>
    <title>Agendar Cita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="../JS/JQuery.js"></script>
    <link href="../CSS/bootstrap5style.min.css" rel="stylesheet">
    <script src="../JS/bootstrap5.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body onload="SelectMedicos()">
    <nav class="navbar navbar-expand-sm bg-info navbar-dark justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="../images/logos.png" alt=logos.png style="width: 35px">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../view/home-index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/perfil_usuario.php">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="../view/insertCitas.php">Agendar Cita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/updateCancelarCitas.php">Citas Agendadas</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-3">
        <div class="container2 mt-4 p-5 bg-light text-white rounded">
            <div class="row form group justify-content-center">
                <label for="Medicos" class="col-sm-1 mt-4 col-form-label text-dark">Medicos</label>
                <div class="col-sm-4 mt-4">
                    <div id="demo1"></div>
                </div>
            </div>
            <div class="row form-group justify-content-center" id="content">
                <label for="date" class="col-sm-1 mt-4 col-form-label text-dark">Date</label>
                <div class="col-sm-4 mt-4">
                    <input type="date" name="date" id="datepicker">
                </div>
            </div>
            <div class="row form-group justify-content-center">
                <label for="time" class="col-sm-1 mt-4 col-form-label text-dark">Time</label>
                <div class="col-sm-4 mt-3">
                    <select class="form-select" id="horas">
                        <option>09:00</option> <!-- Aplicar "disabled" en la opcion para desabilitarla -->
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                    </select>
                </div>
            </div>
            <div class="row form-group justify-content-center mt-5">
                <button type="button" class="btn btn-outline-primary" id="button">Crear cita</button>
            </div>
        </div>
    </div>
    <script>
        function SelectMedicos() {
            $.get("../controller/selectMedicoController.php", function(data, status) {

                var myObj = JSON.parse(data);

                var txt = "";
                var i = 0;

                txt += "<select class=form-select id='medicos'>";

                for (; myObj[i];) {
                    txt += "<option value=" + myObj[i].idMedico + ">" + myObj[i].nombre + " " + myObj[i].apellidos + "</option>";
                    i++;
                }

                txt += "</select>";
                document.getElementById("demo1").innerHTML = txt;

            });

        }
    </script>



    <script>
        $("#button").click(function() {
            var medicos = document.getElementById('medicos').value;
            var fecha = document.getElementById('datepicker').value;
            var hora = document.getElementById('horas').value;
            //var paciente_id = document.getElementById('pacienteID').value;
            $.post("../controller/insertCitasController.php", {
                    idmedico: medicos, // [variables del controller]:[variables del view]
                    fechaCita: fecha,
                    horaCita: hora
                    //id_Paciente: paciente_id
                },
                function(data, status) {
                    console.log(status);
                    console.log(data);
                    alert(data)
                });
        });
    </script>

</body>

</html>