<?php
    include 'conexion_be.php';
    session_start();
    $Nombre__Proyecto=$_POST['Nombre_Proyecto'];
    $valor_Proyecto=$_POST['Valor_Proyecto'];
    $Descripcion_Proyecto=$_POST['Descripcion_Proyecto'];
    $UbicacionProyecto=$_POST['Ubicacion_Proyecto'];
    $EstadoProyecto=$_POST['EstadoProyecto'];
    $directorio = '../ImagenProyectos/';
    $subir_archivo = $directorio.basename($_FILES['imag']['name']);
    $idUser=$_SESSION['idUsuario'];
    
    
    if (move_uploaded_file($_FILES['imag']['tmp_name'], $subir_archivo)) {
        $query="INSERT INTO proyectos VALUES(default,'$idUser','$Nombre__Proyecto','$valor_Proyecto','$Descripcion_Proyecto','$UbicacionProyecto','$EstadoProyecto','$subir_archivo')";
        //verificar que el correo no se repita 
        $ejecutar = mysqli_query($conexion,$query);
            if($ejecutar){
            echo '<script>
                    alert("Registro Correcto");
                    window.location ="../MostrarProyectoAdmin.php";
                  </script>';
            
            }else{
                echo '<script>
                        alert("Registro Incorrecto");
                        window.location ="../PaginaCrearProyecto.html";
                      </script>';
            }
    } else {
       echo "La subida ha fallado";
    }
?>