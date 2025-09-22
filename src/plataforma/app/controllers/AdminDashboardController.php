<?php
class AdminDashboardController {
  public function index(){
    Gate::allow(['admin']);
    View::render('admin/dashboard', 'admin', [
      'title' => 'UTEC · Administración',
      'user'  => $_SESSION['user'] ?? null,
    ]);
  }
}
