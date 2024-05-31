<?php

use App\Facades\Route;
use App\Controllers\HomeController;
use App\Controllers\ScssController;
use App\Services\ScssCompiler;
use ScssPhp\ScssPhp\Compiler;

ScssController::compile();

Route::get('/', HomeController::class, 'index');
Route::get('/test', HomeController::class, 'test');

Route::dispatch();