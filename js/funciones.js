
function actualizaDatos(){

	id=$('#idproyecto').val();
	nombre=$('#nombreP').val();
	valor=$('#valorP').val();
	descripcion=$('#descripcionP').val();
	ubicacion=$('#ubicacionP').val();
	estado=$('#estadoP').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&valor=" + valor +
			"&descripcion=" + descripcion +
			"&ubicacion=" + ubicacion +
			"&estado=" + estado ;


	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
function  agregaform(datos){
	d=datos.split('||');
	$('#idproyecto').val(d[0]);
	$('#nombreP').val(d[1]);
	$('#valorP').val(d[2]);
	$('#descripcionP').val(d[3]);
	$('#ubicacionP').val(d[4]);
	$('#estadoP').val(d[5]);
	
	
}
function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){
	cadena="id=" + id;
		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}