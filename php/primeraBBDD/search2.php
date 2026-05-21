<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados de la búsqueda</h1>

    <?php
        $conexion = mysqli_connect("localhost", "root", "", "concesionario");

        if (!$conexion) {
            die("Conexión fallida: ".mysqli_connect_error());
        }

        $marca = mysqli_real_escape_string($conexion, $_POST["marca"]);
        $modelo = mysqli_real_escape_string($conexion, $_POST["modelo"]);

        $sql = "SELECT id, marca, modelo FROM coches WHERE marca = '$marca' AND modelo = '$modelo'"; 
                //podría ser un SELECT * y luego muestro lo que me interesa

        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            echo "<ul>";

            while ($row = mysqli_fetch_assoc($resultado)) { // esta función se encarga de separar los campos en posiciones del array
                echo "<li>ID: ".$row['id']." | Marca: ".$row['marca']." | Modelo: ".$row['modelo']."</li>";
            }

            echo "</ul>";
        } else {
            echo "No se encontraron productos.";
        }
        
    ?>

    <br><a href="index.php">Volver al menú</a>
</body>
</html>