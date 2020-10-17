<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoristaController;
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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('motoristas.index');
});

Route::resource('motoristas', MotoristaController::class);
Route::prefix('motorista')->group(function () {
    Route::any('teste', [MotoristaController::class, 'teste']);
    Route::any('index', [MotoristaController::class, 'index']);
});

