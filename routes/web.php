<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DeletedCourseController;
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
Route::get('country/{country}/edit', [CountryController::class, 'edit'])->name('country.edit');
// Route::post('country/{country}/edit', [CountryController::class, 'update']);
Route::patch('country/{country}/edit', [CountryController::class, 'update']);
// Route::post('country/{country}/destroy', [CountryController::class, 'destroy'])->name('country.destroy');
Route::delete('country/{country}/destroy', [CountryController::class, 'destroy'])->name('country.destroy');

Route::get('country/deleted', [DeletedCourseController::class, 'index'])->name('country.deleted');
Route::patch('country/{id}/restore', [DeletedCourseController::class, 'restore'])->name('country.restore');
Route::delete('country/{id}/delete', [DeletedCourseController::class, 'delete'])->name('country.delete');
