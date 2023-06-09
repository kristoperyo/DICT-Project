<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SpeakerController;

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
//User Endpoint
Route::resource('users','App\Http\Controllers\UserController');
Route::get('/', [UserController::class, 'index']);
Route::post('/create', [UserController::class, 'create']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/edit',[UserController::class, 'store']);
Route::get('/edit', [UserController::class, 'update']);
Route::get('/partners', [UserController::class, 'show']);
Route::post('/partners', [UserController::class, 'show']);
Route::post('/', [UserController::class, 'index']);

//Partner Endpoint
Route::resource('partner','App\Http\Controllers\PartnerController');
Route::post('/partner', [PartnerController::class, 'index']);


//Speaker Endpoint
Route::resource('speaker','App\Http\Controllers\SpeakerController');
Route::post('/add',[SpeakerController::class, 'store']);
Route::get('/add',[SpeakerController::class, 'store']);
Route::post('/speaker', [SpeakerController::class, 'index']);
Route::post('/speakers', [SpeakerController::class, 'store'])->name('speaker.store');
Route::delete('/speakers/{speaker}', [SpeakerController::class, 'destroy'])->name('speaker.destroy');

