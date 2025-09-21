<?php
class AuthController {
  function showLogin(){
    ob_start(); include __DIR__.'/../views/auth/login.php'; return ob_get_clean();
  }
  function login(){
    require_once __DIR__.'/../../../../src/db.php';
    $email = $_POST['email'] ?? '';
    $pass  = $_POST['password'] ?? '';
    // Demo super simple (cámbialo por tu tabla users)
    if ($email && $pass) {
      $_SESSION['user'] = ['id'=>1,'name'=>'Demo','email'=>$email,'role_id'=>1];
      header('Location: /src/plataforma/app'); exit;
    }
    $_SESSION['flash_error'] = 'Credenciales inválidas';
    header('Location: /src/plataforma/'); exit;
  }
  function logout(){
    unset($_SESSION['user']); header('Location: /src/plataforma/');
  }
}
