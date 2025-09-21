<?php
class AnnouncementsController {
  function index(){
    if(empty($_SESSION['user'])){ header('Location:/src/plataforma/'); exit; }
    ob_start(); include __DIR__.'/../views/announcements/index.php'; return ob_get_clean();
  }
}
