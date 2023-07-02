<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\BiodataController;

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
// Route::controller(loginController::class)->group(function () {
//     Route::get('/login', 'login');
//     Route::post('/login', 'authenticate');
//     Route::get('/logout', 'logout');
// });

Route::get('/cek', function (){
    return view('form_tambah_biodata');
});

//route Biodatacontroller
Route::controller(BiodataController::class)->group(function () {
    Route::get('/biodata', 'index');
    Route::get('/tambah_biodata', 'create');
    Route::post('/biodata', 'store');
    Route::delete('/biodata/delete/{id}', 'destroy'); 
});
