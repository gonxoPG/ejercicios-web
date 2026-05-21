<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario datos</title>
    
</head>
<body>
    <form action="add2.php" method="POST">

        <label for="marca">Marca:</label>
        <input type="text" name="marca"><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo"><br><br>

        <label for="anio">Año:</label>
        <input type="number" name="anio" step="1" min="1900" max="2025"><br><br>

        <input type="submit" value="Añadir">
    </form>

    <br><a href="index.php">Volver al menú</a>
</body>
</html>