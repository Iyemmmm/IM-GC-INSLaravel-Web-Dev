<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', [HomeController::class, 'index']);

Route::get('/Register', [AuthController::class, 'register']);
Route::post('/Register', [AuthController::class, 'processRegistration']);
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

