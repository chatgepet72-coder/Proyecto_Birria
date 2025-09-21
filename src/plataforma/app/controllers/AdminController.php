<?php
class AdminController {
  function index(){
    if(empty($_SESSION['user'])){ header('Location:/src/plataforma/'); exit; }
    // Aquí podrías validar rol admin con Gate::is('admin')
    ob_start(); include __DIR__.'/../views/admin/index.php'; return ob_get_clean();
  }
}
