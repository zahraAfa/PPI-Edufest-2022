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

// Speakers routes
Route::get('/admin/speakers', function(){
    return view('admin/speakers/index');
})->middleware('auth')->name('admin-speakers-index');

Route::get('/admin/speakers/edit/{id}', function(){
    return view('admin/speakers/edit-speaker');
})->middleware('auth')->name('admin-speaker-edit');

Route::get('/admin/speakers/add', function(){
    return view('admin/speakers/add-speaker');
})->middleware('auth')->name('admin-speaker-add');
