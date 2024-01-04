<?php

use Illuminate\Support\Facades\Route;

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

// Manual Login
Route::controller(App\Http\Controllers\Auth\LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('authenticate', 'authenticate')->name('authenticate');
});
Route::controller(App\Http\Controllers\Auth\RegisterController::class)->group(function () {
    Route::get('auth/register', 'create')->name('auth.register');
    Route::post('auth/store', 'store')->name('auth.store');
});
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');

// Login Using SSO
Route::controller(App\Http\Controllers\Auth\SsoController::class)->group(function () {
    Route::get('redirect', 'redirect')->name('redirect');
    Route::get('callback', 'callback')->name('callback');
    Route::get('signout', 'signout')->name('signout')->middleware('auth');
});

Route::get('home', function () {
    return view('home');
})->name('home')->middleware('auth');



Route::get('data-rekening/print', ['App\Http\Controllers\DataRekeningController', 'print'])->name('data-rekening.print')->middleware('can:operator');

Route::resource('data-rekening', App\Http\Controllers\DataRekeningController::class)->middleware('can:operator');
Route::resource('user', App\Http\Controllers\UserController::class)->middleware('can:supervisor');

Route::get('grafik', 'App\Http\Controllers\ChartController@index')->name('grafik');

Route::resource('referensi-bank', App\Http\Controllers\ReferensiBankController::class)->middleware('can:supervisor');
Route::resource('rekening-koran', App\Http\Controllers\RekeningKoranController::class)->middleware('can:supervisor');
Route::resource('buku-kas-umum', App\Http\Controllers\BukuKasUmumController::class)->middleware('can:supervisor');
Route::resource('ref-nomor-nota', App\Http\Controllers\RefNomorNotaController::class);
Route::resource('menu', App\Http\Controllers\MenuController::class)->middleware('can:administrator');

Route::get('bni', 'App\Http\Controllers\DataBniController@index')->name('bni.index');
Route::get('bni/{bni}', 'App\Http\Controllers\DataBniController@proses')->name('bni.proses');
Route::get('mandiri', 'App\Http\Controllers\DataMandiriController@index')->name('mandiri.index');
Route::get('mandiri/{mandiri}', 'App\Http\Controllers\DataMandiriController@proses')->name('mandiri.proses');


Route::resource('data-coba', App\Http\Controllers\DataCobaController::class);
Route::resource('tes', App\Http\Controllers\TesController::class);
Route::resource('nota', App\Http\Controllers\NotaController::class);
Route::resource('ref-nota', App\Http\Controllers\RefNotaController::class);
Route::resource('data-nota', App\Http\Controllers\DataNotaController::class);
Route::resource('data-nota', App\Http\Controllers\DataNotaController::class);
Route::resource('data-test-logic', App\Http\Controllers\DataTestLogicController::class);

Route::get('gfx', App\Http\Controllers\GfxController::class);
