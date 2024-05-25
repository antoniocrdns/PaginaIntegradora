<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfil Paciente || Cambios</title>
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
<div class="container mt-5 " style="background-color:mintcream;">
<div class="row">
<div class="col-sm-2  bg-secondary bg-gradient text-white">
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="d-grid gap-3">
    <button type="button" id="button" class="btn  btn-block">Guardar</button>
   
    <button type="button" class="btn  btn-block" onclick="location.href='../view/perfil_usuario.php'">Volver al perfil</button>
  </div>
        
</div>

    <div class="col-sm-8 p-3 mt-5 ml-5">
        <h2 class="text-center">Actualizar Perfil</h2>
       <div class="row mt-5 "></div>
        <div class="row mt-5"></div>
        
                  <div class="col mt-5">
   
                    <div class="col-md-11"><label class="labels">Nombre</label>
                    <div class="border rounded" id="txt"></div>
                     <input type="text" class="form-control" id="newnombre" ></div>

                    <div class="col-md-11"><label class="labels">Apellidos</label>
                    <div class="border  rounded" id="txt1"></div>
                        <input type="text" class="form-control" id="newapellidos"></div> 

                    <div class="col-md-11"><label class="labels">Fecha de nacimiento</label>
                    <div class="border  rounded" id="txt2"></div>
                    

                    <div class="col-md-12"><label class="labels">Sexo</label>
                    <div class="border  rounded" id="txt3"></div>
                     <input type="text" class="form-control"  id="newsexo"></div>

                    <div class="col-md-12"><label class="labels">Tipo de sangre</label>
                    <div class="border  rounded" id="txt4"></div>
                    <input type="text" class="form-control"  id="newtipo"></div>

                       

                   
                    <div class="col-md-12"><label class="labels">Peso</label>
                    <div class="border  rounded" id="txt5"></div>
                     <input type="text" class="form-control"  id="newpeso"></div>

                    <div class="col-md-12"><label class="labels">Estatura</label>
                    <div class="border  rounded" id="txt6"></div>
                      <input type="text" class="form-control"  id="newestatura"></div>
         
               
                <div class="row">
                    <div class="col mt-2">

                    <div class="col-md-12"><label class="labels">Direccion</label>
                    <div class="border  rounded" id="txt7"></div>
                    <input type="text" class="form-control" id="newdireccion"></div>

                    <div class="col-md-12"><label class="labels">Email</label>
                    <div class="border rounded" id="txt8"></div>
                    <input type="text" class="form-control"  id="newemail"></div>

                    <div class="col-md-12"><label class="labels">Telefono de casa</label>
                    <div class="border  rounded" id="txt9"></div>
                    <input type="text" class="form-control"  id="newtelefonoCasa"></div>

                    <div class="col-md-12"><label class="labels">Telefono movil</label>
                    <div class="border  rounded" id="txt10"></div>
                    <input type="text" class="form-control"  id="newtelefonoMovil"></div>
                    
                </div>

                <div class="col mt-5 mb-2 ">
                    <div class="col-md-12"><label class="labels">Enfermedades</label>
                    <div class="border  rounded" id="txt11"></div>
                    <input type="text" class="form-control" id=""></div>

                    <div class="col-md-12"><label class="labels">Alergias</label>
                    <div class="border  rounded" id="txt12"></div>
                    <input type="text" class="form-control" id=""></div>

                    <div class="col-md-12"><label class="labels">Cirugias Accidentales</label>
                    <div class="border  rounded" id="txt13"></div>
                    <input type="text" class="form-control" id=""></div>
                    
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
      
};

$(document).ready(function() {
            $("#button").click(function() {
                var newnombre = $("#newnombre").val();
                var newapellidos = $("#newapellidos").val();
                var newsexo = $("#newsexo").val();
                var newpeso = $("#newpeso").val();
                var newestatura = $("#newestatura").val();
                var newdireccion = $("#newdireccion").val();
                var newemail = $("#newemail").val();
                var newtelefonoCasa = $("#newtelefonoCasa").val();
                var newtelefonoMovil = $("#newtelefonoMovil").val();
            
                if (newnombre == "" || newapellidos == "" || newsexo == "" ||  newpeso == ""
                || newestatura == "" || newdireccion == "" || newemail == "" || newtelefonoCasa == "" || newtelefonoMovil == "") {
                    alert('favor de llenar todos los espacios');
                } else {
                    $.post("../controller/update.php", {
                            nombre: newnombre,
                           apellidos: newapellidos,
                           sexo: newsexo,
                           peso: newpeso,
                           estatura: newestatura,
                           direccion: newdireccion,
                           email: newemail,
                           telefonoCasa: newtelefonoCasa,
                           telefonoMovil : newtelefonoMovil
                        },
                        function(data, status) {
                            console.log(data);
                            $obj = JSON.parse(data);
                           // console.log(obj)
                            if ($obj == false) {
                                alert("No hay cambios que realizar o no se encontro el paciente");
                            } else if ($obj == true) {
                                alert("Datos cambiados");
                                location.reload();
                            } else {
                                alert("Error registrado");
                            }
                        });
                }
            });
        });
</script>
</div>
</div>
</div>
</div>

</body>