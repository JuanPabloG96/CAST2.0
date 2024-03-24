<!doctype html>
<html lang="es-MX">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>inicio de sesión</title>
</head>

<body>
  <main class="main">
    <form action="/backend/routes/login.php" method="post" class="form">
      <div class="input_container">
        <label for="email">correo</label>
        <input type="email" name="email" id="email" placeholder="ej. correo@ejemplo.com">
      </div>
      <div class="input_container">
        <label for="password">contraseña</label>
        <input type="password" name="password" id="password" placeholder="ingrese contraseña">
      </div>
    </form>
  </main>
</body>

</html>