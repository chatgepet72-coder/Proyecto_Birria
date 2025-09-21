<?php
class Router {
  private $routes = [];
  function get($p,$h){ $this->routes['GET'][$p]=$h; }
  function post($p,$h){ $this->routes['POST'][$p]=$h; }
  function dispatch(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];
    $handler = $this->routes[$method][$uri] ?? null;
    if(!$handler){ http_response_code(404); echo "404"; return; }
    echo call_user_func($handler);
  }
}
