<?php
    $conexion= new mysqli("localhost", "root", "", "rutadelsaber");

    if(mysqli_connect_errno())
    {
    	printf("Falló la conexion");
    }
    else {
    	//printf("Estas conectado");
    }
?>