<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);


Route::middleware("auth:sanctum")->group(function () {
    Route::apiResource('/provider', ProviderController::class);
    Route::apiResource('/transaksi', TransaksiController::class);
});