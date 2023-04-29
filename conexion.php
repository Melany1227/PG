<?php
 
function conexion(){
 
$con = mysql_connect("localhost","root","");//Conexión con el servidor localhost, el usuario del servidor root y sin contraseña.
 
if (!$con){
 
die('No se pudo conectar a la base de datos: ' . mysql_error());//error de conexión y la conexión muere
}
 
mysql_select_db("rutadelsaber",$con);//Selección de la base de datos
 
return($con);
}
?>