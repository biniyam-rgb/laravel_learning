<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/students', [PageController::class, 'students']);
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/submit', [PageController::class, 'submit']);
Route::get('/contacts', [PageController::class, 'showContacts']);
Route::get('/delete/{id}', [PageController::class, 'delete']);
Route::get('/login', [PageController::class, 'loginForm']);
Route::post('/login', [PageController::class, 'login']);
Route::get('/logout', [PageController::class, 'logout']);