<?php

use App\Http\Controllers\ExaminationRequestController;
use Illuminate\Support\Facades\Route;

Route::prefix('examination-requests')->group(function () {
    Route::post('/', [ExaminationRequestController::class, 'create']);
    Route::get('/', [ExaminationRequestController::class, 'listAll']);
    Route::get('/{id}', [ExaminationRequestController::class, 'listOne']);
    Route::delete('/{id}', [ExaminationRequestController::class, 'destroy']);
});
