<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registrarse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../CSS/Altapaciente1.css">
  <link rel="icon" type="imagen/x-icon" href="../images/favicon.ico">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body class="background-image:../">
  <!--<nav class="navbar navbar-expand-sm bg-info navbar-dark bg-light">
    <a class="navbar-brand" href="#">
      <img src="../images/logos.png" alt=logos.png style="width: 35px">
    </a>
    <li class="nav-item">
      <a class="nav-link" href="../view/home-index.php">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="../view/altapacientes.php">Registrarse</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../view/acerca de nosotros.php">Acerca de nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../view/Contacto.php">Contactanos</a>
    </li>
  </nav>-->
  <div class="container mt-3 p-5 border rounded">
    <h2>REGISTRARSE</h2>
    <div class="col">
      <label for="text">Nombre Completo</label>
      <input type="text" class="form-control" id="nombrecom" placeholder="introduzca su nombre completo" name="nombre">
    </div>

    <div class="col ">
      <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="nombreus" placeholder="introduzca sus apellidos" name="apellidos">
    </div>
    <div class=" col email center">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Introduzca Su Correo Electronico" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="Password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Introduzca Su Contraseña" name="pwd">
    </div>
    <div class="mb-3 mt-3">
      <label for="Password">Confirmar Contraseña:</label>
      <input type="password" class="form-control" id="confpwd" placeholder="Confirme Su Contraseña" name="confirmpwd">
    </div>

    <div class="text-center">
      <button type="button" id="button" class="btn btn-primary">Registrar</button>
    </div>
  </div>
  <script>
    $("#button").click(function() {

      var nombrecompleto = document.getElementById('nombrecom').value;
      var apellidos = document.getElementById('nombreus').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('pwd').value;
      //var confirmpassword = document.getElementById('confpwd').value;

      $.post("../controller/altapaciente.php", {
          nombre: nombrecompleto,
          apellidos: apellidos,
          correo: email,
          pass: password,
          //confirmpass: confirmpassword
        },
        function(data, status) {
          $obj = JSON.parse(data);
          if ($obj == true) {
            alert("Registrado exitosamente")
            console.log(data);
            window.location.replace("../view/home-index.php");
          } else if ($obj == false) {
            alert("Ese correo ya está en uso")
            console.log(data);
          } else {
            alert("Registro exitoso");
            window.location.replace("../view/home-index.php");
          }

        });

    });
  </script>

</body>

</html>