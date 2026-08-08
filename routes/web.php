<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\QuotationController;
use App\Blog;
use App\SocialPost;

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
    $socialPosts = collect();
    try {
        $socialPosts = SocialPost::orderBy('id', 'desc')->take(3)->get();
    } catch (\Throwable $e) {
        // table not available yet — render page without the social section
    }
    return view('home', compact('socialPosts'));
});

// XML sitemap for search engines
Route::get('/sitemap.xml', function () {
    $staticRoutes = [
        ['loc' => url('/'),                     'priority' => '1.0', 'freq' => 'weekly'],
        ['loc' => url('/about'),                'priority' => '0.8', 'freq' => 'monthly'],
        ['loc' => url('/counselor'),            'priority' => '0.9', 'freq' => 'monthly'],
        ['loc' => url('/slotBooking'),          'priority' => '0.9', 'freq' => 'weekly'],
        ['loc' => url('/blog'),                 'priority' => '0.8', 'freq' => 'weekly'],
        ['loc' => url('/career'),               'priority' => '0.6', 'freq' => 'monthly'],
        ['loc' => url('/contactus'),            'priority' => '0.7', 'freq' => 'monthly'],
        ['loc' => url('/termsAndConditions'),   'priority' => '0.3', 'freq' => 'yearly'],
        ['loc' => url('/privacy-policy'),       'priority' => '0.3', 'freq' => 'yearly'],
        ['loc' => url('/refund-policy'),        'priority' => '0.3', 'freq' => 'yearly'],
        ['loc' => url('/shipping-policy'),      'priority' => '0.3', 'freq' => 'yearly'],
    ];

    $blogs = collect();
    try {
        $blogs = Blog::orderBy('post_date', 'desc')->get();
    } catch (\Throwable $e) {
        // If the blogs table isn't available, fall back to static routes only
    }

    return response()
        ->view('sitemap', ['staticRoutes' => $staticRoutes, 'blogs' => $blogs])
        ->header('Content-Type', 'text/xml');
})->name('sitemap');

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

Route::post('/quotation/send', [QuotationController::class, 'send'])->name('quotation.send');

Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send');
Route::post('/contact/send-page', [ContactController::class, 'sendMessageFromPage'])->name('contact.send.page');

Route::get('/counselor', function () {
    $counsellors = \App\Counsellor::orderBy('counsellor_id')->get();
    return view('counselor', compact('counsellors'));
});

Route::get('/termsAndConditions', function () {
    return view('terms_and_conditions');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::get('/refund-policy', function () {
    return view('refund-policy');
})->name('refund.policy');

Route::get('/shipping-policy', function () {
    return view('shipping-policy');
})->name('shipping.policy');

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





