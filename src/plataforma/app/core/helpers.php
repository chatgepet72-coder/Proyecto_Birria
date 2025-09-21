<?php
// helpers.php

// Conecta tu $pdo global como función db()
if (!function_exists('db')) {
  function db() {
    global $pdo;  // viene de src/db.php
    if (!$pdo) {
      throw new RuntimeException('PDO no inicializado: revisa src/db.php');
    }
    return $pdo;
  }
}

// Usuario autenticado (si lo necesitas en vistas/guards)
if (!function_exists('auth')) {
  function auth() {
    return $_SESSION['user'] ?? null;
  }
}

// Atajos de rol
if (!function_exists('has_role')) {
  function has_role($role) {
    $u = auth();
    return $u && (!empty($u['role_slug']) ? $u['role_slug'] === $role : false);
  }
}
