<?php

	ModificarUniversidades($_POST['id_universidad'], $_POST['nombre'], $_POST['descripcion']);

	function ModificarUniversidades($id_universidad, $nombre, $descripcion)
	{
		include "main/Usuarios/conexion.php";

		$sentecia="UPDATE universidades SET nombre='".$nombre."', descripcion='".$descripcion."' WHERE id_universidad='".$id_universidad."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de la universidad: ".mysqli_error($conexion));

	}

	echo '<script>';
	echo 'alert("Datos actualizados con exito!!");';
	echo 'window.location.href="listaruniversidades.php";';
	echo '</script>';

?>
