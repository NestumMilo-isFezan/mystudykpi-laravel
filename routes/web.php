<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Challenge and Plan Route
Route::get('/challenge', [ChallengeController::class, 'index']);

// Homepage Route
Route::get('/', [HomeController::class, 'index']);

// My KPI Dashboard Route
Route::get('/dashboard', [DashboardController::class , 'index']);

// Profile Route
Route::get('/profile', [ProfileController::class, 'index']);
