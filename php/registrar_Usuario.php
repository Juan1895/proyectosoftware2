<?php
    include 'conexion_be.php';
        

        $nombre_completo=$_GET['Nombre_Completo'];
        $Telefono=$_GET['Telefono'];
        $Ciudad=$_GET['Ciudad'];
        $Correo=$_GET['Correo'];
        $Contraseña=$_GET['Contraseña'];
        $Validar_Contraseña=$_GET['Validar_Contraseña'];
        
        $query="INSERT INTO usuarios VALUES(default,'$nombre_completo','$Contraseña','$Validar_Contraseña','$Correo','$Telefono','$Ciudad',0)";
        //verificar que el correo no se repita 
        $verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo='$Correo'");

        if(mysqli_num_rows($verificar_correo) > 0){
            echo "El Correo Esta Repetido";
        }else{
            $ejecutar = mysqli_query($conexion,$query);
            if($ejecutar){
            echo "Registro Correcto";
            }else{
                echo "Login Incorrecto";
            }
    }
?>