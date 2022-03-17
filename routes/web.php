<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AulaController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [AulaController::class, 'index']);
Route::get('/aulas/create', [AulaController::class, 'create']);
Route::get('/forms/contato', [ContatoController::class, 'create']);

Route::get('produtos', function () {

    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produtos', ['id' => $id]);
});
