<?php


use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::post('/address', [AddressController::class, 'create']);
Route::patch('/address/{user_id}', [AddressController::class, 'update']);

