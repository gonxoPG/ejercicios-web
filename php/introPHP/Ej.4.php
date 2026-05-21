<?php
    $numeroAl = rand(0,9999);

    if ($numeroAl < 10) {
        print "El número es el $numeroAl y tiene 1 dígito";
    }elseif ($numeroAl >=10 & $numeroAl < 100) {
        print "El número es el $numeroAl y tiene 2 dígitos";
    }elseif ($numeroAl >=100 & $numeroAl < 1000) {
        print "El número es el $numeroAl y tiene 3 dígitos";
    }elseif ($numeroAl >=1000 & $numeroAl < 10000) {
        print "El número es el $numeroAl y tiene 4 dígitos";
    }else {
        print "El número no está en un rango válido";
    }
?>

<!--  4. Realiza un programa que nos diga cuántos dígitos tiene un número aleatorio entre (0 y 9999). 
  Mostrar el número y la cantidad de dígitos. -->