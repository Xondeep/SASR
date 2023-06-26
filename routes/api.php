<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\espController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/create', [StudentController::class, 'create']);
Route::post('admin/reg', [espController::class, 'reg']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
