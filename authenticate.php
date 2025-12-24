<?php
// authenticate.php - procesa el formulario de login
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

// Sanitizar entrada básica
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Credenciales de ejemplo (ajusta según tus necesidades)
$valid_user = 'admin';
// Hash de ejemplo para la contraseña "secret". En producción, guarda el hash en una DB o en config segura
$stored_hash = password_hash('secret', PASSWORD_DEFAULT);

if ($username === $valid_user && password_verify($password, $stored_hash)) {
    // Autenticación correcta
    $_SESSION['user'] = $username;
    header('Location: dashboard.php');
    exit;
} else {
    // Fallo - volver al login con parámetro de error
    header('Location: login.php?error=1');
    exit;
}
