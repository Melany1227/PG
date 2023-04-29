<?php

	NuevaUniversidad($_POST['id_universidad'], $_POST['nombre'], $_POST['descripcion']);

	function NuevaUniversidad($id_universidad, $nombre, $descripcion)
	{
		include "main/Usuarios/conexion.php";;
		$sentencia="INSERT INTO universidades (id_universidad, nombre, descripcion) 
		VALUES ('".$id_universidad."','".$nombre."','".$descripcion."')";
		$conexion->query($sentencia) or die ("Error al crear la Universidad: ".mysqli_error($conexion));



		echo '<script>';
			echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="listaruniversidades.php";';
		echo '</script>';

	}
?>
