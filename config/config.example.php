<?php
// Renombra a config.php y ajusta credenciales
return [
  'db' => [
    'host'    => '127.0.0.1',
    'port'    => 3306,
    'name'    => 'proyecto_birria',
    'user'    => 'root',      // en XAMPP suele ser root
    'pass'    => '',          // en XAMPP por defecto está vacío
    'charset' => 'utf8mb4',
  ],
  'app' => [
    'debug' => true, // en prod: false
    // Orígenes permitidos para peticiones fetch (CORS) si te hace falta:
    'allowed_origins' => ['http://localhost', 'http://localhost:8080', 'http://localhost/proyecto_birria'],
  ],
];
