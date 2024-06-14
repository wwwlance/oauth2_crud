<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::apiResource('customers', CustomerController::class, [
        'as' => 'api'
    ]);
});