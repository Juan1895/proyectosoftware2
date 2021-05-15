<?php
    include 'conexion_be.php';
    session_start();

    $CorreoInicioSeccion=$_GET['CorreoInicio'];
    $PasswordInicioSeccion=$_GET['passwordInicio'];


    $validar_login=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo='$CorreoInicioSeccion' AND Password='$PasswordInicioSeccion'") ;
    $validar_tipoUsuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE TipoUsuario=1 && Correo='$CorreoInicioSeccion'");
    $ID_Usuario=mysqli_query($conexion,"SELECT  idUsuario  FROM  usuarios WHERE Correo='$CorreoInicioSeccion'");

    $arrayDatos = array();
    while($row = mysqli_fetch_array($ID_Usuario)){
      $arrayDatos[] = $row;
    }
    

    if(mysqli_num_rows($validar_login) > 0){     
        if(mysqli_num_rows($validar_tipoUsuario) > 0){

            echo "Bienvenido Administrador";  
            $_SESSION['idUsuario']=$arrayDatos[0]['idUsuario'];
        }else{
            echo "Bienvenido Usuario";
            $_SESSION['idUsuario']=$arrayDatos[0]['idUsuario'];
        }
    }else{
        echo "Error en ingreso de datos.";
    }

    /*
    echo 
        '<script>
        alert("Informacion Existosa");
        window.location ="../PaginaPrincipal.html";
        </script>';
    */    
?>