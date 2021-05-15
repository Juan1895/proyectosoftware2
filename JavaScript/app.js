
function RegistroUsuario (nombre,telefonoo,Ciudadd,Correo,Contraseñaa,validarContraseña){
        var params = "&Nombre_Completo="+nombre+"&Telefono="+telefonoo+"&Ciudad="+Ciudadd+"&Correo="+Correo+"&Contraseña="+Contraseñaa+"&Validar_Contraseña="+validarContraseña;
        var  xhr = new XMLHttpRequest();
        xhr.open("GET","php/registrar_Usuario.php?"+params,true);
        xhr.send();
        
        xhr.onreadystatechange = function(){
          if(xhr.readyState == 4 && xhr.status == 200){
            alert(xhr.responseText);
              if(xhr.responseText == "Registro Correcto"){
                window.location.assign("PaginaIniciarSesion.html");
              }else{
                window.location.assign("PaginaIniciarSesion.html");
                alert(xhr.responseText);
              } 
          }
        };
}
function RegistroUser(){
    var NombreRegistro=document.getElementById("Nombre_Completo").value;
    var TelefonoRegistro=document.getElementById("Telefono").value;
    var CiudadRegistro=document.getElementById("Ciudad").value;
    var CorreoElectronicoRegistro=document.getElementById("Correo").value;
    var ContraseñaRegistro=document.getElementById("Contraseña").value;
    var ValidarContraseñaRegistro=document.getElementById("Validar_Contraseña").value;
    var TipoUser=0;
  if(NombreRegistro=="" || TelefonoRegistro=="" || CiudadRegistro=="" || CorreoElectronicoRegistro=="" || ContraseñaRegistro=="" || ValidarContraseñaRegistro==""){
      alert("Valide los Campos No se aceptan Campos Vacios");
  }else{
      if(ContraseñaRegistro==ValidarContraseñaRegistro){
        
        RegistroUsuario(NombreRegistro ,TelefonoRegistro ,CiudadRegistro ,CorreoElectronicoRegistro ,ContraseñaRegistro ,ValidarContraseñaRegistro);
      }else{
        alert("Valide los Campos las Contraseñas No Coinciden");
      }
  }
}
const loginUsuario = (username, password)=>{
    var xhr = new XMLHttpRequest();
        var params = "&CorreoInicio="+username+"&passwordInicio="+password;
        xhr.open("GET","php/login_usuario_be.php?"+params,true);
        xhr.send();
        xhr.onreadystatechange = function(){
          if(xhr.readyState == 4 && xhr.status == 200){
              if(xhr.responseText == "Bienvenido Administrador"){
                window.location.assign("MostrarProyectoAdmin.php");
              }else{
                if(xhr.responseText == "Bienvenido Usuario"){
                  window.location.assign("MostrarProyectoUsuario.php");
                 
              }else{
                alert(xhr.responseText);
              }
            
          }
        }
}
}

function Login(){
    var CorreoLogin=document.getElementById("CorreoInicio").value;
    var ContraseñaLogin=document.getElementById("passwordInicio").value;
    if(CorreoLogin==""||ContraseñaLogin==""){
        alert("Valide los Campos No se aceptan Campos Vacios");
    }else{
        loginUsuario(CorreoLogin, ContraseñaLogin);
    }
}
function RegistroAdministrador(nombre,telefonoo,Ciudadd,Correo,Contraseñaa,validarContraseña){
    var params = "&Nombre_Completo="+nombre+"&Telefono="+telefonoo+"&Ciudad="+Ciudadd+"&Correo="+Correo+"&Contraseña="+Contraseñaa+"&Validar_Contraseña="+validarContraseña;
    var  xhr = new XMLHttpRequest();
    xhr.open("GET","php/registrar_Administrador.php?"+params,true);
    xhr.send();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
        alert(xhr.responseText);
          if(xhr.responseText == "Registro Correcto"){
            window.location.assign("RegistrarAdministrador.html");
          }else{
            window.location.assign("RegistrarAdministrador.html");
            alert(xhr.responseText);
          } 
      }
    };
}
function RegistroAdmin(){
    var NombreRegistro=document.getElementById("Nombre_Completo").value;
    var TelefonoRegistro=document.getElementById("Telefono").value;
    var CiudadRegistro=document.getElementById("Ciudad").value;
    var CorreoElectronicoRegistro=document.getElementById("Correo").value;
    var ContraseñaRegistro=document.getElementById("Contraseña").value;
    var ValidarContraseñaRegistro=document.getElementById("Validar_Contraseña").value;
    var TipoUser=0;
    if(NombreRegistro=="" || TelefonoRegistro=="" || CiudadRegistro=="" || CorreoElectronicoRegistro=="" || ContraseñaRegistro=="" || ValidarContraseñaRegistro==""){
      alert("Valide los Campos No se aceptan Campos Vacios");
    }else{
      if(ContraseñaRegistro==ValidarContraseñaRegistro){
        
        RegistroAdministrador(NombreRegistro ,TelefonoRegistro ,CiudadRegistro ,CorreoElectronicoRegistro ,ContraseñaRegistro ,ValidarContraseñaRegistro);
      }else{
        alert("Valide los Campos las Contraseñas No Coinciden");
      }
  }
}