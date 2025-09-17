<?php
$config = require __DIR__ . '/../config/config.php';

$dsn = sprintf(
  'mysql:host=%s;port=%d;dbname=%s;charset=%s',
  $config['db']['host'],
  $config['db']['port'],
  $config['db']['name'],
  $config['db']['charset']
);

try {
  $pdo = new PDO($dsn, $config['db']['user'], $config['db']['pass'], [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ]);
} catch (PDOException $e) {
  // Si un endpoint incluye este archivo, devolvemos error JSON limpio
  http_response_code(500);
  header('Content-Type: application/json; charset=utf-8');
  $msg = ($config['app']['debug'] ?? false) ? $e->getMessage() : 'DB error';
  echo json_encode(['ok' => false, 'error' => 'DB_CONNECTION_FAILED', 'message' => $msg], JSON_UNESCAPED_UNICODE);
  exit;
}

return $pdo;
