<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'create']);

Route::middleware('jwt.verify')->group(function() {
    Route::get('/users', [UserController::class, 'listAll']); 
    Route::get('/users/{id}', [UserController::class, 'listOne']); 
    Route::patch('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'delete']);

});