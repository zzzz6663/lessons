<?php

use App\Models\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ShortController;
use App\Http\Controllers\admin\LanguageController;
use App\Http\Controllers\PayController;

Route::any('/register', [HomeController::class,"register"])->name('register');
Route::any('/login', [HomeController::class,"login"])->name('login.user');
Route::get('/locale/{language}', [HomeController::class,"locale"])->name('locale');

Route::get('/', [HomeController::class,"index"])->name('login');
Route::get('/logoute', [HomeController::class,"logoute"])->name('logoute');
Route::get('/clear', [HomeController::class,"clear"])->name('clear');


Route::prefix('admin')->namespace('admin')->group(function () {
    Route::get('/login', [AdminController::class,"login"])->name('admin.login');
    Route::get('/check_login', [AdminController::class,"check_login"])->name('admin.check.login');

    // Route::resource('withdrawal', 'WithdrawalController')->middleware(['role:admin']);;;;;;
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('/translate_short/{short}', [ShortController::class,"translate_short"])->name('translate.short');
    Route::resource('user', UserController::class)->middleware(['role:admin']);
    Route::resource('language', LanguageController::class)->middleware(['role:admin']);
    Route::resource('short', ShortController::class)->middleware(['role:admin']);
    Route::get('/setting_site', [AdminController::class,"setting_site"])->name('setting.site');

});


Route::prefix('panel')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PanelController::class,"dashboard"])->name('panel.dashboard');
    Route::any('/setting', [PanelController::class,"setting"])->name('panel.setting');
    Route::any('/profile', [PanelController::class,"profile"])->name('panel.profile');
    Route::any('/financial', [PanelController::class,"financial"])->name('panel.financial');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/send_pay', [PayController::class,"send_pay"])->name('send.pay');
    Route::get('/pay_result', [PanelController::class,"pay_result"])->name('pay.result');
});

