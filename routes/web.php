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
Route::post('/contact-us', App\Http\Livewire\ContactUs::class)->name('contactUs');
Route::view('/products', 'products.products')->name('products');
Route::view('/product-detail', 'products.detail')->name('productDetail');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
