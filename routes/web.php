<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Sports\SportsController;
use App\Http\Controllers\Tech\TechController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

// Route::get('/admin', function () {
//     return view('admin/index');
// })->name('admin');

/** Authentication Area */

Route::get('/register', [AuthController::class,  'register'])->name('reg');
Route::get('/login', [AuthController::class,  'login'])->name('login');




/** UX Area */
Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/tech', [TechController::class, 'index'])->name('tech');

Route::get('/sports', [SportsController::class, 'index'])->name('sports');

Route::get('/politic', function(){
    view('politics/index');
})->name('politic');


 /** Dashboard Area */
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('isAdmin');


Route::fallback(function(){
    return response()->view('errors.404', [], 404);
});






