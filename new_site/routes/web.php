<?php
use App\konyv;
use App\Miserend;
use App\Hirdetes;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('home')->withMiserend ( Miserend::all() )->withHirdetes ( Hirdetes::all() );
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

Route::get('/olvasnivalo', function () {
    return view('olvasnivalo');
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

Route::get('/szentsegeink', function () {
    return View::make('szentsegeink', ['tabs'=>Tabs::get('szentsegeink')]);
});

Route::get('/szentmise', function () {
    return view('szentmise');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/hirado', function () {
    return view('hirado');
});

Route::get('/programok', function () {
    return view('programok');
});

Route::get ( '/konyvtar', function () {
    $cnt = 0;
    return view ( 'konyvtar' )->withDetails ( konyv::all() )->withCounter ( $cnt );
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