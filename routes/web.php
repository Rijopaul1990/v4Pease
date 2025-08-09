<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/counselor', function () {
    return view('counselor');
});

// Route::get('/slotBooking', function () {
//     return view('slotBooking');
// });

Route::get('/slotBooking', [Controller::class, 'index']);
//Route::post('/get-time-slots', [Controller::class, 'getTimeSlots']);
// Route::post('/get-time-slots', [Controller::class, 'getTimeSlots'])->name('web.getTimeSlots');





