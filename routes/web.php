<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultController;
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
    return view('consult');
});

Route::get('getPersonData/{dni}',[ConsultController::class,'getPersonData'])->name('getPersonData');
Route::get('getCompanyData/{ruc}',[ConsultController::class,'getCompanyData'])->name('getPersonData');
