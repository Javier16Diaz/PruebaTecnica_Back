<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\InformationController;

Route::controller(InformationController::class)->group(function (){
Route::post('/Information', 'guardar');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
