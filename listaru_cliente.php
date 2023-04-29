<?php
  session_start();
  //$_SESSION['usuario'];

  include "main/Usuarios/conexion.php";
  if($_SESSION["tipo_usuario"] == "Cliente"){ //NUEVO2
  ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ruta del Saber</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700|Ubuntu:300,400,500,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.2.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="menu_ppal.php">RUTA DEL SABER</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
    <!-- ======= SE CAMBIÓ!! Hasta ACÁ ======= -->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                    <!-- ======= SE CAMBIÓ!! "Administración de modalidades" y se eliminó  ======= -->
                    
                            <li class="active"><a href="listaruniversidades.php">Inicio</a></li>
                            <li><a href="cerrar.php">Salir</a></li>

                        </ul>
                    </nav><!-- .nav-menu -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    
    <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/admin/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Universidades</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section><!-- End Intro Section -->

    <table class="todo">
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <thead>
        <!--<th>Id</th>--> 
        <th>Id_Universidad</th>
        <th>Nombre de la Universidad</th>      
        <th>Descripcion</th>
 
        <!--<th>Tipo de Usuario</th>
        <th>Clave</th>-->
        <th> <a href="menu_ppal.php"> <button type="button" class="btn btn-info">Atrás</button> </a> </th> <!--NUEVO 1-->
      </thead>
      <?php
        $query="SELECT * FROM universidades";
        $resultado = $conexion->query($query) or die ("Error al consultar las universidades: ".mysqli_error($conexion));//Función query ejecuta la consulta
        while ($filas=$resultado->fetch_assoc())//Retorna un array asociativo correspondiente a la fila obtenida o NULL si es que no hay más filas.
        {

      ?>
        <tr>
           <td> <?php echo $filas['id_universidad']?>  </td>
           <td> <?php echo $filas['nombre']?>  </td>
           <td> <?php echo $filas['descripcion']?>  </td>
      <?php
        }
      ?>
    </table>
<!-- ======= Footer ======= -->
<footer id="footer">

<!-- <h4>Redes sociales</h4> -->
<div class="footer-links">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" href="instagram.com/rutadelsaberr/" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg>
</div>

<ul class="list">
  <li><a href="#about">Sobre nosotros</a></li>
  <li><a href="#tabs">Valores Corporativos</a></li>
  <li><a href="#call-to.action">Únete</a></li>
  <li><a href="#services">Servicios</a></li>
  <li><a href="#skills">Nuestras habilidades</a></li>
  <li><a href="#team">Equipo</a></li>
  <li><a href="#contac">Contáctanos</a></li>
</ul>

<div class="copyright">
  <p>Ruta del Saber @ 2021<p>
</div>

</footer>
<!-- End Footer -->
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
