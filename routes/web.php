<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

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


Route::get('/create-new', [MessageController::class, 'create']);
Route::post('/create-new', [MessageController::class, 'createProcess'])->name('message.store');
Route::get('/', [MessageController::class, 'list']);
Route::get('/view/{id}', [MessageController::class, 'view']);
Route::put('/archive/{id}', [MessageController::class, 'archive']);
