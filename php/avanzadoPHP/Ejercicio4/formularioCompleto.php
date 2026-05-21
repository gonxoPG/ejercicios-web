<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4.2</title>
</head>
<>
    <?php
        $nombre = trim(strip_tags($_REQUEST['nombre']));;
        $apellidos = trim(strip_tags($_REQUEST['apellidos']));
        $edad = $_REQUEST['edad'];
        $peso = $_REQUEST['peso'];
        $sexo = $_REQUEST['sexo'];
        $estadoCivil = $_REQUEST['estadoC'];
        $aficiones = $_REQUEST['aficiones'];

        echo "Su nombre es <b>$nombre</b><br>";
        echo "Sus apellidos son <b>$apellidos</b><br>";
        echo "Tiene <b>$edad</b><br>";
        echo "Su peso es de <b>$peso</b><br>";
        echo "Es un@ <b>$sexo</b><br>";
        echo "Su estado civil es <b>$estadoCivil</b><br>";
        echo "Le gusta: ";

        foreach ($aficiones as $aficion) {
            echo "<b>$aficion</b>\n";
        }
    ?>
    <br><br>
    <a href="Ejercicio4\index.php">Volver al formulario</a>
</body>
</html>