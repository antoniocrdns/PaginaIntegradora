<!DOCTYPE html>
<html lang="en">

<head>
  <title>List || Busqueda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>


<div>
  <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../images/logo.png" alt=logos.png style="width:40px;" class="rounded-pill">
      </a>
    </div>
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="../view/citas.php">Citas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../view/listclinica.php">Citas Canceladas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="../view/listfiltro.php">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../view/enfermedades.php">Pacientes Enfermedades</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="intro">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9 col-xl-12">

            <h2>Listar pacientes por nombre y/o sexo</h2>
            <p>Introduzca el valor que desea buscar</p>
            <label for="site-search">Sexo:</label>
            <input type="search" id="sex" name="sexo" placeholder=""><br>



            <div id="demo"></div>
          </div>
        </div>

      </div>
    </div>
</div>
</section><br>




<script>
  $("#sex").keyup(function() {

    var Sexo = document.getElementById('sex').value;



    $.post("../controller/list.php", {
        Sex: Sexo

      },
      function(data, status) {
        console.log(data);
        var myObj = JSON.parse(data);
        var txt = "";
        var i = 0;
        txt += "<table class= 'table'>" +
          "<th>Nombre </th>" +
          "<th>Sexo</th>" +
          "<th>Email</th>" +
          "<th>Telefono Movil</th>" +
          "</tr>" +
          "</thead>" +
          "<tbody>";

        for (; myObj[i];) {

          txt += "<tr><td>" + myObj[i].nombre + "</td>" + //Nombre de las columnas en la base de datos
            "<td>" + myObj[i].sexo + "</td>" +
            "<td>" + myObj[i].email + "</td>" +
            "<td>" + myObj[i].telefonoMovil + "</td></tr>";
          i++;
        }
        txt += " </tbody>" +
          "</table>";
        document.getElementById("demo").innerHTML = txt;
      });
  });
</script>

</body>

</html>