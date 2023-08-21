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

Route::get('/car-accessories', 'App\Http\Controllers\AccessoryController@carAccessoryIndex')->name('carAccessory');
Route::get('/car-accessory/{id}', 'App\Http\Controllers\AccessoryController@carAccessoryDetail')->name('carAccessoryDetail');

Route::get('/phone-accessories', 'App\Http\Controllers\AccessoryController@phoneAccessoryIndex')->name('phoneAccessory');
Route::get('/phone-accessory/{id}', 'App\Http\Controllers\AccessoryController@phoneAccessoryDetail')->name('phoneAccessoryDetail');

Route::get('/wheels', 'App\Http\Controllers\WheelsController@index')->name('wheels');
Route::get('/wheel/{id}', 'App\Http\Controllers\WheelsController@wheelDetail')->name('wheelDetail');

Route::get('/bags', 'App\Http\Controllers\BagsController@index')->name('bags');
Route::get('/bag/{id}', 'App\Http\Controllers\BagsController@bagDetail')->name('bagDetail');

Route::get('/tyres', 'App\Http\Controllers\TyresController@index')->name('tyres');
Route::get('/tyre/{id}', 'App\Http\Controllers\TyresController@tyreDetail')->name('tyreDetail');

Route::get('/hats', 'App\Http\Controllers\HatsController@index')->name('hats');
Route::get('/hat/{id}', 'App\Http\Controllers\HatsController@hatDetail')->name('hatDetail');

Route::get('/t-shirts', 'App\Http\Controllers\TShirtsController@index')->name('tShirts');
Route::get('/t-shirt/{id}', 'App\Http\Controllers\TShirtsController@tShirtDetail')->name('tShirtDetail');

Route::get('/headers', 'App\Http\Controllers\HeadersController@index')->name('headers');
Route::get('/headers/{id}', 'App\Http\Controllers\HeadersController@headersDetail')->name('headersDetail');

Route::get('/ecus', 'App\Http\Controllers\EcuController@index')->name('ecus');
Route::get('/ecu/{id}', 'App\Http\Controllers\EcuController@ecuDetail')->name('ecuDetail');

Route::get('/cam-shafts','App\Http\Controllers\CamShaftController@index')->name('camShafts');
Route::get('/cam-shaft/{id}','App\Http\Controllers\CamShaftController@camShaftDetail')->name('camShaftDetail');

Route::get('/crank-shafts','App\Http\Controllers\CrankShaftController@index')->name('crankShafts');
Route::get('/crank-shaft/{id}','App\Http\Controllers\CrankShaftController@crankShaftDetail')->name('crankShaftDetail');

Route::get('/valves','App\Http\Controllers\ValveController@index')->name('valves');
Route::get('/valve/{id}','App\Http\Controllers\ValveController@valveDetail')->name('valveDetail');

Route::get('/pistons','App\Http\Controllers\PistonController@index')->name('pistons');
Route::get('/piston/{id}','App\Http\Controllers\PistonController@pistonDetail')->name('pistonDetail');

Route::get('/retainers','App\Http\Controllers\RetainerController@index')->name('retainers');
Route::get('/retainer/{id}','App\Http\Controllers\RetainerController@retainerDetail')->name('retainerDetail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
