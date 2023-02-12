<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

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
    return view('home');
});

Route::prefix('/formations' )->group(function (){
    Route::get('/qhse' ,
        [FormationController::class , 'qhse']
    )->name('qhse');

    Route::get('/development_web' ,
        [FormationController::class , 'web']
    )->name('development_web');


    Route::get('/paramedical' ,
        [FormationController::class , 'paramedical']
    )->name('paramedical');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
