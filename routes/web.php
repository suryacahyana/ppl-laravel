<?php

use App\Http\Controllers\SQLController;
use App\Http\Controllers\LogController;
use Illuminate\Http\Request;
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

Route::get('/', [LogController::class, 'index']);

Route::get('/sql-kuadrat/{angka}', [SQLController::class, 'SQLAkarKuadrat']);
