<?php

use App\Models\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\admin\WriteController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ShortController;
use App\Http\Controllers\admin\ResumeController;
use App\Http\Controllers\admin\LanguageController;
use App\Http\Controllers\admin\CountryController;

Route::any('/register', [HomeController::class,"register"])->name('register');
Route::any('/login', [HomeController::class,"login"])->name('login.user');
Route::get('/locale/{language}', [HomeController::class,"locale"])->name('locale');

Route::get('/', [HomeController::class,"index"])->name('login');
Route::get('/logoute', [HomeController::class,"logoute"])->name('logoute');
Route::get('/clear', [HomeController::class,"clear"])->name('clear');
Route::get('/teachers', [HomeController::class,"teachers"])->name('teachers');


Route::prefix('admin')->namespace('admin')->group(function () {
    Route::get('/login', [AdminController::class,"login"])->name('admin.login');
    Route::get('/check_login', [AdminController::class,"check_login"])->name('admin.check.login');

    // Route::resource('withdrawal', 'WithdrawalController')->middleware(['role:admin']);;;;;;
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('/translate_short/{short}', [ShortController::class,"translate_short"])->name('translate.short');
    Route::resource('user', UserController::class)->middleware(['role:admin']);
    Route::resource('Transaction', Transaction::class)->middleware(['role:admin']);
    Route::resource('language', LanguageController::class)->middleware(['role:admin']);
    Route::resource('country', CountryController::class)->middleware(['role:admin']);
    Route::resource('write', WriteController::class)->middleware(['role:admin']);
    Route::resource('resume', ResumeController::class)->middleware(['role:admin']);
    Route::resource('short', ShortController::class)->middleware(['role:admin']);
    Route::get('/setting_site', [AdminController::class,"setting_site"])->name('setting.site');

});


Route::prefix('panel')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PanelController::class,"dashboard"])->name('panel.dashboard');
    Route::any('/setting', [PanelController::class,"setting"])->name('panel.setting');
    Route::any('/profile', [PanelController::class,"profile"])->name('panel.profile');
    Route::any('/financial', [PanelController::class,"financial"])->name('panel.financial');
    Route::any('/written', [PanelController::class,"written"])->name('panel.written');
    Route::any('/plan', [PanelController::class,"plan"])->name('panel.plan');
    Route::any('/prices', [PanelController::class,"prices"])->name('panel.prices');
    Route::any('/experts', [PanelController::class,"experts"])->name('panel.experts');
    Route::any('/resume', [PanelController::class,"resume"])->name('panel.resume');
    Route::any('/create_resume', [PanelController::class,"create_resume"])->name('panel.create.resume');
    Route::any('/edit_resume/{resume}', [PanelController::class,"edit_resume"])->name('panel.edit.resume');
    Route::any('/resume_destroy/{resume}', [PanelController::class,"resume_destroy"])->name('panel.resume.destroy');
    Route::any('/langs', [PanelController::class,"langs"])->name('panel.langs');
    Route::any('/create_write', [PanelController::class,"create_write"])->name('panel.create.write');
    Route::any('/edit_write/{post}', [PanelController::class,"edit_write"])->name('panel.edit.write');
    Route::post('/remove_write/{post}', [PanelController::class,"remove_write"])->name('panel.remove.write');
    Route::post('/detach_lang/{languages}', [PanelController::class,"detach_lang"])->name('panel.detach.lang');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/send_pay', [PayController::class,"send_pay"])->name('send.pay');
    Route::get('/pay_result', [PayController::class,"pay_result"])->name('pay.result');
    Route::get('/pay_cancel', [PayController::class,"pay_cancel"])->name('pay.cancel');
    Route::get('/pay_success', [PayController::class,"pay_success"])->name('pay.success');
});

