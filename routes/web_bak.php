<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::post('/career/submit', [CareerController::class, 'submit'])->name('career.submit');

Route::get('/contactus', function () {
    return view('contactus');
});

Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/counselor', function () {
    return view('counselor');
});

Route::get('/termsAndConditions', function () {
    return view('terms_and_conditions');
});

// Route::get('/slotBooking', function () {
//     return view('slotBooking');
// });

Route::get('/slotBooking', [Controller::class, 'index']);
Route::post('/saveBookingData', [BookingController::class, 'saveBookingData']);
Route::post('/payment', [RazorpayController::class, 'payment']);
Route::post('/success', [RazorpayController::class, 'success'])->name('razorpay.success');
Route::get('/failure', [RazorpayController::class, 'failure'])->name('razorpay.failure');
//Route::post('/get-time-slots', [Controller::class, 'getTimeSlots']);
// Route::post('/get-time-slots', [Controller::class, 'getTimeSlots'])->name('web.getTimeSlots');





