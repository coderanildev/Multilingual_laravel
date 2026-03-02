<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\TenderController;
use App\Http\Controllers\Auth\JobController;
use App\Http\Controllers\Auth\NewnotificationController;
use App\Http\Controllers\Auth\NewannouncementController; 
use App\Http\Controllers\Auth\WhatsNewController;
use App\Http\Controllers\Auth\EmployeeController;
use App\Http\Controllers\Auth\SliderController;
use App\Http\Controllers\FacilitiesController;

use App\Http\Controllers\LangSwitchController;


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

Route::get('/', function () {
    if (!Session::has('sess_lang')) {
        Session::put('sess_lang', 'hindi'); // default language
    }
    return view('frontend.home'); 
})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/jobs', [DashboardController::class, 'jobs'])->name('jobs');
    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('notifications');
    Route::get('/announcements', [DashboardController::class, 'announcements'])->name('announcements');

    // language CRUD
    Route::get('/language', [AdminController::class, 'language'])->name('language');
    Route::post('/language/store', [AdminController::class, 'storeLanguage'])->name('language.store');
    Route::get('/language/edit/{id}', [AdminController::class, 'languageEdit'])->name('language.edit');
    Route::put('/language/update/{id}', [AdminController::class, 'editLanguage'])->name('language.update');
    Route::delete('/language/delete/{id}', [AdminController::class, 'deleteLanguage'])->name('language.delete');
    
    // Tender CRUD
    Route::get('/tender', [TenderController::class, 'index'])->name('tender.index');
    Route::post('/tender/store', [TenderController::class, 'store'])->name('tender.store');
    Route::post('/tender/status-change', [TenderController::class, 'statusChange'])->name('tender.status');
    Route::get('/tender/edit/{id}', [TenderController::class, 'edit'])->name('tender.edit');
    Route::post('/tender/update/{id}', [TenderController::class, 'update'])->name('tender.update');
    Route::delete('/tender/delete/{id}', [TenderController::class, 'delete'])->name('tender.delete');

    // Job CRUD 
    Route::get('/job', [JobController::class, 'index'])->name('job.index');
    Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
    Route::post('/job/status-change', [JobController::class, 'statusChange'])->name('job.status');
    Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('job.edit');
    Route::post('/job/update/{id}', [JobController::class, 'update'])->name('job.update');
    Route::delete('/job/delete/{id}', [JobController::class, 'delete'])->name('job.delete');

    // Newnotification CRUD
    Route::get('/newnotification', [NewnotificationController::class, 'index'])->name('newnotification.index');
    Route::post('/newnotification/store', [NewnotificationController::class, 'store'])->name('newnotification.store');
    Route::post('/newnotification/status-change', [NewnotificationController::class, 'statusChange'])->name('newnotification.status');
    Route::get('/newnotification/edit/{id}', [NewnotificationController::class, 'edit'])->name('newnotification.edit');
    Route::post('/newnotification/update/{id}', [NewnotificationController::class, 'update'])->name('newnotification.update');
    Route::delete('/newnotification/delete/{id}', [NewnotificationController::class, 'delete'])->name('newnotification.delete');
    
    // Newannouncement CRUD
    Route::get('/newannouncement', [NewannouncementController::class, 'index'])->name('newannouncement.index');
    Route::post('/newannouncement/store', [NewannouncementController::class, 'store'])->name('newannouncement.store');
    Route::post('/newannouncement/status-change', [NewannouncementController::class, 'statusChange'])->name('newannouncement.status');
    Route::get('/newannouncement/edit/{id}', [NewannouncementController::class, 'edit'])->name('newannouncement.edit');
    Route::post('/newannouncement/update/{id}', [NewannouncementController::class, 'update'])->name('newannouncement.update');
    Route::delete('/newannouncement/delete/{id}', [NewannouncementController::class, 'delete'])->name('newannouncement.delete');
    
    // Slider CRUD
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::post('/slider/status-change', [SliderController::class, 'statusChange'])->name('slider.status');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
    Route::delete('/slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
    
    // whatsnew CRUD
    Route::get('whatsnew', [WhatsNewController::class, 'index'])->name('whatsnew.index');
    Route::post('whatsnew/store', [WhatsNewController::class, 'store'])->name('whatsnew.store');
    Route::post('whatsnew/status-change', [WhatsNewController::class, 'statusChange'])->name('whatsnew.status');
    Route::delete('whatsnew/{id}', [WhatsNewController::class, 'destroy'])->name('whatsnew.delete');
    Route::get('whatsnew/edit/{id}', [WhatsNewController::class, 'edit'])->name('whatsnew.edit');
    Route::post('whatsnew/update/{id}', [WhatsNewController::class, 'update'])->name('whatsnew.update');

    // employees CRUD
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::post('/employees/update/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::post('/employees/crop-image', [EmployeeController::class, 'cropImage'])->name('employees.crop');
    Route::post('/employees/delete-crop-image', [EmployeeController::class, 'deleteCropImage'])->name('employees.deleteCrop');
    Route::delete('/employees/delete/{id}', [EmployeeController::class, 'destroy'])->name('employees.delete');
    Route::get('/employees/view/{id}', [EmployeeController::class, 'view'])->name('employees.view');

});

Route::prefix('facilities')->group(function () {

    Route::get('/rmham', [FacilitiesController::class, 'rmham'])
        ->name('facilities.rmham');

    Route::get('/dirf', [FacilitiesController::class, 'dirf'])
        ->name('facilities.dirf');

    Route::get('/avs', [FacilitiesController::class, 'avs'])
        ->name('facilities.avs');

    Route::get('/printproduction', [FacilitiesController::class, 'printproduction'])
        ->name('facilities.printproduction');

});




Route::get('/langswitch/switchlanguage', 
    [LangSwitchController::class, 'switchLanguage']
)->name('lang.switch');

Route::post('/langswitch/translationcheck', 
    [LangSwitchController::class, 'translationCheck']
)->name('lang.translation.check');
