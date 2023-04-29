<?php
    NuevaSeccion($_POST['correo'], $_POST['nombre'], $_POST['seccion']);

    function NuevaSeccion($correo, $nombre, $seccion)
    { 
      include 'main/Usuarios/conexion.php';
      $sentencia="INSERT INTO profesores (correo, nombreprofesor, seccion)
      VALUES ('".$correo."', '".$nombre. "', '".$seccion."' )";
      $conexion->query($sentencia) or die ("Error al crear el jefe de seccion: ".mysqli_error($conexion));
  
      echo '<script>';
        echo'alert("Jefe de seccion creado correctamente");';
        echo 'window.location.href="listarprofesores.php";';
      echo'</script>';      
    }
?>