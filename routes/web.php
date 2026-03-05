<?php

use App\Http\Controllers\RunProcessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

if (php_sapi_name() != 'cli') {
    if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
        dump('7. Routes Match');
    }
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lifecycle', [RunProcessController::class, 'load']);
Route::get('/getuser', [UserController::class, 'load']);
