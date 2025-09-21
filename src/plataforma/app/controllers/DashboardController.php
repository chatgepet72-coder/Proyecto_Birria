<?php
class DashboardController {
  function index(){
    if(empty($_SESSION['user'])){ header('Location:/src/plataforma/'); exit; }
    ob_start(); include __DIR__.'/../views/dashboard/index.php'; return ob_get_clean();
  }
}
