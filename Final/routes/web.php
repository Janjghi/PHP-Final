<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/applicants', [\App\Http\Controllers\ApplicantsController::class, 'index'])->name('applicants.all');

Route::get('/applicants/{applicants}/edit', [\App\Http\Controllers\ApplicantsController::class, 'edit'])->name('applicants.edit');

Route::put('/applicants/{applicants}/update', [\App\Http\Controllers\ApplicantsController::class, 'update'])->name('applicants.update');
