<?php

use App\Http\Controllers\CountryController;
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

Route::get('/', [CountryController::class, 'index'])->name('country');
Route::get('country/create', [CountryController::class, 'create'])->name('country.create');
Route::post('country/create', [CountryController::class, 'store']);
