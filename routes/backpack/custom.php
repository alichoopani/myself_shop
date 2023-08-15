<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('about-us', 'AboutUsCrudController');
    Route::crud('address', 'AddressCrudController');
    Route::crud('bag', 'BagCrudController');
    Route::crud('car-accessory', 'CarAccessoryCrudController');
    Route::crud('city', 'CityCrudController');
    Route::crud('comment', 'CommentCrudController');
    Route::crud('contact-us', 'ContactUsCrudController');
    Route::crud('faqs', 'FaqsCrudController');
    Route::crud('favorite', 'FavoriteCrudController');
    Route::crud('hat', 'HatCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('like', 'LikeCrudController');
    Route::crud('phone-cover', 'PhoneCoverCrudController');
    Route::crud('province', 'ProvinceCrudController');
    Route::crud('t-shirt', 'TShirtCrudController');
    Route::crud('tuning-part', 'TuningPartCrudController');
    Route::crud('tyre', 'TyreCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('wheel', 'WheelCrudController');
}); // this should be the absolute last line of this file