<?php

use App\Http\Middleware\RunProcess;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

if (php_sapi_name() != 'cli') {
    if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
        dump('3. Bootstrap');
    }
}

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append(RunProcess::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
