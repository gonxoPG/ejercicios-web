<?php

    $contador1 = 0;
    $contador2 = 0;

    print "Tirada del jugador 1:<br>";
    for ($i=0; $i < 3; $i++) { 
        $dado = rand(1,6);
        print "<img src = 'Dados/$dado.jpg' width = 100 heigh = 100>\n";

        $contador1 += $dado;
    }

    print "<br>";
    
    print "Tirada del jugador 2:<br>";

    for ($i=0; $i < 3; $i++) { 
        $dado = rand(1,6);
        print "<img src = 'Dados/$dado.jpg' width = 100 heigh = 100>\n";

        $contador2 += $dado;
    }
    
    print "<br>";

    if ($contador1 > $contador2) {
        print "El jugador 1 gana porque tiene mayor puntuación. <br><br>"."<b>Puntuación: $contador1</b>";
    }else {
        print "El jugador 2 gana porque tiene mayor puntuación. <br><br>"."<b>Puntuación: $contador2</b>";
    }

?>

<!--  Un programa que genere 2 tiradas de 3 dados(simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas) -->