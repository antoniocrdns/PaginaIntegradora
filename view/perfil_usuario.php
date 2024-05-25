<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfil Usuario</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body onload="listar()" style="background-color:aquamarine;">
<div class="container bg-white mt-3 ">
<div class="row margin-left">
<div class="col-sm-3 p-3 bg-secondary bg-gradient text-white">
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="d-grid gap-3">
    <button type="button" class="btn  btn-block" onclick="location.href='../view/home-index.php'">Inicio</button>
    <button type="button" class="btn  btn-block" onclick="location.href='../view/insertCitas.php'">Citas</button>
    <button type="button" class="btn  btn-block" onclick="location.href='../view/update_perfil.php'">Realizar cambios</button>
  </div>
        
</div>

    <div class="col-sm-8 p-3 mt-3 ">
        <h2 class="text-center font-weight-bold">PERFIL DEL PACIENTE</h2>
       
       <div class="row mt-5 "></div>
        <div class="row mt-5"></div>
        
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
                <div class="col mt-1 mb-2">
                    <div class="col-md-12"><label class="labels font-weight-bold" >Nombre</label>
                    <div class="border border-dark rounded" id="txt"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Apellidos</label>
                    <div class="border border-dark rounded" id="txt1"></div></div> 
                    <div class="col-md-12"><label class="labels font-weight-bold">Fecha de nacimiento</label>
                    <div class="border border-dark rounded" id="txt2"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Sexo</label>
                    <div class="border border-dark rounded" id="txt3"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Tipo de sangre</label>
                    <div class="border border-dark rounded" id="txt4"></div></div>
                </div>
                </div>
                <div class="col ml-5 mt-5">
                <div class="col-md-12"><label class="labels font-weight-bold">Peso</label>
                <div class="border border-dark rounded" id="txt5"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Estatura</label>
                    <div class="border border-dark rounded" id="txt6"></div></div>
                </div>
         </div>
         <div class="col-sm-1"></div>
         <div class="col-mt-5">
    
                    <div class="col mt-2">
                    <div class="col-md-12"><label class="labels font-weight-bold">Direccion</label>
                    <div class="border border-dark rounded" id="txt7"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Email</label>
                    <div class="border border-dark rounded" id="txt8"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Telefono de casa</label>
                    <div class="border border-dark rounded" id="txt9"></div></div>
                    <div class="col-md-12"><label class="labels font-weight-bold">Telefono movil</label>
                    <div class="border border-dark rounded" id="txt10"></div></div>
                   
                    
                </div>
                <div class="col mt-5 mb-2 ">
                    <div class="col-md-12"><label class="text">Enfermedades</label>
                    <div class="border border-dark rounded" id="txt11"></div></div>
                    <div class="col-md-12"><label class="text">Alergias</label>
                    <div class="border border-dark rounded" id="txt12"></div></div>
                    <div class="col-md-12"><label class="text">Cirugias Accidentales</label>
                    <div class="border border-dark rounded" id="txt13"></div></div>
                </div>
         </div>
    </div>       
            </div>
         </div>
    </div>
        
    <script>

    function listar(){

        $.get("../controller/listar.php", function (data, status){
            
            console.log(data);
            var myObj = JSON.parse(data);
            console.log(myObj);
            var txtnombre ="";
            var txtapellidos = "";
            var txtfecha ="";
            var txtsexo ="";
            var txttipo ="";
            var txtpeso ="";
            var txtesta ="";
            var txtdire ="";
            var txtemail ="";
            var txtTC ="";
            var txtTM ="";
            var txtEn ="";
            var txtAl ="";
            var txtCA ="";

            var i = 0;
            
            txtnombre +="<div>" + myObj[i].nombre + "</div>"
                   document.getElementById("txt").innerHTML = txtnombre;
               
            txtapellidos+="<div>" + myObj[i].apellidos + "</div>" 
                     document.getElementById("txt1").innerHTML = txtapellidos;

                
             txtfecha+="<div>" + myObj[i].fechaNacimiento + "</div>" 
                    document.getElementById("txt2").innerHTML = txtfecha;
              
            txtsexo +="<div>" + myObj[i].sexo + "</div>" 
                    document.getElementById("txt3").innerHTML = txtsexo;

            txttipo += "<div>" + myObj[i].tipoDeSangre + "</div>"  
                    document.getElementById("txt4").innerHTML = txttipo;
               
            txtpeso += "<div>" + myObj[i].peso + "</div>"  
                    document.getElementById("txt5").innerHTML = txtpeso;

            txtesta +="<div>" + myObj[i].estatura + "</div>" 
                     document.getElementById("txt6").innerHTML = txtesta;

            txtdire += "<div>" + myObj[i].direccion + "</div>" 
                      document.getElementById("txt7").innerHTML = txtdire;

            txtemail += "<div>" + myObj[i].email + "</div>"
                     document.getElementById("txt8").innerHTML = txtemail;
               
            txtTC += "<div>" + myObj[i].telefonoCasa + "</div>"
                    document.getElementById("txt9").innerHTML = txtTC;

            txtTM += "<div>" + myObj[i].telefonoMovil + "</div>"
                     document.getElementById("txt10").innerHTML = txtTM;
            
            txtEn += "<div>" + myObj[i].enfermedades + "</div>"
                     document.getElementById("txt11").innerHTML = txtEn;
            
            txtAl += "<div>" + myObj[i].alergias + "</div>"
                     document.getElementById("txt12").innerHTML = txtAl;

            txtCA += "<div>" + myObj[i].cirugias_accidentes + "</div>"
                     document.getElementById("txt13").innerHTML = txtCA;
            
            

        });
              
    }

</script>


</div>
</div>
</div>
</div>

</body>
</html>