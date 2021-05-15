<?php 
	include "conexion_be.php";
	
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$v=$_POST['valor'];
	$d=$_POST['descripcion'];
	$u=$_POST['ubicacion'];
	$e=$_POST['estado'];
	

	$sql="UPDATE proyectos set nombre_proyecto='$n',
								valor_proyecto='$v',
								descripcion_proyecto='$d',
								ubicacion_proyecto='$u',
								estado_proyecto='$e'			
				where id_proyecto='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>