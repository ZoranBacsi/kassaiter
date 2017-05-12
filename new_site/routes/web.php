<?php
use App\konyv;
use App\Miserend;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('home')->withDetails ( Miserend::all() );
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/romzsa_teodor', function () {
    return view('szemelyek.romzsa_teodor');
});

Route::get('/seres_ferenc', function () {
    return view('szemelyek.seres_ferenc');
});

Route::get('/mihalovics_zsigmond', function () {
    return view('szemelyek.mihalovics_zsigmond');
});

// Rólunk //

Route::get('/plebania', function () {
    return View::make('rolunk.plebania', ['tabs'=>Tabs::get('kassaiter')]);
});

Route::get('/szolgalat', function () {
    return View::make('rolunk.szolgalat', ['tabs'=>Tabs::get('szentsegek')]);
});

Route::get('/kollegium', function () {
    return view('rolunk.kollegium');
});

Route::get('/lelkipasztoraink', function () {
    return view('rolunk.lelkipasztoraink');
});

Route::get('/egyhaztanacs', function () {
    return view('rolunk.egyhaztanacs');
});

Route::get('/kozossegek', function () {
    return View::make('rolunk.kozossegek', ['tabs'=>Tabs::get('kozossegek')]);
});

Route::get('/elerhetoseg', function () {
    return view('rolunk.elerhetoseg');
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

Route::get ( '/konyvtar', function () {
    return view ( 'konyvtar' )->withDetails ( konyv::all() );
} );

Route::any ( '/konyvtar_kereso', function () {
    $q = Input::get ( 'q' );
    $cnt = 0;
    $book = konyv::where ( 'cim', 'LIKE', '%' . $q . '%' )->orWhere ( 'szerzo', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $book ) > 0)
        return view ( 'konyvtar' )->withDetails ( $book )->withQuery ( $q )->withCounter ( $cnt );
    else
        return view ( 'konyvtar' );
} );