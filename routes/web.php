<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('notas.index');
});

//Route::resource('/notas', NotaController::class);

//Route::post('/notas', [App\Http\Controllers\NotaController::class, 'create'])->name('notas.create');

