<?php
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basedatos = "formulariobasico";
    
$conexion = mysqli_connect($servidor, $usuario,"") or die ("Error conexión con el servidor de la Base de Datos");

$db = mysqli_select_db($conexion, $basedatos) or die ("Error conexión al conectarse a la Base de Datos");

    $nombre = $_POST['nombre'];
    
    $sql = "INSERT INTO datos VALUES ('$nombre')";
    
    $ejecutar = mysqli_query($conexion, $sql);
    
    if(!$ejecutar){
        echo "Hubo algún error";
    }else{
        echo "Datos guardados correctamente <br><a href='Formulario_Basico.html'>volver</a>";
    }
    
?>