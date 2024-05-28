<?php

use App\Facades\Route;
use App\Controllers\HomeController;

Route::get('/', HomeController::class, 'index');
Route::get('/test', HomeController::class, 'test');

Route::dispatch();