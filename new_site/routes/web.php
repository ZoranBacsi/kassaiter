<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/romzsa_teodor', function () {
    return view('romzsa_teodor');
});

Route::get('/seres_ferenc', function () {
    return view('seres_ferenc');
});

Route::get('/mihalovics_zsigmond', function () {
    return view('mihalovics_zsigmond');
});

// Rólunk //

Route::get('/plebania', function () {
    return View::make('plebania', ['tabs'=>Tabs::get('kassaiter')]);
});

Route::get('/szolgalat', function () {
    return View::make('szolgalat', ['tabs'=>Tabs::get('szentsegek')]);
});

Route::get('/kollegium', function () {
    return view('kollegium');
});

Route::get('/lelkipasztoraink', function () {
    return view('lelkipasztoraink');
});

Route::get('/egyhaztanacs', function () {
    return view('egyhaztanacs');
});

Route::get('/kozossegek', function () {
    return View::make('kozossegek', ['tabs'=>Tabs::get('kozossegek')]);
});

Route::get('/elerhetoseg', function () {
    return view('elerhetoseg');
});

// Főmenü //

Route::get('/galeria', function () {
    return view('galeria');
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