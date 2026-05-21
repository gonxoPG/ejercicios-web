<?php
require_once "funciones.php";
$pdo = conectaDB();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- agregamos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Ejercicio PDO</title>
</head>

<body>
    <?php

    // si hace recuento y da 0, entonces crea la tabla
    // podría comprobar si la tabla existe
    if (cuentaRegistros() == 0) {
        nuevaTabla();
    }
    ?>

    <div class="container">
        <h2>Selecciona una opción</h2>
        <div class="list-group">
            <a href="formularioInsertar.php" class="list-group-item list-group-item-action">Insertar nuevo empleado</a>
            <a href="index.php?accion=listar" class="list-group-item list-group-item-action">Listar empleados</a>
            <a href="formularioBuscar.php" class="list-group-item list-group-item-action">Buscar un empleado por ID</a>
            <a href="formularioActualizar.php" class="list-group-item list-group-item-action">Actualizar perfil</a>
            <a href="formularioEliminar.php" class="list-group-item list-group-item-action">Eliminar un empleado</a>

        </div>

        <div class="mt-4">
            <?php

            if (isset($_REQUEST["accion"]) && $_REQUEST["accion"] == "insertar") {
                insertarRegistro($_REQUEST["inputNombre"], $_REQUEST["inputApellido"], $_REQUEST["inputEmail"], $_REQUEST["inputSalario"]);
            }

            if (isset($_REQUEST["accion"]) && $_REQUEST["accion"] == "listar") {
                listarEmpleados();
            }

            if (isset($_REQUEST["accion"]) && $_REQUEST["accion"] == "buscar") {
                buscarEmpleado($_REQUEST["inputID"]);
            }

            if (isset($_REQUEST["accion"]) && $_REQUEST["accion"] == "actualizar") {
                actualizarPerfil($_REQUEST["inputID"], $_REQUEST["inputNombre"], $_REQUEST["inputApellido"], $_REQUEST["inputEmail"], $_REQUEST["inputSalario"]);
            }

            if (isset($_REQUEST["accion"]) && $_REQUEST["accion"] == "eliminar") {
                eliminarEmpleado($_REQUEST["inputID"]);
            }
            ?>
        </div>
    </div>
</body>

</html>