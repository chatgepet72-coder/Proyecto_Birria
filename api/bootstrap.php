<?php
header('Content-Type: application/json; charset=utf-8');

$config = require __DIR__ . '/../config/config.php';

// CORS (opcional)
if (!empty($config['app']['allowed_origins'])) {
  $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
  if (in_array($origin, $config['app']['allowed_origins'], true)) {
    header("Access-Control-Allow-Origin: $origin");
    header('Vary: Origin');
  }
}
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  header('Access-Control-Allow-Methods: GET,POST,PUT,PATCH,DELETE,OPTIONS');
  header('Access-Control-Allow-Headers: Content-Type, Authorization');
  exit;
}

// DB (PDO)
$pdo = require __DIR__ . '/../src/db.php';
