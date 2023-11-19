<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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
    return view('home');
});
Route::get('/asik', function () {
    return view('asik');
});
Route::get('/kalkulator', [CalculatorController::class, 'index']);
Route::post('/hitung', [CalculatorController::class, 'hitung']);
Route::get('/periodik', function () {
    return view('periodik');
});
Route::get('/tabel', function () {
    return view('table_periodik');
});
Route::get('/coba', function () {
    return view('coba_table');
});

// Route::get('/kalkulator', [CalculatorController::class, 'index']);
// Route::post('/hitung', [CalculatorController::class, 'calculate']);