<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompliantController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Admin\VolunteerController as VolunteerControllerAdmin;
use App\Http\Controllers\Admin\VolunteeringEntityController;
use App\Http\Controllers\VolunteeringEntity\CharacteristicController;
use App\Http\Controllers\VolunteeringEntity\opportunityController;
use App\Http\Controllers\VolunteeringEntity\TaskController;
use App\Http\Controllers\VolunteeringEntity\VolEntityController;
use Illuminate\Support\Facades\Route;

//routes for volunteering Entity
Route::view('/', 'website.home')->name('home');
Route::view('/vol_entity/register', 'website.vol_entity.register')->name('vol_entity.register');
Route::post('/vol_entity/register-submit', [VolEntityController::class, 'register'])->name('vol_entity.register.submit');
Route::view('/vol_entity/list', 'website.vol_entity.list')->name('vol_entity.list');
Route::view('/vol_entity/opportunity', 'website.vol_entity.opportunity')->name('vol_entity.opportunity');
Route::view('/vol_entity/pricing', 'website.vol_entity.pricing')->name('vol_entity.pricing');
Route::view('/vol_entity/show', 'website.vol_entity.show')->name('vol_entity.show');

Route::view('/compliant', 'website.compliant')->name('compliant');
Route::view('/verification', 'website.verification')->name('verification');
Route::view('/generate', 'website.generate')->name('generate');

//routes for volunteer
Route::get('/volunteer/register', [VolunteerController::class, 'showRegisterForm'])->name('volunteer.showRegisterForm');
Route::post('/volunteer/register', [VolunteerController::class, 'register'])->name('volunteer.register');
Route::post('/volunteer/login', [VolunteerController::class, 'login'])->name('volunteer.login');
Route::middleware(['auth:volunteer'])->group(function () {
    Route::post('/volunteer/sign-out', [VolunteerController::class, 'signOut'])->name('volunteer.signOut');
    Route::get('/volunteer/profile', [VolunteerController::class, 'profile'])->name('volunteer.profile');
    Route::put('/volunteer/profile', [VolunteerController::class, 'update'])->name('volunteer.update');
});

//routes for admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
        Route::get('/login',  [AdminController::class, 'showLoginForm'])->name('showLoginForm');
        Route::post('/login', [AdminController::class, 'login'])->name('login');
    });
    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/', [AdminController::class, 'dashboard']);
        Route::put('/profile/update', [AdminController::class, 'update'])->name('profile.update');
        Route::post('/sign-out', [AdminController::class, 'signOut'])->name('signOut');
        Route::view('/profile', 'admin.profile')->name('profile');
        Route::resource('volunteers', VolunteerControllerAdmin::class);
        Route::resource('volunteering-entity', VolunteeringEntityController::class);
        Route::resource('compliant', CompliantController::class);
        Route::view('/growth_report', 'admin.test')->name('growth_report');
        Route::view('/trend_report', 'admin.test2')->name('trend_report');
    });
});

//routes for volunteering entity
Route::prefix('volunteering-entity')->name('volunteering-entity.')->group(function () {
    Route::middleware(['guest:volEntity'])->group(function () {
        Route::get('/login',  [VolEntityController::class, 'showLoginForm'])->name('showLoginForm');
        Route::post('login', [VolEntityController::class, 'login'])->name('login');
    });
    Route::middleware(['auth:volEntity'])->group(function () {
        Route::get('/', [VolEntityController::class, 'dashboard']);
        Route::view('/profile', 'volunteering-entity.profile')->name('profile');

        Route::resource('opportunities', opportunityController::class);
        Route::resource('tasks', TaskController::class);
        Route::resource('characteristic', CharacteristicController::class);
        Route::view('attendance_report', 'volunteering-entity.opportunities.attendance_report')->name('attendance_report');
        Route::view('performance_report', 'volunteering-entity.performance_report')->name('performance_report');
    });
});
//Auth::routes();
