<?php

ModificarProfesores($_POST['correo'], $_POST['nombre'], $_POST['seccion']);
function ModificarProfesores($correo,$nombre,$seccion)
{
	include "main/Usuarios/conexion.php";
	$sentencia="UPDATE profesores SET nombreprofesor='".$nombre."', seccion='".$seccion."' WHERE correo='".$correo."' ";
	$conexion->query($sentencia) or die ("Error al actualizar los datos del jefe de la sección".mysqli_error($conexion));
}

echo '<script>';
echo 'alert ("Jefe de seccion modificado correctamente");';
echo 'window.location.href="listarprofesores.php";';
echo '</script>';

?>
