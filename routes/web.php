<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Dashboard\HotelController;
use App\Http\Controllers\Dashboard\RoomController;
use App\Http\Controllers\Dashboard\EventsController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\ReservationController;
use \App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

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


require __DIR__ . '/auth_user.php';
require __DIR__ . '/auth_admin.php';


Route::prefix('/')->controller(Dashboard::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/details', 'details')->name('details');
});

Route::prefix('/hotels')->controller(HotelController::class)->group(function () {
    Route::get('/', 'index')->name('index.hotels');
    Route::get('/show/{id}', 'show')->name('show.hotels');
    Route::get('/create/{id}', 'create')->name('create.hotels');
});



Route::prefix('/rooms')->controller(RoomController::class)->group(function () {
    Route::get('/', 'index')->name('index.rooms');
});

Route::prefix('/about')->controller(AboutController::class)->group(function () {
    Route::get('/', 'index')->name('index.about');
});

Route::prefix('/events')->controller(EventsController::class)->group(function () {
    Route::get('/', 'index')->name('index.events');
});
Route::prefix('/contact')->controller(ContactController::class)->group(function () {
    Route::get('/', 'index')->name('index.contact');
    Route::post('/', 'store')->name('contact.store');

});

Route::prefix('/reservation')->controller(ReservationController::class)->group(function () {
    Route::get('/', 'index')->name('index.reservation');
});
Route::prefix('/Booking')->controller(BookingController::class)->group(function () {
    Route::post('/enter-otp', 'SendMail')->name('enter-otp');
    Route::post('/verify-otp', 'VerifyMail')->name('verify-otp');
});


