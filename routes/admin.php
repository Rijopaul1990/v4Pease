<?php 
use App\Http\Controllers\Admin\Admin;

Route::get('/home', [Admin::class, 'index'])->name('admin.home');
Route::get('/addcouncelor', [Admin::class, 'addcouncelor'])->name('admin.addcouncelor');
Route::get('/addTime', [Admin::class, 'addTime'])->name('admin.addTime');
Route::get('/priceSettings', [Admin::class, 'priceSettings'])->name('admin.priceSettings');
Route::post('/counsellor-save', [Admin::class, 'store'])->name('admin.save');
Route::post('/storeTime', [Admin::class, 'storeTime'])->name('admin.storeTime');
Route::post('/addPrice', [Admin::class, 'addPrice'])->name('admin.addPrice');
Route::post('/get-time-slots', [Admin::class, 'getTimeSlots'])->name('admin.get-time-slots');