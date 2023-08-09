<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('admin')->group(function () {
        Route::get('charts', [Controllers\UserController::class, 'getCharts']);
        Route::get('users', [Controllers\UserController::class, 'getUsers']);
    });
});



Route::get('plan', [Controllers\PlanController::class,'planAll']);
Route::get('plan/{plan}', [Controllers\PlanController::class,'getOne']);
Route::get('menus', [Controllers\MenuController::class, 'getAll']);
Route::get('menu/{menu}', [Controllers\MenuController::class,'getOne']);


// маршрут для статической страницы, он всегда последний
require __DIR__ . '/auth.php';
Route::get('/{url}', [Controllers\BaseController::class, 'getText']);

