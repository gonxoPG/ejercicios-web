<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda contactos</title>
</head>
<body>
    <?php

    $archivo = fopen("agenda.txt", "r");
    $busqueda = $_REQUEST["busqueda"];
    $encontrado = false;

        while (($linea = fgets($archivo)) !== false) {

            if (strpos($linea, $busqueda) !== false) {
                
                $arrayDatos = explode(";", $linea);
    
                $nombre = $arrayDatos [0];
                $telefono = $arrayDatos [1];
                $correo = $arrayDatos [2];
    
                echo "Nombre: <b>$nombre</b><br>";
                echo "Teléfono de contacto: <b>$telefono</b><br>";
                echo "Correo electrónico: <b>$correo</b><br>";
                 $encontrado = true;
            }
        }

        fclose($archivo);

        if (!$encontrado) {
            echo "Contacto no encontrado";
        }

        echo "<br><a href='index.php'>Voler a inicio</a>";
    ?>
</body>
</html>