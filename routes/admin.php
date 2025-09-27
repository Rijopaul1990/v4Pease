<?php 
use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Admin\LoginController;

Route::group(['middleware'=>'user_auth'], function(){
    Route::get('/home', [Admin::class, 'index'])->name('home');
    Route::get('/addcouncelor', [Admin::class, 'addcouncelor'])->name('admin.addcouncelor');
    Route::get('/addTime', [Admin::class, 'addTime'])->name('admin.addTime');
    Route::get('/priceSettings', [Admin::class, 'priceSettings'])->name('admin.priceSettings');
    Route::post('/counsellor-save', [Admin::class, 'store'])->name('admin.save');
    Route::post('/storeTime', [Admin::class, 'storeTime'])->name('admin.storeTime');
    Route::post('/addPrice', [Admin::class, 'addPrice'])->name('admin.addPrice');
    
});

Route::post('/get-time-slots', [Admin::class, 'getTimeSlots'])->name('admin.get-time-slots');
Route::post('/get-final-amount', [Admin::class, 'getFinalAmount'])->name('admin.get-final-amount');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/doLogin', [LoginController::class, 'doLogin'])->name('doLogin');