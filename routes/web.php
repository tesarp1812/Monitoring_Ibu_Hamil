<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;

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
Route::controller(loginController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});
