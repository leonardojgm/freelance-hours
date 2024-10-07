<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/outra-rota', fn () => 'oi');

Route::get('/welcome', WelcomeController::class);
//Route::get('/welcome', [WelcomeController::class, 'index']);
