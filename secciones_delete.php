<?php
    include "sesion.php";

    EliminarUsuario($_GET['usr']);

    function EliminarUsuario($idseccion)
    {
        include 'main/Usuarios/conexion.php';

        $sentencia="DELETE FROM secciones WHERE idseccion='".$idseccion."' ";
        $conexion->query($sentencia) or die ("Error al eliminar alumno: " .mysqli_error());
    }
    if($_SESSION["tipo_usuario"] == "Administrador")
    {
        echo '<script>';
            echo 'alert("Sección eliminada correctamente");';
            echo 'window.location.href="listarsecciones.php";';
        echo '</script>';

    }
    else{
        echo '<script language = javascript>
        alert("Acceso no permitido")
        self.location = "../../index.php"
        </script>';
    }
    ?>

