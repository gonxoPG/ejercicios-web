<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo contacto</title>
</head>
<body>
    <?php
    $nombre = $_REQUEST["nombre"];
    $primerApellido = $_REQUEST["apellido1"];
    $segundoApellido = $_REQUEST["apellido2"];
    $telefono = $_REQUEST["telefono"];
    $email = $_REQUEST["correo"];

    $nombre_archivo = "agenda.txt";
    $contacto = "$nombre $primerApellido $segundoApellido; $telefono; $email\n";

    $fichero = fopen($nombre_archivo, "a");
    fwrite($fichero, $contacto);

    fclose($fichero);

    echo "¡Contacto guardado correctamente!<br>";
    echo "<br><a href='index.php'>Voler a inicio</a>";
    ?>
</body>
</html>