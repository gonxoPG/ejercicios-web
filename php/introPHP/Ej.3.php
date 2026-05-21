
<?php
    $numeroAl = rand(1,10);
    $resultado = 0;
    
    echo "El número es el $numeroAl</br></br>";

    echo "<table border='4'>";
        echo "<tr><th>Operación</th><th>Resultado</th></tr>";

        for ($i = 0; $i <= 10; $i++) { 
            $resultado = $numeroAl * $i;
            // Cada iteración crea una nueva fila con dos columnas
            echo "<tr>";
            echo "<td align='right'>$numeroAl * $i</td>";
            echo "<td align='right'>$resultado</td>";
            echo "</tr>";
        }

        // Fin de la tabla
        echo "</table>";

?>


<!-- 3. Muestra la tabla de multiplicar de un número generado de manera aleatoria entre 1 y 10. 
 El resultado en formato <table> -->