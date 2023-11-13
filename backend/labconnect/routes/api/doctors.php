<?php


use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::post('/doctors', [DoctorController::class, 'create']);
Route::get('/doctors', [DoctorController::class, 'index']); 
Route::get('/doctors/{id}', [DoctorController::class, 'show']); 
Route::patch('/doctors/{id}', [DoctorController::class, 'update']);
Route::delete('/doctors/{id}', [DoctorController::class, 'destroy']);