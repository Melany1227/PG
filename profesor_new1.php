<?php
session_start();
include "main/Usuarios/conexion.php";
if($_SESSION["tipo_usuario"] == "Administrador"){
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  </head>


  <title>Listar curso</title>

  <div id="contenido">
    <div style = "margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <span><h1> Nuevo jefe de sección</h1></span>
      <br>

      <form action = "profesor_new2.php" method="POST" style = "border-collapse: separate; border-spacing: 10px 5px;">

        <div class="row">
          <div class="col-xs-3">
            <label>Correo:</label> 
            <input type="mail" name="correo" id="correo" class = "form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-3">
            <label>Nombre del jefe seccion:</label> 
            <input type="text" name="nombre" id="nombre" class = "form-control">
          </div>
        </div>
        

        <div class="col-MS-9">
          Seleccione la seccion: 
          <SELECT name="seccion" class="form-control" required>
          <OPTION VALUE="">Seleccione</OPTION>
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
        <button type = "submit" class = "btn btn-sucess">Guardar</button>
      </div>
     
    </form>  
  </div>
</div>
</body>


</html>

<?php
}
else{
  echo '<script language = javascript>
  alert("Acceso no permitido.")
  self.location = "../../index.php"
  </script>';
}
?>
