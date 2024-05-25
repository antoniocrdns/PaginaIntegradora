<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body>
    <div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
        <div class="row pt-5"></div>
        <div class="row pt-5"></div>
        <div class="row pt-2"></div>
        <div class="container rounded mt-2 pt-5 pb-4 pr-5 pl-4 shadow-lg p-3 mb-5 bg-body" style="width: 350px; margin-top:100px; background:gray;">
            <h2 class="text-center">INICIO DE SESION</h2>
            <h5 class="text-center">Introduzca su correo y password para iniciar sesion</h5>
            <div class="form-group">
                <div id="error"></div>
                <label for="usr">Email:</label>
                <input type="email" class="form-control" id="em" name="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <button type="button" id="submit" class="btn btn-dark ">INICIAR</button>
        </div>

    </div>

    <script>
        /*JQUERY ENVIO DE DATOS SEGUROS*/
        $(document).ready(function() {
            $("#submit").click(function() {
                var email = $("#em").val();
                var password = $("#pwd").val();

                if (email == "" || password == "") {
                    $("#error").text("Campos vacios");
                    $("#error").css("color", "blue");
                } else {
                    $.post("../controller/controller_login.php", {
                            email: email,
                            password: password
                        },
                        function(data, status) {
                            console.log(data);
                            var obj = JSON.parse(data);
                            console.log(data);
                            if (status == true) {
                                window.location.replace("../view/perfil_usuario.php");
                            }
                            else if (status == false) {
                                $("#error").text("Error al iniciar sesion");
                                $("#error").css("color", "blue");
                            }
                            else{
                                window.location.replace("../view/perfil_usuario.php");
                            }
                        })
                }
            })
        })
    </script>
</body>

</html>