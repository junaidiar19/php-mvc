<?php

namespace Junaidiar\PHP\MVC\App;

class Router
{
  private static array $routes = [];

  public static function add(
    string $method,
    string $path,
    string $controller,
    string $function,
    array $middlewares = []
  ): void {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'function' => $function,
      'middlewares' => $middlewares
    ];
  }

  public static function run(): void
  {
    $path = '/';
    if (isset($_SERVER['PATH_INFO'])) {
      $path = $_SERVER['PATH_INFO'];
    }

    $method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      $pattern = '#^' . $route['path'] . '$#';
      if (preg_match($pattern, $path, $variables) && $method == $route['method']) {
        $controller = new $route['controller'];
        $function = $route['function'];

        // middleware
        foreach ($route['middlewares'] as $middleware) {
          $instance = new $middleware;
          $instance->before();
        }

        array_shift($variables);
        // $controller->$function($variables);
        call_user_func_array([$controller, $function], $variables);
        return;
      }
    }

    http_response_code(404);
    echo "404 Not Found";
  }
}
