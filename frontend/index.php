<?php
include("/laragon/www/proyecto_cast/backend/db.php");

$connection = db_connection();

$connection ->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/index.css">
  <title>Pagina de inicio</title>
</head>
<body>
  <div class="container">prueba</div>
  <?php
  echo 'hello world';
  ?>
</body>
</html>