<?php
class AuthController {
  public function showLogin(){
    // muestra tu vista de login actual
    include __DIR__ . '/../views/auth/login.php';
  }

  public function login(){
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';

    if ($email === '' || $pass === '') {
      $_SESSION['flash_error'] = 'Completa tus credenciales';
      header('Location: /src/plataforma/'); exit;
    }

    $pdo = db();

    // Trae también el slug del rol
    $sql = "
      SELECT u.id, u.name, u.email, u.password, u.status, r.slug AS role_slug
      FROM users u
      JOIN roles r ON r.id = u.role_id
      WHERE u.email = ? AND u.status = 'active'
      LIMIT 1
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($pass, $user['password'])) {
      $_SESSION['flash_error'] = 'Credenciales inválidas';
      header('Location: /src/plataforma/'); exit;
    }

    // Guarda datos mínimos en sesión
    $_SESSION['user'] = [
      'id'    => (int)$user['id'],
      'name'  => $user['name'] ?? '',
      'email' => $user['email'],
      'role'  => $user['role_slug'], // 'alumno' | 'maestro' | 'admin'
    ];

    // Redirección por rol
    $destinos = [
      'alumno'  => '/src/plataforma/app',
      'maestro' => '/src/plataforma/teacher',
      'admin'   => '/src/plataforma/admin',
    ];
    $goto = $destinos[$_SESSION['user']['role']] ?? '/src/plataforma/app';
    header('Location: '.$goto);
    exit;
  }

  public function logout(){
    session_destroy();
    header('Location: /src/plataforma/'); exit;
  }
}
