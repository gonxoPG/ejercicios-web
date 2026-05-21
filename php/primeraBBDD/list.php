<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar productos</title>
</head>

<body>
    <h1>Lista de productos</h1>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "concesionario");

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM coches";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        echo "<ul>";

        while ($row = mysqli_fetch_assoc($resultado)) { // esta función se encarga de separar los campos en posiciones del array
            echo "<li>ID: " . $row['id'] . " | Nombre: " . $row['marca'] . " | Modelo: " . $row['modelo'] . " | Año: " . $row['anio'] . "</li>";
            // $row[posición = nombreCampo_tabla]
        }

        echo "</ul>";

    } else {
        echo "No hay productos disponibles.";
    }

    mysqli_close($conexion);

    ?>

    <br><a href="index.php">Volver al menú</a>
</body>

</html>