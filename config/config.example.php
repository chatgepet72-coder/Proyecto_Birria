<?php

return [
  'db' => [
    'host'    => '127.0.0.1',
    'port'    => 3306,
    'name'    => 'utec_plataforma',
    'user'    => 'root',      
    'pass'    => '',          
    'charset' => 'utf8mb4',
  ],
  'app' => [
    'debug' => true, 
    
    'allowed_origins' => ['http://localhost', 'http://localhost:8080', 'http://localhost/proyecto_birria'],
  ],
];
