<?php
include_once "bicicleta.php";
include_once "coche.php";

    // creo una bicicleta con X marchas
$biciUno = new Bicicleta(15);

    // creo un coche con X cilindrada
$cocheUno = new Coche(2000);

    // añado datos

$biciUno->recorre(40);
$cocheUno->recorre(200);
$biciUno->recorre(60);

echo $biciUno->hazCaballito()."<br><br>";
echo $cocheUno->quemaRuedas()."<br><br>";
echo "Mi bici ha recorrido ".$biciUno->mostrarkmRecorridos()." Km<br><br>";
echo "Mi coche ha recorrido ".$cocheUno->mostrarkmRecorridos()." Km<br><br>";
echo "Se han creado un total de ".Vehiculo::getvehiculosCreados()." vehículos<br><br>";
echo "Todos los vehículos han hecho un total de ".Vehiculo::getkmTotales()." Km<br><br>";
?>