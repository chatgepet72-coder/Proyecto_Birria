<?php
class StudentDashboardController {
  public function index(){
    // Solo alumno (o admin si quieres ver también)
    Gate::allow(['alumno']);
    View::render('student/dashboard', 'student', [
      'title' => 'UTEC · Estudiante',
      'user'  => $_SESSION['user'] ?? null,
    ]);
  }
}
