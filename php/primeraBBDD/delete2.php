<?php
    $conexion = mysqli_connect("localhost", "root", "", "concesionario");

    if (!$conexion) {
        die("Conexión fallida: ".mysqli_connect_error());
    }

    $id = mysqli_real_escape_string($conexion, $_POST["id"]);
    $sql = "DELETE FROM coches WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Producto borrado exitosamente.";
    } else {
        echo "Error: ".$sql."<br>".mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
?>

<br><a href="index.php">Volver al menú</a>