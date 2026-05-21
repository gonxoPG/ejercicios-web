<?php
session_start();
//Esta función se utiliza para iniciar una nueva sesión o reanudar una sesión existente
?>
<!--Es importante llamar a session_start(); antes de cualquier salida HTML o texto en el script PHP, ya que PHP necesita enviar encabezados HTTP especiales
para manejar las sesiones.-->

<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        //condicional if
        //$_SESSION['numeroaleatorio']Accede a un valor almacenado en la variable de sesión llamada 'numeroaleatorio'
        //$_REQUEST['numero']Accede a un valor enviado al script, ya sea mediante un método POST o GET
        if ($_SESSION['numeroaleatorio'] == $_REQUEST['numero']) {
            echo "Ingresó el valor correcto";
            
        //En caso contrario
        } else {
            echo "Incorrecto";
        }
        ?>
    </body>
</html> 

