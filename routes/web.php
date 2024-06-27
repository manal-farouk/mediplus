<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    // Your routes


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [FrontPages::class, 'home'])->name('home');
Route::get('contactUs', [FrontPages::class, 'contactUs'])->name('contactUs');
Route::get('mySession', [FrontPages::class, 'myVal'])->name('mySession');



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
});
