<?php

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

Route::get('/', function () {return view('index');})->name('home');

Route::get('/about-us', 'App\Http\Controllers\PagesController@aboutUs')->name('aboutUs');
Route::get('/faqs', 'App\Http\Controllers\PagesController@faqs')->name('Faqs');
Route::get( '/contact-us', 'App\Http\Controllers\PagesController@contactUs')->name('contactUs');
Route::get('/wheels', 'App\Http\Controllers\WheelsController@index')->name('wheels');
//Route::get('/wheel/{id}', 'App\Http\Controllers\WheelsController@index')->name('wheelDetail');
Route::get('/bags', 'App\Http\Controllers\BagsController@index')->name('bags');
//Route::get('/bag/{id}', 'App\Http\Controllers\BagsController@index')->name('bagDetail');
Route::get('/tyres', 'App\Http\Controllers\TyresController@index')->name('tyres');
//Route::get('/tyre/{id}', 'App\Http\Controllers\TyresController@index')->name('tyreDetail');
Route::get('/hats', 'App\Http\Controllers\HatsController@index')->name('hats');
//Route::get('/hat/{id}', 'App\Http\Controllers\HatsController@index')->name('hatDetail');
Route::get('/t-shirts', 'App\Http\Controllers\TShirtsController@index')->name('tShirts');
//Route::get('/t-shirt/{id}', 'App\Http\Controllers\T-ShirtController@index')->name('tShirtDetail');
Route::get('')->name('');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
