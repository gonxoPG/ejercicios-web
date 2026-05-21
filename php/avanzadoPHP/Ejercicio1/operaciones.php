<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.2</title>
</head>
<body>
    <?php
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];

        echo "La suma de $a y $b es ", $a + $b; 
        echo "<br>La multiplicación de $a y $b es ", $a * $b;
        echo "<br>La resta de $a y $b es ", $a - $b;
        echo "<br>La división de $a y $b es ", $a / $b;

    ?>
</body>
</html>