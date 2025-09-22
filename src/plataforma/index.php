<?php
session_start();

// Reusar tu conexión y config
require __DIR__ . '/../db.php';
require __DIR__ . '/app/config/app.php';

// cargar core y controladores
foreach (glob(__DIR__ . '/app/core/*.php') as $f) require $f;
foreach (glob(__DIR__ . '/app/controllers/*.php') as $f) require $f;

$router = new Router();

/* ========== Auth ========== */
$router->get('/src/plataforma/',           [new AuthController, 'showLogin']);
$router->post('/src/plataforma/login',     [new AuthController, 'login']);
$router->get('/src/plataforma/logout',     [new AuthController, 'logout']);

/* ========== Panel ALUMNO (requiere login) ========== */
$router->get('/src/plataforma/app',            [new StudentDashboardController,'index']);   // alumnos
$router->get('/src/plataforma/app/materias',           [new CoursesController, 'index']);
$router->get('/src/plataforma/app/horario',            [new ScheduleController, 'index']);
$router->get('/src/plataforma/app/calificaciones',     [new GradesController, 'index']);
$router->get('/src/plataforma/app/encuestas',          [new SurveysController, 'index']);
$router->get('/src/plataforma/app/becas',              [new ScholarshipsController, 'index']);
$router->get('/src/plataforma/app/anuncios',           [new AnnouncementsController, 'index']);

/* ========== Panel MAESTRO ========== */
$router->get('/src/plataforma/teacher',                [new TeacherDashboardController, 'index']);

/* ========== Panel ADMIN ========== */
$router->get('/src/plataforma/admin',                  [new AdminDashboardController, 'index']);


$router->dispatch();
