<?php

    $conexion = mysqli_connect(
        "localhost", 
        "root", 
        "", 
        "concesionario");

        if (!$conexion) {
            die("Conexión fallida: ".mysqli_connect_error());
        }

        $marca = mysqli_real_escape_string($conexion, $_POST["marca"]);
        $modelo = mysqli_real_escape_string($conexion, $_POST["modelo"]);
        $anio = mysqli_real_escape_string($conexion, $_POST["anio"]);

        $sql = "INSERT INTO coches (marca, modelo, anio) VALUES ('$marca', '$modelo', '$anio')";

        if (mysqli_query($conexion, $sql)) {
            echo "Producto añadido exitosamente";
        } else {
            echo "Error: ".$sql."<br>".mysqli_error($conexion);
        }

        mysqli_close($conexion);
        
?>

<br><a href="index.php">Volver al menú</a>