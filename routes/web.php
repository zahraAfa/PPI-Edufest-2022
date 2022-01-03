<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('home', [
        "title" => "Home",
    ]);
})->name('usr-home');

Route::get('/pembicara', function () {
    return view('speakers', [
        "title" => "Pembicara",
    ]);
})->name('usr-speaker');

Route::get('/agenda', function () {
    return view('agenda', [
        "title" => "Agenda",
    ]);
})->name('usr-agenda');

Route::get('/acara/{id}', [EventController::class, 'detail'] );

Route::get('/acara', function () {
    return view('event-details', [
        "title" => "Acara",
    ]);
});

Route::get('/merchandise', function () {
    return view('merchandise', [
        "title" => "Merchandise",
    ]);
})->name('usr-merch');

Route::get('/dokumentasi', function () {
    return view('documentation', [
        "title" => "Docs",
    ]);
})->name('usr-docs');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('admin/register');
})->middleware('guest')->name('register');

Route::get('/login', function () {
    return view('admin/login');
})->middleware('guest')->name('login');

Route::get('/admin', function () {
    return view('admin/dashboard');
})->middleware('auth')->name('admin-dashboard');


// Profile routes
Route::get('/admin/profile', function () {
    return view('admin/profile/index');
})->middleware('auth')->name('admin-profile');

Route::get('/admin/profile/change-password', function () {
    return view('admin/profile/change-password');
})->middleware('auth')->name('admin-profile-change-password');


// FAQs routes
Route::get('/admin/faqs', function () {
    return view('admin/faqs/index');
})->middleware('auth')->name('admin-faqs-index');

Route::get('/admin/faqs/edit/{id}', function () {
    return view('admin/faqs/edit-faq');
})->middleware('auth')->name('admin-faq-edit');

Route::get('/admin/faqs/add', function () {
    return view('admin/faqs/add-faq');
})->middleware('auth')->name('admin-faq-add');


// Events routes
Route::get('/admin/events', function () {
    return view('admin/events/index');
})->middleware('auth')->name('admin-events-index');

Route::get('/admin/events/edit/{id}', function () {
    return view('admin/events/edit-event');
})->middleware('auth')->name('admin-event-edit');

Route::get('/admin/events/add', function () {
    return view('admin/events/add-event');
})->middleware('auth')->name('admin-event-add');


// Sponsors routes
Route::get('/admin/sponsors', function () {
    return view('admin/sponsors/index');
})->middleware('auth')->name('admin-sponsors-index');

Route::get('/admin/sponsors/edit/{id}', function () {
    return view('admin/sponsors/edit-sponsor');
})->middleware('auth')->name('admin-sponsor-edit');

Route::get('/admin/sponsors/add', function () {
    return view('admin/sponsors/add-sponsor');
})->middleware('auth')->name('admin-sponsor-add');


// Partners routes
Route::get('/admin/partners', function () {
    return view('admin/partners/index');
})->middleware('auth')->name('admin-partners-index');

Route::get('/admin/partners/edit/{id}', function () {
    return view('admin/partners/edit-partner');
})->middleware('auth')->name('admin-partner-edit');

Route::get('/admin/partners/add', function () {
    return view('admin/partners/add-partner');
})->middleware('auth')->name('admin-partner-add');


// Speakers routes
Route::get('/admin/speakers', function () {
    return view('admin/speakers/index');
})->middleware('auth')->name('admin-speakers-index');

Route::get('/admin/speakers/edit/{id}', function () {
    return view('admin/speakers/edit-speaker');
})->middleware('auth')->name('admin-speaker-edit');

Route::get('/admin/speakers/add', function () {
    return view('admin/speakers/add-speaker');
})->middleware('auth')->name('admin-speaker-add');
