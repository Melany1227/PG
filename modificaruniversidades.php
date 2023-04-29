<?php
include "main/Usuarios/conexion.php";
  include "sesion.php";//NUEVO2
  
  $consulta=ConsultarSeccion($_GET['usr']);

  function ConsultarSeccion($id_universidad)
  {


   include "main/Usuarios/conexion.php"; //Se necesita el include dentro de la funcion para que no de error al intentar conectar con la base de datos
   $query="SELECT * FROM universidades WHERE id_universidad='".$id_universidad."' ";
   $resultado2= $conexion->query($query) or die ("Error al consultar las universidades: ".mysqli_error($conexion) );//Función query ejecuta la consulta

    $filas=$resultado2->fetch_assoc();//función para obtener una fila de resultado como un array asociativo

    return [
      //$filas['id'],
      $filas['id_universidad'],
      $filas['nombre'],
      $filas['descripcion'],
    
      
      //$filas['codigo'],//Nuevo 1 administrador
      //$filas['clave']
    ];

  }
  if($_SESSION["tipo_usuario"] == "Administrador"){//NUEVO 2
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Listar Universidades</title>
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
  
  <div id="cabecera">
    <img src="images/swirl.png" width="1188" id="img1">
  </div>-->
  
  <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <span> <h1>Modificar Universidades:</h1> </span>
      <br>

      <form action="modificaruniversidades2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">


        <div>
          <div class="row">
            <div class="col-xs-3">
              <label>id_universidades:</label>
              <input type="text" name="id_universidad" id="id_universidad" class="form-control" readonly="readonly" value="<?php echo $consulta[0]; ?>" disable>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-3">
              <label>Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $consulta[1]?>">
            </div>
          </div>

          <div class="row">
            <div class="col-xs-3">
              <label>Descripcion:</label>
              <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $consulta[2]?>">
            </div>
          </div>

            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
          </form>
        </div>

      </div>

    <!--<div id="footer">
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



























