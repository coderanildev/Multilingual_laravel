<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\AdminController;
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
    return view('welcome'); 
})->name('welcome');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/tender', [DashboardController::class, 'tender'])->name('tender');
        Route::get('/jobs', [DashboardController::class, 'jobs'])->name('jobs');
        Route::get('/notifications', [DashboardController::class, 'notifications'])->name('notifications');
        Route::get('/announcements', [DashboardController::class, 'announcements'])->name('announcements');
        Route::get('/employees', [DashboardController::class, 'employees'])->name('employees');
        Route::get('/whats-new', [DashboardController::class, 'whatsNew'])->name('whats-new');

        Route::get('/language', [AdminController::class, 'language'])->name('language');
        Route::post('/language/store', [AdminController::class, 'storeLanguage'])->name('language.store');
        Route::get('/language/edit/{id}', [AdminController::class, 'languageEdit'])->name('language.edit');
        Route::put('/language/update/{id}', [AdminController::class, 'editLanguage'])->name('language.update');

        Route::delete('/language/delete/{id}', [AdminController::class, 'deleteLanguage'])->name('language.delete');

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
