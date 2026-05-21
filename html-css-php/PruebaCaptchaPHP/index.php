<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        
        <!--en HTML es un elemento que se utiliza para crear un formulario en una página web.
        El método POST es uno de los métodos de solicitud HTTP más comunes utilizados en el desarrollo web. Es parte del protocolo HTTP, que es el conjunto de 
        reglas que rigen la transferencia de datos en la web.
        -->
        
        <form action="pagina3.php" method="post">
            <!--El método POST se utiliza para enviar información al servidor-->
            
            Dígitos verificadores:<img src="pagina2.php">
            <!--src, es un atributo utilizado en varias etiquetas para especificar la ubicación (URL) de un recurso externo que se debe cargar y mostrar en el 
            documento HTML-->
        
            <br>
            
            Ingrese valor:
            <input type="text" name="numero">
            <br>
            <input type="submit" value="Verificar">
        </form>
    </body>
</html>
