<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravoltController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
// Route::get('cities', 'DependentDropdownController@cities')->name('cities');
// Route::get('districts', 'DependentDropdownController@districts')->name('districts');
// Route::get('villages', 'DependentDropdownController@villages')->name('villages');

Route::get('contoh-laravolt', [LaravoltController::class, 'index'])->name('laravolt.index');
Route::get('get-kota', [LaravoltController::class, 'get_kota'])->name('get.kota');
Route::get('get-kecamatan', [LaravoltController::class, 'get_kecamatan'])->name('get.kecamatan');
Route::get('get-kelurahan', [LaravoltController::class, 'get_kelurahan'])->name('get.kelurahan');
