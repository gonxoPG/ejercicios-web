<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.2</title>
</head>
<body>
    <?php
        $h = $_REQUEST['horas'];

        echo "El salario de esta semana será ", $h * 12, "€";
    ?>
</body>
</html>