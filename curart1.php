<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos y semilleros artística</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_nav.css" rel="stylesheet">

    <style>
        .content {
            margin-top: 80px;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <?php include('nav.php');?>
</nav>
<div class="container">
    <div class="content">
        <h2>Lista de empleados</h2>
        <hr />

        <?php
        if(isset($_GET['aksi']) == 'delete'){
            // escaping, additionally removing everything that could be (html/javascript-) code
            $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
            $cek = mysqli_query($con, "SELECT * FROM cursosart WHERE codigo='$nik'");
            if(mysqli_num_rows($cek) == 0){
                echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
            }else{
                $delete = mysqli_query($con, "DELETE FROM cursosart WHERE codigo='$nik'");
                if($delete){
                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
                }else{
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
                }
            }
        }
        ?>


        <br />
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Código</th>
                    <th>Nombre curso</th>
                    <th>Descripcion</th>

                </tr>
                <tr>
                    <td> <?php echo $filas['correo']?> </td>
                    <td> <?php echo $filas['nombre']?> </td>
                    <td> <?php echo $filas['apellido']?> </td>
                    <td> <?php echo $filas['telefono']?> </td>
                    <td> <?php echo $filas['direccion']?> </td>
                    <td> <?php echo $filas['codigo']?> </td>
                    <td> <?php echo $filas['clave']?> </td>
                    <td> <a href='user_edit1.php?usr=<?php echo $filas['correo'] ?> '> <button type="button" class="btn
                    btn-sucess">Modificar</button></a></td>
                    <td> <a href='user_delete.php?usr=<?php echo $filas['correo'] ?> '> <button type="button" class="btn
                    btn-danger">Eliminar</button></a></td>
                </tr>
            </table>
        </div>
    </div>
</div><center>
    <p>&copy; Sistemas Web <?php echo date("Y");?></p
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>