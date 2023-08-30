<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatkerController;
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
    return view('dashboard');
});

Route::get('sukses','SatkerController@sukses');
Route::get('peringatan','SatkerController@peringatan');
Route::get('gagal','SatkerController@gagal');

Route::get('satker', [SatkerController::class, 'index'] )->name('satker');
Route::get('/dbsatker/tambahsatker', [SatkerController::class, 'tambahsatker'] )->name('dbsatker.tambahsatker');
Route::get('getPbi', [SatkerController::class, 'getPbi'] );
Route::get('insertsatker', [SatkerController::class, 'create'] )->name('insertsatker');
Route::post('insertsatker', [SatkerController::class, 'store'] )->name('insertsatker');
Route::get('/dbsatker/tampilkandata/{id}', [SatkerController::class, 'tampilkandata'] )->name('dbsatker.tampilkandata');
Route::post('/dbsatker/updatesatker/{id}', [SatkerController::class, 'updatesatker'] )->name('dbsatker.updatesatker');





