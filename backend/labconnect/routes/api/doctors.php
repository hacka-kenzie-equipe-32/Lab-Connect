<?php


use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::post('/doctors', [DoctorController::class, 'create']);