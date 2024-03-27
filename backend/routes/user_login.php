<?php
include("/laragon/www/proyecto_cast/backend/db.php");

$user = "Test user";
$email = $_POST["email"];
$password = $_POST["password"];

$connection = db_connection();

$sql = "INSERT INTO tbl_test (user, email, password) VALUES ('$user', '$email', '$password')";
if (mysqli_query($connection, $sql)) { 
    echo "\nDatos guardados correctamente";
} else {
    echo "Error al guardar los datos: " . mysqli_error($connection);
}

$connection->close();
