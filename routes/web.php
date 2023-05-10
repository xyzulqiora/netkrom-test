<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::resource('biodata', BiodataController::class);
Route::get('create', [BiodataController::class, 'create'])->name('biodata-create');
Route::post('/store', [BiodataController::class, 'store'])->name('biodata-store');
Route::get('biodata/{id}', [BiodataController::class, 'show'])->name('biodata-show');

Auth::routes();

Route::group([
    'prefix' => 'office',
    'middleware' => ['auth',]
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group([
        'prefix' => 'daftar-pemesan',
        'middleware' => ['auth',]
    ], function () {
        Route::get('/', [BiodataController::class, 'daftar_pemesan'])->name('daftar-pemesan');
        Route::get('/{id}/edit', [BiodataController::class, 'biodata_edit'])->name('biodata-edit');
        Route::put('/{id}', [BiodataController::class, 'biodata_update'])->name('biodata-update');
        Route::delete('/{id}', [BiodataController::class, 'destroy'])->name('biodata-delete');
    });
});
