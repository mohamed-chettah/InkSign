<?php

use App\Http\Controllers\Authentification\LoginController;
use App\Http\Controllers\Authentification\TwitterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::post('/', [LoginController::class, 'login']);

Route::get('/auth/twitter', [TwitterController::class, 'redirectToTwitter']);
Route::get('/auth/twitter/callback', [TwitterController::class, 'handleTwitterCallback']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {

        return Inertia::render('dashboard');
    });
    Route::get('/logout', [LoginController::class, 'logout']);
});
