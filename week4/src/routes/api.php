<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PosseController;

Route::get('/interns',[PosseController::class,'index']);
Route::get('/interns/{intern}',[PosseController::class,'show']);
Route::post('/interns', [PosseController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
