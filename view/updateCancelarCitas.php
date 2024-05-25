<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Agendadas</title>
    <script src="../JS/JQuery.js"></script>
    <link href="../CSS/bootstrap5style.min.css" rel="stylesheet">
    <script src="../JS/bootstrap5.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body onload="ListCitas()">
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
                <a class="nav-link" href="../view/insertCitas.php">Agendar Cita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="../view/updateCancelarCitas.php">Citas Agendadas</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-3">
        <div class="container2 mt-4 p-5 bg-light text-white rounded">
            <div id="demo1"></div>
        </div>
    </div>

    <script>
        function ListCitas() {

            $.get("../controller/selectCitasController.php", function(data, status) {

                console.log(data);
                var myObj = JSON.parse(data);
                console.log(myObj);
                var txt = "";
                var i = 0;

                txt += "<table class = 'table table-condensed table-hover'>" +
                    "<thead class='table-dark'>" +
                    "<tr>" +
                    "<th>Fecha</th>" +
                    "<th>Hora</th>" +
                    "<th>Medico</th>" +
                    "<th>Cancelar Cita</th>" +
                    "</tr>" +
                    "</thead>" +
                    "<tbody>";

                for (; myObj[i];) {
                    txt +=
                        "<tr><td>" + myObj[i].fecha + "</td>" +
                        "<td>" + myObj[i].hora + "</td>" +
                        "<td>" + myObj[i].nombre + " " + myObj[i].apellidos + " </td>" +
                        "<td><button type='button' class='btn btn-outline-primary' onclick=cancelarCita(" + myObj[i].idCita + ")>Cancelar</button></div></td></tr>";
                    i++;
                }
                var fila;
                txt += "</tbody" + "</table>";
                document.getElementById("demo1").innerHTML = txt;

            });
        }
    </script>

    <script>
        function cancelarCita(idcita) {

            if (confirm("¿Desea cancelar la cita?")) {

                $.post("../controller/updateCancelarCitasController.php", {
                        idcita: idcita // [variables del controller]:[variables del view]
                    },
                    function(data, status) {
                        console.log(data)
                        if (data) {
                            alert("La cita fue cancelada con exito.");
                            location.reload();
                        } else {
                            alert("La cita no pudo ser cancelada");
                        }
                    });
            }

        }
    </script>
</body>

</html>