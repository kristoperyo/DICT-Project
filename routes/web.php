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
//Route::resource('users','App\Http\Controllers\UserController');


Route::post('/', [UserController::class, 'index']);

// Route::resource('/userrofile', [UserController::class, 'userProfile']);

// Route::post('/users', [AuthController::class, 'register']);
// Route::get('/users', [AuthController::class, 'register']);
// Route::post('/createUser', [AuthController::class, 'create']);

// Route::get('/register', [UserController::class, 'register']);
// Route::post('/register', [UserController::class, 'show']);


// Route::get('/', [UserController::class, '']);
// Route::post('/home', [UserController::class, 'updateUser']);

// Route::get('/register', [UserController::class, 'updateUser']);


// Route::get('/employees', [UserController::class, 'show']);
// Route::get('/employee/{id}', [UserController::class, 'showUser']);
// Route::get('/home', [UserController::class, 'updateUser']);
// Route::post('/home', [UserController::class, 'updateUser']);
// Route::get('/test', [UserController::class, 'testPage']);
// Route::post('/tester', [UserController::class, 'testEnd']);

// Route::put('/update-user/{id}', [UserController::class, 'updateUser']);

// Route::get('home', [UserController::class, 'show']);
