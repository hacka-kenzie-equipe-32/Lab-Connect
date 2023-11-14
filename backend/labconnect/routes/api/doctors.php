<?php


use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::prefix('doctors')->group(function () {
Route::post('/', [DoctorController::class, 'create']);
Route::get('/', [DoctorController::class, 'listOne']); 
Route::get('/{id}', [DoctorController::class, 'listAll']); 
Route::patch('/{id}', [DoctorController::class, 'update']);
Route::delete('/{id}', [DoctorController::class, 'destroy']);
});
