<?php include("header.php"); ?>
<?php
$conexion=mysqli_connect('localhost',"root","becas");
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

    </head>
	<div class="container-fluid" style="margin-top: 150px; width: 60%;">
		<div class="row">
			<div class="col-md-5">
				<div class="info-box">
                    <h3 class="section-title" STYLE="padding: 10px; font-size: 50px;">INTRODUCCIÓN A ARTES PLÁSTICAS</h3>
					<p>
						Esta modalidad, diseñada para los amantes de las artes plástica, se enfoca en la pintura, el dibujo y la artesanía. Además, cuenta con grandes salidas académicas en la ciudad.
					</p>
				</div>
			</div>
			<div class="col-7 info-box-img "> 
				<img src="assets/img/modalidades/artes.jpg"  style="width:100%; opacity: 75%; padding:5%;" class="rounded mx-auto d-block">
			</div>
		</div>

		<div class="row">
			<div class="col-md-5">
				<div class="info-box" style="font-size:20px">
					<h2>Becas</h2>
                    <ul id="portfolio-flters">
                        <li><a href="https://www.eafit.edu.co/becaandieafit" target="_blank">Beca ANDI – EAFIT</a> Cubre el 100% de tu programa</li>
                        <li><a href="https://sapiencia.gov.co/fondos-sapiencia/becas-mejores-deportistas/" target="_blank">Becas Mejores Deportistas</a> Cubre el 100% de tu programa</li>
                        <li><a href="https://sapiencia.gov.co/fondos-sapiencia/becas-mejores-deportistas/" target="_blank">Beca de honor Bellas Artes</a> </li>
                       
                    </ul>
				</div>
			</div>
			<div class="col-md-7">
				<div class="info-box">
					<h2>Materias</h2>
					<ul>
                        <li>Dibujo</li>
                        <li>Color</li>
                        <li>Modelado</li>
                        <li>Pintura</li>
                        <li>Tridimensional</li>
                    </ul>
						
					
				</div>
			</div>
		</div>
	</div>
    <br>
<?php include("footer.php"); ?>


