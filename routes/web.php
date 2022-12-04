<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnimalController;
use Iluminate\Support\Facedes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/features', [App\Http\Controllers\HomeController::class, 'features'])->name('features');
Route::get('/create', [App\Http\Controllers\AnimalController::class, 'create'])->name('create');
Route::get('/animal', [App\Http\Controllers\AnimalController::class, 'index'])->name('index');
Route::post('/store', [App\Http\Controllers\AnimalController::class, 'store'])->name('store');
Route::get('/search', [App\Http\Controllers\AnimalController::class, 'search'])->name('search');
Route::get('show/{animal}', [App\Http\Controllers\AnimalController::class, 'show'])->name('show');
Route::get('edit/{animal}', [App\Http\Controllers\AnimalController::class, 'edit'])->name('edit');
Route::put('edit/{animal}', [App\Http\Controllers\AnimalController::class, 'update'])->name('update');
Route::delete('/{animal}', [App\Http\Controllers\AnimalController::class, 'destroy'])->name('destroy');
Route::get('authenticate', [App\Http\Controllers\LoginlController::class, 'store'])->name('authenticate');
Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
});