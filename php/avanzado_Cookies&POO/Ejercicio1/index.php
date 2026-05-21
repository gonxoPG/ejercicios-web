<?php
    if (isset($_POST["colorFondo"])) {
        $color = $_POST["colorFondo"];
        setcookie("color",$color, time() + (365 * 24 * 60 * 60));
    } else if (isset($_COOKIE["color"])) {
        $color = $_COOKIE["color"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.1</title>
    <style>
        body {
            background-color: <?php echo $color; ?>;
        }
    </style>
</head>
<body>
    <h2>Selecciona el color que quieres de fondo</h2>
    <form action="#" method="POST">
        <select name="colorFondo">
            <option value="#ffffff">Blanco</option>
            <option value="#fe2f02">Rojo</option>
            <option value="#000000">Negro</option>
            <option value="#008bff">Azul</option>
            <option value="#fff300">Amarillo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<!-- 1.- Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una 
 página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color. -->