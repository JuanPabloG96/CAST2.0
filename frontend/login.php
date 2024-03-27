<!doctype html>
<html lang="es-MX">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>inicio de sesión CAST</title>
</head>

<body>
  <main class="main">
    <form action="../backend/routes/user_login.php" method="post" class="form">
      <div>
        <img src="public/images/uacj_logo.png" alt="uacj logo" width="340px">
      </div>
      <h2>Iniciar sesión</h2>
      <small>Ingrese su correo y contraseña institucional</small>
      <div class="input_container">
        <label for="email">correo</label>
        <input type="email" name="email" id="email" placeholder="Ingrese su correo" required>
      </div>
      <div class="input_container">
        <label for="password">contraseña</label>
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
      </div>
      <button type="submit">Iniciar sesión</button>
    </form>
  </main>
</body>

</html>