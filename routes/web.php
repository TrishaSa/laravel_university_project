<?php

use App\Http\Controllers\commonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [commonController::class, 'index']);
Route::get('/gallery', [commonController::class, 'gallery']);
Route::get('/contact', [commonController::class, 'contact']);
// Route::get('/studentList', [commonController::class, 'studentList']);

Route::get('/studentList', [commonController::class, 'studentList'])->name('studentList');

Route::middleware(['auth'])->get('/studentCreate', [commonController::class, 'studentcreate']);

Route::post('/get-thana',[commonController::class, 'getThana']);

Route::post('/studentStore', [commonController::class, 'studentStore']);

Route::get('/studentView/{id}', [commonController::class, 'studentView']);
Route::middleware(['auth'])->get('/studentEdit/{id}', [commonController::class, 'studentEdit']);
Route::post('/studentUpdate/{id}', [commonController::class, 'studentUpdate']);

Route::middleware(['auth'])->delete('/studentDelete/{id}', [commonController::class, 'studentDelete']);

// Route::get('/register', [registerController::class, 'index']);
// Route::post('/register', [registerController::class, 'register']);

// Route::get('/login', [registerController::class, 'login']);
// Route::post('/login', [registerController::class, 'loginStore']);


Auth::routes([
    'verify' =>true
]);

Route::middleware(['verified'])->get('/home', [HomeController::class, 'index'])->name('home');
