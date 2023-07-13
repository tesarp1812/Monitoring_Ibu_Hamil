<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SubjektifController;
use App\Http\Controllers\ObjektifController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;

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
    return view('homepage', [
        'title' => "homepage"
    ]);
});

//jadwal page
Route::get('/jadwal', function () {
    return view('jadwal', [
        'title' => "jadwal"
    ])->middleware('auth');
});

//about page
Route::get('/about', function () {
    return view('about', [
        'title' => 'jadwal'
    ]);
});

//route Logincontroller || sistem login
Route::controller(loginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

//route Dashboard
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware('auth');
});


//route Biodatacontroller
Route::controller(BiodataController::class)->group(function () {
    Route::get('/biodata', 'index')->middleware('auth');
    //tambah data
    Route::get('/tambah_biodata', 'create')->middleware('auth');
    Route::post('/biodata', 'store')->middleware('auth');
    //edit data
    Route::get('/biodata/edit/{id}', 'edit')->middleware('auth');
    Route::put('/biodata/update/{id}', 'update')->middleware('auth');
    //show data objek&subjek
    Route::get('/biodata/show/{id}', 'show')->middleware('auth');
    //delete
    Route::delete('/biodata/delete/{id}', 'destroy')->middleware('auth');
    //search data
    Route::get('/biodata/search', 'search')->middleware('auth');
});

//subjektif routes
Route::controller(SubjektifController::class)->group(function () {
    Route::get('/subjektif/{id}', 'index')->middleware('auth');
    //tambah data
    Route::get('/subjektif/create/{id}', 'create')->middleware('auth');
    Route::post('/subjektif', 'store');
    //edit data
    Route::get('/subjektif/edit/{id}', 'edit')->middleware('auth');
    Route::put('/subjektif/update/{id}', 'update')->middleware('auth');
    //hapus data 
    Route::delete('/subjektif/delete/{id}', 'destroy')->middleware('auth');
});

//objektif routes
Route::controller(objektifController::class)->group(function () {
    //tampil view objektif
    Route::get('/objektif/{id}', 'index')->middleware('auth');
    //tambah data
    Route::get('/objektif/create/{id}', 'create')->middleware('auth');
    Route::post('/objektif', 'store')->middleware('auth');
    //edit data
    Route::get('/objektif/edit/{id}', 'edit')->middleware('auth');
    Route::put('/objektif/update/{id}', 'update')->middleware('auth');
    //hapus data 
    Route::delete('/objektif/delete/{id}', 'destroy');
});

//checkup routes
Route::controller(CheckupController::class)->group(function () {
    Route::get('/checkup/{id}', 'index')->middleware('auth');
    //tambah data
    Route::get('/checkup/create/{id}', 'create')->middleware('auth');
    Route::post('/checkup', 'store')->middleware('auth');
});

//jadwal routes
Route::controller(JadwalController::class)->group(function () {
    Route::get('/jadwal', 'index');
    //Route::get('/jadwal', 'jadwal');
});
