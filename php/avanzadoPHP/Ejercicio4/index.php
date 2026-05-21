<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4.1</title>
</head>

<body>
    <form action="formularioCompleto.php" method="POST">
        <p>Escriba los datos siguientes:</p>
        <h4>Nombre: <br></h4>
        <input type="text" name="nombre"><br>
        <h4>Apellidos: <br></h4>
        <input type="text" name="apellidos"><br>
        <h4>Edad: <br></h4>
        <select name="edad">
            <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
            <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
            <option value="Más de 60 años">Más de 60 años</option>
        </select>
        <h4>Peso: <br></h4>
        <input type="number" name="peso"> Kg
        <h4>Sexo: <br></h4>
        <input type="radio" name="sexo" value="hombre"> Hombre
        <input type="radio" name="sexo" value="mujer"> Mujer
        <h4>Estado civil: <br></h4>
        <input type="radio" name="estadoC" value="soltero"> Soltero
        <input type="radio" name="estadoC" value="casado"> Casado
        <input type="radio" name="estadoC" value="otro"> Otro
        <h4>Aficiones: <br></h4>
        <input type="checkbox" name="aficiones[]" value="cine"> Cine
        <input type="checkbox" name="aficione[]]" value="literatura"> Literatura
        <input type="checkbox" name="aficiones[]" value="tebeos"> Tebeos
        <input type="checkbox" name="aficiones[]" value="deporte"> Deporte
        <input type="checkbox" name="aficiones[]" value="musica"> Música
        <input type="checkbox" name="aficiones[]" value="tv"> Televisión

        <br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

</body>

</html>

<!-- 4.- Ejercicio formulario completo. 
 Comprobar que todos los campos estén rellenos y que mostrarlo en otra pagina: -->