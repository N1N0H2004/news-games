<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoController;

use App\Http\Controllers\ProfileController;
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
//Route::get('/dash', function () {
//    return redirect()->to('/news');
//});
//
//Route::get('/news', function () {
//    return view('news');
//});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Verwijder de 'auth' middleware uit deze route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("artikels", ArtikelController::class);
Route::resource("tags", tagController::class);
Route::resource("games", GameController::class);
Route::resource("categories", CategoryController::class);
Route::resource("photos", PhotoController::class);


require __DIR__.'/auth.php';
