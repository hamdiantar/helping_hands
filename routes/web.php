<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompliantController as AdminCompliantController;
use App\Http\Controllers\Admin\OpportunityPostController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ReportAdminController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CompliantController as VolCompliantController;
use App\Http\Controllers\VolunteeringEntity\CompliantController as EntityCompliantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Admin\VolunteerController as VolunteerControllerAdmin;
use App\Http\Controllers\Admin\VolunteeringEntityController;
use App\Http\Controllers\VolunteeringEntity\AttendancesController;
use App\Http\Controllers\VolunteeringEntity\CertificationController;
use App\Http\Controllers\VolunteeringEntity\CharacteristicController;
use App\Http\Controllers\VolunteeringEntity\opportunityController;
use App\Http\Controllers\VolunteeringEntity\ReportController;
use App\Http\Controllers\VolunteeringEntity\RequestController;
use App\Http\Controllers\VolunteeringEntity\SubscriptionController;
use App\Http\Controllers\VolunteeringEntity\TaskController;
use App\Http\Controllers\VolunteeringEntity\VolEntityController;
use Illuminate\Support\Facades\Route;

//routes for volunteering Entity
Route::view('/', 'website.home')->name('home');
Route::view('/vol_entity/register', 'website.vol_entity.register')->name('vol_entity.register');
Route::post('/vol_entity/register-submit', [VolEntityController::class, 'register'])->name('vol_entity.register.submit');
Route::get('/vol_entity/list', [HomeController::class, 'index'])->name('vol_entity.list');
Route::get('/vol_entity/{id}/opportunity', [HomeController::class, 'getOpportunities'])->name('vol_entity.opportunity');
Route::view('/vol_entity/pricing', 'website.vol_entity.pricing')->name('vol_entity.pricing');
Route::get('/vol_entity/{id}/show', [HomeController::class, 'showReviews'])->name('vol_entity.show');


Route::get('/verification', [VolunteerController::class, 'verification'])->name('verification');
Route::view('/generate', 'website.generate')->name('generate');
Route::get('generate/{id}', [HomeController::class, 'generateCertification'])->name('generate.certification');

//routes for volunteer
Route::get('/volunteer/register', [VolunteerController::class, 'showRegisterForm'])->name('volunteer.showRegisterForm');
Route::post('/volunteer/register', [VolunteerController::class, 'register'])->name('volunteer.register');
Route::post('/volunteer/login', [VolunteerController::class, 'login'])->name('volunteer.login');
Route::middleware(['auth:volunteer'])->group(function () {
    Route::post('/volunteer/sign-out', [VolunteerController::class, 'signOut'])->name('volunteer.signOut');
    Route::get('/volunteer/profile', [VolunteerController::class, 'profile'])->name('volunteer.profile');
    Route::put('/volunteer/profile', [VolunteerController::class, 'update'])->name('volunteer.update');

    Route::get('/compliant', [VolCompliantController::class, 'getCompliantForm'])->name('compliant');
    Route::post('/compliant', [VolCompliantController::class, 'addCompliant'])->name('compliant.post');

    Route::get('/volunteer/apply/{volId}/{oppId}', [ApplyController::class, 'showApplyForm'])->name('volunteer.showApplyForm');
    Route::post('/volunteer/apply/{volId}/{oppId}', [ApplyController::class, 'apply'])->name('volunteer.apply');
    Route::post('/vol_entity/addReview', [ReviewController::class, 'addReview'])->name('vol_entity.addReview');
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
        Route::get('/Joining-requests', [VolunteeringEntityController::class, 'getJoiningRequests'])->name('Joining.requests');
        Route::post('/sign-out', [AdminController::class, 'signOut'])->name('signOut');
        Route::view('/profile', 'admin.profile')->name('profile');
        Route::resource('volunteers', VolunteerControllerAdmin::class);
        Route::resource('volunteering-entity', VolunteeringEntityController::class);
        Route::get('volunteering-entity/{id}/update-status/{status}', [VolunteeringEntityController::class, 'UpdateStatus'])->name('ve.UpdateStatus');
        Route::resource('compliant', AdminCompliantController::class);
        Route::resource('packages', PackageController::class);
        Route::get('posts', [OpportunityPostController::class, 'getOpportunities'])->name('posts');
        Route::get('posts/{volentityID}/{oppoID}', [OpportunityPostController::class, 'getOpportunitiesDetails'])->name('posts.show');
        Route::post('posts/confirm/{id}', [OpportunityPostController::class, 'confirmPost'])->name('confirmPost');
        Route::get('/growth_report', [ReportAdminController::class, 'growthReport'])->name('growth_report');
        Route::get('/overallSatisfaction', [ReportAdminController::class, 'overallSatisfaction'])->name('overallSatisfaction');
        Route::get('/report-packages', [ReportAdminController::class, 'reportPackages'])->name('report-packages');
        Route::get('/report-complaint', [ReportAdminController::class, 'reportComplaint'])->name('report-complaint');
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
        Route::post('/sign-out', [VolEntityController::class, 'signOut'])->name('signOut');
        Route::put('/profile/update', [VolEntityController::class, 'update'])->name('profile.update');
        Route::resource('opportunities', opportunityController::class);
        Route::resource('opportunities/tasks', TaskController::class);

        Route::get('opportunities/{opportunity}/characteristic', [CharacteristicController::class, 'index'])
            ->name('opportunities.characteristic.index');
        Route::get('opportunities/{opportunity}/characteristic/create', [CharacteristicController::class, 'create'])
            ->name('opportunities.characteristic.create');
        Route::post('opportunities/{opportunity}/characteristic', [CharacteristicController::class, 'store'])
            ->name('opportunities.characteristic.store');
        Route::get('opportunities/{opportunity}/characteristic/{characteristic}', [CharacteristicController::class, 'edit'])
            ->name('opportunities.characteristic.edit');
        Route::put('opportunities/{opportunity}/characteristic/{characteristic}', [CharacteristicController::class, 'update'])
            ->name('opportunities.characteristic.update');
        Route::delete('opportunities/{opportunity}/characteristic/{characteristic}', [CharacteristicController::class, 'destroy'])
            ->name('opportunities.characteristic.destroy');


        Route::get('opportunities/{opportunity}/task', [TaskController::class, 'index'])->name('opportunities.tasks.index');
        Route::get('opportunities/{opportunity}/tasks/create', [TaskController::class, 'create'])->name('opportunities.tasks.create');
        Route::post('opportunities/{opportunity}/tasks', [TaskController::class, 'store'])->name('opportunities.tasks.store');
        Route::get('opportunities/{opportunity}/tasks/{task}', [TaskController::class, 'edit'])->name('opportunities.tasks.edit');
        Route::put('opportunities/{opportunity}/tasks/{task}', [TaskController::class, 'update'])->name('opportunities.tasks.update');
        Route::delete('opportunities/{opportunity}/tasks/{task}', [TaskController::class, 'destroy'])->name('opportunities.tasks.destroy');

        Route::get('opportunities/{opportunity}/attendances', [AttendancesController::class, 'index'])->name('opportunities.attendances.index');
        Route::get('opportunities/{opportunity}/attendances/create', [AttendancesController::class, 'create'])->name('opportunities.attendances.create');
        Route::post('opportunities/{opportunity}/attendances', [AttendancesController::class, 'store'])->name('opportunities.attendances.store');
        Route::get('opportunities/{opportunity}/attendances/{attendence}', [AttendancesController::class, 'edit'])->name('opportunities.attendances.edit');
        Route::put('opportunities/{opportunity}/attendances/{attendence}', [AttendancesController::class, 'update'])->name('opportunities.attendances.update');
        Route::delete('opportunities/{opportunity}/attendances/{attendence}', [AttendancesController::class, 'destroy'])->name('opportunities.attendances.destroy');

        Route::get('certifications', [CertificationController::class, 'getOpp'])->name('certifications');
        Route::get('opportunities/{opportunity}/certifications', [CertificationController::class, 'index'])->name('opportunities.certifications.index');
        Route::get('opportunities/{opportunity}/certifications/create', [CertificationController::class, 'create'])->name('opportunities.certifications.create');
        Route::post('opportunities/{opportunity}/certifications', [CertificationController::class, 'store'])->name('opportunities.certifications.store');
        Route::get('opportunities/{opportunity}/certifications/{certification}', [CertificationController::class, 'edit'])->name('opportunities.certifications.edit');
        Route::put('opportunities/{opportunity}/certifications/{certification}', [CertificationController::class, 'update'])->name('opportunities.certifications.update');
        Route::delete('opportunities/{opportunity}/certifications/{certification}', [CertificationController::class, 'destroy'])->name('opportunities.certifications.destroy');


        Route::get('requests', [RequestController::class, 'index'])->name('requests.index');
        Route::get('requests/{id}', [RequestController::class, 'UpdateStatus'])->name('requests.UpdateStatus');
        Route::view('feedbacks', 'volunteering-entity.feedback')->name('feedback');
        Route::get('subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
        Route::get('subscription/create', [SubscriptionController::class, 'create'])->name('subscription.create');
        Route::post('subscription', [SubscriptionController::class, 'store'])->name('subscription.store');


        Route::view('attendance_report', 'volunteering-entity.opportunities.attendance_report')->name('attendance_report');
        Route::get('performance_report', [ReportController::class, 'showPerformanceReport'])->name('performance_report');

        Route::get('requests/volunteer/{id}', [EntityCompliantController::class, 'getVolunteerWithComplaint'])->name('getVolunteerWithComplaint');
        Route::resource('compliant', EntityCompliantController::class);
    });
});
//Auth::routes();
