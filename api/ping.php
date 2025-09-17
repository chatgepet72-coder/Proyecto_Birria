<?php
require __DIR__ . '/bootstrap.php';

$dbStatus = 'unknown';
try {
  // tiny query para comprobar conexión
  $row = $pdo->query('SELECT 1 AS ok')->fetch();
  $dbStatus = (isset($row['ok']) && (int)$row['ok'] === 1) ? 'up' : 'down';
} catch (Throwable $e) {
  $dbStatus = 'down';
}

echo json_encode([
  'ok'      => true,
  'service' => 'Proyecto_Birria API',
  'db'      => $dbStatus,
  'time'    => date(DATE_ATOM),
], JSON_UNESCAPED_UNICODE);
