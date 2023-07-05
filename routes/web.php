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
    return view('homepage');
});

// Route::get('/homepage', function () {
//     return view('homepage');
// });

//jadwal page
Route::get('/jadwal', function () {
    return view('jadwal');
});

//about page
Route::get('/about', function () {
    return view('about');
});


//route logincontroller
// Route::controller(LoginController::class)->group(function () {
//     Route::get('/login', 'login');
//     Route::post('/login', 'authenticate');
//     Route::get('/logout', 'logout');
// });


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
    Route::get('/biodata/delete/{id}', 'destroy');
});

//subjektif routes
// Route::resource('subjektif', SubjektifController::class);
Route::controller(SubjektifController::class)->group(function () {
    //tambah data
    Route::get('/subjektif/create/{id}', 'create');
    Route::post('/subjektif', 'store');
    //edit data
    Route::get('/subjektif/edit/{id}', 'edit');
    Route::put('/subjektif/update/{id}', 'update');
});

//objektif routes
//Route::resource('objektif', ObjektifController::class);
Route::controller(objektifController::class)->group(function () {
    //tambah data
    Route::get('/objektif/create/{id}', 'create');
    Route::post('/objektif', 'store');
    //
    Route::get('/objektif/create/{id}', 'create');
});

//checkup routes
Route::controller(CheckupController::class)->group(function () {
    Route::get('/checkup/{id}', 'index');
    Route::get('/checkup/create/{id}', 'create');
});
Route::resource('checkup', CheckupController::class);
