<?php
require_once '../vendor/autoload.php';
require_once '../packages/zabara_industry/framework/src/fn.php';

//spl_autoload_register(function ($class) {
//    $file = '/var/www/html/' . $class . 'php';
//    if (is_file($file)) {
//        require_once $file;
//    }
//});

use App\Controllers\ProductController;
use App\Controllers\UserController;
use ZabaraIndustry\Framework\Router;

// Laravel 7+
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user', [UserController::class]);

Router::add('/user', [UserController::class]);
Router::add('/product', [ProductController::class, 'index']);


Router::dispatch($_SERVER['REQUEST_URI']);

