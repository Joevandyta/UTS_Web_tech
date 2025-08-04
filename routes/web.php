<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;


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


Route::get('/dashboard', [DataController::class,'dashdata'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/portofolio', [DataController::class,'data'])->name('data');
Route::get('/insert', [DataController::class,'insert'])->name('insert');

Route::view('/about','about' )->name('about');