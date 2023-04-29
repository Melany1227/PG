<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Mi primer Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="inicio.css" >

</head>
<body>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="assets/img/user.png" th:src="@{/img/user.png}"/>
            </div>
            <form class="col-12" th:action="@{/login}" method="post">
                <div class="form-group form-horizontal" role="form" method='post' action="validar_acceso.php" id="user-group">
                    <input type="email" class="form-control" id="Inputemail3"placeholder="Nombre de usuario" name="correo" required/>
                </div>
                <div class="form-group" id="contrasena-group">
                    <input type="password" class="form-control" id="InputPassword3" placeholder="Contrasena" name="clave"/>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                <?php
                // error_reporting(E_ERROR);
                // if($_GET["error"]=="si"){
                // echo "Correo o Clave invalida, por favor Verifica tus Datos de Acceso";
                // }else{
                // echo "";
                // }
                ?>
            </form>
            <div class="col-12 forgot">
                <a href="#">Recordar contrasena?</a>
            </div>

        </div>
    </div>
</div>
</body>
</html>