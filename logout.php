<?php
// logout.php - cierra la sesión y redirige al login
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
