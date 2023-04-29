<?php

    NuevaSeccion($_POST['codigo'], $_POST['nombre'], $_POST['descripcion']);

    function NuevaSeccion($codigo, $nombre, $descripcion){
        include "main/Usuarios/conexion.php";
        $sentencia="INSERT INTO secciones (idseccion, nombreseccion, descripcion) VALUES ('".$codigo."','".$nombre."','".$descripcion."')";
        $conexion->query($sentencia) or die ("Error al crear seccion:" .mysqli_error($conexion));

        echo '<script>';
        echo 'alert("Seccion creada correctamente.");';
        echo 'window.location.href="listarsecciones.php";';
        echo '</script>';

    }
    ?>
