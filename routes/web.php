<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/book-a-service', function () {
    return view('book-a-service');
});
Route::get('/changan', function () {
    return view('changan');
});
Route::get('/lead', function () {
    return view('lead');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/offer-detail', function () {
    return view('offer-detail');
});
Route::get('/offers', function () {
    return view('offers');
});
Route::get('/test_drive', function () {
    return view('test_drive');
});
Route::get('/vehicle', function () {
    return view('vehicle');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/complain', function () {
    return view('complain');
});
