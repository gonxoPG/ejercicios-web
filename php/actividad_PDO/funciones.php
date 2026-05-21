<?php
require_once "config.php";

function conectaDb()
{
    global $cfg;
    $tmp = null; // Asegurar que $tmp existe

    try {
        $tmp = new PDO(
            "mysql:host={$cfg['mysql_host']};dbname={$cfg['mysqlDB']};charset=utf8mb4",
            $cfg["mysqlUser"],
            $cfg["mysqlPass"]
        );
    } catch (PDOException $e) {
        try {
            // Intento de conexión sin especificar la base de datos
            $tmp = new PDO(
                "mysql:host={$cfg['mysql_host']};charset=utf8mb4",
                $cfg["mysqlUser"],
                $cfg["mysqlPass"]
            );
        } catch (PDOException $e) {
            // Mostrar error y retornar null si la conexión falla
            print "<p class='aviso'>Error: No se puede conectar con la base de datos. {$e->getMessage()}</p>\n";
            return null;
        }
    }

    if ($tmp) {
        // Configurar atributos de la conexión si $tmp no es null
        $tmp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    }

    return $tmp;
}

// Inicializar la conexión
$pdo = conectaDb();

function nuevaTabla()
{
    global $pdo, $cfg;

    $consulta = "DROP DATABASE IF EXISTS $cfg[mysqlDB]";

    if (!$pdo->query($consulta)) {
        error_log("Error: No se puede borrar la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } else {
        error_log("Base de datos borrada correctamente");
    }

    $consulta = "CREATE DATABASE $cfg[mysqlDB] CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

    if (!$pdo->query($consulta)) {
        error_log("Error: No se puede crear la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } else {
        error_log("Base de datos creada correctamente");
    }

    $consulta = "USE $cfg[mysqlDB]";

    if (!$pdo->query($consulta)) {
        error_log("Error: No se puede seleccionar la base de datos. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } else {
        error_log("Base de datos seleccionada correctamente");
    }

    $consulta = "CREATE TABLE $cfg[tablaEmpleados] (
        id INTEGER UNSIGNED AUTO_INCREMENT,
        nombre VARCHAR(255),
        apellido VARCHAR(255),
        email VARCHAR(255),
        salario DECIMAL(10,2),
        PRIMARY KEY (id)
    )";

    if (!$pdo->query($consulta)) {
        error_log("Error: No se puede crear la tabla. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } else {
        error_log("Tabla creada correctamente");
    }
}


function insertarRegistro($nombre, $apellido, $email, $salario){
    
    global $pdo, $cfg;

    $consulta = "INSERT INTO {$cfg['tablaEmpleados']}
    (nombre, apellido, email, salario)
    VALUES
    (:nombre, :apellido, :email, :salario)";

    $resultado = $pdo->prepare($consulta);

    if (!$resultado) {
        error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } elseif (!$resultado->execute([":nombre" => $nombre, ":apellido" => $apellido, ":email" => $email, ":salario" => $salario])) {
        error_log("Error: No se puede ejecutar la consulta. SQLSTATE[{$resultado->errorCode()}]: {$resultado->errorInfo()[2]}");
    } else {
        print '<div class="alert alert-success mt-3" role="alert">Registro insertado correctamente</div>';
    }
}

function listarEmpleados(){
    global $pdo, $cfg;

    $consulta = "SELECT * FROM {$cfg['tablaEmpleados']}";

    $resultado = $pdo->query($consulta);

    if (!$resultado) {
        error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } else {
        error_log("Consulta ejecutada correctamente");

        print "<ul>\n";
        foreach ($resultado as $registro) {
            print "<li> $registro[id] | $registro[nombre] | $registro[apellido] | $registro[email] | $registro[salario] €</li>";
        }        
        print"</ul>\n";
        print "\n";
    }
}

function buscarEmpleado($id) {
    global $pdo, $cfg;

    $consulta = "SELECT * FROM {$cfg['tablaEmpleados']} WHERE id = :id";

    $resultado = $pdo->prepare($consulta);

    if (!$resultado) {
        error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } elseif (!$resultado->execute([":id" => $id])) {
        error_log("Error: No se puede ejecutar la consulta. SQLSTATE[{$resultado->errorCode()}]: {$resultado->errorInfo()[2]}");
    } else {
        print "<ul>\n";
        foreach ($resultado as $registro) {
            print "<li> $registro[id] | $registro[nombre] | $registro[apellido] | $registro[email] | $registro[salario] €</li>";
        }
        print "</ul>\n";
    }
}

function actualizarPerfil($id, $nombre, $apellido, $email, $salario){
    global $pdo, $cfg;
     
    $consulta = "UPDATE {$cfg['tablaEmpleados']}
    SET nombre = :nombre, apellido = :apellido, email = :email, salario = :salario
    WHERE id = :id";

    $resultado = $pdo->prepare($consulta);

    if (!$resultado) {
        error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } elseif (!$resultado->execute([":nombre" => $nombre, ":apellido" => $apellido, ":email" => $email, ":salario" => $salario, ":id" => $id])) {
        error_log("Error: No se puede ejecutar la consulta. SQLSTATE[{$resultado->errorCode()}]: {$resultado->errorInfo()[2]}");
    } else {
        print '<div class="alert alert-success mt-3" role="alert">Registro actualizado correctamente</div>';
    }
}

function eliminarEmpleado($id){
    global $pdo, $cfg;

    $consulta = "DELETE FROM {$cfg['tablaEmpleados']} WHERE id = :id";

    $resultado = $pdo->prepare($consulta);

    if (!$resultado) {
        error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } elseif (!$resultado->execute([":id" => $id])) {
        error_log("Error: No se puede ejecutar la consulta. SQLSTATE[{$resultado->errorCode()}]: {$resultado->errorInfo()[2]}");
    } else {
        print '<div class="alert alert-success mt-3" role="alert">Registro eliminado correctamente</div>';
    }
}

function cuentaRegistros() {
    global $pdo, $cfg;

    $consulta = "SELECT COUNT(*) FROM {$cfg['tablaEmpleados']}";

    $resultado = $pdo->query($consulta);

    if (!$resultado) {
        error_log("Error: No se puede preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}");
    } else {
        $cuenta = $resultado->fetchColumn();
        return $cuenta;
    }
}
?>