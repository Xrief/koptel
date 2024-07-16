<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home'); // Ganti 'home' dengan nama view yang sesuai
})->name('home');
Route::get('/telco-home', function () {
    return view('telco-home');
})->name('telco.home');

Route::get('/telco-super', function () {
    return view('telco-super');
})->name('telco.super');

Route::get('/telco-vehicle', function () {
    return view('telco-vehicle');
})->name('telco.vehicle');
Route::get('/berita', function () {
    return view('berita');
})->name('berita');
Route::get('/super', function () {
    return view('super');
})->name('super');
Route::get('/telhome', function () {
    return view('telhome');
})->name('telhome');
Route::get('/vehicle', function () {
    return view('vehicle');
})->name('vehicle');