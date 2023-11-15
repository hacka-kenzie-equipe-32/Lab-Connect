<?php

use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::post('/schedules', [ScheduleController::class, 'create']);
Route::get('/schedules', [ScheduleController::class, 'listAll']);
Route::get('/schedules/{id}', [ScheduleController::class, 'listOne']);
Route::put('/schedules/{id}', [ScheduleController::class, 'update']);
Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy']);