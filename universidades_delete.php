<?php
  include "sesion.php";//NUEVO2
  

  EliminarUniversidades($_GET['usr']);
  

  function EliminarUniversidades($id_universidad)
  {
    include 'main/Usuarios/conexion.php';
    
    $sentencia="DELETE FROM universidades WHERE id_universidad='".$id_universidad."' ";
    $conexion->query($sentencia) or die ("Error al eliminar la Universidad: ".mysqli_error());
  }
if($_SESSION["tipo_usuario"] == "Administrador"){//NUEVO 2
  echo '<script>';
    echo 'alert("Universidad eliminada!!");';
    echo 'window.location.href="listaruniversidades.php";';
  echo '</script>';
    
}
else{
  echo '<script language = javascript>
  alert("Acceso no permitido....!")
  self.location = "../../index.php"
  </script>';
}
?>
