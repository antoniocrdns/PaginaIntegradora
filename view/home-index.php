<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index || Lovelace</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body style="height:1500px ">
    <nav class="navbar navbar-expand-sm bg-light bg-gradient navbar-dark fixed-top nav-link" href="#section0">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" alt="" style="width:40px;" class="rounded-pill" id="section0">
            </a>
            <ul class="nav ">
                <li class="nav-item mr-5">
                    <a class="nav-link text-dark" href="#section1">Inicio</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link text-dark" href="#section2">Acerca de nosotros</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link text-dark" href="#section3">Contactanos</a>
                </li>

                <button class="btn btn-outline-secondary me-2 mr-1 ml-5 " type="button" onclick="location.href='../view/login.php'">Inicio de sesion</button>
                <button class="btn btn-outline-secondary me-2" type="button" onclick="location.href='../view/altapacientes.php'">Registrar</button>
        </div>
    </nav>

    <div class="container-fluid bg-info" style="margin-top:40px">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/dientes1.jpg" class="d-block w-100" style="width:100% " height=":50%">
                </div>
                <div class="carousel-item">
                    <img src="../images/dientes2.jpg" class="d-block w-100" style="width:100% " height=":50%">
                </div>
                <div class="carousel-item">
                    <img src="../images/dientes3.jpg" class="d-block w-100" style="width:100% " height=":50%">
                </div>
            </div>
        </div>
    </div>

    <div id="section1" class="container-fluid bg-info text-white text-center" style="padding:100px 20px;">
        <h1>Ven con nosotros</h1>
        <p><br>Algunas veces una visita al dentista puede resultar ser una pesadilla, pero en LOVELACE encontrarar lo mejor,
            contamos con un equipo especializado que hara que tus visitas sean unicas.
            Contamos con equipo de alta tecnologia y confianza para brindarte el mejor servicio y sobre todo de CALIDAD; Contamos
            con reconocimientos y trabajos de la mejor calidad internacional</br>
        <div class="text-center">
            <img src="../images/splash_bg.jpg" class="rounded" style="width:25% " height=":70%">
        </div>
        Asi que ya lo sabes, si quieres calidad... LOVELACE debes visitar!!!!</p>


    </div>

    <div id="section2" class="container-fluid bg-info text-center" style="padding:100px 20px;">
        <h1>Nosotros somos</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <img src="../images/medic.jpg" class="rounded float-start" style="width:26.5% " height=":70%">
        <img src="../images/recepcion-clinica-dental.jpg" class="rounded float-end" style="width:30% " height=":70%">
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

    <div id="section3" class="container-fluid bg-info text-white text-center" style="padding:100px 20px;">
        <h1>Contactanos</h1>
        <img src="../images/telefono.png" class="rounded float-end" style="width:7% " height=":20%">
        <p class="text-white">
            <br>Cel:653 123 1258</br>
            <br>Tel: 53 126 274 57</br>
            <br>example@gmail.com</br>
        </p>

    </div>

    <nav class="navbar navbar-expand-sm bg-light bg-gradient navbar-dark fixed-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
        </div>
    </nav>

</body>

</html>