<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SubjektifController;
use App\Http\Controllers\ObjektifController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\AuthController;

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

// Route::get('/login', function () {
//     return view('login');
// });

//jadwal page
Route::get('/jadwal', function () {
    return view('jadwal', [
        'title' => "jadwal"
    ]);
});

//about page
Route::get('/about', function () {
    return view('about', [
        'title' => 'jadwal'
    ]);
});


//route Authcontroller
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm');
    Route::post('/user', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);
});


//route Biodatacontroller
// Route::resource('biodata', BiodataController::class);
Route::controller(BiodataController::class)->group(function () {
    Route::get('/biodata', 'index');
    //tambah data
    Route::get('/tambah_biodata', 'create');
    Route::post('/biodata', 'store');
    //edit data
    Route::get('/biodata/edit/{id}', 'edit');
    Route::put('/biodata/update/{id}', 'update');
    //show data objek&subjek
    Route::get('/biodata/show/{id}', 'show');
    //delete
    Route::delete('/biodata/delete/{id}', 'destroy');
    //search data
    Route::get('/biodata/search', 'search');
});

//subjektif routes
// Route::resource('subjektif', SubjektifController::class);
Route::controller(SubjektifController::class)->group(function () {
    Route::get('/subjektif/{id}', 'index');
    //tambah data
    Route::get('/subjektif/create/{id}', 'create');
    Route::post('/subjektif', 'store');
    //edit data
    Route::get('/subjektif/edit/{id}', 'edit');
    Route::put('/subjektif/update/{id}', 'update');
    //hapus data 
    Route::delete('/subjektif/delete/{id}', 'destroy');
});

//objektif routes
//Route::resource('objektif', ObjektifController::class);
Route::controller(objektifController::class)->group(function () {
    //tampil view objektif
    Route::get('/objektif/{id}', 'index');
    //tambah data
    Route::get('/objektif/create/{id}', 'create');
    Route::post('/objektif', 'store');
    //edit data
    Route::get('/objektif/edit/{id}', 'edit');
    Route::put('/objektif/update/{id}', 'update');
    //hapus data 
    Route::delete('/objektif/delete/{id}', 'destroy');
});

//checkup routes
Route::controller(CheckupController::class)->group(function () {
    Route::get('/checkup/{id}', 'index');
    //tambah data
    Route::get('/checkup/create/{id}', 'create');
    Route::post('/checkup', 'store');
});
// Route::resource('checkup', CheckupController::class);
