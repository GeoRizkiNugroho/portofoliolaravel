<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers;


Route::get('/',[PortoController::class, 'master']);
Route::get('/about', [PortoController::class, 'about']);
Route::get('/resume', [PortoController::class, 'resume']);
Route::get('/contact', [PortoController::class, 'contact']);
