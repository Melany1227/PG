<?php
session_start();
  //$_SESSION['usuario'];
include "main/Usuarios/conexion.php";
if($_SESSION["tipo_usuario"] == "Administrador"){
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Listar Alumnos</title>
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
<!--<div class="todo">
  
  <!--<div id="cabecera">
    <img src="images1/swirl.png" width="1188" id="img1"><!--NUEVO1-->
    <!-- </div>-->

    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <span> <h1>Nueva Universidad:</h1> </span>
       <br>

       <form action="universidad_new2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;"><!--NUEVO1-->



        <div class="row">
          <div class="col-xs-3">
            <!--<label>id_Universidad:</label>-->
            <input type="hidden" name="id_universidad" id="correo" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" >
          </div>
          <div class="col-xs-3">
            <label>Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" >
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
    </div>

  </div>
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
