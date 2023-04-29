<?php

//echo "Bienvenido, cliente. Estás en el menú principal";
include("sesion.php");

if($_SESSION["tipo_usuario"] == "Cliente"){
    ?>

    <!DOCTYPE html>
    <html lang="en">

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

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="menu_ppal.php">RUTA DEL SABER</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                           <!-- ======= SE CAMBIÓ! las rutas y el nav ======= -->
                            <li class="active"><a href="menu_ppal.php">Inicio</a></li>
                            <li><a href="#portfolio">Información</a></li>
                            <li><a href="#team">Equipo</a></li>
                            <li><a href="cerrar.php">Salir</a></li>
                            
                        </ul>
                    </nav><!-- .nav-menu -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                            <h2 class="animate_animated animate_fadeInDown">
                                    <?php
                                    echo"Bienvenido, ".utf8_decode($_SESSION["nomuser"]);
                                    ?>
                                </h2>

                            </div>
                        </div>
                    </div>



                </div>



            </div>
        </div>
    </section><!-- End Intro Section -->

    <main id="main">

        <div class="row"   class="section-title" >
            <!-- NUEVO INICIO-->

        </div>

         <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Información</h3>

                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100"">


            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            
                <div class="col-lg-4 col-md-6 portfolio-item filter-arte">
                  <a href="secciones_cliente.php">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="secciones_cliente.php">Modalidades</a></h4>
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-arte">
                  <a href="listaru_cliente.php">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/3.jpg" class="img-fluid" style="max-width: 104%">
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="listaru_cliente.php">Universidades</a></h4>
                        </div>
                    </div>
                  </a>
                </div>



            </div>

            </div>
    </section><!-- End Portfolio Section -->


     
 <!-- ======= Team Section ======= -->
 <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Equipo</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/team.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Luisa Osorio</h4>
                  <span>Desarrolladora frontend</span>
                  <div class="social">
                    <a href="https://www.instagram.com/lu.osorio_/"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/team-2.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Melany Suarez</h4>
                  <span>Desarrolladora backend</span>
                  <div class="social">
                    <a href="https://www.instagram.com/_m3l4/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/Mel1227/"><i class="fa fa-facebook"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/team-3.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Paulina Puerta</h4>
                  <span>Desarrolladora frontend</span>
                  <div class="social">
                  <a href="https://www.instagram.com/paulinaurn/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/paulinaurn/"><i class="fa fa-facebook"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 ">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/team-4.jpeg" class="img-fluid rounded" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>David Restrepo</h4>
                  <span>Desarrollador backend</span>
                  <div class="social">
                  <a href="https://www.instagram.com/za_ck._.25/"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 ">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/team-5.jpeg" class="img-fluid rounded" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Juan López</h4>
                  <span>Desarrollador Backend</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Team Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contáctanos</h3>
        
        </div>

        <form role="form" method="POST" action="add_contacto.php">
				<center>
					<div class="col-sm-5">
						<input type="hidden" class="form-control" name="id_contacto" required>
					</div><br>

					<div class="col-sm-5">
						<input type="text" class="form-control" name="nombre" required placeholder="Nombres">
					</div>
					<div class="col-sm-5">
						<input type="mail" class="form-control" name="correo" placeholder="Correo electrónico">
					</div>
					<div class="col-sm-5">
						<textarea name="comentario" class="form-control" placeholder="Mensaje"></textarea>
					</div>

					<div class="col-sm-offset-6 col-sm-5">							
						<input type="submit" class="btn btn-sm" value="Enviar">                                             
					</div>
				</center>	

			</form>
      </div>
    </section><!-- End Contact Section -->
    </main><!-- End #main -->

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

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    </body>

    </html>

<?php
}
else{
    echo '<script language = javascript>
    alert("Acceso no permitido")
    self.location = "index.php"
    </script>';
}
?>