
<?php 
	include "conexion_be.php";
	$id=$_POST['id'];
	$sql="DELETE from proyectos where id_proyecto='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>