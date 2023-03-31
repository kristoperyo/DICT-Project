<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/createUser', [AuthController::class, 'create']);

Route::get('/employees', [UserController::class, 'show']);
Route::get('/employee/{id}', [UserController::class, 'showUser']);

Route::get('/test', [UserController::class, 'testPage']);
Route::post('/tester', [UserController::class, 'testEnd']);

Route::put('/update-user/{id}', [UserController::class, 'updateUser']);