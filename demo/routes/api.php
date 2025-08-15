<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use App\Http\Controllers\API\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('students', StudentController::class);
// Route::get('/students', [StudentController::class, 'index']);


Route::post('/chatbot', [ChatbotController::class, 'respond']);
/**
 * Route::get('/students', [StudentController::class, 'index']);
 *Route::resource('students', StudentController::class);
 */
