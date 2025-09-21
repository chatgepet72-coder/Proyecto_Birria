<?php
class TeacherDashboardController {
  public function index(){
    // Solo maestro o admin
    Gate::allow(['maestro','admin']);

    // Render con tu sistema de vistas. Usa View::render si lo tienes;
    // si no, incluye directamente el archivo de la vista.
    if (class_exists('View')) {
      View::render('teacher/dashboard', 'teacher', [
        'title' => 'Panel del Maestro',
        'user'  => $_SESSION['user'] ?? null,
      ]);
    } else {
      // Fallback simple
      $title = 'Panel del Maestro';
      $user  = $_SESSION['user'] ?? null;
      include __DIR__ . '/../views/teacher/dashboard.php';
    }
  }
}
