<?php
require('conexion1.php');

$id_contacto = $_POST['id_contacto'];

$nombre = $_POST['nombre'];

$correo = $_POST['correo']; 

$comentario = $_POST['comentario'];                        


$sql = "INSERT INTO contacto (id_contacto, nombre,correo,comentario) 

VALUES ('".$id_contacto."','".$nombre."','".$correo."','".$comentario."')";
    //echo $sql;
if($conexion->query($sql)){

   echo '<script language = javascript>

   alert("Registro grabado Correctamente")

   self.location = "index.php"

   </script>';       

}
?>
