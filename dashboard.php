<?php
// dashboard.php - página protegida de ejemplo
session_start();
if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard</title>
  <style>body{font-family:Arial,Helvetica,sans-serif;background:#fff;padding:40px}</style>
</head>
<body>
  <h1>Bienvenido, <?php echo $user; ?> ✅</h1>
  <p>Has iniciado sesión correctamente.</p>
  <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>