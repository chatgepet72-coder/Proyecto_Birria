<?php
class AdminDashboardController {
  public function index(){
    // Solo admin
    Gate::allow(['admin']);

    if (class_exists('View')) {
      View::render('admin/dashboard', 'admin', [
        'title' => 'Panel Administrativo',
        'user'  => $_SESSION['user'] ?? null,
      ]);
    } else {
      $title = 'Panel Administrativo';
      $user  = $_SESSION['user'] ?? null;
      include __DIR__ . '/../views/admin/dashboard.php';
    }
  }
}
