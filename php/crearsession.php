<?php 
	session_start();

	$idproyecto=$_POST['valor'];

	$_SESSION['consulta']=$idproyecto;

	echo $idproyecto;

 ?>