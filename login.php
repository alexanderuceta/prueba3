<?php
// login.php - Formulario de acceso
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <style>
    body{font-family:Arial,Helvetica,sans-serif;background:#f5f5f5;}
    .container{max-width:360px;margin:80px auto;padding:20px;background:#fff;border-radius:6px;box-shadow:0 2px 8px rgba(0,0,0,.1)}
    input[type=text],input[type=password]{width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:4px}
    button{width:100%;padding:10px;background:#007bff;color:#fff;border:none;border-radius:4px;cursor:pointer}
    .error{color:#b00020;margin-bottom:10px}
  </style>
</head>
<body>
  <div class="container">
    <h2>Iniciar sesión</h2>
    <?php if (!empty($_GET['error'])): ?>
      <div class="error">Credenciales inválidas. Intenta nuevamente.</div>
    <?php endif; ?>
    <form method="post" action="authenticate.php">
      <label for="username">Usuario</label>
      <input id="username" name="username" type="text" required autofocus>

      <label for="password">Contraseña</label>
      <input id="password" name="password" type="password" required>

      <button type="submit">Entrar</button>
    </form>
    <p style="margin-top:12px;font-size:13px;color:#555">Usuario demo: <code>admin</code> / Contraseña demo: <code>secret</code></p>
  </div>
</body>
</html>