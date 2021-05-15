<?php 
	session_start();
	include "../php/conexion_be.php";

 ?>
<div class="row">
	<div class="col-sm-12">
	<h1 style="font-weight:bold;">Datos Del Proyecto SOLBAR</h1>
		<table class="table table-hover table-condensed table-bordered" style="background-color: White;">
		<caption>
			</button>
		</caption>
			<tr style="text-align: center; font-size: 150%; font-weight: bold; ">
				<td>Nombre</td>
				<td>Nombre Arquitecto</td>
				<td>Valor</td>
				<td>Descripcion</td>
				<td>Ubicacion</td>
				<td>Estado</td>
				<td>Planos</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id_proyecto,nombre_proyecto,(select nombre from usuarios where idUsuario=id_usuario),valor_proyecto,descripcion_proyecto,ubicacion_proyecto,estado_proyecto,imagen_proyecto 
						from proyectos where id_proyecto='$idp'";
					}else{
						$sql="SELECT id_proyecto,nombre_proyecto,(select nombre from usuarios where idUsuario=id_usuario),valor_proyecto,descripcion_proyecto,ubicacion_proyecto,estado_proyecto,imagen_proyecto 
						from proyectos";
					}
				}else{
					$sql="SELECT id_proyecto,nombre_proyecto,(select nombre from usuarios where idUsuario=id_usuario),valor_proyecto,descripcion_proyecto,ubicacion_proyecto,estado_proyecto,imagen_proyecto 
						from proyectos";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 
				
					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7];
			 ?>

			<tr style="text-align: center;  font-size: 150%; ">
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><center><img src="Proyecto%20Software/<?php echo $ver[7] ?>" width=100></center></td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>