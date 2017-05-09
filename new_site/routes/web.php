<?php

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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/plebania', function () {
    return View::make('plebania', ['tabs'=>Tabs::get('kassaiter')]);
});

Route::get('/szolgalat', function () {
    return View::make('szolgalat', ['tabs'=>Tabs::get('szentsegek')]);
});

Route::get('/hirado', function () {
    return view('hirado');
});

Route::get('/programok', function () {
    return view('programok');
});

Route::get('/kirandulas', function () {
    return view('kirandulas');
});

Route::get('/ad_keres', function () {
    return view('ad_keres');
});

Route::get('/konyvtar', function () {
    return view('konyvtar');
});