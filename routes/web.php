<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SubjektifController;
use App\Http\Controllers\ObjektifController;
use App\Http\Controllers\CheckupController;

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

Route::get('/homepage', function () {
    return view('homepage');
});

//jadwal page
Route::get('/jadwal', function () {
    return view('jadwal');
});

//route page
Route::controller(PageController::class)->group(function () {
    // Route::get('/login', 'login');
});

//route logincontroller
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});

Route::get('/cek', function () {
    return view('form_tambah_biodata');
});

//route Biodatacontroller
Route::resource('biodata', BiodataController::class);
// Route::controller(BiodataController::class)->group(function () {
//     Route::get('/biodata', 'index');
//     Route::get('/tambah_biodata', 'create');
//     Route::post('/biodata', 'store');
//     Route::delete('/biodata/delete/{id}', 'destroy');
// });

//subjektif routes
Route::resource('subjektif', SubjektifController::class);
// Route::resource('subjektif', SubjektifController::class)->only('show')->middleware('can:isSemua');
Route::controller(SubjektifController::class)->group(function () {
    Route::get('/subjektif/create/{id}', 'create');
});

//objektif routes
Route::resource('objektif', ObjektifController::class);
// Route::resource('objektif', ObjektifController::class)->only('show')->middleware('can:isSemua');
Route::controller(objektifController::class)->group(function () {
    Route::get('/objektif/create/{id}', 'create');
});

//checkup routes
Route::controller(CheckupController::class)->group(function () {
    Route::get('/checkup/{id}', 'index');
});
Route::controller(CheckupController::class)->group(function () {
    Route::get('/checkup/create/{id}', 'create');
});
