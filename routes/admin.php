<?php 
use App\Http\Controllers\Admin\admin;
use App\Http\Controllers\Admin\LoginController;

Route::group(['middleware'=>'user_auth'], function(){
   Route::get('/home', [admin::class, 'index'])->name('home');
    Route::get('/bookings', [admin::class, 'bookings'])->name('admin.bookings');
    Route::get('/quotations', [admin::class, 'quotations'])->name('admin.quotations');
    Route::get('/addcouncelor', [admin::class, 'addcouncelor'])->name('admin.addcouncelor');
    Route::get('/viewCounsellors', [admin::class, 'viewCounsellors'])->name('admin.viewCounsellors');
    Route::get('/counsellor/edit/{id}', [admin::class, 'editCounsellor'])->name('admin.counsellor.edit');
    Route::put('/counsellor/update/{id}', [admin::class, 'updateCounsellor'])->name('admin.counsellor.update');
    Route::delete('/counsellor/{id}', [admin::class, 'deleteCounsellor'])->name('admin.counsellor.delete');
    Route::get('/addBlog', [admin::class, 'addBlog'])->name('admin.addBlog');
    Route::get('/viewBlogs', [admin::class, 'viewBlogs'])->name('admin.viewBlogs');
    Route::get('/blog/edit/{id}', [admin::class, 'editBlog'])->name('admin.blog.edit');
    Route::put('/blog/update/{id}', [admin::class, 'updateBlog'])->name('admin.blog.update');
    Route::delete('/blog/{id}', [admin::class, 'deleteBlog'])->name('admin.blog.delete');
    Route::get('/addSocialPost', [admin::class, 'addSocialPost'])->name('admin.addSocialPost');
    Route::post('/social-post-save', [admin::class, 'storeSocialPost'])->name('admin.socialPost.save');
    Route::get('/viewSocialPosts', [admin::class, 'viewSocialPosts'])->name('admin.viewSocialPosts');
    Route::delete('/social-post/{id}', [admin::class, 'deleteSocialPost'])->name('admin.socialPost.delete');
    Route::get('/careerApplications', [admin::class, 'careerApplications'])->name('admin.careerApplications');
    Route::get('/career/download/{id}', [admin::class, 'downloadResume'])->name('admin.career.download');
    Route::get('/addTime', [admin::class, 'addTime'])->name('admin.addTime');
    Route::get('/priceSettings', [admin::class, 'priceSettings'])->name('admin.priceSettings');
    Route::post('/counsellor-save', [admin::class, 'store'])->name('admin.save');
    Route::post('/blog-save', [admin::class, 'storeBlog'])->name('admin.blog.save');
    Route::post('/storeTime', [admin::class, 'storeTime'])->name('admin.storeTime');
    Route::post('/addPrice', [admin::class, 'addPrice'])->name('admin.addPrice');
    
});

Route::post('/get-time-slots', [admin::class, 'getTimeSlots'])->name('admin.get-time-slots');
Route::post('/get-final-amount', [admin::class, 'getFinalAmount'])->name('admin.get-final-amount');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/doLogin', [LoginController::class, 'doLogin'])->name('doLogin');