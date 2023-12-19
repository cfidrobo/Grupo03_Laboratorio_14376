<?php
define("SERVER", "db"); // Cambiado a 3307
define("USER", "root");
define("PASS", "test"); // Ajusta la contraseña según la configuración de tu contenedor MySQL
define("BD", "veris");
define("PATH", "../../imagenes/Usuarios/");

function conectarBD()
{
    $conn = new mysqli(SERVER, USER, PASS, BD);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>
