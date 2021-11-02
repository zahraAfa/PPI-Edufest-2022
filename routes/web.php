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
