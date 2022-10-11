<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\volunteering_entity\opportunityController;
use Illuminate\Support\Facades\Route;

//routes for vol_entity
Route::view('/', 'website.home');
Route::view('/vol_entity/register', 'website.vol_entity.register')->name('vol_entity.register');
Route::view('/vol_entity/list', 'website.vol_entity.list')->name('vol_entity.list');
Route::view('/vol_entity/opportunity', 'website.vol_entity.opportunity')->name('vol_entity.opportunity');
//routes for vol
Route::view('/vol/register', 'website.vol.register')->name('vol.register');

//routes for admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.home');
    Route::view('/profile', 'admin.profile')->name('profile');
    Route::view('login', 'admin.auth.login')->name('login');
    Route::resource('opportunities', UserController::class);
});
//routes for admin
Route::prefix('volunteering_entity')->name('volunteering_entity.')->group(function () {
    Route::view('/', 'vol_entity.home');
    Route::view('/profile', 'vol_entity.profile')->name('profile');
    Route::view('login', 'vol_entity.auth.login')->name('login');
    Route::resource('opportunities', opportunityController::class);
});
Auth::routes();
