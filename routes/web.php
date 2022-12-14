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

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/', function () {
    return view('layout.intro');
});
Route::get('/center', function () {
    return view('layout.sigleCenter');
});
Route::get('/centers', function () {
    return view('layout.centers');
});
Route::get('/sites', function () {
    return view('layout.sites');
});
Route::get('/site', function () {
    return view('layout.singleSite');
});