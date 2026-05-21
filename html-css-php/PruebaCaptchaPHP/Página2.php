<?php

$ancho = 100;
$alto = 30;
$imagen = imageCreate($ancho, $alto);
//Crea una nueva imagen con las dimensiones especificadas por $ancho y $alto

$amarillo = ImageColorAllocate($imagen, 255, 255, 0);

ImageFill($imagen, 0, 0, $amarillo);
$rojo = ImageColorAllocate($imagen, 255, 0, 0); //color RGB
$valoraleatorio = rand(100000, 999999);
//Genera un número aleatorio entre 100000 y 999999.

session_start();
//Inicia una nueva sesión o reanuda la sesión existente.

$_SESSION['numeroaleatorio'] = $valoraleatorio;
//Almacena el número aleatorio en una variable de sesión.

ImageString($imagen, 5, 25, 5, $valoraleatorio, $rojo);
// Dibuja una cadena de texto (el número aleatorio) en la imagen en color rojo.

//Bucle
for ($c = 0; $c <= 5; $c++) {
    $x1 = rand(0, $ancho);
    $y1 = rand(0, $alto);
    $x2 = rand(0, $ancho);
    $y2 = rand(0, $alto);
    ImageLine($imagen, $x1, $y1, $x2, $y2, $rojo);
}
//Inicia un bucle que se ejecutará 6 veces.
//Dentro del bucle, se generan dos puntos aleatorios ($x1, $y1, $x2, $y2) y se dibuja una línea roja entre ellos en la imagen.

Header("Content-type: image/jpeg");
// Envía una cabecera HTTP que indica que el contenido generado es una imagen JPEG.

ImageJPEG($imagen);
//Envía la imagen al navegador en formato JPEG.
ImageDestroy($imagen);
//Libera la memoria asociada a la imagen.
?>
