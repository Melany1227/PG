<?php
include "main/Usuarios/conexion.php";
include "sesion.php";

$consulta=ConsultarSeccion($_GET['usr']);

function ConsultarSeccion($correo)
{
    include "main/Usuarios/conexion.php";
    $query="SELECT * FROM profesores WHERE correo='".$correo."' ";
    $resultado2=$conexion->query($query) or die ("Error al cosultar los jefes de sección".mysqli_error($conexion));
    $filas=$resultado2->fetch_assoc();

    return [
        $filas['correo'],
        $filas['nombreprofesor'],
        $filas['seccion'],
    ];
}
if($_SESSION["tipo_usuario"] == "Administrador"){
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Listar Profesores</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,300,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/estilo.css" rel="stylesheet">
    <style type="text/css">
        @import url ("css/mycss.css");
    </style>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="contenido" style="margin:auto;width:800px; border-collapse: separate;border-spacing:10px 5px;">
    <span> <h1>Modificar jefe de sección</h1></span>
    <br>

    <form action="modificarprofesores2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        <div class="row col-xs-3">
            <label>Correo</label>
            <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $consulta[0]; ?>">
        </div>

        <div    
        class="row col-xs-3">
            <label>Nombre Jefe de Sección</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $consulta[1]?>">
        </div>


        <div class="col-lg-3">
            Seleccione la sección:
            <SELECT name="seccion" class="form-control" required="">
                <?php echo "<option value='".$consulta[2]."'>".$consulta[2]."</option>";?>
                <<OPTION VALUE="">Seleccione</OPTION>
              <OPTION VALUE="01">Artes Plásticas</OPTION>
              <OPTION VALUE="02">Ciencias y Matemáticas</OPTION>
              <OPTION VALUE="03">Ciencias y Matemáticas</OPTION>
              <OPTION VALUE="04">Procesos Matemáticos</OPTION>
              <OPTION VALUE="05">Sistemas</OPTION>
              <OPTION VALUE="06">Programación</OPTION>
              <OPTION VALUE="07">Programación</OPTION>
              <OPTION VALUE="08">Química Industrial</OPTION>
              <OPTION VALUE="09">Deportes</OPTION>
              <OPTION VALUE="10">Deportes</OPTION>
              <OPTION VALUE="11">Humanidades - Comunicación y Medios</OPTION>
              <OPTION VALUE="12">Humanidades - Comunicación y Medios</OPTION>
              <OPTION VALUE="13">Humanidades - Inglés</OPTION>
              <OPTION VALUE="14">Electrónica</OPTION>
              <OPTION VALUE="15">Electrónica</OPTION>
              <OPTION VALUE="16">Modas</OPTION>
              <OPTION VALUE="17">Construcciones</OPTION>
              <OPTION VALUE="20">Contabilidad</OPTION>
              <OPTION VALUE="21">Contabilidad</OPTION>
              <OPTION VALUE="22">Administración</OPTION>
              <OPTION VALUE="23">Administración</OPTION>
              <OPTION VALUE="24">Gestión Social</OPTION>
              <OPTION VALUE="25">Gestión Social</OPTION>
              <OPTION VALUE="27">Gastronomía</OPTION>
              <OPTION VALUE="28">Música</OPTION>
              <OPTION VALUE="29">Recursos Humanos</OPTION>
            </SELECT>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
</body>
</html>
<?php
}
else {
    echo '<script language = javascript>
        alert("Acceso no permitido...!")
        self.location = "../../index.php"
        </script>';
}
?>
