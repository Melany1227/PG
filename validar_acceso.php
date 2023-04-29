<?php

session_start(); //inicio una sesion

$correo  = $_POST["correo"];
$clave   = $_POST["clave"];
//$clave_encriptada = hash ('sha512', $clave);

//$user_estado = "A";

//$user_estado = "A";

include 'conexion_new.php';//NUEVO 1
//$con=conexion();

// se consulta el codigo y la clave en la tabla: usuario
//$nombre = "nombre";
$consulta="select * from usuarios where correo='".$correo."' and clave='".$clave."'";//NUEVO 1

//echo $consulta;
// and user_estado = '". $user_estado."'";
$resultado=$con->query($consulta);//Nuevo 1
        $num_datos = $resultado -> num_rows;//Nuevo 1

// $datos=mysql_query($consulta);
// $num_datos=@mysql_num_rows($datos);
// $num_datos= $con->query($consulta);
if ($num_datos<=0){

    //mysql_close($consulta); //cerramos la conexión
        
    //echo "No existe por favor verifique";
    // session_destroy(); // se destruye la sesion del usuario
    // header("Location:index.php?error=si");
    echo '<script language = javascript>
        alert("Error, por favor verifique sus datos")
        self.location = "inner-page.html"
        </script>';
    
}else{

    $_SESSION["autentificado"]= true; //declaro mi variable de sesion para validar la autentificacion de los formularios

    $_SESSION["clave"]=$clave; //NUEVO 1 - declaro mi variable de sesion clave
    
    //mysql_fetch_array():recupera una fila de datos, la fila es devuelta como un array solo se puede accesar indicando el nombre de la columna.
    
    // mysql_fetch_row(:recupera una fila de datos del resultado asociado al identificador de resultados especificado. 
    //La fila es devuelta como un array que solo se puede accesar indicando la posicion numerica de la columna. 
     //$fila = mysql_fetch_row($datos);
    $fila = $resultado->fetch_array(); // NUEVO 1  - Se posiciona en la fila 1 del array fetch_array()
     
     //Cada columna del resultado es almacenada en un índice del array, empezando desde 0. 
     //$tipo_usu = $fila[5]; // capturamos la columna 5 que contiene el tipo de usuario
      $_SESSION["codigo"] = $fila[3];//capturo el CODIGO NUEVO1
      
      if ($_SESSION["codigo"] == 1){ //NUEVO1
        $_SESSION["tipo_usuario"] = "Administrador";
     }
     else{
        $_SESSION["tipo_usuario"] = "Cliente";
     }
     $_SESSION["nomuser"] = $fila[1]; //capturo el nombre del usuario, se cuenta desde cero en las columnas de la tabla
     $_SESSION["correo"] = $correo;//Nuevo*************************************
     //en la tabla, se debe agregar un campo llamado: user_tipo
     
 //$tipo_usu = $fila[5]; //NUEVO1
    
    if($_SESSION["tipo_usuario"] == "Administrador"){ 
        echo "<script type='text/javascript'> window.location='menu_ppal_admin.php'; </script>";
    }else{   
        
         if($_SESSION["tipo_usuario"] == "Cliente"){
              echo "<script type='text/javascript'> window.location='menu_ppal.php'; </script>";
         }
        
    }
}
?>