<?php


use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::post('/address', [AddressController::class, 'create']);

Route::middleware('jwt.verify')->group(function() {
    Route::patch('/address/{user_id}', [AddressController::class, 'update']);

});