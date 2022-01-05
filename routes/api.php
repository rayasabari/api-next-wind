<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ProfileInformationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){
    Route::get('me',AuthUserController::class);
});
Route::get('profile/{user:username}',ProfileInformationController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
