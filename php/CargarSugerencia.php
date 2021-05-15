<?php 
include 'conexion_be.php';
    session_start();
    $sugerencias=$_POST['sugerencia'];
    $idUser=$_SESSION['idUsuario'];


        $query="INSERT INTO buzon VALUES(default,'$idUser','$sugerencias')";
        
        $ejecutar = mysqli_query($conexion,$query);
            if($ejecutar){
            echo '<script>
                    alert("Registro Correcto");
                    window.location ="../MostrarProyectoUsuario.php";
                  </script>';
            
            }else{
                echo '<script>
                        alert("Registro Incorrecto");
                        window.location ="../buzonReclamos.html";
                      </script>';
            }
    
?>