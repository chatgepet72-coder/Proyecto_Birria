<?php
// --- SHIM: expone una función db() usando tu $pdo global de src/db.php ---
if (!function_exists('db')) {
    function db() {
        // $pdo llega desde src/db.php que ya incluyes en index.php
        global $pdo;
        if (!$pdo) {
            throw new RuntimeException('PDO no inicializado: revisa src/db.php');
        }
        return $pdo;
    }
}

class Gate {
  static function is($slug){
    $u = Auth::user(); if(!$u) return false;
    $pdo = db();
    $r = $pdo->prepare("SELECT slug FROM roles WHERE id=?");
    $r->execute([$u['role_id']]);
    return ($r->fetchColumn() === $slug);
  }
  static function any(array $slugs){ foreach($slugs as $s){ if(self::is($s)) return true; } return false; }
}
