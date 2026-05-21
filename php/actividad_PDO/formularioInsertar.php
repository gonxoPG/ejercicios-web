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
    <title>Formulario inserción</title>
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center">Insertar nuevo empleado</h2>

        <form class="w-50 mx-auto" action="index.php?accion=insertar" method="POST" >
            <div class="mb-3">
                <label for="inputNombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="inputNombre">
            </div>
            <div class="mb-3">
                <label for="inputApellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="inputApellido">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" name="inputEmail">
            </div>
            <div class="mb-3">
                <label for="inputSalario" class="form-label">Salario:</label>
                <input type="number" class="form-control" name="inputSalario">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

</body>

</html>