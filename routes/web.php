<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{userId}', [UserController::class, 'user']);
Route::put('/api/user/{userId}', [UserController::class, 'update']);
