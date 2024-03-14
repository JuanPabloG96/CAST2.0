<?php
// Carga las variables de entorno desde un archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ ."/../.env");
$dotenv->load();

// Función de conexión a la base de datos
function db_connection()
{
    $host = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];
    $database = $_ENV['DB_DATABASE'];

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die('Connection error: ' . $conn->connect_error);
    }

    return $conn;
}