<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Junaidiar\PHP\MVC\App\Router;
use Junaidiar\PHP\MVC\Middleware\AuthMiddleware;
use Junaidiar\PHP\MVC\Controllers\HomeController;
use Junaidiar\PHP\MVC\Controllers\LoginController;
use Junaidiar\PHP\MVC\Controllers\ProductController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', LoginController::class, 'index');
Router::add('GET', '/about', HomeController::class, 'about');
Router::add('GET', '/product/([1-9a-zA-Z]*)/categories/([1-9a-zA-Z]*)', ProductController::class, 'categories');
Router::add('GET', '/product', ProductController::class, 'index', [AuthMiddleware::class]);

Router::run();
