<?php
class Auth {
  static function user(){ return $_SESSION['user'] ?? null; }
  static function check(){ return !!self::user(); }

  static function attempt($email,$password){
    // ajusta a tu esquema actual (usa src/db.php)
    $pdo = db(); // función de tu db.php
    $q = $pdo->prepare("SELECT * FROM users WHERE email=? AND status='active' LIMIT 1");
    $q->execute([$email]);
    $u = $q->fetch(PDO::FETCH_ASSOC);
    if($u && password_verify($password, $u['password'])){
      $_SESSION['user'] = ['id'=>$u['id'],'name'=>$u['name'],'email'=>$u['email'],'role_id'=>$u['role_id']];
      return true;
    }
    return false;
  }
  static function logout(){ unset($_SESSION['user']); }
}
