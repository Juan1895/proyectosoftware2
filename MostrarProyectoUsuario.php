<?php 
  session_start();
  
  unset($_SESSION['consulta']);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>SOLBAR</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
  <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>
  
</head>
<body> 
  <nav  id="Menu" class="navbar navbar-dark bg-dark">
            <a  id="Texto Soldar" class="navbar-brand" href="#">CONSTRUCTORA SOLBAR</a>
          <form  id="MenuI" class="form-inline">
              <a href="./buzonReclamos.html"><button  class="btn btn-outline-primary" id="btn-Sugerencias" type="button">Sugerencias</button></a>
              <a href="./MostrarProyectoUsuario.php"><button  class="btn btn-outline-primary" id="btn-Proyectos" type="button">Ver Proyectos</button></a>
              <a href="./PaginaIniciarSesion.html"><button  class="btn btn-outline-primary" id="btn-Registrarse" type="button">Cerrar Seccion</button></a>
          </form>
  </nav> <br><br><br><br>
  <div class="container">
      <div id="buscador"></div>
		  <div id="tabla"></div>
	</div>


<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idproyecto" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreP" class="form-control input-sm">
        	<label>Valor</label>
        	<input type="text" name="" id="valorP" class="form-control input-sm">
        	<label>Descripcion</label>
        	<input type="text" name="" id="descripcionP" class="form-control input-sm">
        	<label>Ubicacion</label>
        	<input type="text" name="" id="ubicacionP" class="form-control input-sm">
            <label>Estado</label>
        	<input type="text" name="" id="estadoP" class="form-control input-sm">
  </div>
</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tablaUsuario.php');
    $('#buscador').load('componentes/buscadorUsuario.php');
	});
</script>