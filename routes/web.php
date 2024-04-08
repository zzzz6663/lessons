<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LanguageController;
use App\Http\Controllers\admin\ShortController;
use App\Models\Language;

Route::get('/{language}',function(Language $language){
    session()->put("locale",$language->local);
    return back();
})->name("locale") ;
Route::get('/', [HomeController::class,"index"])->name('login');
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

});

