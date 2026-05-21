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
    <title>Formulario eliminardo</title>
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center">Eliminar nuevo empleado</h2>

        <form class="w-50 mx-auto" action="index.php?accion=eliminar" onsubmit="confirmarEliminar()" method="POST">
            <div class="mb-3">
                <label for="inputID" class="form-label">ID:</label>
                <input type="number" class="form-control" name="inputID">
            </div>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

    <script> // un modal de Bootstrap quedaría mejor
        function confirmarEliminar() {
            return confirm("¿Estás seguro de que quieres eliminar este registro?");
        }
    </script>
</body>

</html>