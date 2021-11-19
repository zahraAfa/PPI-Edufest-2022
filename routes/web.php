<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;

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
});

Route::get('/pembicara', function () {
    return view('speakers', [
        "title" => "Pembicara",
    ]);
});

Route::get('/agenda', function () {
    return view('agenda', [
        "title" => "Agenda",
    ]);
});

Route::get('/acara', function () {
    return view('event-details', [
        "title" => "Acara",
    ]);
});

Route::get('/merchandise', function () {
    return view('merchandise', [
        "title" => "Merchandise",
    ]);
});

Route::get('/dokumentasi', function () {
    return view('documentation', [
        "title" => "Docs",
    ]);
});


Route::get('/register', function () {
    return view('admin/register', [
    ]);
})->name('register')->middleware('guest');

Route::get('/login', function () {
    return view('admin/login', [
    ]);
})->name('login')->middleware('guest');

Route::get('/admin/dashboard', function(){
    return view('admin/dashboard');
})->middleware('auth');


// NANTI DI HAPUS
// Events routes
Route::get('/admin/events', function(){
    return view('admin/events/index');
})->middleware('auth')->name('admin-events-index');

Route::get('/admin/events/edit/{id}', function(){
    return view('admin/events/edit-event');
})->middleware('auth')->name('admin-event-edit');

Route::get('/admin/events/add', function(){
    return view('admin/events/add-event');
})->middleware('auth')->name('admin-event-add');
