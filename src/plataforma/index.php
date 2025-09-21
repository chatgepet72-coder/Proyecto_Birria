<?php
session_start();

require __DIR__ . '/../db.php';
require __DIR__ . '/app/config/app.php';

// Cargar helpers primero
$helpers = __DIR__ . '/app/core/helpers.php';
if (file_exists($helpers)) require $helpers;

// Luego el resto del core y controladores
foreach (glob(__DIR__.'/app/core/*.php') as $f) {
    if (basename($f) !== 'helpers.php') require $f;
}
foreach (glob(__DIR__.'/app/controllers/*.php') as $f) require $f;

/* =======================================================
   Normaliza la ruta para que el router NO vea /src/plataforma
   - Funciona con .htaccess (URLs bonitas)
   - También soporta fallback con ?route=/lo-que-sea
   ======================================================= */
$BASE_PREFIX = '/src/plataforma';

// 1) Si viene ?route=... úsala tal cual
if (isset($_GET['route']) && $_GET['route'] !== '') {
    $normalized = $_GET['route'];
} else {
    // 2) Caso normal: toma la ruta real y quita el prefijo /src/plataforma
    $reqPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
    if (strpos($reqPath, $BASE_PREFIX) === 0) {
        $normalized = substr($reqPath, strlen($BASE_PREFIX));
    } else {
        $normalized = $reqPath; // por si ejecutan este index fuera del prefijo
    }
}

// Asegura que empiece con "/" y no quede vacío
if ($normalized === '' || $normalized[0] !== '/') $normalized = '/' . ltrim($normalized, '/');

// “Maquillamos” REQUEST_URI para que tu Router lea la ruta corta.
$_SERVER['REQUEST_URI'] = $normalized;

// ... ya tienes $normalized calculado

// Asegura que empiece con "/" y no quede vacío
if ($normalized === '' || $normalized[0] !== '/') $normalized = '/' . ltrim($normalized, '/');

// Quita barra final para que /app/ y /app funcionen igual (salvo la raíz)
if ($normalized !== '/' && substr($normalized, -1) === '/') {
    $normalized = rtrim($normalized, '/');
}

$_SERVER['REQUEST_URI'] = $normalized;


/* ===== Instanciar Router ===== */
$router = new Router();

/* ================== Rutas (ahora sin el prefijo) ================== */
/* Auth */
$router->get ('/',         [new AuthController, 'showLogin']);
$router->post('/login',    [new AuthController, 'login']);
$router->get ('/logout',   [new AuthController, 'logout']);

/* App (requiere login) */
$router->get('/app',                    [new DashboardController,     'index']);
$router->get('/app/materias',           [new CoursesController,       'index']);
$router->get('/app/horario',            [new ScheduleController,      'index']);
$router->get('/app/calificaciones',     [new GradesController,        'index']);
$router->get('/app/encuestas',          [new SurveysController,       'index']);
$router->get('/app/becas',              [new ScholarshipsController,  'index']);
$router->get('/app/anuncios',           [new AnnouncementsController, 'index']);
$router->get('/app/admin',              [new AdminController,         'index']);

/* ===== Despachar ===== */
$router->dispatch();
