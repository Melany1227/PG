<?php

  $tipousuario = 2;

  NuevoUsuario($_POST['correo'], $_POST['nombre'], $_POST['apellido'], $tipousuario, $_POST['clave']);


  function NuevoUsuario($correo, $nombre, $apellido, $tipousuario, $clave)
  { 
    include 'conexion1.php"';
    
    $uppercase = preg_match('@[A-Z]@', $clave);
    $lowercase = preg_match('@[a-z]@', $clave);
    $number    = preg_match('@[0-9]@', $clave);
    if(!$uppercase || !$lowercase || !$number || strlen($clave) < 8) {
      echo '<script>';
      echo'alert("La contraseña debe ser de mínino 8 carácteres, mínimo un número y mínimo una mayúscula");';
      echo 'window.location.href="user_newcliente1.php";';
      echo'</script>';      
      
    }else{
      $sentencia="INSERT INTO usuarios (correo, nombre, apellido, codigo, clave) VALUES ('".$correo."', '".$nombre. "','".$apellido. "',".$tipousuario.",'".$clave."' )";
      echo '<script>';
      echo'alert("Su usuario ha sido creado");';
      echo 'window.location.href="index.php";';
       echo'</script>';      
  }
  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));
  }
?>