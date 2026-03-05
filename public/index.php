<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

if (php_sapi_name() != 'cli') {
    $GLOBALS['CURRENT_URL'] = $_SERVER['REQUEST_URI'];
}

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

if (php_sapi_name() != 'cli') {
    if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
        dump('1. Public/index.php');
        dump('2. Autoload');
    }
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

if (php_sapi_name() != 'cli') {
    if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
        dump('3. Load App');
    }
}

$app->handleRequest(Request::capture());
