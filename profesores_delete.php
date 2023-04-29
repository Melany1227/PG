<?php
include "sesion.php";

EliminarProfesor($_GET['usr']);

function EliminarProfesor($correo)
{
	include 'main/Usuarios/conexion.php';

	$sentencia="DELETE FROM profesores WHERE correo='".$correo."' ";
	$conexion->query($sentencia) or die ("Error al elimnar el jefe de la seccion: ".mysqli_error());
}
if($_SESSION["tipo_usuario"] == "Administrador"){
	echo '<script>';
	echo 'alert("Jefe de seccion eliminado");';
	echo 'window.location.href="listarprofesores.php";';
	echo '</script>';
}

else{
	echo '<script language = javascript>
	alert("Acceso no permitido..!")
	self.location = "../../index.php"
	</script>';
}
?>
