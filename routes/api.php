<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas public
Route::get('/login', [Controller::class, 'index']);
Route::post('/login', [Controller::class, 'login']);


//***Rutas***//

//Notas
Route::get('/list', [NotaController::class, 'index']);
Route::post('/store', [NotaController::class, 'store']);
Route::get('/list/{id}/edit', [NotaController::class, 'show']);
Route::put('/list/{id}', [NotaController::class, 'update']);
Route::delete('/list/{id}', [NotaController::class, 'destroy']);
