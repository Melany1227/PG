<?php
    Modificaralumnos($_POST['codigo'], $_POST['nombreseccion'], $_POST['descripcion']);

    function Modificaralumnos($idseccion, $nombreseccion,$descripcion)
    {
        include "main/Usuarios/conexion.php";

        $sentencia="UPDATE secciones SET nombreseccion='".$nombreseccion."', descripcion='".$descripcion."' WHERE idseccion='".$idseccion."' ";
        
        $conexion->query($sentencia) or die ("Error al actualizar datos" .mysqli_error($conexion));
    }

    echo '<script>';
    echo 'alert("Datos actualizados con éxito");';
    echo 'windows.location.href="listarsecciones.php";';
    echo '</script>';
    
?>