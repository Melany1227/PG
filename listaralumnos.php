<?php
  session_start();
  //$_SESSION['usuario'];

  include "main/Usuarios/conexion.php";
  if($_SESSION["tipo_usuario"] == "Administrador"){ //NUEVO2
  ?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Listar Cursos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">
<title>Cursos</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="todo">
  
  <!--<div id="cabecera">
    <img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
    <!--<?php //include'navbar.php'; ?>--> <!--NUEVO1-->

    <table  border="3" style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;" >
      <thead>
        <!--<th>Id</th>--> 
        <th>Correo</th>
        <th>Nombre Alumno</th>
        <th>Apellido Alumno</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Sección</th>
        
        <!--<th>Tipo de Usuario</th>
        <th>Clave</th>-->
        <th> <a href="alumno_new1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        <th> <a href="cerrar.php"> <button type="button" class="btn btn-info">Salir</button> </a> </th> <!--NUEVO 1-->
        <th> <a href="catalogos.php"> <button type="button" class="btn btn-info">Atras</button> </a> </th> <!--NUEVO 1-->
      </thead>

      <?php
        $query="SELECT * FROM alumnos";
        $resultado = $conexion->query($query) or die ("Error al consultar secciones: ".mysqli_error($con));//Función query ejecuta la consulta
        while ($filas=$resultado->fetch_assoc())//Retorna un array asociativo correspondiente a la fila obtenida o NULL si es que no hay más filas.
        {

      ?>
        <tr>
           <td> <?php echo $filas['correo']?>  </td>
           <td> <?php echo $filas['nombre']?>  </td>
           <td> <?php echo $filas['apellido']?> </td>
            <td> <?php echo $filas['telefono']?> </td>
            <td> <?php echo $filas['direccion']?> </td>
            <td> <?php echo $filas['seccion']?> </td>
           
           
           <td><a href='modificaralumnos.php?usr=<?php echo $filas['correo'] ?> '> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>
           <td><a href='alumnos_delete.php?usr=<?php echo $filas['correo'] ?> '> <button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
        </tr>
      <?php
        }
      ?>

    </table>
  <!--</div>
  
  <div id="footer">
      <img src="images/swirl2.png" id="img2">
    </div>

</div>-->


</body>
</html>
<?php //NUEVO 2
}
else{
  echo '<script language = javascript>
  alert("Acceso no permitido....!")
  self.location = "../../index.php"
  </script>';
}
?>












