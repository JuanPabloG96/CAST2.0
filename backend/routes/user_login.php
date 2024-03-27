<?php
include("/laragon/www/proyecto_cast/backend/db.php");
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$connection = db_connection();

$user = $email = $password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = test_input('Test user');
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    $sql = "INSERT INTO tbl_test (user, email, password) VALUES ('$user', '$email', '$password')";
    if (mysqli_query($connection, $sql)) {
        echo " Datos guardados correctamente";
    } else {
        echo "Error al guardar los datos: " . mysqli_error($connection);
    }
}

$connection->close();
