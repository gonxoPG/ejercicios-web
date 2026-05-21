<?php
$select = isset($_REQUEST["selectInicial"]) ? $_REQUEST["selectInicial"] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación agenda</title>
</head>

<body>

    <form action="index.php" method="POST">
        <select name="selectInicial">
            <option value="1">Mostrar contactos</option>
            <option value="2">Nuevo contacto</option>
            <option value="3">Buscar contacto</option>
        </select>

        <input type="submit" value="Seleccionar">
    </form>
    
    <?php
    $nombre_archivo = "agenda.txt";

    if ($select) {
        switch ($select) {
            case '1':
                echo "<h2>Contactos guardados:</h2>";

                $fichero = fopen($nombre_archivo, "r");
                
                while (!feof($fichero)) {
                    $linea = fgets($fichero);
                    echo $linea . "<br>";
                }

                fclose($fichero);

                break;

                /* OPCIÓN 1:
                    $contenido = file_get_contents($fichero); // todo el contenido en un string unido

                OPCIÓN 2 (LA MEJOR):

                    $fichero = fopen($nombre_archivo, "r");
                        
                        while (!feof($fichero)) {
                            $linea = fgets($fichero);
                            echo $linea . "<br>";
                        }

                        fclose($fichero);

                OPCIÓN 3:
                    
                    $array = file($nombre_archivo, FILE_IGNORE_NEW_LINES);
                        //var_dump($array);
                        foreach ($array as $key => $value) {
                            echo $value . "<br>";
                        }
                        break; */

            case '2':
                
                header("Location: formulario.html");
                exit;

                // break; el exit ya está rompiendo el código

            case '3':

                print "<form action='procesar2.php' method='POST'>
        
         
        <p><u>Búsqueda contacto</u></p>
        <h4>Nombre y Apellido:</h4>
        <input type='text' name='busqueda'><br>
        <br><br>

        <input type='submit' value='Buscar'>
                    </form>";
                break;
            
            default:
                echo ("Ha habido algún error.");
                break;
        }
    }
    ?>
</body>

</html>