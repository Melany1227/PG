
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" placeholder="viewport">

    <title>Regístrate</title>
    <meta content="" placeholder="description">
    <meta content="" placeholder="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/user-new1-style.css" rel="stylesheet">

    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Registro -->
  <section>
    <div class="color col-12"></div>
    <div class="color col-12"></div>
    <div class="color col-12"></div>
    <div class="color col-12"></div>
    <div class="box col-12">
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="square" style="--i: 5"></div>
        <div class="container col-12">
        <div class="form">
          <h2>Formulario</h2>
          <form action="user_newcliente2.php" method="POST">

      <!--Formulario que me lleva a user_newcliente2.php-->
            <div class="inputBox">
              <input type="email" name="correo" placeholder="Correo electrónico" required />
            </div>

            <div class="inputBox">
              <input type="text" name="nombre" placeholder="Nombres" required>
            </div>

            <div class="inputBox">
              <input type="text" name="apellido" placeholder="Apellidos" required>
            </div>

            <div class="inputBox">
              <input type="password" name="clave" placeholder="Contraseña" required>
            </div>

            <div class="inputBox">
              <input type="submit" value="Registrarme"/>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php
  session_start();
  //$_SESSION['usuario']

  include "conexion1.php";
?>