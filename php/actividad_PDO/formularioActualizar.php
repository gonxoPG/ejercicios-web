<?php
require_once "config.php";
require_once "funciones.php";
global $cfg;

$pdo = conectaDb();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Formulario actualización</title>
</head>

<body>
    <div class="container my-4">
        <h2 class="text-center">Modificar empleado</h2>

        <!-- buscar por ID -->
        <form class="w-50 mx-auto" action="#" method="POST">
            <div class="mb-3">
                <label for="InputID" class="form-label">ID:</label>
                <input type="number" class="form-control" name="inputID">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <?php

        if (isset($_REQUEST['inputID']) && !empty($_REQUEST['inputID'])) {
            $consulta = "SELECT * FROM {$cfg['tablaEmpleados']} WHERE id = :id";

            $resultado = $pdo->prepare($consulta);

            if (!$resultado) {
                error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
            } else {
                if (!$resultado->execute([":id" => $_REQUEST['inputID']])) {
                    error_log("Error: No se puede ejecutar la consulta. SQLSTATE[{$resultado->errorCode()}]: {$resultado->errorInfo()[2]}");
                } else {
                    error_log("Consulta ejecutada correctamente");

                    foreach ($resultado as $registro) {
                        $id = $registro["id"];
                        $nombre = $registro["nombre"];
                        $apellido = $registro["apellido"];
                        $email = $registro["email"];
                        $salario = $registro["salario"];
                    }
                }
            }

            ?>

            <form class="w-50 mx-auto" action="index.php?accion=actualizar" method="POST">
                <div class="mb-3">
                    <label for="inputID" class="form-label">ID:</label>
                    <input type="text" class="form-control bg-primary-subtle" name="inputID" value="<?php echo $id; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="inputNombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="inputNombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="mb-3">
                    <label for="inputApellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="inputApellido" value="<?php echo $apellido; ?>">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="inputEmail" value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                    <label for="inputSalario" class="form-label">Salario:</label>
                    <input type="number" class="form-control" name="inputSalario" value="<?php echo $salario; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <?php
        }
        ?>
</body>

</html>